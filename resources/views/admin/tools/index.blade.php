@extends('layouts.admin')

@section('title', '工具管理列表')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li>首页</li>
        <li>工具管理</li>
        <li class="active">工具管理列表</li>
    </ul>
    <div style="margin-bottom: 10px;">
        <a type="button" class="btn btn-success" href="{{ url('admin/tools/create') }}">添加工具</a>
    </div>
        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr>
                <th width="5%">id</th>
                {{--<th width="5%">排序</th>--}}
                <th>网站名称</th>
                <th>网站URL</th>
                <th>导航栏目</th>
                <th>所属分类</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    {{--<td>--}}
                        {{--<input class="form-control" type="text" name="{{ $v->id }}" value="{{ $v->sort }}">--}}
                    {{--</td>--}}
                    <td>{{ $v->tools_name }}</td>
                    <td><a href="{{ $v->tools_urls }}" target="_blank">{{ $v->tools_url }}</a></td>
                    <td>{{ $v->category_name }}</td>
                    <td>{{ $v->tools_category_name }}</td>
                    <td>
                        @if(is_null($v->deleted_at))
                            √
                        @else
                            ×
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-success btn-sm"  href="{{ url('admin/tools/edit', [$v->id]) }}">编辑</a>
                        @if(is_null($v->deleted_at))
                            <a class="btn btn-warning btn-sm"  href="javascript:if(confirm('确定要删除吗?')) location='{{ url('admin/tools/destroy', [$v->id]) }}'">删除</a>
                        @else
                            <a class="btn btn-info btn-sm"  href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/tools/restore', [$v->id]) }}'">恢复</a>
                            <a class="btn btn-danger btn-sm" href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/tools/forceDelete', [$v->id]) }}'">彻底删除</a>
                        @endif
                    </td>
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

