@extends('layouts.admin')

@section('title', '友情链接列表')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li>首页</li>
        <li>友情链接管理</li>
        <li class="active">友情链接列表</li>
    </ul>
    <div style="margin-bottom: 10px;">
        <a type="button" class="btn btn-success" href="{{ url('admin/friendshipLink/create') }}">添加友情链接</a>
    </div>
    <form action="{{ url('admin/friendshipLink/sort') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr>
                <th width="5%">id</th>
                <th width="5%">排序</th>
                <th width="20%">链接名</th>
                <th width="40%">链接地址</th>
                <th width="5%">状态</th>
                <th width="15%">操作</th>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>
                        <input class="form-control" type="text" name="{{ $v->id }}" value="{{ $v->sort }}">
                    </td>
                    <td>{{ $v->name }}</td>
                    <td><a href="{{ $v->url }}" target="_blank">{{ $v->url }}</a></td>
                    <td>
                        @if(is_null($v->deleted_at))
                            √
                        @else
                            ×
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-success btn-sm"  href="{{ url('admin/friendshipLink/edit', [$v->id]) }}">编辑</a>
                        @if(is_null($v->deleted_at))
                            <a class="btn btn-warning btn-sm"  href="javascript:if(confirm('确定要删除吗?')) location='{{ url('admin/friendshipLink/destroy', [$v->id]) }}'">删除</a>
                        @else
                            <a class="btn btn-info btn-sm"  href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/friendshipLink/restore', [$v->id]) }}'">恢复</a>
                            <a class="btn btn-danger btn-sm" href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/friendshipLink/forceDelete', [$v->id]) }}'">彻底删除</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    <input class="btn btn-success" type="submit" value="排序">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
@endsection
@section('my-js')
    <script>
        layer.load(layer.open, {shade: 0.3});
        setTimeout(function () {
            layer.closeAll('loading');
        }, 1000);
    </script>
@endsection

