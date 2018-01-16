@extends('layouts.admin')

@section('title', '文章列表')

@section('nav', '文章列表')

@section('description', '已发布的文章列表')
@section('my-css')
<link rel="stylesheet" href="/statics/datetimepicker/css/bootstrap-datetimepicker.css">
@endsection
@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/article/index') }}">文章列表</a>
        </li>
        <li>
            <a href="{{ url('admin/article/create') }}">发布文章</a>
        </li>
    </ul>
    {{--<ul class="breadcrumb">--}}
        {{--<li><a href="#">首页</a></li>--}}
        {{--<li><a href="{{ url('admin/article/index') }}">文章管理</a></li>--}}
        {{--<li class="active">文章列表</li>--}}
    {{--</ul>--}}
    {{--<form style="margin-bottom: 10px;" action="" method="get">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-2">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label">标题</label>--}}
                    {{--<input type="text" id="title" placeholder="请输入标题" name="title" value="{{request('title', '')}}"--}}
                           {{--class="form-control">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-2">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label" for="start_time">开始日期</label>--}}
                    {{--<div class="input-group date">--}}
                        {{--<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>--}}
                        {{--<input name="start_time" placeholder="请输入开始日期" id="start_time" type="text"--}}
                               {{--class="form-control" value="{{request('start_time', '')}}"/>--}}
                        {{--<span class="add-on"><i class="icon-remove"></i></span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-2">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label" for="stop_time">结束日期</label>--}}
                    {{--<div class="input-group date">--}}
                        {{--<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>--}}
                        {{--<input name="stop_time" placeholder="请输入结束日期" id="stop_time" type="text"--}}
                               {{--class="form-control date" value="{{request('stop_time', '')}}"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-2">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label" for="date_modified"></label>--}}
                    {{--<div class="input-group">--}}
                        {{--<button class="btn btn-w-m btn-success" type="submit">搜索</button>--}}
                        {{--<button class="btn btn-w-m btn-warning" type="reset" style="margin-left: 30px;">重置</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-2">--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label" for="date_modified"></label>--}}
                    {{--<div class="input-group">--}}
                        {{--<a href="{{ url('admin/article/create') }}" class="btn btn-w-m btn-info" type="reset"--}}
                           {{--style="margin-left: 30px;">添加文章</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>文章id</th>
            <th>分类</th>
            <th>标题</th>
            <th>点击数</th>
            <th>状态</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        @foreach($articles as $k => $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->category_name }}</td>
                <td>
                    <a href="{{ url('article', [$article->id]) }}" target="_blank">{{ $article->title }}</a>
                </td>
                <td>{{ $article->click }}</td>
                <td>
                    @if(is_null($article->deleted_at))
                        √
                    @else
                        ×
                    @endif
                </td>
                <td>{{ $article->created_at }}</td>
                <td>
                    <a href="{{ url('admin/article/edit', [$article->id]) }}">编辑</a>
                    |
                    @if(is_null($article->deleted_at))
                        <a href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/article/destroy', [$article->id]) }}'">删除</a>
                    @else
                        <a href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/article/restore', [$article->id]) }}'">恢复</a>
                        |
                        <a href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/article/forceDelete', [$article->id]) }}'">彻底删除</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $pageString }}
    </div>
@endsection
@section('my-js')
<script type="text/javascript" src="/statics/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/statics/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script>
        // 日期时间插件
        $('#start_time').datetimepicker({
            minView: "month",
            autoclose: true,
            todayHighlight: true,
            language: 'zh-CN',
            format: 'yy-mm-dd',
            clearBtn: true
        });
        $('#stop_time').datetimepicker({
            minView: "month",
            autoclose: true,
            todayHighlight: true,
            language: 'zh-CN',
            format: 'yy-mm-dd'
        });
    </script>
@endsection