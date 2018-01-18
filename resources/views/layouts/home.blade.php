
<!--
*文件名：前台
*时间：20170715
-->
<!--
文件名：首页模型
时间：20170815 更新
-->

﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="宋耀锋,个人博客,SYF,web前端,宋耀锋个人博客,web技术博文,javascript,html5,css3,layui,layui框架,前端工具导航,web框架大全,前端工具大全,前端目录,vue,node,jq"/>
    <meta name="description" content="SYF宋耀锋个人博客记录生活，关注web前端。SYF v1.0 主要基于Codeigniter + layui开发 版本：SYF v1.0 简要版，时间：2017年8月，博客托管于阿里云 服务器环境为：ECS centos 6.8 + Apache + Mysql "/>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>@yield('title')-SYF-宋耀锋个人博客</title>
    <link href="/home/css/animate.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/home/css/style.css" rel="stylesheet">
    <link href="/home/css/banner.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/home/js/html5shiv.min.js"></script>
    <script src="/home/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--主体部分开始-->

<!--导航开始-->
@include('home.common.navigate')
<!--导航结束-->


﻿<!--首页banner开始-->
<div id="banner" >
    <div id="animate-layer">
        <s class="clouds cloud-01"></s>
        <s class="clouds cloud-02"></s>
        <s class="clouds cloud-03"></s>
        <s class="balloon balloon-01"></s>
        <s class="bg"></s>
    </div>
</div>
<!--首页banner结束-->

<!--logo开始-->
<div class="logo">
    <div id="logo_img"><img src="/home/images/index_logo.jpg"></div>
    <div class="logo_title" >SYF博客欢迎你</div>
    <div class="logo_mo" >如痴如醉，乱七八糟都想整的小站</div>
    <div class="logo_btnbox" >
        <div class="btn btn_gradient" >
            <a style="color:#fff;" href="#">
                <span class="glyphicon glyphicon-certificate"></span>&nbsp;关于我
            </a>
        </div>
        <div class="btn btn_gradient2" >
            <a style="color:#fff;" href="#">
                <span class="glyphicon glyphicon-heart" ></span>&nbsp;左邻右舍
            </a>
        </div>
        <div class="btn btn_gradient3">
            <a style="color:#fff;" href="#">
                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;吐槽啦!
            </a>
        </div>

    </div>
</div>
<!--logo结束-->

<!--主体内容框开始-->
<div class="content" >
    <!--特殊导航条开始-->
    <div class="senav" >
        <div class="nav_ul">
            <a href="/">
                <li class="nav_ul_first">首页</li>
            </a>
            <!--其他栏目开始-->
            @foreach($category as $k => $v)
                <a href="{{ url('category', ['id' => $v->id]) }}"><li>{{ $v->name }}</li></a>
            @endforeach
        </div>
    </div>
    <!--特殊导航条结束-->


    <!--左侧边栏框开始-->
@include('home.common.left')
<!--左侧边栏框结束-->


    <!--右侧框开始-->
    @yield('content')
    <!--右侧框结束-->
</div>
<!--主体内容框结束-->

﻿<!--脚部开始-->
@include('home.common.footer')
<!--脚部结束-->

<!--主体部分结束-->
</body>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
    //logo触发动画
    $(document).ready(function(){
        $('#logo_img').mouseover(function(){
            $('#logo_img').addClass('animated  rubberBand');
            //监听执行一次
            $('#logo_img').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#logo_img').removeClass('animated  rubberBand');});
        });
    });

    //新浪微博触发动画
    $(document).ready(function(){
        $('#sinasite').mouseover(function(){
            $('#sinasite').addClass('animated  tada');
            //监听执行一次
            $('#sinasite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#sinasite').removeClass('animated  tada');});
        });
    });

    //博主邮箱触发动画
    $(document).ready(function(){
        $('#emailsite').mouseover(function(){
            $('#emailsite').addClass('animated  tada');
            //监听执行一次
            $('#emailsite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#emailsite').removeClass('animated  tada');});
        });
    });

    //新浪微博触发动画
    $(document).ready(function(){
        $('#appsite').mouseover(function(){
            $('#appsite').addClass('animated  tada');
            //监听执行一次
            $('#appsite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#appsite').removeClass('animated  tada');});
        });
    });

    //新浪微博触发动画
    $(document).ready(function(){
        $('#githubsite').mouseover(function(){
            $('#githubsite').addClass('animated  tada');
            //监听执行一次
            $('#githubsite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#githubsite').removeClass('animated  tada');});
        });
    });
</script>



<script type = "text/javascript">
    $(function(){
        $("#art_title").click(function(){
            var aid = $(this).attr('name');
            $.post("http://www.huxinchun.com/Home/viewnum",
                {
                    id:aid
                });
        });
    });
</script>
@yield('my-js')
