<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}-宋耀锋博客</title>
    <meta name="keywords" content="{{ $config['WEB_KEYWORDS'] }}"/>
    <meta name="description" content="{{ $config['WEB_DESCRIPTION'] }}"/>
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
    <link rel="stylesheet" href="/home/css/page.css"/>
    <link rel="stylesheet" type="text/css" href="/home/css/skin_1.css" title="qingxin"/>
    <link rel="stylesheet" type="text/css" href="/home/css/skin_2.css" title="jianyue"/>
    <link rel="stylesheet" type="text/css" href="/home/css/skin_3.css" title="qingshuang"/>
    <link rel="stylesheet" href="/home/css/font-icon.css"/>
    <link rel="stylesheet" href="/home/css/face.css"/>
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
            <div class="mobile-nav"><i class="el-lines"></i><i class="el-remove" style="cursor:pointer;"></i></div>
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
                        </li>
                    @endif
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
                    <li><a class="weixin-login" title="微信账号登录" href="#"></a></li>
                    <li><a class="qq-login" title="QQ账号登录" href="#"></a></li>
                    <li style="margin-right: 0!important;"><a class="weibo-login" title="新浪微博账号登录" href="#"></a></li>
                </ul>
            </div>
            <!--手机下拉菜单-->
            <ul class="mob-ulnav">
                <li><a href="/">首页</a></li>
                @foreach($category as $k3 => $v3)
                    @if(!isset($v3['childs']))
                        <li><a href="/category/{{ $v3['id'] }}" >{{ $v3['category_name'] }}</a></li>
                    @else
                        <li class='mob-drop' >
                            <a href="javascrip:;">{{ $v3['category_name'] }}<i></i></a>
                            <ul class="mob-dropmenu">
                                @foreach($v3['childs'] as $k4 => $v5)
                                    <li><a href="/category/{{ $v5['id'] }}">{{ $v5['category_name'] }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</header>
<!--导航结束-->