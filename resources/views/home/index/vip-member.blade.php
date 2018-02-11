<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人资料</title>
    <link rel="stylesheet" href="/home/plugins/layui-v2.2.5/layui/css/layui.css">
    <script type="text/javascript" src="/home/js/jquery.2.1.4.min.js"></script>
    <script type="text/javascript" src="/home/plugins/layer-v3.1.1/layer/layer.js" ></script>
    <script src="/home/plugins/layui-v2.2.5/layui/layui.js"></script>
    <style type="text/css">
        body{
            margin:0;
            padding:0
        }
        .mmain{
            /*border-left: 1px solid #e5e5e5;*/
            margin-top: 20px;
        }
        .mcontent{
            padding-left:20px;
        }
        .mcontent ul{
            padding:0;
        }
        .mcontent ul li{
            list-style: none;
        }
        .sub-title {
            font-size: 16px;
            margin-bottom: 3px;
            color: #8A8A8A;
        }
        .mlist{
            width:100%;
            /*border:1px solid #3432a9;*/
            margin-top: 5px;
            height: 40px;
        }
        .mlable{
            /*border: 1px solid #e6e6e6;*/
            width: 10%;
            font-size: 13px;
            float: left;
            border: 1px solid #10b7f5;
            height: 35px;
            line-height: 35px;
            text-align: center;

        }
        .mvalue{
            float:left;
            height: 35px;
            /*border: 1px solid gray;*/
            margin-left: 1px;
            width: 35%;
        }
        .mvalue input{
            background: none;
            line-height: 33px;
            width: 65%;
            border: 1px solid #ccc;
            padding-left: 3px;
        }
        .layui-btn {
            display: inline-block;
            height: 37px;
            line-height: 37px;
            padding: 0 18px;
            background-color: #1E9FFF;
            color: #fff;
            white-space: nowrap;
            text-align: center;
            font-size: 14px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
            opacity: .9;
            margin-left: 1.5px;
        }
        /*弹出层样式*/
        .update_mail_btn {
            width: 80px;
            padding: 7px 0px;
            background: #5FB878;
            color: #fff;
            text-align: center;
            margin: auto;
            border-radius: 2px;
            cursor: pointer;
        }
        .get_mail_code_btn {
            text-align: center;
            background: #5fb878;
            padding: 9px 7px;
            border-radius: 2px;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
</head>
<body>
<div class="mmain">
    <div class="sub-title">个人资料</div>
    <div class="mcontent">
        <ul>
            <li>
                <div class="mlist">
                    <lable class="mlable">个人编号</lable>
                    <div class="mvalue"><input name="id" type="text"  id="id" @if(session('user'))
value="{{ session('user')['id'] }}" @else value=""  @endif  disabled /></div>
                </div>
            </li>

            <li>
                <div class="mlist">
                    <lable class="mlable">会员等级</lable>
                    <div class="mvalue"><input name="grade" type="text"  id="grade" @if(session('user'))value="普通访客" @else value="" @endif disabled/></div>
                </div>
            </li>

            <li>
                <div class="mlist">
                    <lable class="mlable">登录次数</lable>
                    <div class="mvalue"><input name="login_times" type="text"  id="login_times" @if(session('user')) value="{{ session('user')['id'] }}" @else value=""  @endif disabled/></div>
                </div>
            </li>

            <li>
                <div class="mlist">
                    <lable class="mlable">注册来源</lable>
                    <div class="mvalue"><input name="type" type="text"  id="type" @if(session('user')) @if(session('user')['type'] == 1) value="QQ" @elseif( session('user')['type'] == 2) value="新浪微博" @elseif(session('user')['type'] == 3) value="Github" @else value="" @endif  @endif disabled/></div>
                </div>
            </li>

            <li>
                <div class="mlist">
                    <lable class="mlable">注册时间</lable>
                    <div class="mvalue"><input name="create_time" type="text"  id="create_time" @if(session('user')) value="{{session('user')['created_at']}}" @else value="" @endif disabled/></div>
                </div>
            </li>
            <li>
                <div class="mlist">
                    <lable class="mlable">联系邮箱</lable>
                    <div class="mvalue"><input name="email" type="text"  id="user_email" @if(session('user')) value="{{ session('user')['email'] }}" @else value="" @endif placeholder="邮箱未认证" onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')" disabled/><button id="email" onclick="update_user_mail({{ session('user.id') }});" class="layui-btn layui-btn-normal" style="background-color: #13c5f8;">修改</button></div>
                </div>
            </li>

            <li>
                <div class="mlist">
                    <lable class="mlable">积分兑换</lable>
                    <div class="mvalue"><input name="exscore" type="text"  id="exscore" value="" maxlength="4" placeholder="请输入你要兑换的积分" onkeyup="value=value.replace(/[^(0-9)\.]/g,'')" /><button id="exscore" onclick="viporder(this)" class="layui-btn layui-btn-normal">兑换</button></div>
                </div>
            </li>



        </ul>
    </div>
</div>
<script type="text/javascript">
    //修改邮箱
    function update_user_mail(user_id){
        layer.open({
            title:'认证安全邮箱',
            type: 1,
            btn: false,
            offset: ['150px', '250px'] ,//具体配置参考：offset参数项
            area: ['450px', '230px'],
            content: '<div class="layui-form layui-form-pane"><div class="layui-form-item"><label class="layui-form-label">输入邮箱</label><div class="layui-input-block"><input type="text" placeholder="请输入邮箱地址" class="layui-input" id="user_mail" style="width: 210px;display: inline-block;"><input type="submit" class="get_mail_code_btn" onclick="update_mail_get_code(60);" value="获取验证码"></div></div><div class="layui-form-item"><label class="layui-form-label">验证码</label><div class="layui-input-block"><input type="text" placeholder="请输入邮箱验证码" class="layui-input" id="mail_code" maxlength="6"></div></div><div class="update_mail_btn" onclick="update_mail('+ user_id +');">立即认证</div></div>',
            btnAlign: 'c', //按钮居中
            shade: 0 ,//不显示遮罩
            yes: function(){
                layer.closeAll();
            }
        });
        // layer.closeAll('loading');
        // layer.open({
        //   title:'帐号：'+user_name+' - 修改安全邮箱',
        //   btn: false,
        //   type: 1,
        //   resize:false,
        //   area: ['450px', '230px'],
        //   skin: 'update_user_mail',
        //   content: data.msg
        // });
        // layui.use('form', function(){
        // var form = layui.form;
        // form.render();//表单重渲染
        // });
    }

    //修改邮箱  获取邮箱验证码
    function update_mail_get_code(t){
        var mail=$('#user_mail').val();
        if(mail==""){
            layer.msg('邮箱不能为空喔', {icon: 2});
            return false;
        }else{
            var reg=/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            if(!reg.test(mail) ){
                layer.msg('邮箱格式错误喔', {icon: 2});
                return false;
            }
        }
        layer.load(1);
        $.ajax({
            type: "POST",
            url:"/ajax_getcode",
            data: {email: mail, _token: "{{ csrf_token() }}"},
            success: function(data){
                layer.closeAll('loading');
                if(data.code == 1){
                    layer.msg(data.msg, {time: 2000});
                }else if(data.code == 0){
                    layer.msg('亲，验证码已发送到邮箱哟！', {time: 2000});
                    $('.get_mail_code_btn').attr("disabled",true);
                    for(i=1;i<=t;i++) {
                        window.setTimeout("jinsom_mail_update_time(" + i + ","+t+")", i * 1000);
                    }
                }else{
                    layer.msg('无法获取验证码，请联系管理员！', {time: 2000});
                }
            }
        });
    }

    function jinsom_mail_update_time(num,t) {
        if(num == t) {
            $(".get_mail_code_btn").val('获取验证码');
            $('.get_mail_code_btn').attr("disabled",false);
            $('.get_mail_code_btn').removeClass('no');
        }else {
            printnr = t-num;
            $(".get_mail_code_btn").val('('+ printnr +')重获');
            $('.get_mail_code_btn').addClass('no');
        }
    }

    //提交修改邮箱的表单
    function update_mail(user_id){
        var mail=$('#user_mail').val();
        var mail_code=$('#mail_code').val();
        if(mail==''){
            layer.msg('亲，邮箱还没输呢！');
            return false;
        }
        if(mail_code==''){
            layer.msg('亲，你是不是忘了验证码！');
            return false;
        }

        layer.load(1);
        $.ajax({
            type: "POST",
            url:"/ajax_chkcode",
            data: {user_id:user_id,update_mail:mail,mail_code:mail_code, _token:"{{ csrf_token() }}"},
            success: function(data){
                layer.closeAll('loading');
                if(data.code == 0){
                    layer.closeAll();
                    layer.msg(data.msg);
                    $("#user_email").val("");
                    $("#user_email").val(mail);
                    $('#email').text('修改');
                }else if (data.code == 1) {
                    layer.msg(data.msg);
                }
            }
        });
    }
</script>

<script type="text/javascript">
    function viporder(obj){
        var id=obj.id;
        if(id=='exscore'){
            if($("#exscore").val()==""){
                layer.msg('请输入你要兑换的积分', {icon: 2});
                return false;
            }
            var exscore=$("#exscore").val();
            $.ajax({
                type:"POST",
                url:"http://www.100txy.com/Home/Index/ajax_exscore",
                data:"exscore="+exscore,
                dataType:"json",

                success:function(data){
                    if(data.status=='no'){
                        layer.msg(data.msg, {icon: 2});
                        return false;
                    }else{
                        var score=data.score;
                        var gold=data.gold;
                        $("#gold").val("");
                        $("#gold").val(gold);
                        $("#score").val("");
                        $("#score").val(score);
                        //  layer.msg('恭喜提交成功！待管理员审核通过后显示!', {icon: 1});
                        layer.msg('恭喜您，积分兑换成功！', {icon: 1});
                        return false;
                    }
                },
                error:function(jqXHR){
                    layer.msg('发送错误：'+jqXHR.status, {icon: 2});
                },
            });
        }

    }

</script>
</body>
</html>