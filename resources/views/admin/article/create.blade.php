@extends('layouts.admin')

@section('title', '发布文章')

@section('my-css')
    <link rel="stylesheet" href="/admin/plugins/editormd/css/editormd.min.css">
    <link rel="stylesheet" href="/admin/plugins/iCheck-1.0.2/skins/all.css">
    <link rel="stylesheet" href="/admin/plugins/switchery/dist/switchery.min.css">
@endsection

@section('content')
    <ul class="breadcrumb" style="font-size: 16px;">
        <li><a href="#">首页</a></li>
        <li><a href="{{ url('admin/article/index') }}">文章管理</a></li>
        <li class="active">发布文章</li>
    </ul>
    <form class="form-horizontal">
    {{--<form class="form-horizontal" action="{{ url('admin/article/store') }}" method="post">--}}
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th width="7%">类型</th>
                <td>
                    <select class="form-control" name="type">
                            <option value="1">原创</option>
                            <option value="2">转载</option>
                            <option value="3">翻译</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th width="7%">分类</th>
                <td>
                    <select class="form-control" name="category_id">
                        @foreach($category as $v)
                            <option value="{{ $v->id }}">{{ str_repeat('-', 8*$v->level) . $v->category_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>标题</th>
                <td>
                    <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                </td>
            </tr>
            <tr>
                <th>作者{{ $author }}</th>
                <td>
                    <input class="form-control" type="text" name="author" value="@if(empty(old('author'))){{ $author }}@else{{ old('author') }}@endif">
                </td>
            </tr>
            <tr>
                <th>关键词</th>
                <td>
                    <input class="form-control" type="text" placeholder="用英文逗号分隔" name="keywords" value="{{ old('keywords') }}">
                </td>
            </tr>
            <tr>
                <th>标签</th>
                <td>
                    @foreach($tag as $v)
                        {{ $v['name'] }}&nbsp;&nbsp;<input class="syf-icheck" type="checkbox" name="tag_ids[]" value="{{ $v['id'] }}" @if(in_array($v['id'], old('tag_ids', []))) checked="checked" @endif> &emsp;
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <textarea class="form-control modal-sm" name="description" rows="7" placeholder="可以不填，如不填；则截取文章内容前300字为描述">{{ old('description') }}</textarea>
                </td>
            </tr>
            <tr>
                <th>内容</th>
                <td>
                    <div id="syf-content">
                        <textarea name="markdown">{{ old('markdown') }}</textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th>置顶</th>
                <td>
                    <input class="js-switch" type="checkbox" name="is_top" value="1" @if(old('is_top', 0) == 1) checked="checked" @endif>
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
    <script src="/admin/plugins/switchery/dist/switchery.min.js"></script>
    <script src="/admin/plugins/editormd/editormd.min.js"></script>
    <script src="/admin/plugins/iCheck-1.0.2/icheck.min.js"></script>
    <script src="/admin/plugins/layer-2.4/layer.js"></script>
    <script>
        var testEditor;
        $(function() {
            layer.load(layer.open, {shade: 0.3});
            setTimeout(function () {
                layer.closeAll('loading');
            }, 1000);
            // You can custom @link base url.
            editormd.urls.atLinkBase = "https://github.com/";

            testEditor = editormd("syf-content", {
                width     : "100%",
                height    : 720,
                toc       : true,
                //atLink    : false,    // disable @link
                //emailLink : false,    // disable email address auto link
                todoList  : true,
                placeholder: '输入文章内容',
                toolbarAutoFixed: false,
                path      : '{{ asset('/statics/editormd/lib') }}/',
                emoji: true,
                toolbarIcons : ['undo', 'redo', 'bold', 'del', 'italic', 'quote', 'uppercase', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'list-ul', 'list-ol', 'hr', 'link', 'reference-link', 'image', 'code', 'code-block', 'table', 'emoji', 'html-entities', 'watch', 'preview', 'search', 'fullscreen'],
                imageUpload: true,
                imageUploadURL : '{{ url('admin/article/uploadImage') }}',
            });
            $('.syf-icheck').iCheck({
                checkboxClass: "icheckbox_minimal-blue",
                radioClass: "iradio_minimal-blue",
                increaseArea: "20%"
            });

        });

        function submitBtn() {
            var title = $('input[name=title]').val();
            var content = $('input[name=markdown]').val();
            var keywords = $('input[name=keywords]').val();
            if (title === '') {
                layer.msg('文章标题不能为空');
                return;
            }
            if (content === '') {
                layer.msg('文章内容不能为空');
                return;
            }
            if (keywords === '') {
                layer.msg('关键词不能为空');
                return;
            }
            var data = $('.form-horizontal').serialize();
            $.ajax({
                type: "POST",
                url: "{{ url('admin/article/store') }}",
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
                            location.href = "{{ url('admin/article/index') }}";
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


