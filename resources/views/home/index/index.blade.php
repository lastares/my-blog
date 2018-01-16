@extends('layouts.home')

@section('title', $config['WEB_TITLE'])

@section('keywords', $config['WEB_KEYWORDS'])

@section('description', $config['WEB_DESCRIPTION'])
@section('css')
    <style>
        .right {
            right: -16px !important;
        }
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
    <!-- 左侧列表开始 -->
    <div class="col-xs-12 col-md-12 col-lg-8">
        @if($url == $host)
        <div id="focusslide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#focusslide" data-slide-to="0" class="active"></li>
                <li data-target="#focusslide" data-slide-to="1"></li>
                <li data-target="#focusslide" data-slide-to="2"></li>
            </ol>
            <div style="margin-bottom: 10px; width: 765px;" class="carousel-inner" role="listbox">
                @foreach($banners as $k => $banner)
                <div class="item @if( $k == 0 ) active @endif">
                    <a href="#">
                        <img src="{{config('blog.banner_upload_path') . $banner->banner_path}}" title="{{$banner->banner_title}}" alt="{{$banner->banner_title}}" class="img-responsive">
                    </a>
                </div>
                @endforeach
            </div>
            <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span>
            </a>
            <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span>
            </a>
        </div>
        @endif
        @if(!empty($tagName))
            <div class="row b-tag-title">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h2>拥有<span class="b-highlight">{{ $tagName }}</span>标签的文章</h2>
                </div>
            </div>
        @endif
        @if(request()->has('wd'))
                <div class="row b-tag-title">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <h2>搜索到的与<span class="b-highlight">{{ request()->input('wd') }}</span>相关的文章</h2>
                    </div>
                </div>
        @endif
        <!-- 循环文章列表开始 -->
        @foreach($article as $k => $v)
            <div class="row b-one-article">
                <h3 class="col-xs-12 col-md-12 col-lg-12">
                    <a class="b-oa-title" href="{{ url('article', [$v->id]) }}" target="_blank">{{ $v->title }}</a>
                </h3>
                <div class="col-md-12 b-date">
                    <ul class="row">
                        <li class="col-md-2">
                            <label class="label label-success">
                                <i class="glyphicon glyphicon-user"></i> {{ $v->author }}
                            </label>
                        </li>
                        <li class="col-md-2" style="">
                            <label class="label label-success" style="background-color: #f00">
                                <i class="glyphicon glyphicon-fire"></i> {{ $v->click }}
                            </label>
                        </li>
                        <li class="col-md-2">
                            <label class="label label-success" style="background-color: green;">
                                <i class="glyphicon glyphicon-calendar"></i> {{ $v->created_at->diffForHumans() }}
                            </label>
                        </li>
                        <li class="col-md-2">
                            <label class="label set-category" style="background-color: #311f16;">
                                <i class="fa fa-list-alt"></i> <a href="{{ url('category', [$v->category_id]) }}" target="_blank">{{ $v->category_name }}</a>
                            </label>
                        </li>
                        <li class="col-md-4">
                            <label class="label set-label" style="background-color: #21d3ff">
                                <i class="fa fa-tags"></i>
                                @foreach($v->tag as $n)
                                    <a class="b-tag-name" href="{{ url('tag', [$n->tag_id]) }}" target="_blank">{{ $n->name }}</a>
                                @endforeach
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="row">
                        <!-- 文章封面图片开始 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
                            <figure class="b-oa-pic b-style1">
                                <a href="{{ url('article', $v->id) }}" target="_blank">
                                    <img src="{{ asset($v->cover) }}" alt="{{ $config['IMAGE_TITLE_ALT_WORD'] }}" title="{{ $config['IMAGE_TITLE_ALT_WORD'] }}">
                                </a>
                                <figcaption>
                                    <a href="{{ url('article', [$v->id]) }}" target="_blank"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- 文章封面图片结束 -->
                        <!-- 文章描述开始 -->
                        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read">
                            {{ $v->description }}
                        </div>
                        <!-- 文章描述结束 -->
                    </div>
                </div>
                <a class="b-readall" href="{{ url('article', [$v->id]) }}" target="_blank">阅读全文</a>
            </div>
        @endforeach
        <!-- 循环文章列表结束 -->

        <!-- 列表分页开始 -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12 b-page text-center">
                {{ $article->appends(['wd' => request()->input('wd')])->links('vendor.pagination.bjypage') }}
            </div>
        </div>
        <!-- 列表分页结束 -->
    </div>
    <!-- 左侧列表结束 -->
@endsection

@section('js')

@endsection
