@include('home.common.header')
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
<div class="content">
    <!--特殊导航条开始-->
    @include('home.common.category')
    <!--特殊导航条结束-->


    <!--左侧边栏框开始-->
    @include('home.common.left')
    <!--左侧边栏框结束-->


    <!--右侧框开始-->
    <div class="right_box" >

        <!--文章列表开始-->
        @foreach($article as $k => $v)
        <a name="{{ $v->id }}" href="{{ url('article', ['id' => $v->id]) }}" id = "art_title">
            <div class="right_cell">
                <!--圆圈日期开始-->
                <div  class="round-date red ">
                    <span class="month">{{ $v->month }}月</span>
                    <span class="day">{{ $v->day }}</span>
                </div>
                <!--圆圈日期结束-->
                <div class="page_title"><h2>{{ $v->title }}</h2></div>
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
                            {{ $v->author }}
                        </span>
                        <span style="margin-left:30px;">
                            <span class="glyphicon glyphicon-dashboard" style="color: #02b73b"></span>
                            {{$v->created_at}}
                        </span>
                        <span style="margin-left:30px;">
                            <span class="glyphicon glyphicon-tag" style="color: rgb(128,118,255)"></span>
                            @foreach($v->tag as $n)
                                {{ $n->name }}
                            @endforeach
                        </span>
                    </div>
                    <div style="display: inline-block;margin-left: 10px;">
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
                    {{--<div style="display: inline-block;">--}}
                        {{--<span>--}}
                            {{--<span class="glyphicon glyphicon-user" style="color: #ff6e03;"></span>--}}
                            {{--&nbsp;作者：{{ $v->author }}</span>--}}
                        {{--<span style="margin-left:30px;">--}}
                            {{--<span class="glyphicon glyphicon-dashboard" style="color: #02b73b"></span>--}}
                            {{--&nbsp;发布时间：{{ $v->created_at }}--}}
                        {{--</span>--}}
                        {{--<span style="margin-left:30px;">--}}
                            {{--<span class="glyphicon glyphicon-tag" style="color: rgb(128,118,255)"></span>--}}
                            {{--@foreach($v->tag as $n)--}}
                                {{--{{ $n->name }}--}}
                            {{--@endforeach--}}
                        {{--</span>--}}
                    {{--</div>--}}
                    {{--<div  class="left_box tag_block">--}}
                        {{--<span class="label label-primary tag_weiguan">--}}
                            {{--<span class="glyphicon glyphicon-eye-open" style="color: #fff"></span>--}}
                            {{--&nbsp;围观{{ $v->click }}</span>--}}
                        {{--<span class="label label-success tag_tag">--}}
                            {{--<span class="glyphicon glyphicon-folder-open" style="color: #fff"></span>--}}
                            {{--&nbsp;{{ $v->category_name }}</span>--}}
                        {{--<span class="label label-danger tag_moy">--}}
                            {{--<span class="glyphicon glyphicon-gift" style="color: #fff"></span>--}}
                            {{--&nbsp;赏一个</span>--}}
                    {{--</div>--}}
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
