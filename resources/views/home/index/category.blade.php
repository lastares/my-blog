@include('home.common.header')
<body>
<!--主体部分开始-->

<!--导航开始-->
@include('home.common.navigate')
<!--导航结束-->


﻿<!--
文件名：博客栏目页
时间：201707015
作者：SYF
-->
<!--banner开始-->
<div class="banner" style="text-align:center;overflow:hidden;">
    <img  src="/home/images/listbg.jpg">
</div>
<!--banner结束-->

<!--banner背景-->
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
<div class="content">
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
    <div class="right_box" >

        <!--文章列表开始-->
        @foreach($article as $k => $v)
        <a name = "{{  $v->id }}" href="{{ url('article', ['id' => $v->id]) }}">
            <div class="right_cell">
                <!--圆圈日期开始-->
                <div  class="round-date red ">
                    <span class="month">{{ $v->month }}月</span>
                    <span class="day">{{ $v->day }}</span>
                </div>
                <!--圆圈日期结束-->
                <div class="page_title"><h2>{{ $v->title }}</h2></div>


                <!--书签样式开始-->
                <div class="ui red ribbon label lmar page_fla">
                    @if($v->type == 1) 原创
                    @elseif($v->type == 2) 转载
                    @else 翻译
                    @endif
                </div>
                <!--书签样式结束-->

                <!--描述-->
                <div class="page_content">
                    <div class="page_content_left">
                        <img src="{{ $v->cover }}">
                    </div>
                    <div class="page_content_right">
                        文章摘要：{{ $v->description }}
                    </div>

                </div>


                <!--标签-->
                <div class="tag_box" >
                    <div style="display: inline-block;">
                        <span>
                            <span class="glyphicon glyphicon-user" style="color: #ff6e03;"></span>
                            &nbsp;作者：{{ $v->author }}
                        </span>
                        <span style="margin-left:30px;">
                            <span class="glyphicon glyphicon-dashboard" style="color: #02b73b"></span>
                            &nbsp;发布时间：{{$v->created_at}}
                        </span>
                    </div>
                    <div style="display: inline-block;">
                        <span class="label label-primary tag_weiguan">
                            <span class="glyphicon glyphicon-eye-open" style="color: #fff"></span>
                            &nbsp;围观{{ $v->click }}
                        </span>
                        <span class="label label-success tag_tag">
                            <span class="glyphicon glyphicon-folder-open" style="color: #fff"></span>
                            &nbsp;{{ $v->category_name }}</span>
                        <span class="label label-danger tag_moy">
                            <span class="glyphicon glyphicon-gift" style="color: #fff"></span>
                            &nbsp;赏一个
                        </span>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <!--文章列表结束-->

        <!--分页-->
        <div class="right_carnum">
            <nav aria-label="...">
                {{ $article->links() }}
            </nav>

        </div>
    </div>
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
<script src="/home/js/jquery.min.js"></script>

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

