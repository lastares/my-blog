@extends('layouts.admin')

@section('title', '添加Banner')

@section('content')
        <!--我是主要内容 start-->
        <ul class="breadcrumb" style="font-size: 16px;">
            <li><a href="#">首页</a></li>
            <li><a href="{{ url('admin/banner/index') }}">Banner管理</a></li>
            <li class="active">添加Banner</li>
        </ul>
        <div class="row">
            <div class="col-md-2 col-md-offset-9">
                <button type="button" class="btn btn-success" onclick="window.history.go(-1);">返回banner列表</button>
            </div>
        </div>
        <form class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label for="banner_title" class="col-sm-2 control-label">banner标题</label>
                <div class="col-sm-6">
                    <input type="text" name="banner_title" class="form-control" id="banner_title" placeholder="请输入banner标题">
                </div>
            </div>
            <div class="form-group">
                <label for="banner_title" class="col-sm-2 control-label">所属分类</label>
                <div class="col-sm-6">
                    <select id="type" name="type">
                        <option value="1">留言板</option>
                        <option value="2">文章分类</option>
                        <option value="3">左邻右舍</option>
                        <option value="4">Banner</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="banner_path" class="col-sm-2 control-label">banner缩略图</label>
                <input class="form-conrol col-sm-6 uploadImg" type="file" id="banner_path">
                <div class="col-sm-6" style="margin-top: 10px;">
                    <img src="" title="banner缩略图" width="200" class="img-rounded img-responsive banner_path"/>
                    <input type="hidden" name="banner_path" id="banner_img" value=""/>
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
            var banner_title = $('input[name=banner_title]').val();
            var banner_path = $('input[name=banner_path]').val();
            if(banner_title === '') {
                layer.msg('banner标题不能为空');
                return;
            }
            if(banner_path === '') {
                layer.msg('banner缩略图不能为空');
                return;
            }
            var data = $('.form-horizontal').serialize();
            $.ajax({
                type: "POST",
                url: "/admin/banner/create",
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
        $("#banner_path").change(function () {
            var that = this;
            var imgpex = /.(jpg|png|jpeg|gif)$/i;
            if (!imgpex.test(that.value)) {
                alert('', "如无法上传。请上传JPG、PNG、JPEG、GIF格式的文件", 'error');
            } else if (that.files[0].size > 5242880) {
                alert('', "上传的图片大于5M", 'error');
            } else {
                // $type = $('#type[selected]').val();
                var formData = new FormData();
                formData.append("file", $('#banner_path')[0].files[0]);
                formData.append("_token", "{{csrf_token()}}");
                $.ajax({
                    type: "POST",
                    url: "/admin/banner/upload",
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        $('.banner_path').attr('src', data.prefix_route + data.imgUrl);
                        $('#banner_img').val(data.prefix_route + data.imgUrl);
                    }
                });
            }
        });
    </script>

@endsection
