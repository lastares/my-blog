@extends('layouts.admin')

@section('title', '添加分类')

@section('content')

    <!-- 导航栏结束 -->
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/category/index') }}">分类管理</a></li>
        <li class="active">添加分类</li>
    </ul>
    <form class="form-horizontal">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>分类名</th>
                <td>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </td>
            </tr>
            <tr>
                <th>关键字</th>
                <td>
                    <input class="form-control" type="text" name="keywords" value="{{ old('keywords') }}">
                </td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <input class="form-control" type="text" name="description" value="{{ old('description') }}">
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control" type="text" name="sort" value="{{ old('sort') }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button class="btn btn-success" type="button" onclick="submitBtn();">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-danger" onclick="history.go(-1);">返回</button>
                </td>
            </tr>
        </table>
    </form>

@endsection

@section('my-js')
    <script>
        function submitBtn() {
            var name = $('input[name=name]').val();
            var keywords = $('input[name=keywords]').val();
            if (name === '') {
                layer.msg('分类名称不能为空');
                return;
            }
            if (keywords === '') {
                layer.msg('关键词不能为空');
                return;
            }
            var data = $('.form-horizontal').serialize();
            $.ajax({
                type: "POST",
                url: "{{ url('admin/category/store') }}",
                data: data,
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
                                location.href = "{{ url('admin/category/index') }}";
                            }
                        })
                    } else {
                        layer.msg(data.message);
                    }
                }
            });
        }
    </script>
@endsection
