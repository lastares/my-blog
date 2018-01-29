@extends('layouts.admin')

@section('title', '编辑网站URL')

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
            <a href="{{ url('admin/tools/index') }}">工具导航列表</a>
        </li>
        <li class="active">
            <a href="">编辑友情链接</a>
        </li>
    </ul>
    <form id="frm" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $data->id }}" />
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>导航栏目</th>
                <td>
                    <select name="category_id" id="category_id">
                        @foreach($category as $k => $v)
                            @if($v->id >= 7)
                            <option @if($data->category_id == $v->id) selected="selected" @endif value="{{ $v->id }}">{{ $v->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>上级分类</th>
                <td>
                    <select name="tools_category_id" id="tools_category_id">
                        @foreach($toolsCategories as $k => $toolsCategory)
                            <option @if($data->tools_category_id == $toolsCategory->id) selected="selected" @endif value="{{ $toolsCategory->id }}">{{ str_repeat('-', 8*$toolsCategory->level) . $toolsCategory->category_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>名称</th>
                <td>
                    <input class="form-control" type="text" name="tools_name" id="tools_name" value="{{ $data->tools_name }}">
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td>
                    <input class="form-control" type="text" name="tools_url" id="tools_url" value="{{ $data->tools_url }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button type="button" class="btn btn-success" onclick="submitBtn({{ $data->id }});">提交</button>
                </td>
            </tr>
        </table>
    </form>

@endsection

@section('my-js')
    <script>
        function submitBtn(id)
        {
            var tools_url = $('#tools_url').val();
            var tools_name = $('#tools_name').val();
            if(tools_name === '') {
                layer.msg('网站名称不能为空');
                return ;
            }
            if(tools_url === '') {
                layer.msg('网站地址不能为空');
                return ;
            }
            $.ajax({
                type: "POST",
                url: "/admin/tools/update?id=" + id,
                data: $('#frm').serialize(),
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
                                location.href = "{{ url('admin/tools/index') }}";
                            }
                        })
                    } else {
                        layer.msg(data.msg);
                    }
                }
            });
        }
    </script>
@endsection
