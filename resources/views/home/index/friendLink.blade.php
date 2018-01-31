@extends('layouts.home')
@section('title', $title)
@section('my-css')
    <style>
        .fr_link_box{
            width: 150px;height: 150px;display: inline-block;margin:10px;padding: 10px;
            background: #a0debc;border-radius: 4px;text-align:center;
        }
        .fr_link_name{
            width: 125px;height:35px;line-height: 35px; background: #f8f8f8;margin:0 auto;margin-top: 5px;border-radius: 3px;
        }
        .fr_link_box:hover{
            background: #14c327;
            color: #f00;
            cursor: pointer;
            box-shadow: 0px 0px 4px #888;
        }
    </style>
@endsection
@section('content')
<!--文章开始-->
<div class="article_box">
    <div class="article_sebox">
        <!--左邻右舍标题-->
        <div class="article_title" style="border-bottom: 5px solid #03a9f4;height: 120px;">
            <span style="font-size: 40px;">左邻右舍</span><br>
            <span style="font-size: 18px;line-height: 40px;">有朋自远方来....呃.....不亦说乎~!</span>
        </div>
            <div class="article_setitle animated zoomIn" style="min-height: 600px;text-align: left;">
                <!--单链-->
                @foreach($friendLinks as $k => $friendLink)
                <a href="{{ $friendLink->url }}" target="_blank">
                    <div class="fr_link_box" >
                        <div class="fr_link_img">
                            <img width="90" height="90" style="border-radius: 50px;" src="{{ $friendLink->linkImage }}">
                        </div>
                        <div class="fr_link_name">{{ $friendLink->name }}</div>
                    </div>
                </a>
                @endforeach
                <!--单链end-->
        </div>
    </div>
</div>
@endsection