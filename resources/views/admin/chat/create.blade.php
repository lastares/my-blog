@extends('layouts.admin')

@section('title', '随言碎语列表')

@section('nav', '随言碎语列表')

@section('description', '博客随言碎语')

@section('content')
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/chat/index') }}">随言碎语列表</a>
        </li>
        <li>
            <a href="{{ url('admin/chat/create') }}">添加随言碎语</a>
        </li>
    </ul>

    <form class="form-inline" action="{{ url('admin/chat/store') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea style="resize: none;width:100%" class="form-control modal-sm" name="content" placeholder="随言碎语内容">{{ old('content') }}</textarea>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-success" type="submit" value="提交">
                    <button type="button" onclick="window.history.go(-1);" class="btn btn-info">返回</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
