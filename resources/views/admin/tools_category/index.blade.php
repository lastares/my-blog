@extends('layouts.admin')

@section('title', '工具分类列表')

@section('my-css')
    <style>
        .table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {
            padding: 5px 7px;
            text-align: left;
        }
    </style>
@endsection
@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/category/index') }}">工具分类管理</a></li>
        <li class="active">工具分类列表列表</li>
    </ul>
    <div style="margin-bottom:10px;">
        <a class="btn btn-success" href="{{ url('admin/toolsCategory/create') }}">添加工具分类</a>
    </div>
        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr>
                <th>id</th>
                <th>分类名称</th>
                <th>父级分类</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ str_repeat('-', 8*$v['level']) . $v->category_name }}</td>
                    <td>{{ $v->parent_id }}</td>
                    <td>
                        @if(is_null($v->deleted_at))
                            √
                        @else
                            ×
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-success btn-sm"  href="{{ url('admin/category/edit', [$v->id]) }}">编辑</a> |
                        @if(is_null($v->deleted_at))
                            <a class="btn btn-warning btn-sm"  href="javascript:if(confirm('确定要删除吗?')) location='{{ url('admin/category/destroy', [$v->id]) }}'">删除</a>
                        @else
                            <a class="btn btn-info btn-sm"  href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/category/restore', [$v->id]) }}'">恢复</a>
                            |
                            <a class="btn btn-danger btn-sm"  href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/category/forceDelete', [$v->id]) }}'">彻底删除</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </form>
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
