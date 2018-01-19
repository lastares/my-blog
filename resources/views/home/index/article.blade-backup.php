@include('home.common.header')

<body>
<!--主体部分开始-->

<!--导航开始-->
@include('home.common.navigate')
<!--导航结束-->


﻿

<!--banner开始-->
<div class="banner" style="text-align:center;overflow:hidden;">
    <img  src="/home/images/listbg2.jpg">
</div>
<!--banner结束-->

<!--logo开始-->
<div class="logo" style="height:120px;" >
    <div class="logo_mo" style="height:20px;"></div>
    <div class="logo_btnbox">
        <div class="btn btn_gradient" >
            <a style="color:#fff;" href="#">
                <span class="glyphicon glyphicon-certificate" ></span>&nbsp;关于我
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
<div class="content" style="min-height:0px;">
    <!--特殊导航条开始-->
    @include('home.common.category')
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
@include('home.common.footer')
