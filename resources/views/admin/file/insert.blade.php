@extends('layouts.admin')

@section('title', '上传文件')

@section('content')
        <!--我是主要内容 start-->
        <ul class="breadcrumb" style="font-size: 16px;">
            <li><a href="#">首页</a></li>
            <li><a href="{{ url('admin/files/index') }}">文件管理</a></li>
            <li class="active">上传文件</li>
        </ul>
        <div class="row">
            <div class="col-md-2 col-md-offset-9">
                <button type="button" class="btn btn-success" onclick="window.history.go(-1);">返回文件列表</button>
            </div>
        </div>
        <form class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label for="file_title" class="col-sm-2 control-label">文件标题</label>
                <div class="col-sm-6">
                    <input type="text" name="file_title" class="form-control" id="file_title" placeholder="请输入文件标题">
                </div>
            </div>
            <div class="form-group">
                <label for="file_path" class="col-sm-2 control-label">文件缩略图</label>
                <input class="form-conrol col-sm-6 uploadImg" type="file" id="file_path">
                <div class="col-sm-6" style="margin-top: 10px;">
                    <img src="" title="文件缩略图" width="100" class="img-rounded img-responsive file_path"/>
                    <input type="hidden" name="file_path" id="banner_img" value=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="status" class="col-sm-2 control-label">状态</label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="0"> 草稿
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="1" checked> 发布
                </label>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" class="btn btn-success btn-lg" onclick="submitBtn();"> 保 存</button>
                    <button type="button" class="btn btn-warning btn-lg" style="margin-left: 30px;" onclick="window.history.go(-1);"> 返 回</button>
                </div>
            </div>
        </form>
        <!--我是主要内容 end-->
@endsection
@section('my-js')
    <script>
        function submitBtn() {
            var file_title = $('input[name=file_title]').val();
            var file_path = $('input[name=file_path]').val();
            if(file_title === '') {
                layer.msg('banner标题不能为空');
                return;
            }
            if(file_path === '') {
                layer.msg('banner缩略图不能为空');
                return;
            }
            var data = $('.form-horizontal').serialize();
            $.ajax({
                type: "POST",
                url: "/admin/file/create",
                data: data,
                dataType: 'json',
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
                                location.href = '/admin/banner/index';
                            }
                        })
                    }else{
                        layer.msg(data.msg);
                    }
                }
            });
        }

        // 上传图片
        $("#file_path").change(function () {
            layer.msg('文件上传中，请稍等...', {
                shade: [0.3]
            });
            var formData = new FormData();
            formData.append("file", $('#file_path')[0].files[0]);
            formData.append("_token", "{{csrf_token()}}");
            $.ajax({
                type: "POST",
                url: "/admin/file/upload",
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    if(data.code === 0) {
                        layer.msg('文件上传成功');
                        // $('.file_path').attr('src', data.prefix_route + data.data);
                        // $('#banner_img').val(data.data);
                    }
                }
            });
        });
    </script>

@endsection
