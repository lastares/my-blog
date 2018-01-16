<?php $__env->startSection('title', $data->title); ?>

<?php $__env->startSection('keywords', $data->keywords); ?>

<?php $__env->startSection('description', $data->description); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('statics/prism/prism.min.css')); ?>"/>
    <style>
        .js-content p {
            margin-bottom: 20px;;
        }

        .fav-wrapper {
            text-align: center;
            margin: 1.75rem 0;
        }

        .fav-wrapper a {
            color: #366df0;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
            text-decoration: none;
            cursor: pointer;
        }

        a.post-pc-like {

            display: inline-block;
            padding: .85rem 2.5rem;
            background-color: #4285f4;
            border-radius: 4px;
            color: #fff;
            font-size: 1.9rem;
        }

        .common-post-like-wrapper a.post-pc-like:hover {
            background-color: #51b6ff;
        }

        .common-post-like-wrapper a:visited {
            background-color: #bbb;
        }

        .common-post-like-wrapper .total-count-box {
            font-size: 10px;
            margin-left: 3px;
        }

        .image { width: 40px; height: 40px; position: absolute; bottom: 100px; left: 50%; margin-left: -10px; }

        .col-lg-3 {
            width: 16%;
            margin-left: 30px;
        }

        /*.glyphicon-user {*/
            /*color: #ff6e03;*/
        /*}*/

        /*.glyphicon-dashboard {*/
            /*color: green;*/
        /*}*/

        /*.glyphicon-fire {*/
            /*color: #f00*/
        /*}*/

        /*.fa-tags {*/
            /*color: #21d3ff*/
        /*}*/
        .col-lg-3 {
            width: 16%;
        }

        .label-success {
            background-color: #ff6e03;
        }

        .set-label a {
            color: white !important;
        }

        .set-category a {
            color: white;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- 左侧文章开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8">
        <div class="row b-article">
            <h1 class="col-xs-12 col-md-12 col-lg-12 b-title"><?php echo e($data->title); ?></h1>
            <div class="col-md-12" style="margin-bottom: 5px;">
                <ul class="row b-metadata">
                    <li class="col-md-2">
                        <label class="label label-success">
                            <i class="glyphicon glyphicon-user"></i> <?php echo e($data->author); ?>

                        </label>
                    </li>
                    <li class="col-md-2" style="">
                        <label class="label label-success" style="background-color: #f00">
                            <i class="glyphicon glyphicon-fire"></i> <?php echo e($data->click); ?>

                        </label>
                    </li>
                    <li class="col-md-2">
                        <label class="label label-success" style="background-color: green;">
                            <i class="glyphicon glyphicon-calendar"></i> <?php echo e($data->created_at->diffForHumans()); ?>

                        </label>
                    </li>
                    <li class="col-md-2">
                        <label class="label set-category" style="background-color: #311f16;">
                            <i class="fa fa-list-alt"></i> <a href="<?php echo e(url('category', [$data->category_id])); ?>" target="_blank"><?php echo e($data->category_name); ?></a>
                        </label>
                    </li>
                    <li class="col-md-4">
                        <label class="label set-label" style="background-color: #21d3ff">
                            <i class="fa fa-tags"></i>
                            <?php $__currentLoopData = $data->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="b-tag-name" href="<?php echo e(url('tag', [$v->tag_id])); ?>" target="_blank"><?php echo e($v->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-content-word">
                <div class="js-content"><?php echo $data->html; ?></div>
                <eq name="article['current']['is_original']" value="1">
                    <p class="b-h-20"></p>
                    <p class="b-copyright">
                        <?php echo htmlspecialchars_decode($config['COPYRIGHT_WORD']); ?>

                    </p>
                </eq>
                <div class="bshare-custom icon-medium-sm" style="margin-top: 10px;">
                    <a title="分享到微信" class="bshare-weixin"></a>
                    <a title="分享到QQ空间" class="bshare-qzone"></a>
                    <a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
                    <a title="分享到复制网址" class="bshare-clipboard"></a>
                    <a title="分享到网易微博" class="bshare-neteasemb"></a>
                    <a title="分享到QQ好友" class="bshare-qqim"></a>
                    <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                    <span class="BSHARE_COUNT bshare-share-count">0</span>
                </div>
                <a class="bshareDiv" onclick="javascript:return false;"></a>
                <div class="fav-wrapper">
                    <div class="common-post-like-wrapper" style="min-height:0">
                        <div class="demo"></div>
                        <a class="post-pc-like" href="javascript: void(0);" onclick="zan(<?php echo e($data->id); ?>);">
                            <span class="glyphicon glyphicon-thumbs-up gray"></span>
                            <span style="margin-left: 4px;">赞<span class="total-count-box"><!-- react-text: 45 -->(
                                    <!-- /react-text --><b><?php echo e($data->like); ?></b><!-- react-text: 47 --> )
                                    <!-- /react-text --></span></span>
                        </a>
                    </div>
                </div>
                <ul class="b-prev-next">
                    <li class="b-prev">
                        上一篇：
                        <?php if(is_null($prev)): ?>
                            <span>没有了</span>
                        <?php else: ?>
                            <a href="<?php echo e(url('article', [$prev->id])); ?>"><?php echo e($prev->title); ?></a>
                        <?php endif; ?>

                    </li>
                    <li class="b-next">
                        下一篇：
                        <?php if(is_null($next)): ?>
                            <span>没有了</span>
                        <?php else: ?>
                            <a href="<?php echo e(url('article', [$next->id])); ?>"><?php echo e($next->title); ?></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 引入通用评论开始 -->
        <script>
            var userEmail = '<?php echo e(session('user.email')); ?>';
            tuzkiNumber = 1;
        </script>
        <div class="row b-comment">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-box">
                <img class="b-head-img"
                     src="<?php if(empty(session('user.avatar'))): ?><?php echo e(asset('images/home/default_head_img.gif')); ?><?php else: ?><?php echo e(session('user.avatar')); ?><?php endif; ?>"
                     alt="<?php echo e($config['WEB_NAME']); ?>" title="<?php echo e($config['WEB_NAME']); ?>">
                <div class="b-box-textarea">
                    <div class="b-box-content" contenteditable="true" onfocus="delete_hint(this)">请先登录后发表评论</div>
                    <ul class="b-emote-submit">
                        <li class="b-emote">
                            <i class="fa fa-smile-o" onclick="getTuzki(this)"></i>
                            <input class="form-control b-email" type="text" name="email" placeholder="接收回复的email地址"
                                   value="<?php echo e(session('user.email')); ?>">
                            <div class="b-tuzki">

                            </div>
                        </li>
                        <li class="b-submit-button">
                            <input type="button" value="评 论" aid="<?php echo e(request()->id); ?>" pid="0" onclick="comment(this)">
                        </li>
                        <li class="b-clear-float"></li>
                    </ul>
                </div>
                <div class="b-clear-float"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-title">
                <ul class="row">
                    <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6">最新评论</li>
                    <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">总共<span><?php echo e(count($comment)); ?></span>条评论
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-user-comment">
                <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="comment-<?php echo e($v['id']); ?>" class="row b-user b-parent">
                        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                            <img class="b-user-pic js-head-img" src="<?php echo e(asset('uploads/avatar/default.jpg')); ?>"
                                 _src="<?php echo e(asset($v['avatar'])); ?>" alt="<?php echo e($config['WEB_NAME']); ?>"
                                 title="<?php echo e($config['WEB_NAME']); ?>">
                        </div>
                        <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col b-cc-first">
                            <p class="b-content">
                                <span class="b-user-name"><?php echo e($v['name']); ?></span>：<?php echo $v['content']; ?>

                            </p>
                            <p class="b-date">
                                <?php echo e($v['created_at']); ?> <a href="javascript:;" aid="<?php echo e(request()->id); ?>"
                                                          pid="<?php echo e($v['id']); ?>" username="<?php echo e($v['name']); ?>"
                                                          onclick="reply(this)">回复</a>
                            </p>
                            
                            <?php $__currentLoopData = $v['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m => $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div id="comment-<?php echo e($n['id']); ?>" class="row b-user b-child">
                                    <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                                        <img class="b-user-pic js-head-img" src="<?php echo e(asset('uploads/avatar/default.jpg')); ?>" _src="<?php echo e(asset($n['avatar'])); ?>" alt="<?php echo e($config['WEB_NAME']); ?>" title="<?php echo e($config['WEB_NAME']); ?>" />
                                    </div>
                                    <ul class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col">
                                        <li class="b-content">
                                            <span class="b-reply-name"><?php echo e($n['name']); ?></span>
                                            <span class="b-reply">回复</span>
                                            <span class="b-user-name"><?php echo e($n['reply_name']); ?></span>：<?php echo $n['content']; ?>

                                        </li>
                                        <li class="b-date">
                                            <?php echo e($n['created_at']); ?> <a href="javascript:;" aid="<?php echo e(request()->id); ?>"
                                                                      pid="<?php echo e($n['id']); ?>"
                                                                      username="<?php echo e($n['reply_name']); ?>"
                                                                      onclick="reply(this)">回复</a>
                                        </li>
                                        <li class="b-clear-float"></li>
                                    </ul>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="b-clear-float"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="b-border"></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!-- 引入通用评论结束 -->
    </div>
    <!-- 左侧文章结束 -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('statics/prism/prism.min.js')); ?>"></script>
    <script src="<?php echo e(asset('statics/layer-2.4/layer.js')); ?>"></script>
    <script src="<?php echo e(asset('js/home/comment.js')); ?>"></script>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
    <script>
        function zan(id) {
            var x = 100;
            var y = 900;
            var num = Math.floor(Math.random() * 14 + 1);
            var index=$('.demo').children('img').length;
            var rand = parseInt(Math.random() * (x - y + 1) + y);

            $(".demo").append("<img class='image' src=''>");
            $('.image:eq(' + index + ')').attr('src','/statics/zan/images/'+num+'.png')
            $(".image").animate({
                bottom:"800px",
                opacity:"0",
                left: rand,
            },3000)
            $.ajax({
                type: 'get',
                url: '/zan/' + id,
                dataType: 'json',
                cache: false,
                success: function (data) {
                    if (data.code === 0) {
                        $('.total-count-box').find('b').html(data.data.like);
                    }
                }
            });
        }

        // 添加行数
        $('pre').addClass('line-numbers');
        // 新页面跳转
        $('.js-content a').attr('target', '_blank')

        // 定义评论url
        ajaxCommentUrl = "<?php echo e(url('comment')); ?>";
        checkLogin = "<?php echo e(url('checkLogin')); ?>";
        titleName = '<?php echo e($config['WEB_NAME']); ?>';
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>