@extends('layouts.admin')

@section('title', '文章列表')

@section('my-css')
    <link rel="stylesheet" href="/admin/plugins/datetimepicker/css/bootstrap-datetimepicker.css">
@endsection
@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/article/index') }}">文章管理</a></li>
        <li class="active">文章列表</li>
    </ul>
    <form style="margin-bottom: 10px;" action="" method="get">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">标题</label>
                    <input type="text" id="title" placeholder="请输入标题" name="title" value="{{request('title', '')}}"
                           class="form-control">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="start_time">开始日期</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="start_time" placeholder="请输入开始日期" id="start_time" type="text"
                               class="form-control" value="{{request('start_time', '')}}"/>
                        <span class="add-on"><i class="icon-remove"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="stop_time">结束日期</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="stop_time" placeholder="请输入结束日期" id="stop_time" type="text"
                               class="form-control date" value="{{request('stop_time', '')}}"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="date_modified"></label>
                    <div class="input-group">
                        <button class="btn btn-w-m btn-success" type="submit">搜索</button>
                        <button class="btn btn-w-m btn-warning" type="button" onclick="reset()"
                                style="margin-left: 30px;">重置
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="date_modified"></label>
                    <div class="input-group">
                        <a href="{{ url('admin/article/create') }}" class="btn btn-w-m btn-info"
                           style="margin-left: 30px;">添加文章</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>文章id</th>
            <th>分类</th>
            <th>标题</th>
            <th>类型</th>
            <th>点击数</th>
            <th>删除状态</th>
            <th>发布状态</th>
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
                <td>
                    @if($article->type == 1) 原创
                    @elseif($article->type == 2) 转载
                    @else 翻译
                    @endif
                </td>
                <td>{{ $article->click }}</td>
                <td>
                    @if(is_null($article->deleted_at))
                        √
                    @else
                        ×
                    @endif
                </td>
                <td>
                    @if($article->status == 1) 已发布 @else 草稿 @endif
                </td>
                <td>{{ $article->created_at }}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="{{ url('admin/article/edit', [$article->id]) }}">编辑</a>
                    @if(is_null($article->deleted_at))
                        <a class="btn btn-warning btn-sm"
                           href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/article/destroy', [$article->id]) }}'">删除</a>
                    @else
                        <a class="btn btn-info btn-sm"
                           href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/article/restore', [$article->id]) }}'">恢复</a>
                        <a class="btn btn-danger btn-sm"
                           href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/article/forceDelete', [$article->id]) }}'">彻底删除</a>
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
    <script type="text/javascript" src="/admin/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="/admin/plugins/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
    <script>
        $(function () {
            layer.load(layer.open, {shade: 0.3});
            setTimeout(function () {
                layer.closeAll('loading');
            }, 1000);
        });
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
            format: 'yy-mm-dd',
            clearBtn: true
        });

        function reset() {
            $('input[name=title]').val('');
            $('input[name=start_time]').val('');
            $('input[name=stop_time]').val('');
        }
    </script>
@endsection