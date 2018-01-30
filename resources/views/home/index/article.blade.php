@extends('layouts.home')
@section('title', '文章详情')
@section('my-css')
    <link rel="stylesheet" href="/admin/plugins/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="/home/css/article.css">
    <style>

    </style>
@endsection
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
            {{--<!--留言-->--}}
            {{--<div class="col-md-12 message_box">--}}
                {{--<div class="message_style" style="height:auto;padding:35px;" >--}}
                    {{--<h4>点评一下</h4>--}}

                {{--</div>--}}

            {{--</div>--}}
            <!-- 引入通用评论开始 -->
            <script>
                var userEmail = '{{ session('user.email') }}';
                tuzkiNumber = 1;
            </script>
            <div class="row b-comment">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-box">
                    <img class="b-head-img"
                         src="@if(empty(session('user.avatar'))){{ asset('/home/images/default_head_img.gif') }}@else{{ session('user.avatar') }}@endif" alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}">
                    <div class="b-box-textarea">
                        <div class="b-box-content" contenteditable="true" onfocus="delete_hint(this)">请先登录后发表评论</div>
                        <ul class="b-emote-submit">
                            <li class="b-emote">
                                <i class="fa fa-smile-o" onclick="getTuzki(this)"></i>
                                <input class="form-control b-email" type="text" name="email" placeholder="接收回复的email地址"
                                       value="{{ session('user.email') }}">
                                <div class="b-tuzki">

                                </div>
                            </li>
                            <li class="b-submit-button">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf" />
                                <input type="button" value="评 论" aid="{{ request()->id }}" pid="0" onclick="comment(this)">
                            </li>
                            <li class="b-clear-float"></li>
                        </ul>
                    </div>
                    <div class="b-clear-float"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-title">
                    <ul class="row">
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6">最新评论</li>
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">总共<span>{{ count($comment) }}</span>条评论
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-user-comment">
                    @foreach($comment as $k => $v)
                        <div id="comment-{{ $v['id'] }}" class="row b-user b-parent">
                            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                                <img class="b-user-pic js-head-img" src="{{ asset($v['avatar']) }}" alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}">
                            </div>
                            <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col b-cc-first">
                                <p class="b-content">
                                    <span class="b-user-name">{{ $v['name'] }}</span>：{!! $v['content'] !!}
                                </p>
                                <p class="b-date">
                                    {{ $v['created_at'] }} <a href="javascript:void(0);" aid="{{ request()->id }}" pid="{{ $v['id'] }}" username="{{ $v['name'] }}" onclick="reply(this)">回复</a>
                                </p>
                                {{--<foreach name="v['child']" item="n">--}}
                                @foreach($v['child'] as $m => $n)
                                    <div id="comment-{{ $n['id'] }}" class="row b-user b-child">
                                        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                                            <img class="b-user-pic js-head-img" src="{{ asset('uploads/avatar/default.jpg') }}" _src="{{ asset($n['avatar']) }}" alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}" />
                                        </div>
                                        <ul class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col">
                                            <li class="b-content">
                                                <span class="b-reply-name">{{ $n['name'] }}</span>
                                                <span class="b-reply">回复</span>
                                                <span class="b-user-name">{{ $n['reply_name'] }}</span>：{!! $n['content'] !!}
                                            </li>
                                            <li class="b-date">
                                                {{ $n['created_at'] }} <a href="javascript:;" aid="{{ request()->id }}" pid="{{ $n['id'] }}" username="{{ $n['reply_name'] }}" onclick="reply(this)">回复</a>
                                            </li>
                                            <li class="b-clear-float"></li>
                                        </ul>
                                    </div>
                                @endforeach
                                <div class="b-clear-float"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="b-border"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- 引入通用评论结束 -->
        </div>
    </div>

@endsection
@section('my-js')
    <script src="/home/js/comment.js"></script>
    <script>
        // 添加行数
        $('pre').addClass('line-numbers');
        // 新页面跳转
        $('.js-content a').attr('target', '_blank')

        // 定义评论url
        ajaxCommentUrl = "{{ url('comment') }}";
        checkLogin = "{{ url('checkLogin') }}";
        titleName = '{{ $config['WEB_NAME'] }}';
    </script>
@endsection