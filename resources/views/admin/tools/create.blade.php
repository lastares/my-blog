@extends('layouts.admin')

@section('title', '添加网站URL')

@section('nav', '添加网站URL')

@section('description', '添加网站URL')

@section('my-css')
    <style>
        select {
            display:block;
            float:left;margin:-2px;
            font-family:Verdana,Arial;
            font-size: 11pt;
            color: #FF0000;
            width: 400px;
            height: 30px;
        }
    </style>
@endsection

@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li>
            <a href="{{ url('admin/tools/index') }}">友情网站URL</a>
        </li>
        <li class="active">
            <a href="{{ url('admin/tools/create') }}">添加网站URL</a>
        </li>
    </ul>
    <form class="form-horizontal " action="{{ url('admin/tools/store') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>导航栏目</th>
                <td>
                    <select name="category_id" id="category_id">
                        @foreach($category as $k => $v)
                            @if($v->id >= 7)
                            <option value="{{ $v->id }}">{{ $v->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>工具分类</th>
                <td>
                    <select name="tools_category_id" id="tools_category_id">
                        @foreach($toolsCategories as $k => $toolsCategory)
                            <option value="{{ $toolsCategory->id }}">{{ str_repeat('-', 8*$toolsCategory->level) . $toolsCategory->category_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>网站名称</th>
                <td>
                    <input class="form-control" type="text" name="tools_name" value="{{ old('tools_name') }}">
                </td>
            </tr>
            <tr>
                <th>网站地址</th>
                <td>
                    <input class="form-control" type="text" name="tools_url" value="{{ old('tools_url') }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-success" type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>

@endsection
