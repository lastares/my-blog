@extends('layouts.admin')

@section('title', '公告列表')

@section('my-css')
    <link rel="stylesheet" href="/admin/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css">
@endsection
@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/notice/index') }}">公告管理</a></li>
        <li class="active">公告列表</li>
    </ul>
    <form style="margin-bottom: 10px;" action="" method="get">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">标题</label>
                    <input type="text" id="notice_title" placeholder="公告标题" name="notice_title" value="{{request('notice_title', '')}}"
                           class="form-control">
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
                        <button class="btn btn-w-m btn-warning" type="button" onclick="reset()"
                                style="margin-left: 30px;">重置
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="date_modified"></label>
                    <div class="input-group">
                        <a data-toggle="modal" data-target="#insertNotice" class="btn btn-w-m btn-info"
                           style="margin-left: 30px;">添加公告</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="insertNotice" tabindex="-1" role="dialog" aria-labelledby="insertNoticeLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">添加公告</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="insert_notice_title">公告标题</label>
                                <input type="text" name="insert_notice_title" class="form-control" id="insert_notice_title" placeholder="公告标题">
                            </div>
                            <div class="form-group">
                                <label for="insert_notice_content">公告内容</label>
                                <textarea style='min-height: 300px; resize: none;width: 100%;' name="insert_notice_content" class="form-control" id="insert_notice_content" placeholder="公告内容"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-success" onclick="insertNotice();">保存</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        @foreach($notices as $k => $notice)
            <tr>
                <td>{{ $notice->id }}</td>
                <td>{{ $notice->notice_title }}</td>
                <td>{{ $notice->created_at }}</td>
                <td>
                    <a data-toggle="modal" data-target="#editNotice" onclick="editNotice({{ $notice->id }});" class="btn btn-sm btn-w-m btn-success"
                       style="margin-left: 30px;">修改</a>
                    <button class="btn btn-danger btn-sm" href="/notice/destroy?id={{ $notice->id }}">删除</button>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="modal fade" id="editNotice" tabindex="-1" role="dialog" aria-labelledby="insertNoticeLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">修改公告</h4>
                </div>
                <div class="modal-body">
                    <form id="noticeUpdate">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value=""/>
                        <div class="form-group">
                            <label for="notice_title">公告标题</label>
                            <input type="text" name="notice_title" class="form-control" id="notice_title" placeholder="公告标题">
                        </div>
                        <div class="form-group">
                            <label for="notice_content">公告内容</label>
                            <textarea style='min-height: 300px; resize: none;width: 100%;' name="notice_content" class="form-control" id="notice_content" placeholder="公告内容"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-success" onclick="noticeUpdate();">保存</button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        {{ $pageString }}
    </div>
@endsection
@section('my-js')
    <script type="text/javascript" src="/admin/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="/admin/plugins/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
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

        function insertNotice() {
            var notice_title = $('input[name=insert_notice_title]').val();
            if (notice_title === '') {
                layer.msg('公告标题不能为空');
                return;
            }
            var notice_content = $('textarea[name=insert_notice_content]').val();
            if (notice_content === '') {
                layer.msg('公告内容不能为空');
                return;
            }
            var data = {notice_title: notice_title, notice_content: notice_content, _token: "{{csrf_token()}}"};
            $.ajax({
                type: "POST",
                url: "{{ url('admin/notice/create') }}",
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
                                location.href = "{{ url('admin/notice/index') }}";
                            }
                        })
                    } else {
                        layer.msg(data.message);
                    }
                },
            });
        }

        function editNotice(id) {
            $('textarea[name=notice_content]').val('');
            $('textarea[name=notice_title]').val('');
            $.ajax({
                type: 'get',
                url: '/admin/notice/getNotice?id=' + id,
                dataType: 'json',
                cache: false,
                success: function (data) {
                    if(data.code === 0) {
                        console.log(data);
                        $('textarea[name=notice_content]').val(data.data.notice_content);
                        $('input[name=notice_title]').val(data.data.notice_title);
                        $('input[name=id]').val(data.data.id);
                    }else{
                        layer.msg(data.msg);
                    }
                }
            });
        }

        function noticeUpdate() {
            var notice_title = $('input[name=notice_title]').val();
            if (notice_title === '') {
                layer.msg('公告标题不能为空');
                return;
            }
            var notice_content = $('textarea[name=notice_content]').val();
            if (notice_content === '') {
                layer.msg('公告内容不能为空');
                return;
            }
            $.ajax({
                type: "POST",
                url: "{{ url('admin/notice/update') }}",
                data: $('#noticeUpdate').serialize(),
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
                                location.href = "{{ url('admin/notice/index') }}";
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