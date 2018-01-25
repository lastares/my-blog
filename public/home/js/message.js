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
    layer.alert("亲，欢迎光临本小站，留言记得先登录呦，祝您生活愉快！", {
        title: 'Notice',
        skin: 'layui-layer-lan'
        ,closeBtn: 0
        ,anim: 4 , //动画类型
        offset: '200px'
    });
    initMessageList();
});

var reloadCaptcha = function () {
    $('img#verifyCode').attr('src', '{{ url("captcha/mews") }}?r=' + Math.random())
}

function messageInsert() {
    var isLogin = $('input[name=isLogin]').val();
    if(parseInt(isLogin) === 0) {
        layer.msg('亲，登陆后在留言呦！！！');
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