<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>宋耀锋博客-ThinkPHP框架开发的个人原创博客网站</title>
    <meta name="keywords" content="个人博客，个人博客模板，php源码下载，个人网站，模板分享，博客程序，网站模板，宋耀锋博客,php个人博客,seo个人博客,宋耀锋"/>
    <meta name="description" content="宋耀锋个人博客是一个基于thinkPHP框架开发的php个人网站，该博客涵盖PHP技术，前端，Linux系统，数据库，SEO优化等方面的知识。宋耀锋站长一个专注于PHP技术开发的程序员，个人博客不仅分享PHP开发技术，提供网站模板下载、而且还分享PHP源码作品。"/>
    <meta name="author" content="宋耀锋"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no"/>
    <!--CSS-->


    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="shortcut icon" href="/images/favicon.ico"/>

    <!--CSS-->
    <link rel="stylesheet" href="/home/css/default.css"/>
    <link rel="stylesheet" href="/home/css/public.css"/>
    <link rel="stylesheet" href="/home/css/animation.css"/>
    <style>
        #pull_right{
            text-align:center;
        }
        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/home/css/skin_1.css" title="qingxin"/>
    <link rel="stylesheet" type="text/css" href="/home/css/skin_2.css" title="jianyue"/>
    <link rel="stylesheet" type="text/css" href="/home/css/skin_3.css" title="qingshuang"/>
    <link rel="stylesheet" href="/home/css/font-icon.css"/>
    <link rel="stylesheet" href="/home/css/face.css"/>
    <!--JS-->
    <script type="text/javascript" src="/home/js/jquery.2.1.4.min.js"></script>
    <script>
        $("html").append("<div class='jiazai'><img src='/home/images/loading3.gif'/><span>正在加载中请等待...</span></div>")

    </script>
    <script type="text/javascript" src="/home/js/my.js"></script>
    <!-- <script type="text/javascript" src="/home/js/scripts.js"></script> -->

    <script type="text/javascript" src="/home/js/superbg.min.js"></script>
    <!-- <script type="text/javascript" src="/home/js/supersized.3.2.7.min.js"></script> -->
    <script type="text/javascript" src="/home/js/superbg-custom.js"></script>

    <script type="text/javascript" src="/home/js/album.js"></script>
    <script type="text/javascript" src="/home/js/tooltip.js"></script>
    <script type="text/javascript" src="/home/js/face.js"></script>
    <script type="text/javascript" src="/home/plugins/layer/layer.js" ></script>
    <script type="text/javascript" src="/home/js/checkform.js" charset="utf-8"></script>
    <script type="text/javascript"  src="/home/js/skin.js"></script>
    <!--[if lte IE 9]>
    <script>window.location.href='http://cdn.dmeng.net/upgrade-your-browser.html?referrer='+location.href;</script>
    <![endif]-->
    <script type="text/javascript"  src="/home/js/index.js"></script>
    <script type="text/javascript">

        ajaxCommentUrl="http://www.100txy.com/Home/Index/ajax_comment";

        check_login="http://www.100txy.com/Home/User/check_login";

        logoutUrl="http://www.100txy.com/Home/User/logout";

    </script>
    <script type="text/javascript" src="/home/js/comment.js"></script>
    <!-- 百度统计 -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?136bd7aac0d158dec628add4b8dd4c3a";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- 百度统计 end-->
    <link rel="stylesheet" href="/home/css/swiper.css"/>
    <script type="text/javascript" src="/home/js/swiper.min.js"></script>
</head>

<body class="nobg">

<!--导航开始-->
<header class="myheader">
    <div class="top">
        <!--头像左边部分-->
        <div class="top-left">
            <div class="logo"><a href="/"><img src="/home/images/logo3.gif"/></a></div>
            <!--滚动消息-->
            <div class="web-xiaoxi">
                <i class="el-speaker"></i>
                <ul class="mulitline">
                    <li>做了一些小调整，使之看起来更像博客。</li>
                    <li>本站提供丰富的素材下载，有源码、模板、插件...</li>
                    <li>内容如有侵犯，请立即联系管理员删除</li>
                </ul>
            </div>
            <!--END 消息 -->

            <!--手机菜单按钮-->
            <div class="mobile-nav"><i class="el-lines"></i><i class="el-remove"></i></div>
        </div>
        <!--电脑导航开始-->
        <nav class="mynav">
            <ul class="orange-text">
                <li class=""><a href="/">首页</a></li>
                <!-- <li  ><a href="/Home/Index/chat.html" >说说</a></li> -->
                @foreach($category as $k3 => $v3)
                @if(!isset($v3['childs']))
                <li><a href="/category/{{ $v3['id'] }}" >{{ $v3['category_name'] }}</a></li>
                @else
                    <li class='drop'>
                    <a href="JavaScript:;" >{{ $v3['category_name'] }}<i class='el-chevron-down'></i></a>
                    <div class="drop-nav orange-text ">
                        <ul>
                            @foreach($v3['childs'] as $k4 => $v5)
                            <li><a href="/category/{{ $v5['id'] }}">{{ $v5['category_name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </li>
                @endforeach
            </ul>
            <!--移动的滑动-->
            <div class="move-bg"></div>
            <!--移动的滑动 end-->
        </nav>
        <!--会员登录-->
        <div class="vip" style="width: 4%;float: right;text-align: right;">
            <a href="javascript:;" onclick="comment(this)"><img class="img-circle" src="/home/images/default_head_img.gif" alt="宋耀锋博客" title="宋耀锋博客" style="margin-top: 17px;"></a>
        </div>
        <!--会员登录-->
        <!--这里是手机导航-->
        <div class="mob-menu">
            <!--手机顶部搜索-->
            <div class="search ">
                <ul class="loginwap-third-list">
                    <li><a class="weixin-login" title="微信账号登录" href="/Home/User/oauth_login/type/wechat.html"></a></li>
                    <li><a class="qq-login" title="QQ账号登录" href="/Home/User/oauth_login/type/qq.html"></a></li>
                    <li style="margin-right: 0!important;"><a class="weibo-login" title="新浪微博账号登录" href="/Home/User/oauth_login/type/sina.html"></a></li>
                </ul>
            </div>
            <!--手机下拉菜单-->
            <ul class="mob-ulnav">
                <li><a href="/">首页</a></li>
                <li ><a href="/Home/Index/chat.html">说说</a></li>
                <li class='mob-drop' >
                    <a href="javascrip:;">分类<i></i></a>
                    <ul class="mob-dropmenu">
                        <li><a href="/28.html">PHP</a></li>
                        <li><a href="/29.html">Linux</a></li>
                        <li><a href="/36.html">Java</a></li>
                        <li><a href="/39.html">C</a></li>
                        <li><a href="/31.html">MySQL</a></li>
                        <li><a href="/37.html">Python</a></li>
                        <li><a href="/30.html">Web</a></li>
                        <li><a href="/34.html">SEO</a></li>
                        <li><a href="/33.html">黑客</a></li>
                        <li><a href="/35.html">面试</a></li>
                        <li><a href="/32.html">修养</a></li>
                        <li><a href="/38.html">站长</a></li>
                    </ul>
                </li>
                <!-- <li  ><a href="/Links/" >链接</a></li> -->
                <li  ><a href="/album.html" >相册</a></li>
                <li  ><a href="/.html" >下载</a></li>
                <li  ><a href="/feedback.html" >留言</a>	</li>
                <li  ><a href="/about.html" >关于</a></li>
            </ul>
        </div>
    </div>
</header>
<!--导航结束-->

<!--主题框架开始-->
<div class="container">
    <!--左侧开始-->
    <section class="mysection">
        @if(request()->has('wd'))
        <h4 class="search-title bg-color"><i class="el-search-alt"></i>您查询的关键字： <font color="#DC4900">{{ request()->has('wd') }}</font></h4>
        @endif
        @if(!empty($tagName))
        <h4 class="search-title bg-color"><i class="el-search-alt"></i>您查询的标签： <span style="color:#DC4900;">{{ $tagName }}</span></h4>
        @endif

        <div class="swiper-container">
            <ul class="slides swiper-wrapper">

                <li class="swiper-slide img_loading">
                    <a href="#" title="宋耀锋博客全新改版上线">
                        <img src="/home/images/banner/2016122200022.jpg" alt="宋耀锋博客全新改版上线"/>
                    </a>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <span class="silde-title" style="display:none;">宋耀锋博客全新改版上线</span>
                </li>

                <li class="swiper-slide img_loading">
                    <a href="http://laravel.100txy.com" title="laravel框架开发的个人博客">
                        <img src="/home/images/banner/2017122200011.jpg" alt="laravel框架开发的个人博客"/>
                    </a>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <span class="silde-title" style="display:none;">laravel框架开发的个人博客</span>
                </li>

                <li class="swiper-slide img_loading">
                    <a href="http://laravel.100txy.com" title="重磅！laravel框架博客源码低价销售">
                        <img src="/home/images/banner/2017122200033.jpg" alt="重磅！laravel框架博客源码低价销售"/>
                    </a>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <span class="silde-title" style="display:none;">重磅！laravel框架博客源码低价销售</span>
                </li>
            </ul>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="arclist">

            <h4 class="index-title homeh4"><a href=""><i class="el-certificate"></i>最新文章<small>New Article</small></a></h4>

            <!--列表开始-->
            <ul id="newArticleList">
                @foreach($article as $k => $v)
                <li>
                    <div class="arcimg img_loading">
                        <img  src="{{ $v->cover }}"  alt="{{ $v->title }}" title="{{ $v->title }}"/>
                    </div>
                    <div class="arc-right">
                        <h4 class="blue-text">
                            <a href="/article/{{ $v->id }}" title="{{ $v->title }}">{{ $v->title }}</a>
                        </h4>
                        <p>{{ $v->description }}</p>
                        <ul>
                            <li><a title="{{ $v->author }}{{ $v->created_at }}发表"><i class="el-time"></i>{{ $v->created_at }}</a></li>
                            <li><a href="#" title="作者： {{ $v->author }}"><i class="el-user"></i>{{ $v->author }}</a></li>
                            <li><a href="/article/124.html#Comment"title="已有 0 条评论"><i class="el-comment"></i>0</a></li>
                            <li><a title="已有 {{ $v->click }} 次浏览"><i class="el-eye-open"></i>{{ $v->click }}</a></li>
                            <li><a href="/article/{{ $v->id }}" title="查看分类"><i class="el-th-list"></i>{{ $v->category_name }}</a></li>
                        </ul>
                    </div>
                </li>

                @endforeach
            </ul>

            <div class="page">
                {{ $pageString }}
                {{--<a class="first" href="">首页</a>--}}
                {{--<a class="prev not-allowed" href="javascript:;">上一页</a>--}}
                {{--<span class="current">1</span><a class="num" href="/index/2.html">2</a>--}}
                {{--<a class="num" href="/index/3.html">3</a>--}}
                {{--<a class="num" href="/index/4.html">4</a>--}}
                {{--<a class="num" href="/index/5.html">5</a>--}}
                {{--<a class="next" href="/index/2.html">下一页</a>--}}
                {{--<a class="end" href="/index/11.html">尾页</a> <span class="rows">共 108 条记录</span>--}}
            </div>

            <!--列表结束-->
            <div class="sucailist mob-hidden">

                <h4 class="index-title"><a href=""><i class="el-certificate"></i>最新素材<small>New sucai</small></a></h4>

                <!--列表开始-->

                <ul class="su">


                    <li class="su-li">
                        <!-- <li class="su-li"id="Hot"> -->

                        <a href="/downdetail/24.html" title="个人博客模板分享下载">

                            <div class="sucaiimg img_loading">

                                <img  src="/home/images/2017091259b7b3b11f910.jpg" alt="个人博客模板分享下载"/>

                            </div>

                        </a>

                        <div class="sucai-right">

                            <h4 class="blue-text"><a href="/downdetail/24.html" title="个人博客模板分享下载">个人博客模板分享下载</a></h4>

                            <ul>

                                <li><a title="个人博客模板分享下载2017-09-12发表 "><i class="el-time"></i>2017-09-12</a></li>

                                <li class="mob-hidden">

                                    <i class="el-download-alt"></i>

                                    <a href="javascript::void(0);">7</a>&nbsp;

                                </li>

                            </ul>

                        </div>

                    </li>
                    <li class="su-li">
                        <!-- <li class="su-li"id="Hot"> -->

                        <a href="/downdetail/23.html" title="珠宝首饰微商城wap网站模板下载">

                            <div class="sucaiimg img_loading">

                                <img  src="/home/images/2017083159a7d848689a8.png" alt="珠宝首饰微商城wap网站模板下载"/>

                            </div>

                        </a>

                        <div class="sucai-right">

                            <h4 class="blue-text"><a href="/downdetail/23.html" title="珠宝首饰微商城wap网站模板下载">珠宝首饰微商城wap网站模板下载</a></h4>

                            <ul>

                                <li><a title="珠宝首饰微商城wap网站模板下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>

                                <li class="mob-hidden">

                                    <i class="el-download-alt"></i>

                                    <a href="javascript::void(0);">2</a>&nbsp;

                                </li>

                            </ul>

                        </div>

                    </li>
                    <li class="su-li">
                        <!-- <li class="su-li"id="Hot"> -->

                        <a href="/downdetail/22.html" title="美食餐饮公司微店网站模板下载">

                            <div class="sucaiimg img_loading">

                                <img  src="/home/images/2017083159a7d236c70b2.jpg" alt="美食餐饮公司微店网站模板下载"/>

                            </div>

                        </a>

                        <div class="sucai-right">

                            <h4 class="blue-text"><a href="/downdetail/22.html" title="美食餐饮公司微店网站模板下载">美食餐饮公司微店网站模板下载</a></h4>

                            <ul>

                                <li><a title="美食餐饮公司微店网站模板下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>

                                <li class="mob-hidden">

                                    <i class="el-download-alt"></i>

                                    <a href="javascript::void(0);">9</a>&nbsp;

                                </li>

                            </ul>

                        </div>

                    </li>
                    <li class="su-li">
                        <!-- <li class="su-li"id="Hot"> -->

                        <a href="/downdetail/21.html" title="韩国手机导购网站主页免费分享下载">

                            <div class="sucaiimg img_loading">

                                <img  src="/home/images/2017083159a7c5cb5262e.png" alt="韩国手机导购网站主页免费分享下载"/>

                            </div>

                        </a>

                        <div class="sucai-right">

                            <h4 class="blue-text"><a href="/downdetail/21.html" title="韩国手机导购网站主页免费分享下载">韩国手机导购网站主页免费分享下载</a></h4>

                            <ul>

                                <li><a title="韩国手机导购网站主页免费分享下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>

                                <li class="mob-hidden">

                                    <i class="el-download-alt"></i>

                                    <a href="javascript::void(0);">9</a>&nbsp;

                                </li>

                            </ul>

                        </div>

                    </li>
                    <li class="su-li">
                        <!-- <li class="su-li"id="Hot"> -->

                        <a href="/downdetail/20.html" title="带背景音乐的手机网站模板下载">
                            <div class="sucaiimg img_loading">
                                <img  src="/home/images/2017083159a7c0dab39fd.jpg" alt="带背景音乐的手机网站模板下载"/>
                            </div>
                        </a>
                        <div class="sucai-right">
f                            <h4 class="blue-text"><a href="/downdetail/20.html" title="带背景音乐的手机网站模板下载">带背景音乐的手机网站模板下载</a></h4>
                            <ul>
                                <li><a title="带背景音乐的手机网站模板下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>
                                <li class="mob-hidden">
                                    <i class="el-download-alt"></i>
                                    <a href="javascript::void(0);">0</a>&nbsp;
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="su-li">
                        <!-- <li class="su-li"id="Hot"> -->

                        <a href="/downdetail/19.html" title="wap端微官网手机模板分享下载">

                            <div class="sucaiimg img_loading">

                                <img  src="/home/images/2017083159a7bc72bb166.jpg" alt="wap端微官网手机模板分享下载"/>

                            </div>

                        </a>

                        <div class="sucai-right">

                            <h4 class="blue-text"><a href="/downdetail/19.html" title="wap端微官网手机模板分享下载">wap端微官网手机模板分享下载</a></h4>

                            <ul>

                                <li><a title="wap端微官网手机模板分享下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>

                                <li class="mob-hidden">

                                    <i class="el-download-alt"></i>

                                    <a href="javascript::void(0);">8</a>&nbsp;

                                </li>

                            </ul>

                        </div>

                    </li>
                </ul>

                <!--列表结束-->

            </div>	</section>

    <!--左侧结束-->

    <!--=========右侧开始==========-->
    <aside class="myaside">

        <!--关注我-->

        <div class="focus-me bg-color animation-div">

            <h4 class="index-title"><i class="el-heart"></i>关注我<small>Focus Me</small></h4>

            <div class="xiangguan">

                <div><a class="benbo" href="http://weibo.com/100txy" rel="nofollow" target="_blank"><i class="el el-rss"></i></a><span>新浪微博</span></div>
                <!-- <div><a class="benbo" href="#" target="_blank"><span id="qq" style="padding-top:45px;">QQ空间</span></a><span>QQ空间</span></div> -->
                <div><a class="taobao" href="https://github.com/songyaofeng"  rel="nofollow" target="_blank"><i class="el el-github"></i></a><span>github</span></div>

                <div><a class="side-fx"><i class="el-share-alt"></i></a><span>分享本博</span></div>

                <div><a class="mail-btn" href="javascript:;"><i class="el el-picasa"></i></a><span>公众号</span></div>

            </div>

            <div class="mail-dy">
                <img src="/home/images/icon/weixin.jpg">
                <i class="el-remove fx-close"></i>
            </div>
            <div class="bd-fx side-bdfx ">

                <i class="el-remove fx-close"></i>

                <ul class="bdsharebuttonbox">

                    <li><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></li>

                    <li><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></li>

                    <li><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></li>

                    <li><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a></li>

                </ul>

                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

            </div>

        </div>

        <!--右侧个人统计-->

        <div class="web-author bg-color animation-div">

            <div class="author-tx">

                <a class="img-circle" href="/Home/Index/about.html" title="点击查看详细信息">

                    <img class="img-circle" src="/home/images/ava.jpg"/>

                </a>

            </div>

            <div class="author-name"><span class="blue-text">宋耀锋</span><p>PHPer</p></div>

            <div class="data-info">

                <ul>

                    <li><strong>1</strong><span>今日会员</span></li>

                    <li><strong>89</strong><span>今日访问ip</span></li>

                    <!-- <li><strong>108</strong><span>文章数量</span></li> -->
                    <li><strong>106</strong><span>今日访客</span></li>

                </ul>

            </div>

        </div>

        <!--END 右侧个人统计-->

        <!--搜索-->

        <div class="search animation-div">

            <form action="{{ url('search') }}" method="get">

                <div class="search-index">

                    <input name="wd" type="text"  placeholder="请输入关键字" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键字'" />

			<i class="el-search"><input value=" " type="submit"/></i>

                </div>

            </form>

        </div>

        <!--最新更新-->

        <div class="clos-new bg-color animation-div">

            <h4 class="index-title"><i class="el-bulb"></i>最新更新<small>Close New</small></h4>

            <ul>

                <!-- <li><i class="el-cloud"></i><iframe id="tianqi"  scrolling="no" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></li> -->

                <li><span><i class="el-arrow-up"></i>最近：<font class="blue-text">宋耀锋</font> 前天&nbsp;&nbsp;17:55</span><a title="Thinkphp5模板继承和替换的问题" > 更新了<b class="lable">文章</b></a></li>

                <li><i class="el-calendar"></i>历史上的今天：<a title="1936年2月3日 红军抗日先锋军渡河东征" class="orange-text">红军抗日先锋军渡河东征</a></li>

            </ul>

        </div>

        <!--说说-->
        <div class="bg-color animation-div">
            <h4 class="index-title"><i class="el-headphones"></i>说说<small>Shuo Shuo</small></h4>
            <div class="shuo-side">
                <ul>
                    <li id="Hots">
                        <span class="shuobg1"><strong>01-27 </strong></span>
                        <div><a title="PHP 可以获取客户端哪些访问信息" href="/chatdetail/73.html" >PHP 可以获取客户端哪些访问信息</a><b title="点击23">(23)</b></div>
                    </li><li id="Hots">
                        <span class="shuobg2"><strong>01-25 </strong></span>
                        <div><a title="You have new mail in /var/spool/mail/root" href="/chatdetail/72.html" >You have new mail in /var/spool/mail/root</a><b title="点击25">(25)</b></div>
                    </li><li id="Hots">
                        <span class="shuobg3"><strong>01-24 </strong></span>
                        <div><a title="jQuery实现获取短信邮箱验证码倒计时" href="/chatdetail/71.html" >jQuery实现获取短信邮箱验证码倒计时</a><b title="点击36">(36)</b></div>
                    </li>		</ul>
            </div>
        </div>
        <!--推荐图文-->
        <div class="article-push  bg-color animation-div">
            <h4 class="index-title"><i class="el-asl"></i>推荐图文<small>Push Article</small></h4>
            <ul>
                @foreach($topArticle as $kk => $vv)
                <li>
                    <div class="arcimg img_loading">
                        <a href="{{ url('article', ['id' => $vv->id]) }}" target="_blank">
                            <img src="{{ $vv->cover }}" alt="{{ $vv->title }}" title="{{ $vv->title }}">
                        </a>
                    </div>
                    <div class="arc-right">
                        <h4 class="blue-text"><a href="{{ url('article', ['id' => $vv->id]) }}">{{ $vv->title }}</a></h4>
                        <p>{{ $vv->description }}</p>
                        <ul>
                            <li><a title="发表于{{ $vv->creatd_at }}"><i class="el-time"></i>{{ $vv->creatd_at }}</a></li>
                            <li><a title="{{ $vv->click }} 次浏览"><i class="el-fire"></i>{{ $vv->click }}</a></li>
                        </ul>
                    </div>
                </li>
                @endforeach
                {{--<li>--}}
                    {{--<div class="arcimg img_loading">--}}
                        {{--<a href="/article/57.html" target="_blank">--}}
                            {{--<img src="/home/images/2017032458d52f2124932.jpg" alt="Linux服务器运维常用操作命令" title="Linux服务器运维常用操作命令">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="arc-right">--}}

                        {{--<h4 class="blue-text"><a href="/article/57.html">Linux服务器运维常用操作命令</a></h4>--}}

                        {{--<p>我把自己常用的Linux操作命令总结一下，以后用的时候也方便查找</p>--}}

                        {{--<ul>--}}

                            {{--<li><a title="发表于2017-03-23"><i class="el-time"></i>2017-03-23</a></li>--}}

                            {{--<li><a title="1087次浏览"><i class="el-fire"></i>1087</a></li>--}}

                        {{--</ul>--}}

                    {{--</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="arcimg img_loading">--}}
                        {{--<a href="/article/50.html" target="_blank">--}}
                            {{--<img src="/home/images/2017030258b7a67fe3a5c.jpg" alt="Windows Redis安装及使用" title="Windows Redis安装及使用">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="arc-right">--}}
                        {{--<h4 class="blue-text"><a href="/article/50.html">Windows Redis安装及使用</a></h4>--}}
                        {{--<p>Redis是一个开源的使用ANSI C语言编写、遵守BSD协议、支持网络、可基于内存亦可持久化的日志型、Key-Value数据库，并提供多种语言的API。它通常被称为数据结构服务器</p>--}}
                        {{--<ul>--}}
                            {{--<li><a title="发表于2017-03-02"><i class="el-time"></i>2017-03-02</a></li>--}}
                            {{--<li><a title="807次浏览"><i class="el-fire"></i>807</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</li>--}}
            </ul>
        </div>

        <!--文章排行tab-->

        <div class="mytab bg-color animation-div">

            <div class="tab-btn"><a class="hd-btn tab-active"href="javascript:;"><i class="el-comment-alt"></i>文章互动</a><a class="ph-btn"href="javascript:;"><i class="el-signal"></i>文章排行</a></div>

            <ul class="hudong-ul">
                <!--=======查询相册=============-->
                <li>
                    <div class="sd-tx">
                        <a href="/article/123.html" target="_blank" rel="nofollow" title="去《PHP操作Memcached简单案例演示》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/676C95317C3A2B80E5CE2C532894C83C/100" alt="小天科技" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>小天科技<time >2018-01-25</time></span>
                        <a class="blue-text" href="#" title="service memcached {start|stop|status|restart|reload}服务控制" >service memcached {start|stop|status|restart|reload}服务控制</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/69.html" target="_blank" rel="nofollow" title="去《thinkPHP多张图片上传功能》看看">
                            <img src="http://tvax3.sinaimg.cn/crop.18.15.202.202.180/006bhstily8fhbt9ku196j306o06oweu.jpg" alt="素材火官网" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>素材火官网<time >2018-01-02</time></span>
                        <a class="blue-text" href="#" title="我也做了个tp多图上传的http://www.sucaihuo.com/php/3300.html" >我也做了个tp多图上传的http://www.sucaihuo.com/php/3300.html</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/81.html" target="_blank" rel="nofollow" title="去《阿里云短信服务API接入案例》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/61DD52998BE196F3B68D24C245463359/100" alt="风萧萧兮" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>风萧萧兮<time >2017-11-01</time></span>
                        <a class="blue-text" href="#" title="/短信API产品域名 &amp;nbsp; &amp;nbsp; &amp;nbsp;$domain = &quot;dysmsapi.aliyuncs.com&quot;; 哪来的 ,在控制台哪找的???" >//短信API产品域名 &nbsp; &nbsp; &nbsp;$domain = "dysmsapi.aliyuncs.com"; 哪来的 ,在控制台哪找的???</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/70.html" target="_blank" rel="nofollow" title="去《PHP实现上一篇下一篇文章功能跳转》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/EE1039AFBDC3EDB86897511599F41328/100" alt="冥冥之中天注定" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>冥冥之中天注定<time >2017-10-19</time></span>
                        <a class="blue-text" href="#" title="文章页的ID 为啥后台GET没得到呢 &amp;nbsp;$id=$_GET['id'];这样得不到" >文章页的ID 为啥后台GET没得到呢 &nbsp;$id=$_GET['id'];这样得不到</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/43.html" target="_blank" rel="nofollow" title="去《PHP实现一次性多张图片上传功能》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/F3D262874E90A890B8F839505A20C5FF/100" alt="she is my sin" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>she is my sin<time >2017-09-30</time></span>
                        <a class="blue-text" href="#" title="&lt;img src=&quot;/home/emote/tuzki/t_0005.gif&quot; title=&quot;背扭&quot; alt=&quot;宋耀锋博客&quot;&gt;t" ><img src="/home/emote/tuzki/t_0005.gif" title="背扭" alt="宋耀锋博客">t</a>
                    </div>
                </li>	</ul>

            <!--文章排行-->

            <ul class="paihang-ul">
                <li><span></span><a href="/article/43.html" title="PHP实现一次性多张图片上传功能">PHP实现一次性多张图片上传功能<b>(8030)</b></a></li><li><span></span><a href="/article/102.html" title="微信小程序如何加载数据库真实数据？">微信小程序如何加载数据库真实数据？<b>(6027)</b></a></li><li><span></span><a href="/article/42.html" title="个人网站微信授权登录功能怎么开发？">个人网站微信授权登录功能怎么开发？<b>(4133)</b></a></li><li><span></span><a href="/article/41.html" title="MySQL双引号、单引号转义保存详解">MySQL双引号、单引号转义保存详解<b>(4123)</b></a></li><li><span></span><a href="/article/48.html" title="一位资深php程序员在北京的面试30个题目">一位资深php程序员在北京的面试30个题目<b>(3865)</b></a></li>
            </ul>

        </div>

        <!--标签-->

        <div class="cloud bg-color animation-div">

            <h4 class="index-title"><i class="el-tags"></i>标签云<small>Tags Clouds</small></h4>

            <ul id="3dcloud">


                @foreach($tag as $k1 => $v1)
                <li>
                    <a class="tstyle-{{ mt_rand(1, 4) }}" href="/tag/{{ $v1->id }}" onclick="return recordId('tid',{{ $v1->id }})" title="标签：CSS3 ">{{ $v1->name }} ({{ $v1->article_count }})</a>
                </li>
                @endforeach
            </ul>

        </div>

        <!--友情链接-->

        <div class="side-link ">
            <h4 class="index-title"><i class="el-paper-clip"></i>友情链接<small>Friend Links</small><a  href="/link.html"><i class="el el-plus"></i>申请</a></h4>
            <ul>
                @foreach($friendshipLink as $k2 => $v2)
                <li><a href="{{ $v2->url }}" target="_blank" title="{{ $v2->name }}">{{ $v2->name }}</a></li>
                @endforeach
            </ul>
        </div>

    </aside>

    <!--=========END右侧==========-->

</div>

<!--主题框架结束-->

<!---底部开始-->
<footer>
    <div class="footer-area">
        <!--博客相关-->
        <div class="about-blog">
            <h4>素材排行</h4>
            <div class="ft-part1">
                <!--素材排行-->
                <ul class="paihang-ul" style="display:block;width:100%;">
                    <li><span></span><a href="/Home/Index/downdetail/id/3.html" title="杨青个人博客模板分享"> 杨青个人博客模板分享<b>(5691)</b></a></li><li><span></span><a href="/Home/Index/downdetail/id/6.html" title="个人博客模板下载（emlog系统）"> 个人博客模板下载（emlog系统）<b>(4089)</b></a></li><li><span></span><a href="/Home/Index/downdetail/id/2.html" title="柠檬绿兔小白个人博客模板下载"> 柠檬绿兔小白个人博客模板下载<b>(2974)</b></a></li><li><span></span><a href="/Home/Index/downdetail/id/5.html" title="jQuery俄罗斯方块小游戏下载"> jQuery俄罗斯方块小游戏下载<b>(1784)</b></a></li><li><span></span><a href="/Home/Index/downdetail/id/4.html" title="juqery图片特效轮播图插件（转动）"> juqery图片特效轮播图插件（转动）<b>(1711)</b></a></li>				</ul>
            </div>
        </div>

        <!--最新留言-->
        <div class="close-fd mob-hidden">
            <h4>留言频道</h4>
            <ul >
                <li>
                    <div class="sd-tx">
                        <a href="/Home/Index/feedback.html/#Comment-262"  target="_blank" rel="nofollow" title="去留言板看看?">

                            <img src="/home/images/portrait/95.jpg" alt="宋耀锋" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span>宋耀锋</span>
                        <a class="blue-text" href="/Home/Index/feedback.html/#Comment-262" title="留言频道重新开通了！" >留言频道重新开通了！</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/Home/Index/feedback.html/#Comment-261"  target="_blank" rel="nofollow" title="去留言板看看?">

                            <img src="/home/images/portrait/86.jpg" alt="xjian" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span>xjian</span>
                        <a class="blue-text" href="/Home/Index/feedback.html/#Comment-261" title="不知道该说啥好" >不知道该说啥好</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/Home/Index/feedback.html/#Comment-260"  target="_blank" rel="nofollow" title="去留言板看看?">

                            <img src="/home/images/portrait/73.jpg" alt="town" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span>town</span>
                        <a class="blue-text" href="/Home/Index/feedback.html/#Comment-260" title="https://townwang.com   交换友链  可以的话去我博客留言 帮我增点人气" >https://townwang.com   交换友链  可以的话去我博客留言 帮我增点人气</a>
                    </div>
                </li>    </ul>
        </div>



        <!--图文频道-->

        <div class="tuwen-pd mob-hidden">
            <h4>博主相册</h4>
            <ul >
                <li>
                    <a  class="orange-text" href="/Home/Index/picture/id/1.html" title="杨青个人博客">
                        <img class="img-circle" alt="杨青个人博客" src="/home/images/2016411192233455.jpg" title="杨青个人博客"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="/Home/Index/picture/id/2.html" title="卢松松博客">
                        <img class="img-circle" alt="卢松松博客" src="/home/images/2016418225948574.jpg" title="卢松松博客"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="/Home/Index/picture/id/3.html" title="个人博客主页欣赏">
                        <img class="img-circle" alt="个人博客主页欣赏" src="/home/images/20161225585ea5215cfc2.jpg" title="个人博客主页欣赏"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="/Home/Index/picture/id/4.html" title="月光博客">
                        <img class="img-circle" alt="月光博客" src="/home/images/201701095872e61ed4a98.jpg" title="月光博客"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="/Home/Index/picture/id/5.html" title="全球中文网站前5排行榜">
                        <img class="img-circle" alt="全球中文网站前5排行榜" src="/home/images/201705085872e61ed4a98.jpg" title="全球中文网站前5排行榜"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="/Home/Index/picture/id/6.html" title="laravel框架个人博客系统">
                        <img class="img-circle" alt="laravel框架个人博客系统" src="/home/images/2017061559425a3e45e41.jpg" title="laravel框架个人博客系统"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="/Home/Index/picture/id/7.html" title="企业招聘前端工程师面试题">
                        <img class="img-circle" alt="企业招聘前端工程师面试题" src="/home/images/201708155992a4329eefe.jpg" title="企业招聘前端工程师面试题"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="/Home/Index/picture/id/8.html" title="优秀的网站设计欣赏">
                        <img class="img-circle" alt="优秀的网站设计欣赏" src="/home/images/201801265a6aa5325b5b4.jpg" title="优秀的网站设计欣赏"/>
                    </a>
                </li>			</ul>
        </div>
        <!--数据统计-->

        <div class="data-count ">

            <h4>数据统计</h4>

            <ul>


                <li><span><i class="el-picture"></i>图片数量：</span><a title="共有 21 张图片">21</a> 张</li>

                <li><span><i class="el-headphones"></i>说说数量：</span><a title="共有 62 条说说">62</a> 条</li>

                <li><span><i class="el-pencil"></i>文章数量：</span><a title="共有 108 篇文章">108</a> 篇</li>

                <li><span><i class="el-comment"></i>留言数量：</span><a title="共有 95 条留言">95</a> 条</li>

                <li><span><i class="el-comment-alt"></i>评论数量：</span><a title="共有 25 条评论">25</a> 条</li>

                <li><span><i class="el-paper-clip"></i>素材个数：</span><a title="共有 24 个">24</a> 个</li>

                <li><span><i class="el-cog"></i>运行天数：</span><a title="宋耀锋博客 已正常运行 776 天">776</a> 天</li>



                <li><span><i class="el-adjust-alt"></i>访问统计：</span><a title="累计访问48285">48285</a> 次</a></li>



                <!--<li><span><i class="el-arrow-up"></i>4天前 12:15</span><a title="晓晓 最后更新了文章" >更新了<b class="lable">文章</b></a></li>-->



            </ul>

        </div>



    </div>

    <!--底部导航-->

    <div class="foot-nav">

        <div class="copy-right"><span >CopyRight &#169; 2015-2017 宋耀锋博客 &#160;Design by Lei</span></div>

        <div class="bottom-nav">

            <span><a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action"> {{ $config['WEB_ICP_NUMBER'] }}</a><!--CNZZ统计开始-->
    <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1272825053'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1272825053%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
    </script>
                <!--CNZZ统计结束--></span>

        </div>

    </div>

    <div  id="toTop">Back to Top</div>

    <script>

        window.onload=function(){

            $(".img_loading").removeClass("img_loading");

            $(".silde-title").show();

        }

        // 替换

        document.body.innerHTML = document.body.innerHTML.replace(/\[Q([0-9]*)\]/g, "<img src='/home/images/face/mr/$1.gif'/>");

        document.body.innerHTML = document.body.innerHTML.replace(/\[yc_([0-9]*)\]/g,"<img src='/home/images/face/yc/$1.gif'/>");

        document.body.innerHTML = document.body.innerHTML.replace(/\[ali_([0-9]*)\]/g,"<img src='/home/images/face/ali/$1.gif'/>");

    </script>





</footer>

<!---返回顶部-->

<!--换肤--->



<div class="select-skin">

    <div class="skin-btn">

        <a href="javascript:void(0);" class="skin-btn-open">换<br>肤</a>

    </div>



    <div class="skin-content">

        <h1>选择风格<span class="skin-close">关闭</span></h1>

        <div class="skin-content-list">

            <div class="skin-list"><a href="#" onclick="setActiveStyleSheet('qingxin'); return false;" class="btn1">清新</a></div>

            <div class="skin-list"><a href="#" onclick="setActiveStyleSheet('jianyue'); return false;" class="btn2">简约</a></div>

            <div class="skin-list"><a href="#" onclick="setActiveStyleSheet('qingshuang'); return false;" class="btn3">清爽</a></div>

        </div>

    </div>

</div>

<!---END 底部开始-->


<style type="text/css">
    .TY-login-window {
        font-size:12px;
        line-height:1.5;
        font-family:"微软雅黑",Arial,Helvetica;
        padding:15px;
        /*background:#fff;
        border-radius:6px;*/
    }
    .login-window-header {
        height:65px;
        overflow:hidden;
        position:relative;
        *zoom:1;
    }
    .loginWin-tab {
        text-align:center;
        margin-bottom:15px;
    }
    .loginWin-tab-list {
        display:inline-block;
        vertical-align:middle;
        *display:inline;
        *zoom:1;
    }
    .loginWin-tab-list li {
        float:left;
        display:inline;
        border-bottom:1px solid #aaa;
        color:#aaa;
        width:143px;
        height:21px;
        line-height:21px;
    }
    .loginWin-tab-list li span {
        padding-left:16px;
        /*background:url(resources/images/loginWin_icons.png?_v=20170104) no-repeat;*/
        cursor:pointer;
    }
    .loginWin-tab-list .normal-login-tab span {
        background-position:0 -159px;
    }
    .loginWin-tab-list .qrcode-login-tab span {
        background-position:0 -95px;
    }
    .loginWin-account {
        width:286px;
        margin:0 auto 15px;
    }
    .loginWin-account-title {
        color:#000;
        font-size:14px;
        margin-bottom:15px;
        text-indent:10px;
    }
    .loginWin-account-list {
        margin-right:-10px!important;
        height:152px;
        overflow:hidden;
    }
    .loginWin-account-list li {
        float:left;
        display:inline;
        margin-right:10px;
    }
    .loginWin-account-list li a {
        display:block;
        padding:9px 10px;
        line-height:20px;
        width:118px;
        color:#aaa;
        white-space:nowrap;
        text-overflow:ellipsis;
        overflow:hidden;
        text-decoration:none;
    }
    .loginWin-account-list li a:hover {
        color:#308ee3;
    }
    .loginWin-account-list li.checked a {
        color:#fff;
        background:#308ee3;
        border-radius:6px;
    }
    .loginWin-account-list li.checked a:hover {
        color:#fff;
    }
    .loginWin-form {
        color:#000;
    }
    .loginWin-login-form {
        width:286px;
        margin:0 auto;
    }
    .loginWin-login-form a,.loginWin-login-form a:link,.loginWin-login-form a:visited {
        color:#308ee3;
        text-decoration:none;
    }
    .loginWin-login-form a:hover,.loginWin-login-form a:active {
        color:#308ee3;
        text-decoration:underline;
    }
    .loginWin-form-item {
        margin-bottom:10px;
    }
    .loginWin-form-item .input-text {
        border:1px solid #aaa;
        border-radius:6px;
        padding:6px 12px;
        width:286px;
        height:38px;
        line-height:38px;
        outline:0 none;
    }
    .loginWin-form-item .input-text:focus {
        border-color:#308ee3;
    }
    .loginWin-form-item .input-checkbox {
        vertical-align:middle;
        margin:-2px 4px 0 0;
        outline:0 none;
    }
    .loginWin-submit-btn {
        border:0 none;
        width:286px;
        height:38px;
        line-height:38px;
        font-size:16px;
        color:#fff;
        text-align:center;
        background:#308ee3;
        border-radius:6px;
        cursor:pointer;
        vertical-align:middle;
        outline:0 none;
    }
    .loginWin-account-input,.loginWin-password-input {
        position:relative;
        *zoom:1;
    }
    .loginWin-account-input .input-text,.loginWin-password-input .input-text {
        padding-left:42px;
        width:286;
    }
    .loginWin-account-input label,.loginWin-password-input label {
        position:absolute;
        width:24px;
        height:24px;
        font-size:0;
        line-height:0;
        left:12px;
        top:6px;
        background:url(./images/icon/loginWin_icons.png?_v=20170104) no-repeat;
    }
    .fr {
        float: right;
        display: inline;
    }
    .loginWin-account-input label {
        background-position:0 -256px;
    }
    .loginWin-password-input label {
        background-position:0 -338px;
    }
    .loginWin-account-input .input-text:focus ~ label {
        background-position:0 -296px;
    }
    .loginWin-password-input .input-text:focus ~ label {
        background-position:0 -381px;
    }
    .switch-login-toggle,.normal-login-toggle {
        color:#f9a30f;
        padding-left:15px;
        /*background:url(resources/images/loginWin_icons.png?_v=20170104) no-repeat;*/
        cursor:pointer;
    }
    .normal-login-toggle {
        background-position:0 -190px;
    }
    .switch-login-toggle {
        background-position:0 -223px;
    }
    .loginWin-qrcode {
        margin-top:50px;
        height:273px;
    }
    .loginWin-qrcode-box {
        width:180px;
        padding-left:216px;
        margin:0 auto;
        text-align:center;
        /*background:url(resources/images/loginWin_qrcode_bg.png?_v=20170104) no-repeat;*/
        position:relative;
        *zoom:1;
    }
    .loginWin-third {
        width:286px;
        margin:20px auto 0;
    }
    .loginWin-third-title {
        text-align:center;
        margin-bottom:20px;
        position:relative;
        *zoom:1;
    }
    .loginWin-third-title:before {
        content:"";
        width:100%;
        height:1px;
        background:#aaa;
        position:absolute;
        top:50%;
        left:0;
    }
    .loginWin-third-title span {
        padding:0 10px;
        color:#aaa;
        background:#fff;
        position:relative;
        *zoom:1;
    }
    .loginWin-third-list {
        margin-right:-53px!important;
        overflow:hidden;
    }
    .loginWin-third-list li {
        float:left;
        display:inline;
        width:60px;
        height:60px;
        margin-right:53px;
    }
    .loginWin-third-list li a {
        display:block;
        width:60px;
        height:60px;
        background:url(./images/icon/loginWin_third.png?_v=20170104) no-repeat;
    }
    .loginWin-third-list .weixin-login {
        background-position:0 0;
    }
    .loginWin-third-list .qq-login {
        background-position:0 -60px;
    }
    .loginWin-third-list .weibo-login {
        background-position:0 -120px;
    }
    /*手机端登录*/
    .loginwap-third-list li {
        float:left;
        display:inline;
        width:33.333%;
        height:40px;
        /*margin-right:32%;*/
    }
    .loginwap-third-list li a {
        display:block;
        width:40px;
        height:40px;
        margin-left: 34.76%;
        background:url(./images/icon/loginwap_third.png?_v=20170104) no-repeat;
    }
    .loginwap-third-list .weixin-login {
        background-position:0 0;
    }
    .loginwap-third-list .qq-login {
        background-position:0 -40px;
    }
    .loginwap-third-list .weibo-login {
        background-position:0 -80px;
    }

    #loginWin_content_wrapper {
        padding:10px 0;
    }
    .loginWin-switch-login-wrapper .loginWin-tab,.loginWin-switch-login-wrapper .loginWin-qrcode,.loginWin-switch-login-wrapper .loginWin-third,.loginWin-switch-login-wrapper .loginWin-account-input,.loginWin-switch-login-wrapper .loginWin-register-link,.loginWin-switch-login-wrapper .switch-login-toggle {
        display:none;
    }
    .loginWin-normal-login-wrapper .loginWin-account,.loginWin-normal-login-wrapper .loginWin-qrcode,.loginWin-normal-login-wrapper .normal-login-toggle {
        display:none;
    }
    .loginWin-normal-login-wrapper .normal-login-tab {
        border-bottom-color:#308ee3;
        color:#308ee3;
    }
    .loginWin-normal-login-wrapper .normal-login-tab span {
        background-position:0 -127px;
        cursor:text;
    }
    .loginWin-qrcode-login-wrapper .loginWin-account,.loginWin-qrcode-login-wrapper .loginWin-form,.loginWin-qrcode-login-wrapper .loginWin-third {
        display:none;
    }
    .loginWin-qrcode-login-wrapper .qrcode-login-tab {
        border-bottom-color:#308ee3;
        color:#308ee3;
    }
    .loginWin-qrcode-login-wrapper .qrcode-login-tab span {
        background-position:0 -64px;
        cursor:text;
    }
</style>
<div class="hide_box2"></div>
<div class="shang_box2">
    <a class="shang_close2" href="javascript:void(0)" onClick="dashangToggle2()" title="关闭"><img src="/home/images/icon/close.jpg" alt="取消"/></a>
    <img class="shang_logo2" src="/home/images/icon/logo2.png" alt="宋耀锋博客"/>
    <!-- <div class="ty-content clearfix shang_box2" style="padding:0;"> -->
    <div class="TY-login-window">

        <div class="login-window-body">
            <div id="loginWin_content_wrapper" class="loginWin-normal-login-wrapper">
                <div class="loginWin-tab">
                    <ul class="loginWin-tab-list cf">
                        <li class="normal-login-tab"><span>普通登录</span></li>
                        <li class="qrcode-login-tab"><span>扫码登录</span></li>
                    </ul>
                </div>
                <div class="loginWin-form">
                    <form class="loginWin-login-form" id="topguideloginform" name="topguideloginform" method="post" action="javascript::void(0);" accept-charset="UTF-8" target="_top">
                        <div class="loginWin-form-item loginWin-account-input"><input type="text" class="input-text" id="vwriter" name="vwriter" placeholder="用户名/手机/邮箱" autocomplete="off">
                            <input type="hidden" id="user_action" name="action" value="f7.1483930809431.111114|b2de5928fa17c27cadcda46f7cd0197f|d41d8cd98f00b204e9800998ecf8427e|Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36|0|9|v2.2"><label for="vwriter"></label>
                        </div>
                        <div class="loginWin-form-item loginWin-password-input">
                            <input type="password" class="input-text" id="vpassword" name="vpassword" placeholder="密码"><label for="vpassword"></label>
                        </div>
                        <div class="loginWin-form-item cf"><label class="fl">
                                <input type="checkbox" class="input-checkbox" id="rmflag" name="rmflag" value="1" checked="checked">下次自动登录</label><a class="loginWin-password-link fr" href="javascript::void(0);" onclick="return alert('暂不开放！');" target="_blank">忘记密码？</a>
                        </div>
                        <div class="loginWin-form-item"><button type="submit" onclick="return alert('暂不开放，请选择第三方！');" class="loginWin-submit-btn">登 录</button>
                        </div>
                        <div class="cf"><a class="loginWin-register-link fl" href="javascript::void(0);" onclick="return alert('暂不开放，请选择第三方！');" target="_blank">立即注册</a><span class="normal-login-toggle fr">返回登录</span>
                        </div>
                    </form>
                </div>
                <div class="loginWin-third"><p class="loginWin-third-title"><span>使用第三方账号登录</span></p>
                    <ul class="loginWin-third-list cf">
                        <li><a class="weixin-login" title="微信账号登录" href="/Home/User/oauth_login/type/wechat.html"></a></li>
                        <li><a class="qq-login" title="QQ账号登录" href="/Home/User/oauth_login/type/qq.html"></a></li>
                        <li><a class="weibo-login" title="新浪微博账号登录" href="/Home/User/oauth_login/type/sina.html"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- <ul class="row">
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="/Home/User/oauth_login/type/qq.html"><img src="/home/images/icon/qq-login.png" alt="QQ登录" title="QQ登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="/Home/User/oauth_login/type/sina.html"><img src="/home/images/icon/sina-login.png" alt="微博登录" title="微博登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="/Home/User/oauth_login/type/douban.html"><img src="/home/images/icon/douban-login.png" alt="豆瓣登录" title="豆瓣登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="/Home/User/oauth_login/type/renren.html"><img src="/home/images/icon/renren-login.png" alt="人人登录" title="人人登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="/Home/User/oauth_login/type/kaixin.html"><img src="/home/images/icon/kaixin-login.png" alt="开心网登录" title="开心网登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="/Home/User/oauth_login.html"><img src="" alt="待定" title="待定"></a>
        </li>
    </ul> -->

</div>
<script type="text/javascript">
    function dashangToggle2(){
        $(".hide_box2").fadeToggle();
        $(".shang_box2").fadeToggle();
    }
</script>


<script type="text/javascript">



    $(function(){
        var swiper = new Swiper('.swiper-container', {

            nextButton: '.swiper-button-next',

            prevButton: '.swiper-button-prev',

            pagination: '.swiper-pagination',

            paginationType: 'fraction',

            centeredSlides: true,

            autoplay: 5500,//自动播放时间

            autoHeight: true //自动高度
        });

        //瀑布流
        $('.su').jaliswall({ item: '.su-li' });

    });

</script>

</body>

</html>