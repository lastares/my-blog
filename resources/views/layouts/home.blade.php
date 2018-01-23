﻿
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
    <title>@yield('title')-宋耀锋个人博客</title>
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
    @yield('my-css')
        <style>
        .from {
            color: #fff;
            padding: 8px 12px;
            background-color: #5CB85C;
            border-radius: 5px;
            font-size: 14px;
            vertical-align: middle;
        }
        .head-img {
            margin: 5px;
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
          <img src="/home/images/logo.png">
        </span>
        </a>
        <a href="/">
            <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;首页</li>
        </a>
        <a href="{{ url('timeAxis') }}">
            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;时间轴</li>
        </a>
        <a href="{{ url('message') }}">
            <li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;留言板</li>
        </a>
        @if(empty(session('user.name')))
        <a href="#" data-toggle="modal" data-target="#login" class="col-md-offset-7 pull-left">
            <li><span aria-hidden="true"></span>&nbsp;<span class="from">登录</span></li>
        </a>
        @else
        <li>
            <img class="head-img" src="{{ session('user.avatar') }}" title="{{ session('user.name') }}" alt="{{ session('user.name') }}"/>&nbsp;&nbsp;
            <a href="{{ url('auth/oauth/logout') }}" class="col-md-offset-8 pull-left">
                <span aria-hidden="true"></span><span class="from">退出</span>
            </a>
        </li>
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
    <div class="logo_title" >SYF博客欢迎你</div>
    <div class="logo_mo" >如痴如醉，乱七八糟都想整的小站</div>
    <div class="logo_btnbox" >
        <div class="btn btn_gradient" >
            <a style="color:#fff;" href="#/35">
                <span class="glyphicon glyphicon-certificate"></span>&nbsp;关于我
            </a>
        </div>
        <div class="btn btn_gradient2" >
            <a style="color:#fff;" href="http://www.songyaofeng.com/Home/neigh">
                <span class="glyphicon glyphicon-heart" ></span>&nbsp;左邻右舍
            </a>
        </div>
        <div class="btn btn_gradient3">
            <a style="color:#fff;" href="http://www.songyaofeng.com/Liuyan">
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
            <img  src="/home/images/listbg.jpg">
        @elseif(preg_match("/$host\/timeAxis/", $url) || preg_match("/$host\/article\/*/", $url))
            <img  src="/home/images/listbg2.jpg">
        @else
            <img  src="/home/images/listbg3.jpg">
        @endif
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
@endif




<!--主体内容框开始-->
<div class="content" @if(preg_match("/$host\/timeAxis/", $url) || preg_match("/$host\/article\/*/", $url) || preg_match("/$host\/message/", $url)) style="min-height: 0px" @endif>
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

    @if($url == $host || preg_match("/$host\/category\/*/", $url))
    <!--左侧边栏框开始-->
    <div class="left_box">
        <!--工具开始-->
        <div class="left_cell" style="height: 200px;">
            <!--书签标题-->
            <div class="ui red ribbon label lmar left_fla" style="background: #337ab7;">
                工具导航
            </div>

            <div style="width: 300px;height: 100px;">
                <div  class="card_img">
                    <a href="http://qdgu.cn">
                        <img id="sinasite" src="/home/images/sinap.png">
                        <p>前端工具</p>
                    </a>
                </div>

                <div class="card_img">
                    <a title="博主邮箱:songyaofeng@aliyun.com" onclick="funem();" href="">
                        <img id="emailsite" src="/home/images/emailp.png">
                        <p>博主邮箱</p>
                    </a>
                </div>
                <script>
                    function funem(){
                        alert("博主邮箱:songyaofeng@aliyun.com");
                    }
                </script>

                <div class="card_img">
                    <a href="#/71">
                        <img id="appsite" src="/home/images/app.png">
                        <p>本站APP</p>
                    </a>
                </div>

                <div class="card_img">
                    <a href="https://github.com/songyaofeng">
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


        <!--左邻右舍开始-->
        <div class="left_cell" style="height: 495px;">
            <!--书签标题-->
            <div class="ui red ribbon label lmar left_fla" style="background: #5cb85c;">
                左邻右舍
            </div>

            <div class="left_narbox" style="height: 325px;width:310px;">
                <div class="left_narcard">
                    <a title="技术宅男子" href = "http://itruke.com/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/ji.jpg"></div>
                        <div class="narcard_name">技术宅..</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="柒爱博客" href = "http://www.chen101.cn/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/qi.jpg"></div>
                        <div class="narcard_name">柒爱博客</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="破晓博客" href = "http://www.dawnfly.cn/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/po.jpg"></div>
                        <div class="narcard_name">破晓博客</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="toilove博客" href = "http://toilove.com/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/to.jpg"></div>
                        <div class="narcard_name">toilove</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="青春博客" href = "http://loveteemo.com">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/qin.jpg"></div>
                        <div class="narcard_name">青春博客</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="连仕彤博客" href = "http://www.lianst.com/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/lian.jpg"></div>
                        <div class="narcard_name">连仕彤</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="一意孤行" href = "http://noote.cn/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/yiyi.jpg"></div>
                        <div class="narcard_name">一意孤行</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="fofo博客" href = "https://www.fofo.me/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/fofo.jpg"></div>
                        <div class="narcard_name">fofo</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="Adamfei博客" href = "https://www.adamfei.com/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/ada.jpg"></div>
                        <div class="narcard_name">Adamfei</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="不忘初心" href = "http://www.allenlan.com/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/bu.jpg"></div>
                        <div class="narcard_name">不忘初心</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="小忆博客" href = "http://blog.iiwo.vip/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/xiao.jpg"></div>
                        <div class="narcard_name">小忆博客</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="Bob`S博客" href = "https://www.bobcoder.cc/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/bob.jpg"></div>
                        <div class="narcard_name">Bob`S</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="VVKE博客" href = "http://www.vvke.cn/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/vvke.jpg"></div>
                        <div class="narcard_name">VVKE</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="小影志" href = "http://c7sky.com/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/xiaoyin.jpg"></div>
                        <div class="narcard_name">小影志</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="nitrohe" href = "http://www.nitrohe.xin">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/nit.jpg"></div>
                        <div class="narcard_name">nitrohe</div>
                    </a>
                </div>

                <div class="left_narcard">
                    <a title="贤心博客" href = "http://sentsin.com/">
                        <div class="narcard_img"><img width="53" height="50" src="/home/images/xian.jpg"></div>
                        <div class="narcard_name">贤心</div>
                    </a>
                </div>

            </div>
            <!--更多友联-->
            <div class="left_link">
                <button style="" type="button" onclick="javascript:window.location.href='http://www.songyaofeng.com/Home/neigh' " class="btn btn-info">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color: #c14442"></span>&nbsp;更多邻居</button>
            </div>
        </div>
        <!--左邻右舍结束-->

        <!--友好-->
        <div class="left_cell" style="height:170px;">
            <img width="298" height="auto" src="/home/images/huxinchun.gif">
        </div>


        <!--本站文档开始-->
        <div class="left_cell" style="height: 300px;">
            <!--书签标题-->
            <div class="ui red ribbon label lmar left_fla" style="background: #f0ad4e">
                本站文档
            </div>
            <!--列表-->
            <div class="left_list_box" style="height:200px;">
                <div class="left_list"><a href="#/82">SYF博客前端funs主题文档</a></div>
                <div class="left_list"><a href="#/65">本站开放API接口级测试说明</a></div>
                <div class="left_list"><a href="#/65">SYF博客APP手机客户端说明</a></div>
                <div class="left_list"><a href="#/40">SYF博客系统V1.0说明文档</a></div>
                <div class="left_list">SYF博客v1.0默认主题文档</div>
            </div>
            <!--数字-->
            <div class="left_num_box">
                <div class="left_num" style="background:#1dc0f1;">1</div>
                <div class="left_num" style="background:#f15044;">2</div>
                <div class="left_num" style="background:#f59608;">3</div>
                <div class="left_num" >4</div>
                <div class="left_num" >5</div>
            </div>

        </div>
        <!--本站结束-->

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
        程序:宋耀锋博客v1.0+ 环境：LNMP
    </div>
    <div class="foot_time">博客平稳运行2年</div>
</div>
<!--脚部结束-->

<!--主体部分结束-->

{{--<!-- 登录模态框开始 -->--}}
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                <ul class="row" style="list-style: none;">
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/qq') }}"><img
                                    src="{{ asset('/home/images/qq-login.png') }}" alt="QQ登录" title="QQ登录"></a>
                    </li>
                    {{--<li class="col-xs-6 col-md-4 col-lg-4 b-login-img">--}}
                        {{--<a href="{{ url('auth/oauth/redirectToProvider/weibo') }}"><img--}}
                                    {{--src="{{ asset('images/home/sina-login.png') }}" alt="微博登录" title="微博登录"></a>--}}
                    {{--</li>--}}
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                        <a href="{{ url('auth/oauth/redirectToProvider/github') }}"><img
                                    src="{{ asset('/home/images/github-login.jpg') }}" alt="github登录"
                                    title="github登录"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{--<!-- 登录模态框结束 -->--}}

</body>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('statics/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
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
            $.post("http://www.songyaofeng.com/Home/viewnum",
                {
                    id:aid
                });
        });
    });
</script>
