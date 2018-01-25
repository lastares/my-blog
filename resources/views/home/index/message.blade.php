@extends('layouts.home')
@section('title', $title)
@section('my-css')
    <link rel="stylesheet" href="/home/css/message.css">
@endsection
@section('content')
    <div class="article_box">
        <div class="article_sebox">
            <!--留言块开始-->
            <div id="msgBox">
                <form id="frm">
                    <input type="hidden" name="isLogin" value="{{ $isLogin }}" />
                    <h2>啊啊啊！！！不要问我在干什么。。 我已经疯了！！！</h2>
                    <!--选择头像-->
                    <div style="height: 80px;width: 100%; text-align: left;float: left;">
                        @foreach($pictures as $k => $picture)
                            <div class="touxiang">
                                <img src="{{ $prefix_route . $picture->banner_path }}" class="current"/>
                                <label><input name="image_id" type="radio" value="{{ $picture->id }}"
                                              @if($k == 0) checked @endif /></label>
                            </div>
                        @endforeach
                    </div>
                    <!--验证吗框-->
                    <div style="height: 60px;width: 100%; float: left;">
                        <div class="inputbox" style="width: 215px;">
                            <input id="userName" name="msg_title" placeholder="昵称或站名(必填)" type="text" class="f-text"/>
                        </div>
                        <div class="inputbox" style="width: 140px;">
                            <!--显示验证码-->
                            <img id="verifyCode" title="点击刷新验证码" src="{{url('captcha')}}" style="cursor: pointer;"
                                 onclick="this.src='{{ url('captcha') }}?r=' + Math.random();"/>
                        </div>
                        <div class="inputbox" style="width: 200px;">
                            <!--验证码输入框 -->
                            <input id="verify" placeholder="验证码(必填)" autocomplete="off" type="text" class="yan-text"
                                   name="verify"/>
                        </div>
                    </div>

                    <!--留言内容-->
                    <textarea placeholder="留言内容不为空" id="conBox" class="f-text" name="msg_content"
                              type="text"></textarea>
                    <!--提交按钮-->
                    <div class="tr">
                        <p>
                            <span class="countTxt">啊啊啊啊！请勿打广告，谢谢，谢谢！&nbsp;&nbsp;</span>
                            <button type="button" href="javascript: void(0);" onclick="messageInsert();">弹幕发射！</button>
                        </p>
                    </div>
                </form>

                <!--留言展示区开始-->
                <div class="list" style="margin-top:-50px;">
                    <h3><span>留言吐槽</span></h3>
                    <ul id="messageList">

                    </ul>
                </div>
                <!--留言展示区结束-->

            </div>
        </div>

    </div>


@endsection
@section('my-js')
    <script>
        function initMessageList() {
            $.ajax({
                type: "get",
                url: "{{ url('message/list') }}",
                dataType: 'json',
                cache: false,
                success: function (data) {
                    if (data.code === 0) {
                        var li = '';
                        $.each(data.data, function (k, v) {
                            li += '<li><div class="userPic"><img src="' + v.image_path + '" /></div><div class="content_box"><div class="userName"><a href="javascript:;">' + v.msg_title + '</a>:</div><div class="msgInfo">' + v.msg_content + '</div><div class="times"><span>' + v.created_at + '</span><a class="del" href="javascript:;">删除</a></div></div></li>';
                        });
                        $('#messageList').html(li);
                    } else {
                        alert(data.msg);
                    }
                }
            });
        }
        $(function () {
            initMessageList();
        });

        var reloadCaptcha = function () {
            $('img#verifyCode').attr('src', '{{ url("captcha/mews") }}?r=' + Math.random())
        }

        function messageInsert() {
            var isLogin = $('input[name=isLogin]').val();
            if(parseInt(isLogin) === 0) {
                alert('亲，登陆后在留言呦！！！');
                // layer.msg('亲，登陆后在留言呦！！！');
                return;
            }
            var msg_title = $('#userName').val();
            var verify = $('#verify').val();
            var msg_content = $('textarea[name=msg_content]').val();
            if (msg_title === '') {
                layer.msg('昵称或站名不能为空');
                reloadCaptcha();
                return;
            }
            if (verify === '') {
                layer.msg('验证码不能为空');
                reloadCaptcha();
                return;
            }
            if (msg_content === '') {
                layer.msg('留言内容不能为空');
                reloadCaptcha();
                return;
            }

            $.ajax({
                type: "post",
                url: "{{ url('message/insert') }}",
                dataType: 'json',
                data: $('#frm').serialize(),
                cache: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    if (data.code === 0) {
                        layer.msg(data.msg);
                        $('#userName').val('');
                        $('#verify').val('');
                        $('textarea[name=msg_content]').val('');
                        initMessageList();
                        reloadCaptcha();
                    } else {
                        layer.msg(data.msg);
                        reloadCaptcha();
                    }
                }
            })
        }
    </script>
@endsection
