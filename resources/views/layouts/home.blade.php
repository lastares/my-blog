
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="宋耀锋,灵晨的个人博客,SYF,后端程序yuan,宋耀锋个人博客,技术博文,后端工具大全，PHP，Linux，MySQL，Nginx，Redis，Memcache， MongoDB"/>
    <meta name="description" content="{{ $config['WEB_DESCRIPTION'] }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>@yield('title') - {{ $config['WEB_NAME'] }}</title>
    <link href="/home/css/animate.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/home/css/style.css" rel="stylesheet">
    <link href="/home/css/banner.css" rel="stylesheet">
    <link rel="stylesheet" href="/home/css/animate.css">
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=YOUR APPKEY" type="text/javascript" charset="utf-8"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/home/js/html5shiv.min.js"></script>
    <script src="/home/js/respond.min.js"></script>
    <![endif]-->
    @yield('my-css')
        <style>
        .from {
            color: #fff;
            padding: 5px 8px;
            background-color: #5CB85C;
            border-radius: 5px;
            font-size: 12px;
            vertical-align: middle;
            margin-left:0px;
        }
        .b-head_img {
            margin: -4px auto;
            width: 30px;
            height: 30px
        }
    </style>
</head>

<body>
<!--主体部分开始-->

<!--导航开始-->
<div class="topnav" style="margin-top: -25px;">
    <div class="top_nav">
        <a href="/">
        <span class="top_nav_first">
          <img id="logoAnimate" src="/home/images/logo.png">
        </span>
        </a>
        <a href="/">
            <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;首页</li>
        </a>
        {{--<a href="{{ url('timeAxis') }}">--}}
            {{--<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;时间轴</li>--}}
        {{--</a>--}}
        <a href="{{ url('message') }}">
            <li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;留言板</li>
        </a>
        @if(empty(session('user.name')))
        <a href="#" data-toggle="modal" data-target="#login" class="col-md-offset-7 pull-left">
            <li><span aria-hidden="true"></span>&nbsp;<span class="from">登录</span></li>
        </a>
        @else
        <a href="{{ url('auth/oauth/logout') }}" class="col-md-offset-7 pull-left">
            <li>
                <img class="b-head_img" src="{{ session('user.avatar') }}" title="{{ session('user.name') }}" alt="{{ session('user.name') }}"/>&nbsp;&nbsp;<span class="b-nickname">{{ session('user.name') }}</span> <span class="from">退出</span>
            </li>
        </a>
        @endif

    </div>
</div>

<!--导航结束-->

﻿<!--
文件名：博客栏目页
时间：201707015
作者：SYF
-->
@if($url == $host)
﻿<!--首页banner开始-->
<div id="banner" >
    <div id="animate-layer">
        <s class="clouds cloud-01"></s>
        <s class="clouds cloud-02"></s>
        <s class="clouds cloud-03"></s>
        <!--
            <s class="clouds cloud-04"></s>
            <s class="clouds cloud-05"></s>
            <s class="clouds cloud-06"></s>
            <s class="clouds cloud-07"></s>
        -->
        <s class="balloon balloon-01"></s>

        <!--  <s class="balloon balloon-02"></s> -->
        <s class="bg"></s>
    </div>
</div>
<!--首页banner结束-->

<!--logo开始-->
<div class="logo">
    <div id="logo_img"><img src="/home/images/index_logo.jpg"></div>
    <div class="logo_title" >{{ $config['WEB_NAME'] }}欢迎你</div>
    <div class="logo_mo" >如痴如醉，乱七八糟都想整的小站</div>
    <div class="logo_btnbox">
        <div class="btn btn_gradient" >
            <a style="color:#fff;" href="{{ url('article', ['id' => 75]) }}">
                <span class="glyphicon glyphicon-certificate"></span>&nbsp;关于我
            </a>
        </div>
        <div class="btn btn_gradient2" >
            <a style="color:#fff;" href="{{ url('friendLink') }}">
                <span class="glyphicon glyphicon-heart" ></span>&nbsp;左邻右舍
            </a>
        </div>
        <div class="btn btn_gradient3">
            <a style="color:#fff;" href="{{ url('message') }}">
                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;吐槽啦!
            </a>
        </div>

    </div>
</div>
<!--logo结束-->
@else
    <!--banner开始-->
    <div class="banner" style="text-align:center;overflow:hidden;">
        @if(preg_match("/$host\/category\/*/", $url))
            <img src="/home/images/listbg.jpg">
        @elseif(preg_match("/$host\/timeAxis/", $url) || preg_match("/$host\/article\/*/", $url))
            <img src="/home/images/listbg2.jpg">
        @elseif(preg_match("/$host\/friendLink/", $url))
            <img id="listbg4" src="/home/images/listbg4.jpg">
        @else
            <img src="/home/images/listbg3.jpg">
        @endif
    </div>
    <!--banner结束-->

    <!--logo开始-->
    <div class="logo" style="height:120px;" >
        <div class="logo_mo" style="height:20px;"></div>
        <div class="logo_btnbox">
            <div class="btn btn_gradient" >
                <a style="color:#fff;" href="{{ url('article', ['id' => 75]) }}">
                    <span class="glyphicon glyphicon-certificate" ></span>&nbsp;关于我
                </a>
            </div>

            <div class="btn btn_gradient2" >
                <a style="color:#fff;" href="{{ url('friendLink') }}">
                    <span class="glyphicon glyphicon-heart" ></span>&nbsp;左邻右舍
                </a>
            </div>

            <div class="btn btn_gradient3">
                <a style="color:#fff;" href="{{ url('message') }}">
                    <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;吐槽啦!
                </a>
            </div>
        </div>
    </div>
    <!--logo结束-->
@endif




<!--主体内容框开始-->
<div class="content" @if(preg_match("/$host\/article\/*/", $url) || preg_match("/$host\/message/", $url) || preg_match("/$host\/friendLink/", $url)) style="min-height: 0px" @endif>
    <!--特殊导航条开始-->
    <div class="senav" >
        <div class="nav_ul">
            {{--<a href="/">--}}
                {{--<li class="nav_ul_first">首页</li>--}}
            {{--</a>--}}
            <!--其他栏目开始-->
            @foreach($category as $k => $v)

                    <a id="category_item" @if($v->name == '首页') href="/" @else href="{{ url('category', ['id' => $v->id]) }}" @endif>
                    <li @if($k == 0) class="nav_ul_first" @endif>{{ $v->name }}</li>
                    </a>

            @endforeach
        </div>
    </div>
    <!--特殊导航条结束-->
    @if($url == $host || preg_match("/$host\/category\/*/", $url) || preg_match("/$host\/tag\/*/", $url))
    <!--左侧边栏框开始-->
    <div class="left_box">
        <!-- 搜素开始 -->
        <div class="b-search">
            <form class="form-inline" role="form" action="{{ url('search') }}" method="get">
                <input class="b-search-text" type="text" name="wd">
                <input class="b-search-submit" type="submit" value="搜索">
            </form>
        </div>

        <!-- 搜素结束 -->
        <!--工具开始-->
        <div class="left_cell" style="height: 200px;">
            <!--书签标题-->
            <div class="ui red ribbon label lmar left_fla" style="background: #337ab7;">
                工具导航
            </div>

            <div style="width: 300px;height: 100px;">
                <div  class="card_img">
                    <a href="/tools" target="_blank">
                        <img id="sinasite" src="/home/images/sinap.png">
                        <p>攻城掠地</p>
                    </a>
                </div>

                <div class="card_img">
                    <a title="博主邮箱:songyaofeng@aliyun.com" onclick="myEmail();" href="javascript: void(0);">
                        <img id="emailsite" src="/home/images/emailp.png">
                        <p>博主邮箱</p>
                    </a>
                </div>

                {{--<div class="card_img">--}}
                    {{--<a href="#/71">--}}
                        {{--<img id="appsite" src="/home/images/app.png">--}}
                        {{--<p>本站APP</p>--}}
                    {{--</a>--}}
                {{--</div>--}}

                <div class="card_img">
                    <a href="https://github.com/songyaofeng" target="_blank">
                        <img id="githubsite" src="/home/images/gitp.png">
                        <p>&nbsp;GitHub</p>
                    </a>
                </div>
            </div>
        </div>
        <!--工具结束-->

        <div class="left_cell">
            <!--书签标题-->
            <div class="ui red ribbon label lmar left_fla" style="background: #d9534f">
                热门文章
            </div>
            <!--列表-->
            <div class="left_list_box">
                @foreach($topArticle as $k => $v2)
                <a style="text-decoration: none" href = "{{ url('article', ['id' => $v2->id]) }}">
                    <div class="left_list">
                        {{ $v2->title }}
                    </div>
                </a>
                @endforeach
            </div>
            <!--数字-->
            <div class="left_num_box">
                <div class="left_num" style="background:#1dc0f1;">1</div>
                <div class="left_num" style="background:#f15044;">2</div>
                <div class="left_num" style="background:#f59608;">3</div>
                <div class="left_num" >4</div>
                <div class="left_num" >5</div>
                <div class="left_num" >6</div>
                <div class="left_num" >7</div>
                <div class="left_num" >8</div>
            </div>
        </div>


        <!--热门标签开始-->
        <div class="left_cell" style="height: auto;border:none;">
            <!--书签标题-->
            <div class="ui red ribbon label lmar left_fla" style="background: #f0ad4e">
                热门标签
            </div>
            <!--列表-->
            <div class="b-tags">
                <ul class="b-all-tname" style="list-style: none">
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
        </div>
        <!--热门标签结束-->
        <!--本站结束-->

        <!--左邻右舍开始-->
        <div class="left_cell" style="height: 495px;">
            <!--书签标题-->
            <div class="ui red ribbon label lmar left_fla" style="background: #5cb85c;">
                左邻右舍
            </div>

            <div class="left_narbox" style="height: 325px;width:310px;">
                @foreach($friendshipLink as $k => $link)
                <div class="left_narcard">
                    <a title="{{ $link->name }}" href = "{{ $link->url }}" target="_blank">
                        <div class="narcard_img"><img width="53" height="50" src="{{ $link->linkImage }}"></div>
                        <div class="narcard_name">{{ $link->name }}</div>
                    </a>
                </div>
                @endforeach
            </div>
            <!--更多友联-->
            <div class="left_link">
                <button style="" type="button" onclick="javascript:window.location.href='/friendLink' " class="btn btn-info">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color: #c14442"></span>&nbsp;更多邻居</button>
            </div>
        </div>
        <!--左邻右舍结束-->

        <!--友好-->
        <div class="left_cell" style="height:170px;">
            <img width="298" height="auto" src="/home/images/huxinchun.gif">
        </div>




    </div>
    <!--左侧边栏框结束-->
    @endif

    <!--右侧框开始-->
    @yield('content')
    <!--右侧框结束-->

</div>
<!--主体内容框结束-->


﻿<!--脚部开始-->
<div class="foot_box">
    <div class="copyright">
        Copyright &copy; 2017-2018 songyaofeng.com All Rights Reserved. <a style="color: white;" href="http://www.miitbeian.gov.cn">{{ $config['WEB_ICP_NUMBER'] }}</a>
    </div>
    <div class="foot_time">
        程序:{{ $config['WEB_NAME'] }} v1.0+ 环境：{{ $_SERVER['SERVER_SOFTWARE'] }} &nbsp;&nbsp;<a href="/admin/index/index" target="_blank">后台</a>
    </div>
    <div class="foot_time">博客<span id="sitetime"></span><br /><br>
    <!--CNZZ统计开始-->
    <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1272825053'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1272825053%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <!--CNZZ统计结束-->
    </div>
</div>
<!--脚部结束-->

<!--主体部分结束-->

{{--<!-- 登录模态框开始 -->--}}
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" style="width: 385px;">
        <div class="modal-content row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                <ul class="row" style="list-style: none;">
                    <li class="col-xs-3 col-md-3 col-lg-3 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/qq') }}">
                            <img src="{{ asset('/home/images/qq-login.png') }}" alt="QQ登录" title="QQ登录">
                        </a>
                    </li>
                    <li class="col-xs-3 col-md-3 col-lg-3 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/github') }}">
                            <img src="{{ asset('/home/images/github-login.png') }}" alt="github登录" title="github登录"></a>
                    </li>
                    <li class="col-xs-3 col-md-3 col-lg-3 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/weibo') }}">
                        <img src="{{ asset('/home/images/weibo-login.png') }}" alt="微博登录" title="微博登录"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 登录模态框结束 -->



</body>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="/home/plugins/layer-v3.1.1/layer/layer.js"></script>
<script src="/admin/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/home/plugins/countdown/jquery.countdown.min.js"></script>
<script src="/home/js/home.js"></script>
<script>
    $('#logoAnimate').addClass('animated rubberBand');
    $('#listbg4').addClass('animated zoomIn');
    function myEmail() {
        alert('songyaofeng@aliyun.com');
    }
    ajaxCommentUrl = "{{ url('comment') }}";
    checkLogin = "{{ url('checkLogin') }}";
    titleName = '{{ $config['WEB_NAME'] }}';
</script>
@yield('my-js')
