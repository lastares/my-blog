<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home 模块
use App\Models\Banner;

Route::group(['namespace' => 'Home'], function () {
    // 首页
    Route::get('/', 'IndexController@index');
    Route::get('newArticle', 'IndexController@newArticle');
    // 网址导航
    Route::get('category/{id}', 'IndexController@category');
    Route::get('toolsCategory/{id}/catename/{catename}', 'ToolsController@tools_category');
    Route::get('url_search', 'ToolsController@urlSearch');
    // 视频会员
    Route::get('videoVips', 'IndexController@vips');
    // 采集到的csdn最新文章
    Route::get('news', 'IndexController@news');
    // 标签
    Route::get('tag/{id}', 'IndexController@tag');
    //友情链接
    Route::get('links', 'IndexController@links');
    // 申请友情链接
    Route::post('applyLinks', 'IndexController@applyLinks');
    // 随言碎语
    Route::get('chat', 'IndexController@chat');
    // 开源项目
    Route::get('git', 'IndexController@git');
    // 网站公告
    Route::get('getNotice', 'IndexController@getNoticeById');
    // 文章详情
    Route::get('article/{id}', 'IndexController@article');
    // 文章评论
    Route::post('comment', 'IndexController@comment');
    // 文章点赞
    Route::get('zan/{id}', 'IndexController@zan');
    // 检测是否登录
    Route::get('checkLogin', 'IndexController@checkLogin');
    // 搜索文章
    Route::get('search', 'IndexController@search');
    // 留言板视图
    Route::get('message', 'IndexController@message');
    // 留言列表
    Route::get('message/list', 'IndexController@messageList');
    // 写入留言
    Route::post('feedback', 'IndexController@messageInsert');
    // 关于我
    Route::get('about/me', 'IndexController@about');
    // 攻城略地
    Route::get('tools', 'ToolsController@index');
    // 左邻右舍
    Route::get('friendLink', 'IndexController@friendLink');
    // 验证码
    Route::get('captcha', 'IndexController@captcha');

    // 时间轴视图
    Route::get('timeAxis', 'IndexController@timeAxis');
    // 用户中心 vip-center
    Route::get('vip-center', 'IndexController@vip');
    Route::get('vip-index', 'IndexController@vipIndex');
    Route::get('vip-info', 'IndexController@vipMember');
    Route::get('vip-comment', 'IndexController@vipComment');
    Route::get('vip-message', 'IndexController@vipMessage');
    Route::get('vip-recharge', 'IndexController@vipRecharge');
    Route::get('vip-consume', 'IndexController@vipConsume');


    // 邮箱验证码
    Route::post('ajax_getcode', 'IndexController@randCode');
    Route::post('ajax_chkcode', 'IndexController@ajax_chkcode');
    // 用于测试
    Route::get('test', 'IndexController@test');

});

// Home模块下 三级模式
Route::group(['namespace' => 'Home', 'prefix' => 'home'], function () {
    // 迁移数据
    Route::group(['prefix' => 'migration'], function () {
        // 从旧系统迁移数据
        Route::get('index', 'MigrationController@index');
        // 只迁移第三方用户和评论数据
        Route::get('avatar', 'MigrationController@avatar');
    });
});


// auth
Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
    // 第三方登录
    Route::group(['prefix' => 'oauth'], function () {
//        // 重定向
        Route::get('redirectToProvider/{service}', 'OAuthController@redirectToProvider');
//        // 获取用户资料并登录
        Route::get('handleProviderCallback/{service}', 'OAuthController@handleProviderCallback');
//        // 退出登录
        Route::get('logout', 'OAuthController@logout');
    });

    // 后台登录
    Route::group(['prefix' => 'admin'], function () {
        Route::post('login', 'AdminController@login');
    });
});

// 后台登录页面
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login'], function () {
        // 登录页面
        Route::get('index', 'LoginController@index');
        // 退出
        Route::get('logout', 'LoginController@logout');
    });

});


// Admin 模块
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin.auth'], function () {
    // 首页控制器
    Route::group(['prefix' => 'index'], function () {
        // 后台首页
        Route::get('index', 'IndexController@index');
    });

    // 文章管理
    Route::group(['prefix' => 'article'], function () {
        // 文章列表
        Route::get('index', 'ArticleController@index');
        // 发布文章
        Route::get('create', 'ArticleController@create');
        Route::post('store', 'ArticleController@store');
        // 编辑文章
        Route::get('edit/{id}', 'ArticleController@edit');
        Route::post('update/{id}', 'ArticleController@update');
        // 上传图片
        Route::post('uploadImage', 'ArticleController@uploadImage');
        // 删除文章
        Route::get('destroy/{id}', 'ArticleController@destroy');
        // 恢复删除的文章
        Route::get('restore/{id}', 'ArticleController@restore');
        // 彻底删除文章
        Route::get('forceDelete/{id}', 'ArticleController@forceDelete');
    });

     // 网址导航
    Route::group(['prefix' => 'urlCategory'], function () {
        // 分类列表
        Route::get('index', 'UrlCategoryController@index');
        // 添加分类
        Route::get('create', 'UrlCategoryController@create');
        Route::post('store', 'UrlCategoryController@store');
        // 编辑分类
        Route::get('edit/{id}', 'UrlCategoryController@edit');
        Route::post('update/{id}', 'UrlCategoryController@update');
        // 排序
        Route::post('sort', 'UrlCategoryController@sort');
        // 删除分类
        Route::get('destroy/{id}', 'UrlCategoryController@destroy');
        // 恢复删除的分类
        Route::get('restore/{id}', 'UrlCategoryController@restore');
        // 彻底删除分类
        Route::get('forceDelete/{id}', 'UrlCategoryController@forceDelete');
    });

    // 标签管理
    Route::group(['prefix' => 'tag'], function () {
        // 标签列表
        Route::get('index', 'TagController@index');
        // 添加标签
        Route::post('store', 'TagController@store');
        // 编辑标签
        Route::get('edit/{id}', 'TagController@edit');
        Route::post('update/{id}', 'TagController@update');
        // 删除标签
        Route::get('destroy/{id}', 'TagController@destroy');
        // 恢复删除的标签
        Route::get('restore/{id}', 'TagController@restore');
        // 彻底删除标签
        Route::get('forceDelete/{id}', 'TagController@forceDelete');

        // 弹窗获取弹窗值回填
        Route::get('getTag', 'TagController@getTag');
    });

    // 视频会员管理
    Route::group(['prefix' => 'videoVip'], function () {
        // 标签列表
        Route::get('index', 'VideoVipController@index');
        Route::get('insert', 'VideoVipController@insert');
        Route::post('upload', 'BaseController@uploadImg2');
        // 添加标签
        Route::post('store', 'VideoVipController@create');
        // 编辑标签
        Route::get('edit/{id}', 'VideoVipController@edit');
        Route::post('update/{id}', 'VideoVipController@update');
        // 删除标签
        Route::get('destroy/{id}', 'VideoVipController@destroy');
        // 恢复删除的标签
        Route::get('restore/{id}', 'VideoVipController@restore');
        // 彻底删除标签
        Route::get('forceDelete/{id}', 'VideoVipController@forceDelete');

        // 弹窗获取弹窗值回填
        Route::get('getTag', 'VideoVipController@getTag');
    });

    // 评论管理
    Route::group(['prefix' => 'comment'], function () {
        // 评论列表
        Route::get('index', 'CommentController@index');
        // 删除评论
        Route::get('destroy/{id}', 'CommentController@destroy');
        // 恢复删除的评论
        Route::get('restore/{id}', 'CommentController@restore');
        // 彻底删除评论
        Route::get('forceDelete/{id}', 'CommentController@forceDelete');
    });

    // 公告管理
    Route::group(['prefix' => 'notice'], function () {
        // 公告列表
        Route::get('index', 'NoticeController@showList');
        // 公告写入
        Route::get('insert', 'NoticeController@insert');
        Route::post('create', 'NoticeController@create');
        // 公告编辑
        Route::get('edit', 'NoticeController@edit');
        Route::post('update', 'NoticeController@update');
        // 网站公告
        Route::get('getNotice', 'NoticeController@getNoticeById');
        // 公告删除
        Route::get('destroy', 'NoticeController@delete');

    });

    // banner管理
    Route::group(['prefix' => 'banner'], function () {
        // banner列表
        Route::get('index', 'BannerController@showList');
        // banner写入
        Route::get('insert', 'BannerController@insert');
        Route::post('create', 'BannerController@create');
        Route::post('upload', 'BaseController@uploadImg');

        // banner编辑
        Route::get('edit/{id}', 'BannerController@edit');
        Route::post('update', 'BannerController@update');

        // banner删除
        Route::get('forceDelete/{id}', 'BannerController@forceDelete');

        // banner下载
        Route::get('download/{id}', function($id) {
            if ($id == 0) {
                return response()->json(['code' => 0, 'msg' => '参数错误']);
            }
            $banner = new Banner();
            $bannerPath = $banner->getImagePathById($id);
            $fileName = base_path('public/uploads/banner/') . $bannerPath;
            return response()->download($fileName);
        });

    });


    // 工具分类管理
    Route::group(['prefix' => 'category'], function () {
        // 工具分类列表
        Route::get('index', 'CategoryController@index');
        // 添加工具分类
        Route::get('create', 'CategoryController@create');
        Route::post('store', 'CategoryController@store');
        // 编辑分类
        Route::get('edit/{id}', 'CategoryController@edit');
        Route::post('update/{id}', 'CategoryController@update');
        // 排序
        Route::post('sort', 'CategoryController@sort');
        // 删除分类
        Route::get('destroy/{id}', 'CategoryController@destroy');
        // 恢复删除的分类
        Route::get('restore/{id}', 'CategoryController@restore');
        // 彻底删除分类
        Route::get('forceDelete/{id}', 'CategoryController@forceDelete');
    });


    // 文件管理
    Route::group(['prefix' => 'file'], function () {
        // 文件列表
        Route::get('index', 'FileController@showList');
        // 文件写入
        Route::get('insert', 'FileController@insert');
        Route::post('create', 'FileController@create');
        Route::post('upload', 'FileController@uploadFile');

        // 文件编辑
        Route::get('edit/{id}', 'FileController@edit');
        Route::post('update', 'FileController@update');

        // 文件删除
        Route::get('forceDelete/{id}', 'BannerController@forceDelete');

        // 文件下载
//        Route::get('download/{id}', function($id) {
//            if ($id == 0) {
//                return response()->json(['code' => 0, 'msg' => '参数错误']);
//            }
//            $banner = new Banner();
//            $bannerPath = $banner->getImagePathById($id);
//            $fileName = base_path('public/uploads/banner/') . $bannerPath;
//            return response()->download($fileName);
//        });

    });

    // 管理员
    Route::group(['prefix' => 'user'], function () {
        // 管理员列表
        Route::get('index', 'UserController@index');
        // 编辑管理员
        Route::get('edit/{id}', 'UserController@edit');
        Route::post('update/{id}', 'UserController@update');
    });

    // 第三方用户管理
    Route::group(['prefix' => 'oauthUser'], function () {
        // 用户列表
        Route::get('index', 'OauthUserController@index');
        // 编辑管理员
        Route::get('edit/{id}', 'OauthUserController@edit');
        Route::post('update/{id}', 'OauthUserController@update');
    });

    // 友情链接管理
    Route::group(['prefix' => 'friendshipLink'], function () {
        // 友情链接列表
        Route::get('index', 'FriendshipLinkController@index');
        // 添加友情链接
        Route::get('create', 'FriendshipLinkController@create');
        Route::post('store', 'FriendshipLinkController@store');
        // 编辑友情链接
        Route::get('edit/{id}', 'FriendshipLinkController@edit');
        Route::post('update/{id}', 'FriendshipLinkController@update');
        // 排序
        Route::post('sort', 'FriendshipLinkController@sort');
        // 删除友情链接
        Route::get('destroy/{id}', 'FriendshipLinkController@destroy');
        // 恢复删除的友情链接
        Route::get('restore/{id}', 'FriendshipLinkController@restore');
        // 彻底删除友情链接
        Route::get('forceDelete/{id}', 'FriendshipLinkController@forceDelete');
    });

    // 网站工具管理
    Route::group(['prefix' => 'tools'], function () {
        // 工具列表
        Route::get('index', 'ToolsController@index');
        // 添加工具
        Route::get('create', 'ToolsController@create');
        Route::post('store', 'ToolsController@store');
        // 编辑工具
        Route::get('edit/{id}', 'ToolsController@edit');
        Route::post('update', 'ToolsController@update');
        // 排序
        Route::post('sort', 'ToolsController@sort');
        // 删除工具
        Route::get('destroy/{id}', 'ToolsController@destroy');
        // 恢复删除的工具
        Route::get('restore/{id}', 'ToolsController@restore');
        // 彻底删除工具
        Route::get('forceDelete/{id}', 'ToolsController@forceDelete');
    });

    // 随言碎语管理
    Route::group(['prefix' => 'chat'], function () {
        // 随言碎语列表
        Route::get('index', 'ChatController@index');
        // 添加随言碎语
        Route::get('create', 'ChatController@create');
        Route::post('store', 'ChatController@store');
        // 编辑随言碎语
        Route::get('edit/{id}', 'ChatController@edit');
        Route::post('update/{id}', 'ChatController@update');
        // 删除随言碎语
        Route::get('destroy/{id}', 'ChatController@destroy');
        // 恢复删除的随言碎语
        Route::get('restore/{id}', 'ChatController@restore');
        // 彻底删除随言碎语
        Route::get('forceDelete/{id}', 'ChatController@forceDelete');
    });

    // 配置项管理
    Route::group(['prefix' => 'config'], function () {
        // 编辑配置项
        Route::get('edit', 'ConfigController@edit');
        Route::post('update', 'ConfigController@update');
    });

    // 开源项目管理
    Route::group(['prefix' => 'gitProject'], function () {
        // 开源项目列表
        Route::get('index', 'GitProjectController@index');
        // 添加开源项目
        Route::get('create', 'GitProjectController@create');
        Route::post('store', 'GitProjectController@store');
        // 编辑开源项目
        Route::get('edit/{id}', 'GitProjectController@edit');
        Route::post('update/{id}', 'GitProjectController@update');
        // 排序
        Route::post('sort', 'GitProjectController@sort');
        // 删除开源项目
        Route::get('destroy/{id}', 'GitProjectController@destroy');
        // 恢复删除的开源项目
        Route::get('restore/{id}', 'GitProjectController@restore');
        // 彻底删除开源项目
        Route::get('forceDelete/{id}', 'GitProjectController@forceDelete');
    });
});

/**
 * 各种钩子
 */
Route::group(['prefix' => 'hook', 'namespace' => 'Hook'], function () {
    // 开源中国
    Route::group(['prefix' => 'oschina'], function () {
        Route::post('push', 'OschinaController@push');
    });
});