<?php

namespace App\Providers;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Home\IndexController;
use App\Http\Controllers\Home\PageCountController;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Config;
use App\Models\FriendshipLink;
use App\Models\Notice;
use App\Models\Tag;
use App\Observers\CacheClearObserver;
use Appstract\LushHttp\Request\Adapter\Curl;
use Artisan;
use Cache;
use Carbon\Carbon;
use function curl_get_contents;
use function file_get_contents;
use function getCurl;
use Illuminate\Database\QueryException;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 设置文件上传目录权限
        @chmod(config('_common_upload_path'), 0755);
        // 设置友好本地时间
        \Carbon\Carbon::setLocale('zh');
        // 分配前台通用的数据
        view()->composer('home/*', function ($view) {
            $category = Cache::remember('common:category', 10080, function () {
                // 获取分类导航
                $categoryModel = new Category();
                return $categoryModel->categories();
            });
            $pageInfoCount = PageCountController::pageInfo();

            $tag = Cache::remember('common:tag', 10080, function () {
                // 获取标签下的文章数统计
                $tagModel = new Tag();
                return $tagModel->getArticleCount();
            });

            $topArticle = Cache::remember('common:topArticle', 10080, function () {
                // 获取置顶推荐文章
                return Article::select('id', 'title', 'click', 'cover', 'description', 'created_at')
                    ->orderBy('click', 'desc')
                    ->limit(5)
                    ->get();
            });
            if (!Cache::has('news')) {
                IndexController::news();
                $latestNews = Cache::get('news');
            } else {
                $latestNews = Cache::get('news');
            }
            $notices = Cache::remember('common:notices', 86400, function () {
                // 获取网站公告
                return Notice::select('id', 'notice_title', 'notice_content', 'created_at')->orderBy('id', 'desc')->get();
            });

            $newComment = Cache::remember('common:newComment', 10080, function () {
                // 获取最新评论
                $commentModel = new Comment();
                return $commentModel->getNewData(6);
            });

            $friendshipLink = Cache::remember('common:friendshipLink', 10080, function () {
                // 获取友情链接
                return FriendshipLink::linkList();
            });

            // 获取banner
            $banners = Cache::remember('common:banners', 10080, function () {
                $where = [
                    'status' => 1,
                    'type' => 4
                ];
                return Banner::select('id', 'banner_path', 'banner_title')->where($where)->orderBy('id', 'desc')->limit(5)->get();
            });
            $urlExt = env('APP_DEBUG') ? 'http://' : 'https://';
            $url = str_replace($urlExt, '', request()->url());
            $host = request()->getHost();
            // 原创
            $articleCount = app('db')->table('articles')->count();
            $maxTime = app('db')->table('articles')->max('created_at');
            $latestArticle = app('db')->table('articles')->select('id', 'title', 'author', 'created_at')->where('created_at', $maxTime)->first();

            // 是否是手机端访问
            $isMobile = ismobile();

            $_chats = app('db')->table('chats')->select('id', 'content', 'created_at')->orderBy('id', 'desc')->limit(5)->get();
            foreach ($_chats as $k => &$v) {
                $dt = Carbon::parse($v->created_at);
                $_chats[$k]->month = $dt->month;
                $_chats[$k]->day = $dt->day;
            }

            // 历史上的今天

            $historieToday = unserialize(app('redis')->get('historyToday'));
            // 分配数据
            $assign = compact('historieToday', 'pageInfoCount', 'latestNews', '_chats', 'isMobile', 'latestArticle', 'category', 'tag', 'topArticle', 'newComment', 'friendshipLink', 'notices', 'url', 'host', 'banners', 'articleCount');
            $view->with($assign);
        });

        // 使用 try catch 是为了解决 composer install 时候触发 php artisan optimize 但此时无数据库的问题
        try {
            // 获取配置项
            $config = Cache::remember('config', 10080, function () {
                return Config::pluck('value', 'name');
            });
            // 解决初次安装时候没有数据引起报错
            if ($config->isEmpty()) {
                Artisan::call('cache:clear');
            } else {
                // 用 config 表中的配置项替换 /config/services.php 文件中的配置项
                $serviceConfig = [
                    'services.github.client_id' => $config['GITHUB_CLIENT_ID'],
                    'services.github.client_secret' => $config['GITHUB_CLIENT_SECRET'],

                    'services.qq.client_id' => $config['QQ_APP_ID'],
                    'services.qq.client_secret' => $config['QQ_APP_KEY'],

                    'services.weibo.client_id' => $config['SINA_API_KEY'],
                    'services.weibo.client_secret' => $config['SINA_SECRET'],
                ];
                config($serviceConfig);
            }
        } catch (QueryException $e) {
            // 此处清除缓存是为了解决上面无数据库时缓存时 config 缓存了空数据 db:seed 后 config 走了缓存为空的问题
            Artisan::call('cache:clear');
            $config = [];
        }
        // 分配全站通用的数据
        view()->composer('*', function ($view) use ($config) {
            $assign = [
                'config' => $config
            ];
            // 获取赞赏捐款文章
            if (!empty($config['QQ_QUN_ARTICLE_ID'])) {
                $qqQunArticle = Cache::remember('qqQunArticle', 10080, function () use ($config) {
                    return Article::select('id', 'title')->where('id', $config['QQ_QUN_ARTICLE_ID'])->first();
                });
                $assign['qqQunArticle'] = $qqQunArticle;
            }
            $view->with($assign);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
