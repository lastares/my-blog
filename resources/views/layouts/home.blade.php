<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')@if(request()->path() !== '/') - {{ $config['WEB_TITLE'] }} @endif</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="author" content="songyaofeng,{{ htmlspecialchars_decode($config['ADMIN_EMAIL']) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/bootstrap-3.3.5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/bootstrap-3.3.5/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('statics/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="/statics/bootstrap-alert/css/component.css">
    <style>
        .set-font {
            font-size: 16px;
        }
        .portrait {
            width: 100px;
        }

        .widget-tabs {
            height: 284px;
        }

        .person-info {
            padding: 8% 0;
            height: 102px;
        }

        .info {
            text-align: center;
            vertical-align: middle;
        }

        .created {
            font-size: 16px;
            color: #788087;
        }

        #notice a {
            font-size: 16px;
        }

        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            cursor: url(/images/home/cursor.cur), auto !important;
            color: white;
            background-color: #14c327;
            border: none;
            border-bottom-color: transparent;
        }

        /*body {*/
            /*!*cursor: url(/images/home/cursor.cur), auto !important;*!*/
            /*background-image: url("/images/home/skyblue.jpg");*/
            /*background-repeat: repeat-x;*/
        /*}*/
        /*body {*/
            /*cursor: url(/images/home/cursor.cur), auto !important;*/
        /*}*/
        body:after {

            content: '';
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: url(/images/home/skyblue.jpg);
            z-index: -2;
            background-size: 100% 100%;
            /*filter: blur(3px);*/
            /*-webkit-filter: blur(3px);*/
            /*-o-filter: blur(3px);*/
            /*-ms-filter: blur(3px);*/
        }

        a:-webkit-any-link {
            cursor: url(/images/home/cursor.cur), auto;
        }

        .header-border {
            border-bottom: 1px solid #0B7DF2;
        }

        #hot-label {
           color: #ee3333;
            font-weight: bolder;
        }

        .list-icon {
            line-height: 1.375rem;
            text-align: center;
            content: counter(a,decimal);
            position: absolute;
            left: 0;
            top: .3125rem;
            border-radius: 100%;
            background-color: #efefee;
            text-shadow: 0 1px 0 hsla(0,0%,100%,.5);
            font-family: SourceCodeProRegular,Menlo,Monaco,Consolas,Courier New,monospace;
        }
    </style>
    @yield('css')
</head>
<body style="cursor: url(/images/home/cursor.cur), auto !important;">
    <!-- 顶部导航开始 -->
    <header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" onclick="recordId('/',0)">
                    <div class="hidden-xs b-nav-background"></div>
                    {{--<ul class="b-logo-code">--}}
                        {{--<li class="b-lc-start">&lt;?php</li>--}}
                        {{--<li class="b-lc-echo">echo</li>--}}
                    {{--</ul>--}}
                    <p class="b-logo-word">{{ $config['WEB_NAME'] }}</p>
                    {{--<p class="b-logo-end">;</p>--}}
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left: 20px;">
                <ul class="nav navbar-nav b-nav-parent">
                    <li class="hidden-xs b-nav-mobile"></li>
                    <li class="b-nav-cname set-font @if($category_id == 'index') b-nav-active @endif">
                        <a href="/" onclick="recordId('/',0)">首页</a>
                    </li>
                    @foreach($category as $v)
                        <li class="b-nav-cname set-font @if($v->id == $category_id) b-nav-active @endif">
                            <a href="{{ url('category/'.$v->id) }}"
                               onclick="return recordId('cid', '{{ $v->id }}')">{{ $v->name }}</a>
                        </li>
                    @endforeach
                    <li class="b-nav-cname set-font @if($category_id == 'chat') b-nav-active @endif">
                        <a href="{{ url('chat') }}">程序人生</a>
                    </li>
                    <li class="b-nav-cname hidden-sm set-font  @if($category_id == 'git') b-nav-active @endif">
                        <a href="{{ url('git') }}">开源项目</a>
                    </li>
                    <li class="b-nav-cname hidden-sm set-font  @if($category_id == 'other') b-nav-active @endif">
                        <a href="{{ url('other') }}">其他杂项</a>
                    </li>
                </ul>
                {{--<ul id="b-login-word" class="nav navbar-nav navbar-right">--}}
                {{--@if(empty(session('user.name')))--}}
                {{--<li class="b-nav-cname b-nav-login">--}}
                {{--<div class="hidden-xs b-login-mobile"></div>--}}
                {{--<a href="javascript:;" onclick="login()">登录</a>--}}
                {{--</li>--}}
                {{--@else--}}
                {{--<li class="b-user-info">--}}
                {{--<span><img class="b-head_img" src="{{ session('user.avatar') }}"--}}
                {{--alt="{{ session('user.name') }}" title="{{ session('user.name') }}"/></span>--}}
                {{--<span class="b-nickname">{{ session('user.name') }}</span>--}}
                {{--<span><a href="{{ url('auth/oauth/logout') }}">退出</a></span>--}}
                {{--</li>--}}
                {{--@endif--}}
                {{--</ul>--}}
            </div>
        </div>
    </header>
    <!-- 顶部导航结束 -->
    <div class="b-h-70"></div>
    <div id="b-content" class="container">
        <div class="row">
        @yield('content')
        <!-- 通用右部区域开始 -->
            <div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
                <div class="fixed">
                    <div class="widget widget-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#about" aria-controls="contact" role="tab" data-toggle="tab">关于站长</a>
                            </li>
                            <li role="presentation">
                            <a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">网站公告</a>
                            </li>
                            <li role="presentation">
                            <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系站长</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane notice active" id="about">
                                <div class="row" style="border-bottom: 1px solid #e3e3e3; padding-bottom: 15px;" >
                                    <div class="col-sm-5">
                                        <img src="/images/home/head-potrait.jpg"  class="img-circle img-responsive portrait" alt="head-potrait.jpg">
                                    </div>
                                    <div  class="col-sm-5 person-info">
                                    <span class="info">
                                        <h4><strong>蓝 笑 灵 晨</strong></h4><br>
                                        <h5><strong>PHPer</strong></h5>
                                    </span>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-3 info">
                                        <span class="created">原创 <br /><br> <span class="label label-default">{{ $articleCreateCount }}</span></span>
                                        {{--<span class="created">原创 <br /><br> <span class="count">{{ $articleCreateCount }}</span></span>--}}
                                    </div>
                                    <div class="col-md-3 info">
                                        <span class="created">转载 <br /> <br> <span class="label label-default">{{ $articleTransferCount }}</span></span>
                                    </div>
                                    <div class="col-md-3 info">
                                        <span class="created">访问量 <br /><br> <span class="label label-default">{{ $articleClickCount }}</span></span>
                                    </div>
                                    <div class="col-md-3 info">
                                        <span class="created">喜欢 <br /> <br><span class="label label-default">{{ $articleLikeCount }}</span></span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane notice" id="notice">
                                <ul>
                                    @foreach($notices as $k => $notice)
                                        <li>
                                            <time datetime="{{ $notice->created_at }}">{{ $notice->created_at->diffForHumans() }}</time>
                                            <a href="javascript:void(0);" onclick="noticeDisplay({{ $notice->id }});" class="md-trigger" data-modal="noticeOpen">{{ $notice->notice_title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane contact" id="contact">
                                <h3>
                                    <a href="mailto:{{ $config['ADMIN_EMAIL'] }}" style="vertical-align: middle" data-toggle="tooltip" data-placement="bottom" title="{{ $config['ADMIN_EMAIL'] }}">{{ $config['ADMIN_EMAIL'] }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="well md-modal md-effect-11" id="noticeOpen">
                        <div class="md-content">
                            <h3></h3>
                            <div>
                                <p style="margin-bottom: 10px;"></p>
                                <button class="md-close btn-sm btn-success"> 关 闭</button>
                            </div>
                        </div>
                    </div>
                    <div class="md-overlay"></div>
                    <div class="b-search">
                        <form class="form-inline" role="form" action="{{ url('search') }}" method="get">
                            <input class="b-search-text" type="text" name="wd">
                            <input class="b-search-submit" type="submit" value="全站搜索">
                        </form>
                    </div>
                    {{--<div class="widget widget_search">--}}
                        {{--<form class="navbar-form" action="/search" id="search" method="get">--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" name="wd" value="{{ request('wd', '') }}" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">--}}
                                {{--<span class="input-group-btn">--}}
                                    {{--<button type="button" class="btn btn-success btn-search" onclick="search();">搜索</button>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                </div>
                {{--@if(!empty($config['QQ_QUN_NUMBER']))--}}
                {{--<div class="b-tags">--}}
                {{--<h4 class="b-title">加入组织</h4>--}}
                {{--<ul class="b-all-tname">--}}
                {{--<li class="b-qun-or-code">--}}
                {{--<img src="{{ asset($config['QQ_QUN_OR_CODE']) }}" alt="QQ">--}}
                {{--</li>--}}
                {{--<li class="b-qun-word">--}}
                {{--<p class="b-qun-nuber">--}}
                {{--1. 手Q扫左侧二维码--}}
                {{--</p>--}}
                {{--<p class="b-qun-nuber">--}}
                {{--2. 搜群：{{ $config['QQ_QUN_NUMBER'] }}--}}
                {{--</p>--}}
                {{--<p class="b-qun-code">--}}
                {{--3. 点击{!! $config['QQ_QUN_CODE'] !!}--}}
                {{--</p>--}}
                {{--<p class="b-qun-article">--}}
                {{--@if(!empty($qqQunArticle['id']))--}}
                {{--<a href="{{ url('article', [$qqQunArticle['id']]) }}" target="_blank">{{ $qqQunArticle['title'] }}</a>--}}
                {{--@endif--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--@endif--}}
                <div class="b-tags">
                    <h4 class="b-title header-border">热门 <span id="hot-label">标签</span></h4>
                    <ul class="b-all-tname">
                        <?php $tag_i = 0; ?>
                        @foreach($tag as $v)
                            <?php $tag_i++; ?>
                            <?php $tag_i = $tag_i == 10 ? 1 : $tag_i; ?>
                            <li class="b-tname" style="padding: 5px 3px;font-size: 14px;">
                                <a data-toggle="tooltip" data-placement="top" title="{{ $v->article_count }} 篇文章"  class="tstyle-{{ $tag_i }}" href="{{ url('tag', [$v->id]) }}"
                                   onclick="return recordId('tid','{{ $v->id }}')">{{ $v->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="b-recommend">
                    <h4 class="b-title header-border">置顶 <span id="hot-label">文章</span></h4>
                    <p class="b-recommend-p">
                        @foreach($topArticle as $v)
                            <a class="b-recommend-a" href="{{ url('article', [$v->id]) }}" target="_blank"><span
                                        class="fa fa-th-list b-black"></span> {{ $v->title }}</a>
                        @endforeach
                    </p>
                </div>
                <div class="b-link">
                    <h4 class="b-title header-border">最新 <span id="hot-label">评论</span></h4>
                    <div>
                        @foreach($newComment as $v)
                            <ul class="b-new-comment @if($loop->first) b-new-commit-first @endif">
                                <img class="b-head-img js-head-img" src="{{ asset('uploads/avatar/default.jpg') }}"
                                     _src="{{ asset($v->avatar) }}" alt="{{ $v->name }}">
                                <li class="b-nickname">
                                    {{ $v->name }}<span>{{ word_time($v->created_at) }}</span>
                                </li>
                                <li class="b-nc-article">
                                    在<a href="{{ url('article', [$v->article_id]) }}" target="_blank">{{ $v->title }}</a>中评论
                                </li>
                                <li class="b-content">
                                    {!! $v->content !!}
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <eq name="show_link" value="1">
                    <div class="b-link">
                        <h4 class="b-title header-border">友情 <span id="hot-label">链接</span></h4>
                        <p>
                            @foreach($friendshipLink as $v)
                                <a class="b-link-a" href="{{ $v->url }}" target="_blank"><span
                                            class="fa fa-link b-black"></span> {{ $v->name }}</a>
                            @endforeach
                        </p>
                    </div>
                </eq>
            </div>
            <!-- 通用右部区域结束 -->
        </div>
        <div class="row">
            <!-- 通用底部文件开始 -->
            <footer id="b-foot" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul>
                    <li class="text-center">
                        Powered by <a rel="nofollow" href="#" target="_blank">laravel-songyaofeng</a> ©
                        2014-2017 {{ parse_url(config('app.url'))['host'] }} 版权所有 @if(!empty($config['WEB_ICP_NUMBER']))
                            ICP证：{{ $config['WEB_ICP_NUMBER'] }} @endif
                    </li>
                    <li class="text-center">
                        @if(!empty($config['ADMIN_EMAIL']))
                            联系邮箱：{!! $config['ADMIN_EMAIL'] !!}
                        @endif
                    </li>
                </ul>
                <div class="b-h-20"></div>
                <a class="go-top fa fa-angle-up animated jello" href="javascript:;" onclick="goTop()"></a>
            </footer>
            <!-- 通用底部文件结束 -->
        </div>
    </div>
    <!-- 主体部分结束 -->

    <!-- 登录模态框开始 -->
    <div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                    <ul class="row">
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/qq') }}"><img
                                        src="{{ asset('images/home/qq-login.png') }}" alt="QQ登录" title="QQ登录"></a>
                        </li>
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/weibo') }}"><img
                                        src="{{ asset('images/home/sina-login.png') }}" alt="微博登录" title="微博登录"></a>
                        </li>
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/github') }}"><img
                                        src="{{ asset('images/home/github-login.jpg') }}" alt="github登录"
                                        title="github登录"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 登录模态框结束 -->

</body>
</html>

<script src="{{ asset('statics/js/jquery-2.0.0.min.js') }}"></script>

<script src="{{ asset('statics/bootstrap-3.3.5/js/bootstrap.min.js') }}"></script>
<!--[if lt IE 9]>
<script src="{{ asset('statics/js/html5shiv.min.js') }}"></script>
<script src="{{ asset('statics/js/respond.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('statics/pace/pace.min.js') }}"></script>
<script src="{{ asset('js/home/index.js') }}"></script>
<script src="{{ asset('statics/layer-2.4/layer.js') }}"></script>
<script src="{{ asset('statics/bootstrap-alert/js/classie.js') }}"></script>
<script src="{{ asset('statics/bootstrap-alert/js/modalEffects.js') }}"></script>
{{--<script src="{{ asset('statics/snowy/snowy.js') }}"></script>--}}
<!-- 百度页面自动提交开始 -->
<script>
    (function () {
        $('[data-toggle="tooltip"]').tooltip()
        /* 鼠标特效 */
        var a_idx = 0;
        jQuery(document).ready(function($) {
            $("body").click(function(e) {
                var a = ["欢迎您", "么么哒", "你真好", "棒棒哒", "真可爱", "你最美", "喜欢你" ,"真聪明", "爱你哦", "好厉害", "你真帅", "祝福你"];
                var $i = $("<span/>").text(a[a_idx]);
                a_idx = (a_idx + 1) % a.length;
                var x = e.pageX,
                    y = e.pageY;
                $i.css({
                    "z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
                    "top": y - 20,
                    "left": x,
                    "position": "absolute",
                    "font-weight": "bold",
                    "color": "#ff6651"
                });
                $("body").append($i);
                $i.animate({
                        "top": y - 180,
                        "opacity": 0
                    },
                    1500,
                    function() {
                        $i.remove();
                    });
            });
        });
        /**
         * 网站公告
         */
        $('.nav-tabs a').hover(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();

    logoutUrl = "{:U('Home/User/logout')}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function noticeDisplay(id) {
        layer.load(layer.open, {shade: 0.3});
        setTimeout(function () {
            layer.closeAll('loading');
        }, 1000);
        $.ajax({
            type: 'get',
            url: '/getNotice?id=' + id,
            dataType: 'json',
            cache: false,
            success: function (data) {
                if (data.code === 0) {
                    $('.md-content h3').html(data.data.notice_title);
                    $('.md-content p').html(data.data.notice_content);
                } else {
                    layer.msg(data.msg);
                }
            }
        });
    }

</script>
<!-- 百度页面自动提交结束 -->

<!-- 百度统计开始 -->
{!! htmlspecialchars_decode($config['WEB_STATISTICS']) !!}
<!-- 百度统计结束 -->
@yield('js')
