@extends('layouts.home')
@section('title', $title)
@section('content')
    <!--右侧框开始-->
    <div class="right_box animated slideInRight" >

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
                    <div class="page_title"><h2>{{ str_limit($v->title, 50) }}</h2></div>


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
                        <span class="label label-danger tag_moy">
                            <span class="glyphicon glyphicon-eye-open" style="color: #fff"></span>
                            &nbsp;围观&nbsp;&nbsp;{{ $v->click }}
                        </span>
                            <span class="label label-success tag_tag">
                            <span class="glyphicon glyphicon-folder-open" style="color: #fff"></span>
                            &nbsp;&nbsp;{{ $v->category_name }}</span>
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
@endsection