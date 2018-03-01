@extends('layouts.admin')

@section('title', '添加导航分类')

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
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/urlCategory/index') }}">导航分类管理</a></li>
        <li class="active">添加导航分类</li>
    </ul>
    <form class="form-horizontal">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>上级分类</th>
                <td>
                    <select name="parent_id" id="parent_id">
                        <option value="0">顶级分类</option>
                        @foreach($categories as $k => $category)
                            <option value="{{ $category->id }}">{{ str_repeat('-', 8*$category->level) . $category->category_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>分类名</th>
                <td>
                    <input class="form-control" type="text" name="category_name" value="{{ old('category_name') }}">
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
            var category_name = $('input[name=category_name]').val();
            if (category_name === '') {
                layer.msg('分类名称不能为空');
                return;
            }
            var data = $('.form-horizontal').serialize();
            $.ajax({
                type: "POST",
                url: "{{ url('admin/urlCategory/store') }}",
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
                                location.href = "{{ url('admin/urlCategory/index') }}";
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
