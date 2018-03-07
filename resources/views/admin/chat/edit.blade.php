@extends('layouts.admin')

@section('title', '编辑随言碎语')

@section('nav', '编辑随言碎语')

@section('description', '编辑随言碎语')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/chat/index') }}">说说管理</a></li>
        <li class="active">修改说说</li>
    </ul>
    <form class="form-inline" action="{{ url('admin/chat/update', [$data->id]) }}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea style="resize: none;width:100%" class="form-control modal-sm" name="content" placeholder="随言碎语内容">{{ $data['content'] }}</textarea>
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
