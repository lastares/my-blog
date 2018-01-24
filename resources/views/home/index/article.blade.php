@extends('layouts.home')
@section('title', '文章详情')
@section('content')
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
                <span><span class="glyphicon glyphicon-dashboard" style="color: #02b73b"></span>&nbsp;发布时间：{{ $data->created_at->diffForHumans() }}</span>
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
                    <h4>点评一下</h4>
                    <!--高速版-->
                    <div id="SOHUCS" sid="{{ $data->id }}"></div>
                    <script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
                    <script type="text/javascript">
                        window.changyan.api.config({
                            appid: 'cytqQ3UCY',
                            conf: 'prod_b1a7b17a8e6609fc3d17569fbe0b7cf0'
                        });
                    </script>
                </div>

            </div>
        </div>

    </div>

@endsection
