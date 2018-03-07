@extends('layouts.admin')

@section('title', '视频会员列表')

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/videoVip/index') }}">视频会员管理</a></li>
        <li class="active">视频会员列表</li>
    </ul>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label" for="date_modified"></label>
                <div class="input-group">
                    <a href="{{ url('admin/videoVip/insert') }}" class="btn btn-w-m btn-info"
                       style="margin-left: 30px;">添加视频会员</a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>会员名称</th>
            <th>会员价格</th>
            <th>会员描述</th>
            <th>会员logo</th>
            <th>购买次数</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        @foreach($videoVips as $k => $videoVip)
            <tr>
                <td>{{ $videoVip->id }}</td>
                <td>{{ $videoVip->video_vip_name }}</td>
                <td>{{ $videoVip->video_vip_price }}</td>
                <td>{{ $videoVip->video_vip_description }}</td>
                <td><img width="100" src="{{$videoVip->video_vip_logo }}" title="{{$videoVip->video_vip_logo}}"/></td>
                <td>{{ $videoVip->video_vip_sale_number }}</td>
                <td>{{ $videoVip->created_at }}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="{{ url('admin/videoVip/edit', [$videoVip->id]) }}">编辑</a>
                    <a class="btn btn-danger btn-sm" href="javascript: void(0);" onclick="deleteVideoVip({{$videoVip->id}})">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $pageString }}
    </div>
@endsection
@section('my-js')
    <script>
        $(function () {
            layer.load(layer.open, {shade: 0.3});
            setTimeout(function () {
                layer.closeAll('loading');
            }, 1000);
        });

        // 删除文章
        function deleteVideoVip(id) {
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
                        url: "/admin/videoVip/forceDelete/" + id,
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