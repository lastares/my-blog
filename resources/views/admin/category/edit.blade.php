@extends('layouts.admin')

@section('title', '编辑分类')

@section('nav', '编辑分类')

@section('description', '编辑分类')

@section('content')
    <form class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $data['id'] }}" />
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
                    <input class="form-control" type="text" name="category_name" value="{{ $data['category_name'] }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button class="btn btn-success" type="button" onclick="submitBtn({{ $data['id'] }});">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;
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
