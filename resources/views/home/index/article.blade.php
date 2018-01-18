﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="胡新春,个人博客,HXC,web前端,胡新春个人博客,web技术博文,javascript,html5,css3,layui,layui框架,前端工具导航,web框架大全,前端工具大全,前端目录,vue,node,jq"/>
    <meta name="description" content="HXC胡新春个人博客记录生活，关注web前端。HXC v1.0 主要基于Codeigniter + layui开发 版本：HXC v1.0 简要版，时间：2017年8月，博客托管于阿里云 服务器环境为：ECS centos 6.8 + Apache + Mysql "/>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>响应式图片解决方案-HXC博客</title>
    <link href="/home/css/animate.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/home/css/style.css" rel="stylesheet">
    <link href="/home/css/banner.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--主体部分开始-->

<!--导航开始-->
<div class="topnav" style="margin-top: -25px;">
    <div class="top_nav">
        <a href="http://www.huxinchun.com/Home/index">
        <span class="top_nav_first">
          <img src="http://www.huxinchun.com/public/style/img/logo.png">
        </span>
        </a>
        <a href="http://www.huxinchun.com/Home/index">
            <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;首页</li>
        </a>

        <a href="http://www.huxinchun.com/Home/block/34">
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;游戏/动漫</li>
        </a>
        <a href="http://www.huxinchun.com/Home/block/35">
            <li><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;日记/生活</li>
        </a>
        <a href="http://www.huxinchun.com/Home/time_axis">
            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;时间轴</li>
        </a>
        <a href="http://www.huxinchun.com/Liuyan">
            <li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;留言板</li>
        </a>
    </div>
</div>
<!--导航结束-->


﻿

<!--banner开始-->
<div class="banner" style="text-align:center;overflow:hidden;">
    <img  src="http://www.huxinchun.com/public/style/img/listbg2.jpg">
</div>
<!--banner结束-->

<!--logo开始-->
<div class="logo" style="height:120px;" >
    <div class="logo_mo" style="height:20px;"></div>
    <div class="logo_btnbox">
        <div class="btn btn_gradient" >
            <a style="color:#fff;" href="http://www.huxinchun.com/Home/content/35">
                <span class="glyphicon glyphicon-certificate" ></span>&nbsp;关于我
            </a>
        </div>

        <div class="btn btn_gradient2" >
            <a style="color:#fff;" href="http://www.huxinchun.com/Home/neigh">
                <span class="glyphicon glyphicon-heart" ></span>&nbsp;左邻右舍
            </a>
        </div>

        <div class="btn btn_gradient3">
            <a style="color:#fff;" href="http://www.huxinchun.com/Liuyan">
                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;吐槽啦!
            </a>
        </div>
    </div>
</div>
<!--logo结束-->

<!--主体内容框开始-->
<div class="content" style="min-height:0px;">
    <!--特殊导航条开始-->
    <div class="senav" >
        <div class="nav_ul">
            <a href="http://www.huxinchun.com/Home/index">
                <li class="nav_ul_first">首页</li>
            </a>
            <!--其他栏目开始-->
            @foreach($category as $k => $v)
            <a href="{{ url('category', ['id' => $v->id]) }}"><li>{{ $v->name }}</li></a>
            @endforeach
        </div>
    </div>
    <!--特殊导航条结束-->

    <!--文章开始-->
    <div class="article_box">
        <div class="article_sebox">
            <div class="content_tagimg">
                <img width="100" height="auto" src="/home/images/contag.png">
            </div>

            <!--标题-->
            <div class="article_title">
                {{ $data->title }}
            </div>
            <!--作者时间-->
            <div class="article_setitle">
                <span><span class="glyphicon glyphicon-user" style="color: #ff6e03;"></span>&nbsp;作者：{{ $data->author }}</span>
                <span><span class="glyphicon glyphicon-dashboard" style="color: #02b73b"></span>&nbsp;发布时间：{{ $data->created_at }}</span>
                <span><span class="glyphicon glyphicon-fire" style="color: #f00"></span>&nbsp;访客：{{ $data->click }}</span>
            </div>
            <!--内容-->
            <div class="article_tagimg"></div>
            {!! $data->html !!}
      </div>
        <!--评论-->
        <div class="article_comment">
            <!--留言-->
            <div class="col-md-12 message_box">
                <div class="message_style" style="height:auto;padding:35px;" >
                    {{--<h4>点评一下</h4>--}}
                    {{--<!--PC版-->--}}
                    {{--<div id="SOHUCS" sid="2018-01-12 08:51:51" > </div>--}}
                    {{--<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>--}}
                    {{--<script type="text/javascript">--}}
                        {{--window.changyan.api.config({--}}
                            {{--appid: 'cyt05y4uR',--}}
                            {{--conf: 'prod_02cf7f8f4f6d36f0496fff918632c674'--}}
                        {{--});--}}
                    {{--</script>--}}
                </div>

            </div>
        </div>

    </div>
</div>
<!--主体内容框结束-->

<!--百度UEditor代码高亮编辑器-->
<script type="text/javascript" src="/home/js/shCore.js"></script>
<link rel="stylesheet" href="/home/css/shCoreDefault.css">
<script type="text/javascript">
    SyntaxHighlighter.all();
</script>


﻿<!--脚部开始-->
<div class="foot_box">
    <div class="copyright">
        Copyright © 2015-2017 huxinchun.com All Rights Reserved. 备案号:鄂ICP备15020375号-1
    </div>
    <div class="foot_time">
        程序:HXC博客v1.0+ 主题:HXC博客前端Funs主题&nbsp; &nbsp; 环境：lamp  <a href="http://www.huxinchun.com/Login/index">&nbsp;后台</a>
    </div>
    <div class="foot_time">博客平稳运行2年+
        <!-- <span onclick="clear_barrage()" style="background:#a7fd48;border-radius:3px;cursor: pointer;padding:3px;">清除弹幕</span> -->
        <!--cnzz 统计开始-->
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1263918807'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1263918807%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
        <!--cnzz统计结束-->

    </div>


</div>
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
