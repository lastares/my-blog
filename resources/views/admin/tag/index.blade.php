@extends('layouts.admin')

@section('title', '标签列表')

@section('nav', '标签列表')

@section('description', '博客标签')

@section('content')

    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/tag/index') }}">标签管理</a></li>
        <li class="active">发布文章</li>
    </ul>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">添加标签</button>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">添加标签</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">标签名称</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="标签名称">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" onclick="submitBtn();">保存</button>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ url('admin/tag/sort') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr>
                <th>id</th>
                <th>标签名</th>
                <td>状态</td>
                <th>操作</th>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->name }}</td>
                    <td>
                        @if(is_null($v->deleted_at))
                            √
                        @else
                            ×
                        @endif
                    </td>
                    <td>
                        <button type="button" id="edit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal" onclick="editTag({{$v->id}});">编辑</button>
{{--                        <a href="{{ url('admin/tag/edit', [$v->id]) }}">编辑</a> |--}}
                        @if(is_null($v->deleted_at))
                            <a class="btn btn-warning btn-sm" href="javascript:if(confirm('确定要删除吗?')) location='{{ url('admin/tag/destroy', [$v->id]) }}'">删除</a>
                        @else
                            <a class="btn btn-info btn-sm" href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/tag/restore', [$v->id]) }}'">恢复</a>
                            <a class="btn btn-danger btn-sm" href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/tag/forceDelete', [$v->id]) }}'">彻底删除</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </form>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">修改标签</h4>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" name="edit_id" value="" />
                        <div class="form-group">
                            <label for="name">标签名称</label>
                            <input type="text" name="edit_name" value="" class="form-control" id="name" placeholder="标签名称">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" onclick="submitEdit();">保存</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('my-js')
    <script>
        function editTag(id) {
            $('input[name=edit_name]').val('');
            $.ajax({
                type: 'get',
                url: '/admin/tag/getTag?id=' + id,
                dataType: 'json',
                cache: false,
                success: function (data) {
                    if(data.code === 0) {
                        $('input[name=edit_name]').val(data.data.name);
                        $('input[name=edit_id]').val(data.data.id);
                    }else{
                        layer.msg(data.msg);
                    }
                }
            });
        }
        layer.load(layer.open, {shade: 0.3});
        setTimeout(function () {
            layer.closeAll('loading');
        }, 1000);

        function submitBtn() {
            var name = $('input[name=name]').val();
            if (name === '') {
                layer.msg('标签名称不能为空');
                return;
            }
            var data = {name: name, _token: "{{csrf_token()}}"}
            $.ajax({
                type: "POST",
                url: "{{ url('admin/tag/store') }}",
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
                                location.href = "{{ url('admin/tag/index') }}";
                            }
                        })
                    } else {
                        layer.msg(data.message);
                    }
                }
            });
        }


        function submitEdit() {
            var name = $('input[name=edit_name]').val();
            var id = $('input[name=edit_id]').val();
            if (name === '') {
                layer.msg('标签名称不能为空');
                return;
            }
            $.ajax({
                type: "POST",
                url: "{{ url('admin/tag/update') }}/" + id,
                data: {name: name, _token: "{{csrf_token()}}"},
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
                                location.href = "{{ url('admin/tag/index') }}";
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
