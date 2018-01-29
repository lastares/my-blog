<!DOCTYPE html>
<!-- saved from url=(0015)http://qdgu.cn/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>后端攻城狮</title>
    <meta name="keywords" content="前端设计，UI设计，网页设计，设计师网站导航，设计师网址导航，web前端，前端工具导航，web前端导航，前端工具下载">
    <meta name="description" content="前端工具导航，Web前端工程师，前端网址导航，web开发必备利器。">
    <link rel="stylesheet" type="text/css" href="/home/css/basic.css">
    <link href="/home/css/font.css" rel="stylesheet" type="text/css">
    <link href="/home/css/font-ie7.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/home/css/css.css">
    <link href="" rel="shortcut icon">
    <script type="text/javascript" src="/home/js/jquery.min.js"></script>
    <script type="text/ecmascript" src="/home/js/common.js"></script>
    <style>
        .wrap{width:1200px;min-width:1200px;}
        .time-list li{height:32px;}
    </style>
<body data-spy="scroll" data-target="#nav-plane" data-offset="140">
<div id="topmain">
    <div class="wrap">
        <div class="logo left">
            <a href="http://qdgu.cn/index.php?"><img src="/home/images/tools-logo.png" alt="前端谷-前端工具导航大全"></a>
        </div>
        {{--<div class="search">--}}
            {{--<form id="search" action="http://qdgu.cn/" target="_self">--}}
                {{--<input type="text" id="search-kw" class="search-input" name="kw" placeholder="搜索" autocomplete="off" value="">--}}
                {{--<input name="ie" type="hidden" value="utf-8">--}}
                {{--<input name="a" type="hidden" value="search">--}}
                {{--<input type="submit" class="search-button" value="">--}}
            {{--</form>--}}
        {{--</div>--}}
    </div>
</div><!--#topmain-->



<!--导航栏固定不动-->
<div id="topmain">
    <div>
        <div class="wrap">
            <div class="nav">
                <ul>
                    <li class="active"><a href="/tools" id="home">首页</a></li>
                    {{--@foreach($category as $k => $value)--}}
                        {{--@if($value->id >= 7)--}}
                            {{--<li @if($k == 0) class="active" @endif><a href="{{ url('tools_category', ['id' => $value->id]) }}" id="home">{{ $value->name }}</a></li>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                    <div style="width: 600px;height: auto;float: right;">
                        <div class="top-info left">
                            <strong><div style="color: #f00;display: inline;">公告：</div></strong><span class="welcome">提供最新最流行的后端工具目录，方便后端爱好者。</span>
                        </div>
                        <div class="top-link right" style="margin-right: 20px;">
                            <a href="javascript:;" onclick="addFav(&#39;http://qdgu.cn&#39;,&#39;前端谷-前端工具导航大全&#39;)"><i class="icon-folderopen"></i><span style="color: #FFf;background:#007ED8;padding: 5px;border-radius: 5px;">按Ctrl+D收藏</span></a>
                        </div>
                    </div>


                </ul>
            </div>
        </div>
    </div>
    <!-- #topnav-->
    @yield('content')
    <script type="text/javascript">
        $(function(){
            $('.gallery-list .img').hover(function(){
                var height = $(this).outerHeight()+10;
                $(this).parent().addClass('active');
                $(this).next('.description').css('padding-top',height).stop(true,true).fadeIn();
            },function(){ $(this).next('.description').stop(true,true).fadeOut('fast',function(){ $(this).parent().removeClass('active');});});
            $('.gallery-list a').click(function(){
                var href = $(this).attr('href');
                countClick(href);
            })
        })
    </script>

    <div id="shortcut-box">
        <a class="feedback" href="javascript:;"><span>留言反馈</span></a>
        <!--
        <a class="gotop" id="scrollUp" href="#"><span>返回顶部</span></a>
        -->
    </div>
    <script type="text/javascript" src="/home/plugins/layer-v3.1.1/layer/layer.js"></script>
    <script>
        $('.feedback').on('click', function(){
            layer.open({  type: 2, area: ['500px', '300px'], shadeClose: true,title:'留言反馈', content: "" });
        });
    </script>

    <div id="footer">
        <div class="wrap">
            <!--
                     <div class="footer-top">
                    <ul class="left">
                                            </ul>
                    <div class="right"><a href="#"><img src="/Public/Skins/gobackimg.jpg"></a></div>
                </div>
        -->
            <div class="footer-bottom">
                <dl class="clearfix">
                    <dt><a href="http://qdgu.cn/index.php?">
                            <!--
                            <img src="/Public/Skins/logo.png" alt="前端谷-前端工具导航大全" />

                            <img src="Public/Skins/logo2.png">
                            </a></dt>
                            <dd>
    -->
                            <div class="copyright">
                                Copyright ©2017 www.songyaofeng.com 版权所有
                            </div>

                        </a><div class="linklist"><a href="/message">
                            </a><ul><a href="/message">
                                    <li>最全最实用的后端工具大全(好站推荐请本站留言,谢谢！)</li>
                                </a><li><a href="/message"></a><a href="/">灵晨BLOG</a></li>
                            </ul>
                        </div>
                    </dt>
                </dl>
            </div>
        </div>
    </div>
    <!--#footer-->
    <script>
        function countClick(url){
            $.post("http://qdgu.cn/?a=click",{url:url});
        }
    </script>

</div><a id="scrollUp" href="http://qdgu.cn/#top" title="" style="display: none; position: fixed; z-index: 2147483647;"></a></body></html>