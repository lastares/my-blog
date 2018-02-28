@include('home.index.common.top')

<!--主题框架开始-->
<div class="container">
    <!--左侧开始-->
    <section>
        <article>
            <div class="blog_hd">
                <h4 class="index-title" ><i class="el-comment"></i>最近留言的会显示在这里，显示10条</h4>
                <ul>
                    @foreach($topTenMessage as $k => $message)
                    <li>
                        <a  target="_blank" rel="nofollow" title="{{ $message->name }}"><img src="{{ $message->image_path }}" class="img-circle img_45x45"/></a>
                        <div class="hd_right">
                            <a  target="_blank" rel="nofollow" title="{{ $message->name }}">{{ $message->name }}</a><br><a style="color:#333;"title="{{ $message->location }}">{{ $message->location }}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="blog_hd">
                <h4 class="index-title" ><i class="el-comment-alt"></i>最近评论的会显示在这里，显示10条</h4>
                <ul>
                    @foreach($topTenComment as $k => $comment)
                    <li>
                        <a  target="_blank" rel="nofollow" title="笑忘录"><img src="{{ $comment->avatar }}" class="img-circle img_45x45"/></a>
                        <div class="hd_right">
                            <a  target="_blank" rel="nofollow" title="笑忘录">笑忘录</a><br> <a style="color:#333;"title="{{ $comment->location }}">{{ $comment->location }}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="blog_links">
                <h4 class="index-title" id="New2"><i class="el-paper-clip"></i> 本站友情链接：</h4>
                <ul>
                    @foreach($friendLink as $k => $link)
                    <li>
                        <a href="{{ $link->url }}" rel="nofollow" target="_blank" title="{{ $link->name }}" >{{ $link->name }}</a>
                        <span>{{ $link->url }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="blog_links" id="applink">
                <h4 class="index-title"><i class="el-paper-clip-alt"></i> 内页链接：</h4>
                <ul>
                </ul>
            </div>


            <div class="blog_links">
                <h4 class="index-title"><i class="el-ban-circle"></i> 待审链接：以下为未审核，或被暂时撤下的链接。</h4>
                <ul class="applink">
                    @foreach($applyLinks as $k => $applyLink)
                    <li style="border-color:#888;">
                        <a  style="color:#888;"title="{{ $applyLink->name }}">{{ $applyLink->name }}</a>
                        <span style="color:#888;">{{ $applyLink->url }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!--编辑的内容-->
            <div class="link-edit">
                <h4 class="index-title">
                    <i class="el-info-circle"></i><span style="font-size:14px;font-family:'Microsoft YaHei';">申请说明:</span>
                </h4>
                <p>
                    <span style="font-size:14px;font-family:'Microsoft YaHei';">1、</span><span style="color:#E53333;font-size:14px;font-family:'Microsoft YaHei';"><strong>在您申请本站友情链接之前请先做好本站链接</strong></span><span style="font-size:14px;font-family:'Microsoft YaHei';">，谢谢！</span><br />
                    <span style="font-size:14px;font-family:'Microsoft YaHei';"> 2、网站内容无意义，百度收录5页都没有的暂不交换！</span><br />
                    <span style="font-size:14px;font-family:'Microsoft YaHei';"> 3、淘宝、色情、反动、病毒、擦边球、纯商业、违法中华人民共和国法律的网站暂不交换！</span><br />
                    <span style="font-size:14px;font-family:'Microsoft YaHei';"> 4、申请成功后请毋随意撤下链接，其他原因撤下请通知我，否则本站也会删除对应链接！</span><br />
                    <span style="font-size:14px;font-family:'Microsoft YaHei';"> 5、我会对成功的链接经常访问，对于被K的站点，暂时会将链接撤回内页，正常后恢复！</span>
                </p>
                <br />
                <h4 class="index-title">
                    <i class="el-idea"></i><span style="font-size:14px;font-family:'Microsoft YaHei';">站点信息:</span>
                </h4>
                <p>
                    <span style="font-size:14px;font-family:'Microsoft YaHei';">频率：每月至少更新原创文章1篇；</span><br />
                    <span style="font-size:14px;font-family:'Microsoft YaHei';"> 名称：宋耀锋博客</span><br />
                    <span style="font-size:14px;font-family:'Microsoft YaHei';"> 地址：</span><a href="http://www.songyaofeng.com" target="_blank"><span style="font-size:14px;font-family:'Microsoft YaHei';">http://www.songyaofeng.com</span></a><br />
                    <span style="font-size:14px;font-family:'Microsoft YaHei';"> 介绍：原创性独立个人博客，个人网zhan。</span>
                </p>
            </div>
            <h4 class="index-title"><i class="el-edit"></i> 开始申请: 欢迎交换友链</h4>
            <div id="Join" class="form-zd form-in">
                <form action="#" id="contact-form" method="post" onsubmit="return false">
                    <!----昵称------->
                    <div class="input-prepend">
                        <span class="add-on"><i class="el-user"></i></span>
                        <input name="lname" type="text"  id="lname"  size="16" placeholder="网站名称（必须）" />
                    </div>
                    <!------邮箱----->
                    <div class="input-prepend">
                        <span class="add-on"><i class="el-envelope"></i></span>
                        <input name="email" type="text"  id="email"  size="16" placeholder="您的邮箱（必须）" />
                    </div>
                    <!----网址------->
                    <div class="input-prepend">
                        <span class="add-on"><i class="el-globe"></i></span>
                        <input name="url" type="text" id="url" size="16" placeholder="您的网站（必须）" />
                    </div>
                    <!----内容------->
                    <!-- <textarea class="link-text" style="height:150px;width:70%;"name="u_content" id="info" placeholder="网站介绍（必须）"></textarea> -->
                    <!--验证码-->
                    <div class="input-prepend yzm">
                        <i class="el-question-sign"></i>
                        <input name="verify" type="text"  id="verify" size="16"  placeholder="验证码" />
                        <span>
							<img style="cursor: pointer;" id="verifyCode" src="{{url('captcha')}}" onclick="this.src='{{ url('captcha') }}?r=' + Math.random();" title="点击刷新验证码">
						</span>
                    </div>
                    <!--提交表单--------->
                    <div class="feed-sub">
                        <input type="submit" class="btn btn-inverse" onclick="return link()" value="提交申请" />
                    </div>
                </form>
            </div>
        </article>
    </section>
    <!--左侧结束-->
    <!--=========右侧开始==========-->
    @include('home.index.common.right')
    <!--=========END右侧==========-->
</div>
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')
<script type="text/javascript">
    function dashangToggle2(){
        $(".hide_box2").fadeToggle();
        $(".shang_box2").fadeToggle();
    }
</script>

<script type="text/javascript">
    $(function () {
        $('#lname').focus();
    })
    var reloadCaptcha = function () {
        $('img#verifyCode').attr('src', '/captcha?r=' + Math.random())
    }
    function link(){
        if($("#lname").val()==""){
            layer.msg('网站名称不能为空', {icon: 2});
            reloadCaptcha();
            return false;
        }
        if($("#email").val()==""){
            layer.msg('邮箱不能为空喔', {icon: 2});
            reloadCaptcha();
            return false;
        }else{
            var reg=/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            var email=$("#email").val();
            if(!reg.test(email) ){
                layer.msg('邮箱格式错误喔', {icon: 2});
                reloadCaptcha();
                return false;
            }
        }
        if($("#url").val()!=""){
            var reg=/(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:/~\+#]*[\w\-\@?^=%&/~\+#])?/;
            var url=$("#url").val();
            if(!reg.test(url) ){
                layer.msg('网站格式错误喔，请输入带http格式的网址', {icon: 2});
                reloadCaptcha();
                return false;
            }
        }else{
            layer.msg('网站地址不能为空', {icon: 2});
        }
        if($("#verify").val()==""){
            layer.msg('请填写验证码', {icon: 2});
            reloadCaptcha();
            return false;
        }
        var lname=$("#lname").val();
        var email=$("#email").val();
        var url=$("#url").val();
        var verify=$("#verify").val();
        var _token = "{{ csrf_token() }}";
        $.ajax({
            type:"POST",
            // url:"ajax_feedback",
            url:"/applyLinks",
            // data:{'verify':verify,'name':name},
            data: {verify: verify, name: lname, email: email, url: url, _token: _token, status: 2},
            dataType:"json",
            success:function(data){
                console.log(data);
                if(data.code === 1){
                    layer.msg(data.msg, {icon: 2});
                    reloadCaptcha();
                    return false;
                }else{
                    $("#lname").val('');
                    $("#email").val('');
                    $("#url").val('');
                    var lname=data.data.name;
                    var url=data.data.url;
                    //  layer.msg('恭喜提交成功！待管理员审核通过后显示!', {icon: 1});
                    layer.msg(data.msg, {icon: 1, time: 5000});
                    var str='<li style="border-color:#888;"><a style="color:#888;" title="'+lname+'">'+lname+'</a><span style="color:#888;">'+url+'</span></li>';
                    $('.applink').prepend(str);

                    reloadCaptcha();
                    $("html, body").animate({
                        scrollTop: $("#applink").offset().top }, {duration: 500,easing: "swing"});
                    return false;
                }
                // alert(data.status);
            }
        });

    }
</script>
</body>
</html>