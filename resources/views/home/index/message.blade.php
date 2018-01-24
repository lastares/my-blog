@extends('layouts.home')
@section('title', $title)
@section('my-css')
    <style>
        #msgBox {
            width: 100%;
            background: #fff;
            border-radius: 4px;
            margin: 10px auto;
            padding-top: 10px;
            margin-top: -50px;
        }

        #msgBox form h2 {
            font-weight: 400;
            font: 400 18px/1.5 \5fae\8f6f\96c5\9ed1;
        }

        #msgBox form {
            background: url(/home/images/boxBG.jpg) repeat-x 0 bottom;
            padding: 20px 30px;
        }

        #userName, #conBox {
            color: #777;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            background: #fff url(/home/images/inputBG.png) repeat-x;
            padding: 3px 5px;
            font: 14px/1.5 arial;
        }

        #userName.active, #conBox.active {
            border: 1px solid #7abb2c;
        }

        #userName {
            height: 38px;
        }

        #conBox {
            width: 100%;
            resize: none;
            min-height: 140px;
            overflow: auto;
        }

        #msgBox form div {
            position: relative;
            color: #999;
            margin-top: 10px;
        }

        #msgBox img {
            border-radius: 3px;
        }

        #face {
            position: absolute;
            top: 0;
            left: 172px;
        }

        #face img {
            width: 38px;
            height: 38px;
            margin-left: 15px;
            cursor: pointer;
            margin-right: 6px;
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        #face img.hover, #face img.current {
            width: 38px;
            height: 38px;
            border: 1px solid #028074;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        #sendBtn {
            border: 0;
            width: 112px;
            height: 30px;
            cursor: pointer;
            margin-left: 10px;
            background: url(/home/images/btn.png) no-repeat;
        }

        #sendBtn.hover {
            background-position: 0 -30px;
        }

        #msgBox form .maxNum {
            font: 26px/30px Georgia, Tahoma, Arial;
            padding: 0 5px;
        }

        #msgBox .list {
            padding: 30px;
        }

        #msgBox .list h3 {
            position: relative;
            height: 33px;
            font-size: 14px;
            font-weight: 400;
            background: #e3eaec;
            border: 1px solid #dee4e7;
        }

        #msgBox .list h3 span {
            position: absolute;
            left: 6px;
            top: 6px;
            background: #fff;
            line-height: 38px;
            display: inline-block;
            padding: 0 15px;
        }

        #msgBox .list ul {
            overflow: hidden;
            zoom: 1;
        }

        #msgBox .list ul li {
            float: left;
            clear: both;
            width: 100%;
            border-bottom: 1px dashed #d8d8d8;
            padding: 10px 0;
            background: #fff;
            overflow: hidden;
        }

        #msgBox .list ul li.hover {
            background: #f5f5f5;
        }

        #msgBox .list .userPic {
            float: left;
            width: 50px;
            height: 50px;
            display: inline;
            margin-left: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        #msgBox .list .content_box {
            float: left;
            width: 600px;
            font-size: 14px;
            margin-left: 10px;
            font-family: arial;
            word-wrap: break-word;
        }

        #msgBox .list .userName {
            display: inline;
            padding-right: 5px;
        }

        #msgBox .list .userName a {
            color: #2b4a78;
        }

        #msgBox .list .msgInfo {
            display: inline;
            word-wrap: break-word;
        }

        #msgBox .list .times {
            color: #889db6;
            font: 12px/18px arial;
            margin-top: 5px;
            overflow: hidden;
            zoom: 1;
        }

        #msgBox .list .times span {
            float: left;
        }

        #msgBox .list .times a {
            float: right;
            color: #889db6;
            display: none;
        }

        .tr {
            overflow: hidden;
            zoom: 1;
        }

        .tr p {
            float: right;
            line-height: 30px;
        }

        .tr * {
            float: left;
        }

        .inputbox {
            width: 230px;
            height: 62px;
            margin: 0px;
            float: left;
            margin-right: 10px;
            display: inline-block;
        }

        button {
            color: #fff !important;
            font-size: 16px;
            padding: 4px 25px;
            background: #009688;
            border-radius: 3px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        button:hover {
            background: #038478;
        }

        /*头像*/
        .touxiang {
            width: 50px;
            height: 50px;
            background: #fff;
            display: inline-block;
            text-align: center;
            float: left;
            margin: 0px 10px;
        }

        .touxiang img {
            width: 50px;
            height: 50px;
        }

        .yan-text {
            height: 38px;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            font-size: 14px;
            padding: 3px 5px;
        }

        .userPic img {
            width: 50px;
            height: 50px;
        }
    </style>
@endsection
@section('content')
    <div class="article_box">
        <div class="article_sebox">
            <!--留言块开始-->
            <div id="msgBox">
                <form id="frm">
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
