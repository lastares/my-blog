@extends('layouts.admin')

@section('title', '评论列表')

@section('nav', '评论列表')

@section('description', '文章评论')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/comment/index') }}">评论管理</a></li>
        <li class="active">评论列表</li>
    </ul>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="5%">id</th>
            <th width="35%">评论内容</th>
            <th width="25%">文章</th>
            <th width="10%">用户</th>
            <th width="15%">评论日期</th>
            <th width="5%">状态</th>
            <th width="5%">操作</th>
        </tr>
        @foreach($data as $k => $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{!! htmlspecialchars_decode($v->content) !!}</td>
                <td>
                    <a href="{{ url('article', [$v->article_id]) }}#comment-{{ $v->id }}" target="_blank">{{ $v->title }}</a>
                </td>
                <td>{{ $v->name }}</td>
                <td>{{ $v->created_at }}</td>
                <td>
                    @if(is_null($v->deleted_at))
                        √
                    @else
                        ×
                    @endif
                </td>
                <td>
                    @if(is_null($v->deleted_at))
                        <a class="btn btn-warning btn-sm" href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/comment/destroy', [$v->id]) }}'">删除</a>
                    @else
                        <a class="btn btn-info btn-sm"  href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/comment/restore', [$v->id]) }}'">恢复</a>
                        |
                        <a class="btn btn-danger btn-sm"  href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/comment/forceDelete', [$v->id]) }}'">彻底删除</a>
                    @endif

                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $data->links() }}
    </div>
@endsection
@section('my-js')
    <script>
        $(function(){
            layer.load(layer.open, {shade: 0.3});
            setTimeout(function () {
                layer.closeAll('loading');
            }, 1000);
        });
    </script>
@endsection
