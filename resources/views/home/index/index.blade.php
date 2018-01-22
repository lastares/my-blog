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

                <!--标签开始-->
                <div class="tag_box" >
                    <div style="display: inline-block;">
                        <span>
                            <span class="glyphicon glyphicon-user" style="color: #ff6e03;"></span>
                            {{ $v->author }}
                        </span>
                        <span style="margin-left:30px;">
                            <span class="glyphicon glyphicon-dashboard" style="color: #02b73b"></span>
                            {{$v->created_at->diffForHumans()}}
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
                            &nbsp;围观&nbsp;&nbsp;{{ $v->click }}
                        </span>
                        <span class="label label-success tag_tag">
                            <span class="glyphicon glyphicon-folder-open" style="color: #fff"></span>
                            &nbsp;&nbsp;{{ $v->category_name }}</span>
                        <span class="label label-danger tag_moy">
                            <span class="glyphicon glyphicon-gift" style="color: #fff"></span>
                            &nbsp;赏一个
                        </span>
                    </div>
                </div>
                <!--标签结束-->

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