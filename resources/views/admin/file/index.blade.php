@extends('layouts.admin')

@section('title', '文件列表')

@section('my-css')
    <link rel="stylesheet" href="/statics/datetimepicker/css/bootstrap-datetimepicker.css">
@endsection
@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/file/index') }}">文件管理</a></li>
        <li class="active">文件列表</li>
    </ul>
    <form style="margin-bottom: 10px;" action="" method="get">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">标题</label>
                    <input type="text" id="file_title" placeholder="请输入文件标题" name="file_title" value="{{request('file_title', '')}}" class="form-control">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="start_time">开始日期</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="start_time" placeholder="请输入开始日期" id="start_time" type="text"
                               class="form-control" value="{{request('start_time', '')}}"/>
                        <span class="add-on"><i class="icon-remove"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="stop_time">结束日期</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="stop_time" placeholder="请输入结束日期" id="stop_time" type="text"
                               class="form-control date" value="{{request('stop_time', '')}}"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="date_modified"></label>
                    <div class="input-group">
                        <button class="btn btn-w-m btn-success" type="submit">搜索</button>
                        <input class="btn btn-w-m btn-warning" type="reset" value="重置" style="margin-left: 30px;">
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="date_modified"></label>
                    <div class="input-group">
                        <a href="{{ url('admin/file/insert') }}" class="btn btn-w-m btn-info"
                           style="margin-left: 30px;">添加文件</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>文件 ID</th>
            <th>文件名称</th>
            <th>文件缩略图</th>
            <th>状态</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        @foreach($files as $k => $file)
            <tr>
                <td>{{ $file->id }}</td>
                <td>{{ $file->file_title }}</td>
                <td><img width="100" src="{{$file->banner_path }}" title="{{$file->file_title}}"/></td>
                <td>
                    @if(is_null($file->deleted_at))
                        √
                    @else
                        ×
                    @endif
                </td>
                <td>{{ $file->created_at }}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="{{ url('admin/file/edit', [$file->id]) }}">编辑</a>
                    <a class="btn btn-danger btn-sm" href="javascript: void(0);" onclick="deleteFile({{$file->id}})">删除</a>
                    <a class="btn btn-warning btn-sm" href="{{url('admin/file/download', ['id' => $file->id])}}" onclick="download({{$file->id}})">下载</a>
                    {{--@if(is_null($file->deleted_at))--}}
                    {{--<a class="btn btn-warning btn-sm"--}}
                    {{--href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/banner/destroy', [$file->id]) }}'">删除</a>--}}
                    {{--@else--}}
                    {{--<a class="btn btn-info btn-sm"--}}
                    {{--href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/banner/restore', [$file->id]) }}'">恢复</a>--}}
                    {{--<a class="btn btn-danger btn-sm"--}}
                    {{--href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/banner/forceDelete', [$file->id]) }}'">彻底删除</a>--}}
                    {{--@endif--}}
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $pageString }}
    </div>
@endsection
@section('my-js')
    <script type="text/javascript" src="/statics/datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="/statics/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
    <script>
        $(function () {
            layer.load(layer.open, {shade: 0.3});
            setTimeout(function () {
                layer.closeAll('loading');
            }, 1000);
        });
        // 日期时间插件
        $('#start_time').datetimepicker({
            minView: "month",
            autoclose: true,
            todayHighlight: true,
            language: 'zh-CN',
            format: 'yy-mm-dd',
            clearBtn: true
        });
        $('#stop_time').datetimepicker({
            minView: "month",
            autoclose: true,
            todayHighlight: true,
            language: 'zh-CN',
            format: 'yy-mm-dd',
            clearBtn: true
        });

        function reset() {
            $('input[name=title]').val('');
            $('input[name=start_time]').val('');
            $('input[name=stop_time]').val('');
        }

        // 删除文章
        function deleteFile(id) {
            swal({
                title: '你确定要删除吗?',
                text: "删除后该信息不可恢复!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: '取消',
                confirmButtonText: '删除'
            })
                .then(() => {
                    $.ajax({
                        type: "get",
                        url: "/admin/file/forceDelete/" + id,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function (data) {
                            if(data.code === 0) {
                                swal({
                                    title: data.msg,
                                    text: '',
                                    type: 'success',
                                    timer: 1000,
                                    onOpen: () => {
                                        swal.showLoading();
                                    },
                                    onClose: () => {
                                        location.reload();
                                    }
                                })
                            }else {
                                swal(
                                    data.msg,
                                    '',
                                    'error'
                                )
                            }
                        }
                    })
                });
        }
    </script>
@endsection