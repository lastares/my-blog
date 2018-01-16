@extends('layouts.admin')

@section('title', '管理员列表')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li>首页</li>
        <li>管理员列表</li>
        <li class="active">博客管理员</li>
    </ul>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="5%">id</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th width="15%">创建日期</th>
            <th width="10%">操作</th>
        </tr>
        @foreach($data as $k => $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->name }}</td>
                <td>{{ $v->email }}</td>
                <td>{{ $v->created_at }}</td>
                <td><a class="btn btn-success btn-sm"  href="{{ url('admin/user/edit', [$v->id]) }}">编辑</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('my-js')
    <script>
        layer.load(layer.open, {shade: 0.3});
        setTimeout(function () {
            layer.closeAll('loading');
        }, 1000);
    </script>
@endsection
