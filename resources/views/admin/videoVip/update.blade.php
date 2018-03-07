@extends('layouts.admin')

@section('title', '修改Banner')
@section('my-css')
    <style>
        textarea {
            padding: 10px;
            vertical-align: top;
            width: 100%;
            resize: none;
        }
    </style>
@endsection
@section('content')
    <!--我是主要内容 start-->
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/videoVip/index') }}">视频会员管理</a></li>
        <li class="active">修改视频会员</li>
    </ul>
    <div class="row">
        <div class="col-md-2 col-md-offset-9">
            <button type="button" class="btn btn-success" onclick="window.history.go(-1);">返回banner列表</button>
        </div>
    </div>
    <form class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label for="video_vip_name" class="col-sm-2 control-label">视频会员种类</label>
            <div class="col-sm-6">
                <input type="text" value="{{ $videoVip->video_vip_name }}" name="video_vip_name" class="form-control" id="video_vip_name" placeholder="请输入视频种类">
            </div>
        </div>
        <div class="form-group">
            <label for="video_vip_price" class="col-sm-2 control-label">视频会员价格</label>
            <div class="col-sm-6">
                <input type="text" name="video_vip_price" value="{{ $videoVip->video_vip_price }}" class="form-control" id="video_vip_price" placeholder="请输入视频会员价格">
            </div>
        </div>
        <div class="form-group">
            <label for="video_vip_description" class="col-sm-2 control-label">视频会员描述</label>
            <div class="col-sm-6">
                <textarea placeholder="请输入视频会员描述" name="video_vip_description" id="video_vip_description" cols="80" rows="10">{{ $videoVip->video_vip_description }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="banner_path" class="col-sm-2 control-label">视频会员logo</label>
            <input class="form-conrol col-sm-6 uploadImg" type="file" id="banner_path">
            <div class="col-sm-6" style="margin-top: 10px;">
                <img src="{{ $videoVip->video_vip_logo }}" title="banner缩略图" width="200" class="img-rounded img-responsive banner_path"/>
                <input type="hidden" name="video_vip_logo" id="banner_img" value="{{ $videoVip->video_vip_logo }}"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-success btn-lg" onclick="submitBtn({{ $videoVip->id }});"> 保 存</button>
                <button type="button" class="btn btn-warning btn-lg" style="margin-left: 30px;" onclick="window.history.go(-1);"> 返 回</button>
            </div>
        </div>
    </form>
    <!--我是主要内容 end-->
@endsection
@section('my-js')
    <script>
        function submitBtn(id) {
            var video_vip_name = $('input[name=video_vip_name]').val();
            var video_vip_logo = $('input[name=video_vip_logo]').val();
            if(video_vip_name === '') {
                layer.msg('banner标题不能为空');
                return;
            }
            if(video_vip_logo === '') {
                layer.msg('banner缩略图不能为空');
                return;
            }
            var data = $('.form-horizontal').serialize();
            $.ajax({
                type: "POST",
                url: "/admin/videoVip/update/" + id,
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
                                location.href = '/admin/videoVip/index';
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
                var formData = new FormData();
                formData.append("file", $('#banner_path')[0].files[0]);
                formData.append("_token", "{{csrf_token()}}");
                $.ajax({
                    type: "POST",
                    url: "/admin/videoVip/upload?sub-directory=video-vip",
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        $('.banner_path').attr('src', data.img_url);
                        $('#banner_img').val(data.img_url);
                    }
                });
            }
        });
    </script>

@endsection
