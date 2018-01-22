@extends('layouts.home')
@section('title', $title)
@section('content')
    <div class="right_box">

        <!--文章列表开始-->
        @foreach($article as $k => $v)
        <a name="{{ $v->id }}" href="{{ url('article', ['id' => $v->id]) }}" id="art_title">
            <div class="right_cell">
                <!--圆圈日期开始-->
                <div class="round-date red ">
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
                        文章摘要：          {{ $v->description }}
                    </div>

                </div>

                <!--标签-->
                <div class="tag_box">
                    <div style="display: inline-block;">
                        <span><span class="glyphicon glyphicon-user" style="color: #ff6e03;"></span>&nbsp;作者：{{ $v->author }}</span>
                        <span style="margin-left:30px;"><span class="glyphicon glyphicon-dashboard" style="color: #02b73b"></span>&nbsp;发布时间：{{ $v->created_at }}</span>
                    </div>
                    <div class="left_box tag_block">
                        <span class="label label-primary tag_weiguan"><span class="glyphicon glyphicon-eye-open" style="color: #fff"></span>&nbsp;围观 {{ $v->click }}</span>
                        <span class="label label-success tag_tag"><span class="glyphicon glyphicon-folder-open" style="color: #fff"></span>&nbsp; {{ $v->category_name }}</span>
                        <span class="label label-danger tag_moy"><span class="glyphicon glyphicon-gift" style="color: #fff"></span>&nbsp;赏一个</span>
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
@endsection