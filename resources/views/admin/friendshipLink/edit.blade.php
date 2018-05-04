@extends('layouts.admin')

@section('title', '编辑友情链接')

@section('nav', '编辑友情链接')

@section('description', '编辑新的友情链接')

@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li>
            <a href="{{ url('admin/friendshipLink/index') }}">友情链接列表</a>
        </li>
        <li class="active">
            <a href="">编辑友情链接</a>
        </li>
    </ul>
    <form class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>名称</th>
                <td>
                    <input class="form-control" type="text" name="name" value="{{ $data->name }}">
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td>
                    <input class="form-control" type="text" name="url" value="{{ $data->url }}">
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control" type="text" name="sort" value="{{ $data->sort }}">
                </td>
            </tr>
            <tr>
                <th>状态</th>
                <td>
                    <label class="radio-inline">
                        <input type="radio" name="status" @if($data->status == 1) checked @endif value="1"> 已审核
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status" @if($data->status == 2) checked @endif value="2"> 未审核
                    </label>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button class="btn btn-success btn-sm" onclick="storeLink({{ $data->id }})">保存</button>
                </td>
            </tr>
        </table>
    </form>

@endsection

@section('my-js')
    <script>
        function storeLink(id) {
            var name = $('input[name=name]').val();
            var url = $('input[name=url]').val();
            var sort = $('input[name=sort]').val();
            status = $('input[name=status]').val();
            _token = "{{ csrf_token() }}";
            if (name === '') {
                layer.msg('链接名称不能为空');
                return;
            }
            if (url === '') {
                layer.msg('链接地址不能为空');
                return;
            }
            var data = $('.form-horizontal').serialize();
            $.ajax({
                type: "POST",
                url: "{{ url('admin/friendshipLink/update') }}/" + id,
                data: { name: name, url: url,  sort: sort, _token: _token, status: status},
                dataType: 'json',
                cache: false,
                success: function (data) {
                    if (data.code === 0) {
                        swal({
                            title: data.msg,
                            text: '',
                            type: 'success',
                            timer: 1000,
                            onOpen: () => {
                                swal.showLoading();
                            },
                            onClose: () => {
                                location.href = "{{ url('admin/friendshipLink/index') }}";
                            }
                        })
                    }
                    // else {
                    //     layer.msg(data.msg);
                    // }
                }
            });
        }
    </script>
@endsection
