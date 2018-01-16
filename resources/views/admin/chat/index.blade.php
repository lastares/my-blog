@extends('layouts.admin')

@section('title', '随言碎语列表')

@section('nav', '随言碎语列表')

@section('description', '博客随言碎语')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li>首页</li>
        <li>随言碎语列表</li>
        <li class="active">博客随言碎语</li>
    </ul>
    <div style="margin-bottom: 10px;">
        <a type="button" class="btn btn-success" href="{{ url('admin/chat/create') }}">添加随言碎语</a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="5%">id</th>
            <th width="65%">内容</th>
            <th width="15%">添加日期</th>
            <th width="5%">状态</th>
            <th width="10%">操作</th>
        </tr>
        @foreach($data as $k => $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->content }}</td>
                <td>{{ $v->created_at }}</td>
                <td>
                    @if(is_null($v->deleted_at))
                        √
                    @else
                        ×
                    @endif
                </td>
                <td>
                    <a class="btn btn-success btn-sm" href="{{ url('admin/chat/edit', [$v->id]) }}">编辑</a>
                    @if(is_null($v->deleted_at))
                        <a class="btn btn-warning btn-sm" href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/chat/destroy', [$v->id]) }}'">删除</a>
                    @else
                        <a class="btn btn-info btn-sm" href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/chat/restore', [$v->id]) }}'">恢复</a>
                        <a class="btn btn-danger btn-sm" href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/chat/forceDelete', [$v->id]) }}'">彻底删除</a>
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
