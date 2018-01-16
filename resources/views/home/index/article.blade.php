@extends('layouts.home')

@section('title', $data->title)

@section('keywords', $data->keywords)

@section('description', $data->description)

@section('css')
    <link rel="stylesheet" href="{{ asset('statics/prism/prism.min.css') }}"/>
    <style>
        .js-content p {
            margin-bottom: 20px;;
        }

        .fav-wrapper {
            text-align: center;
            margin: 1.75rem 0;
        }

        .fav-wrapper a {
            color: #366df0;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
            text-decoration: none;
            cursor: pointer;
        }

        a.post-pc-like {

            display: inline-block;
            padding: .85rem 2.5rem;
            background-color: #4285f4;
            border-radius: 4px;
            color: #fff;
            font-size: 1.9rem;
        }

        .common-post-like-wrapper a.post-pc-like:hover {
            background-color: #51b6ff;
        }

        .common-post-like-wrapper a:visited {
            background-color: #bbb;
        }

        .common-post-like-wrapper .total-count-box {
            font-size: 10px;
            margin-left: 3px;
        }

        .image { width: 40px; height: 40px; position: absolute; bottom: 100px; left: 50%; margin-left: -10px; }

        .col-lg-3 {
            width: 16%;
            margin-left: 30px;
        }

        /*.glyphicon-user {*/
            /*color: #ff6e03;*/
        /*}*/

        /*.glyphicon-dashboard {*/
            /*color: green;*/
        /*}*/

        /*.glyphicon-fire {*/
            /*color: #f00*/
        /*}*/

        /*.fa-tags {*/
            /*color: #21d3ff*/
        /*}*/
        .col-lg-3 {
            width: 16%;
        }

        .label-success {
            background-color: #ff6e03;
        }

        .set-label a {
            color: white !important;
        }

        .set-category a {
            color: white;
        }
    </style>
@endsection

@section('content')
    <!-- 左侧文章开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8">
        <div class="row b-article">
            <h1 class="col-xs-12 col-md-12 col-lg-12 b-title">{{ $data->title }}</h1>
            <div class="col-md-12" style="margin-bottom: 5px;">
                <ul class="row b-metadata">
                    <li class="col-md-2">
                        <label class="label label-success">
                            <i class="glyphicon glyphicon-user"></i> {{ $data->author }}
                        </label>
                    </li>
                    <li class="col-md-2" style="">
                        <label class="label label-success" style="background-color: #f00">
                            <i class="glyphicon glyphicon-fire"></i> {{ $data->click }}
                        </label>
                    </li>
                    <li class="col-md-2">
                        <label class="label label-success" style="background-color: green;">
                            <i class="glyphicon glyphicon-calendar"></i> {{ $data->created_at->diffForHumans() }}
                        </label>
                    </li>
                    <li class="col-md-2">
                        <label class="label set-category" style="background-color: #311f16;">
                            <i class="fa fa-list-alt"></i> <a href="{{ url('category', [$data->category_id]) }}" target="_blank">{{ $data->category_name }}</a>
                        </label>
                    </li>
                    <li class="col-md-4">
                        <label class="label set-label" style="background-color: #21d3ff">
                            <i class="fa fa-tags"></i>
                            @foreach($data->tag as $v)
                                <a class="b-tag-name" href="{{ url('tag', [$v->tag_id]) }}" target="_blank">{{ $v->name }}</a>
                            @endforeach
                        </label>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-content-word">
                <div class="js-content">{!! $data->html !!}</div>
                <eq name="article['current']['is_original']" value="1">
                    <p class="b-h-20"></p>
                    <p class="b-copyright">
                        {!! htmlspecialchars_decode($config['COPYRIGHT_WORD']) !!}
                    </p>
                </eq>
                <div class="bshare-custom icon-medium-sm" style="margin-top: 10px;">
                    <a title="分享到微信" class="bshare-weixin"></a>
                    <a title="分享到QQ空间" class="bshare-qzone"></a>
                    <a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
                    <a title="分享到复制网址" class="bshare-clipboard"></a>
                    <a title="分享到网易微博" class="bshare-neteasemb"></a>
                    <a title="分享到QQ好友" class="bshare-qqim"></a>
                    <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                    <span class="BSHARE_COUNT bshare-share-count">0</span>
                </div>
                <a class="bshareDiv" onclick="javascript:return false;"></a>
                <div class="fav-wrapper">
                    <div class="common-post-like-wrapper" style="min-height:0">
                        <div class="demo"></div>
                        <a class="post-pc-like" href="javascript: void(0);" onclick="zan({{ $data->id }});">
                            <span class="glyphicon glyphicon-thumbs-up gray"></span>
                            <span style="margin-left: 4px;">赞<span class="total-count-box"><!-- react-text: 45 -->(
                                    <!-- /react-text --><b>{{ $data->like }}</b><!-- react-text: 47 --> )
                                    <!-- /react-text --></span></span>
                        </a>
                    </div>
                </div>
                <ul class="b-prev-next">
                    <li class="b-prev">
                        上一篇：
                        @if(is_null($prev))
                            <span>没有了</span>
                        @else
                            <a href="{{ url('article', [$prev->id]) }}">{{ $prev->title }}</a>
                        @endif

                    </li>
                    <li class="b-next">
                        下一篇：
                        @if(is_null($next))
                            <span>没有了</span>
                        @else
                            <a href="{{ url('article', [$next->id]) }}">{{ $next->title }}</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <!-- 引入通用评论开始 -->
        <script>
            var userEmail = '{{ session('user.email') }}';
            tuzkiNumber = 1;
        </script>
        <div class="row b-comment">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-box">
                <img class="b-head-img"
                     src="@if(empty(session('user.avatar'))){{ asset('images/home/default_head_img.gif') }}@else{{ session('user.avatar') }}@endif"
                     alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}">
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
                            <img class="b-user-pic js-head-img" src="{{ asset('uploads/avatar/default.jpg') }}"
                                 _src="{{ asset($v['avatar']) }}" alt="{{ $config['WEB_NAME'] }}"
                                 title="{{ $config['WEB_NAME'] }}">
                        </div>
                        <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col b-cc-first">
                            <p class="b-content">
                                <span class="b-user-name">{{ $v['name'] }}</span>：{!! $v['content'] !!}
                            </p>
                            <p class="b-date">
                                {{ $v['created_at'] }} <a href="javascript:;" aid="{{ request()->id }}"
                                                          pid="{{ $v['id'] }}" username="{{ $v['name'] }}"
                                                          onclick="reply(this)">回复</a>
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
                                            {{ $n['created_at'] }} <a href="javascript:;" aid="{{ request()->id }}"
                                                                      pid="{{ $n['id'] }}"
                                                                      username="{{ $n['reply_name'] }}"
                                                                      onclick="reply(this)">回复</a>
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
    <!-- 左侧文章结束 -->
@endsection

@section('js')
    <script src="{{ asset('statics/prism/prism.min.js') }}"></script>
    <script src="{{ asset('statics/layer-2.4/layer.js') }}"></script>
    <script src="{{ asset('js/home/comment.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
    <script>
        function zan(id) {
            var x = 100;
            var y = 900;
            var num = Math.floor(Math.random() * 14 + 1);
            var index=$('.demo').children('img').length;
            var rand = parseInt(Math.random() * (x - y + 1) + y);

            $(".demo").append("<img class='image' src=''>");
            $('.image:eq(' + index + ')').attr('src','/statics/zan/images/'+num+'.png')
            $(".image").animate({
                bottom:"800px",
                opacity:"0",
                left: rand,
            },3000)
            $.ajax({
                type: 'get',
                url: '/zan/' + id,
                dataType: 'json',
                cache: false,
                success: function (data) {
                    if (data.code === 0) {
                        $('.total-count-box').find('b').html(data.data.like);
                    }
                }
            });
        }

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