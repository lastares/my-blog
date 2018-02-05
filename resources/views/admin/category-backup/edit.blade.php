@extends('layouts.admin')

@section('title', '编辑分类')

@section('nav', '编辑分类')

@section('description', '编辑分类')

@section('content')
    <form class="form-horizontal">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>分类名</th>
                <td>
                    <input class="form-control" type="text" name="name" value="{{ $data['name'] }}">
                </td>
            </tr>
            <tr>
                <th>关键字</th>
                <td>
                    <input class="form-control" type="text" name="keywords" value="{{ $data['keywords'] }}">
                </td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <input class="form-control" type="text" name="description" value="{{ $data['description'] }}">
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control" type="text" name="sort" value="{{ $data['sort'] }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button class="btn btn-success" type="button" onclick="submitBtn({{ $data['id'] }});">提交</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-danger" onclick="history.go(-1);">返回</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
@section('my-js')
    <script>
        function submitBtn(id) {
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
                url: "{{ url('admin/category/update') }}/" + id,
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
