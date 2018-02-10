@include('home.index.common.top')
<link rel="stylesheet" href="/home/css/vip.css">

<div class="container">
    <div class="lvip">


        <div class="useravatar">
            <img src="{{ session('user.avatar') }}" class="avatar" width="100" height="100">
            <span class="vnickname">{{ session('user.name') }}</span>
            <div id="num-info">
                <div><span class="num">0</span><span class="text">金币</span></div>
                <div><span class="num" id="vscore">0</span><span class="text">积分</span></div>
                <div><span class="num">0</span><span class="text">消费</span></div>
            </div>

            <div class="clear"></div>
        </div>

        <div class="vmoney">
            <ul>
                <li><button onClick="dashangToggle()" class="layui-btn layui-btn-normal" style="background-color: #ff1e90;">充值</button></li>
                <li><button id="signed" onclick="viporder(this)" class="layui-btn layui-btn-normal" style="background-color: #13c5f8;">签到</button></li>
            </ul>
        </div>
        <div class="vsigneds"><input type="text"  id="vsigned" value="连续签到0天" disabled/></div>
        <div class="vmenus">
            <ul>
                <li class="tab-index active">
                    <a href="/vip-center"  target="right"><i class="el el-home"></i>首页中心</a>
                </li>
                <li class="tab-comment">
                    <a href="/vip-comment"  target="right"><i class="el el-comment-alt"></i>评论留言</a>
                </li>
                <li class="tab-message">
                    <a href="/vip-message"  target="right"><i class="el el-envelope"></i>站内消息</a>
                </li>
                <li class="tab-order">
                    <a href="/vip-recharge"  target="right"><i class="el el-usd"></i>充值记录</a>
                </li>
                <li class="tab-order">
                    <a href="/vip-comsume"  target="right"><i class="el el-shopping-cart"></i>消费记录</a>
                </li>
                <li class="tab-profile">
                    <a href="/vip-info" target="right"><i class="el el-cogs"></i>个人资料</a>
                    {{--<a href="/vip-member" target="right"><i class="el el-cogs"></i>个人资料</a>--}}
                </li>
            </ul>
        </div>
    </div>
    <div class="rvip">
        <iframe scrolling="auto" frameborder="0" src="/vip-index" name="right" width="100%" height="100%"></iframe>
    </div>

</div>
<!-- <script src="/Public/static/layui/layui.js"></script> -->
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')
<script type="text/javascript">
    $(function(){
        $(".vmenus ul li").click(function(){
            $(".vmenus ul li").removeClass("active");
            $(this).addClass("active");
        })
    });
    function viporder(obj){
        var id=obj.id;
        if(id=='signed'){
            $.ajax({
                type:"POST",
                url:"http://www.100txy.com/Home/Index/ajax_signed",
                data:" ",
                dataType:"json",
                success:function(data){
                    if(data.status=='no'){
                        layer.msg(data.msg, {icon: 2});
                        return false;
                    }else{
                        var day=data.day;
                        $("#vsigned").val("");
                        $("#vsigned").val(day);
                        var score=data.score;
                        if(score){
                            $("#vscore").html("");
                            $("#vscore").html(score);
                        }
                        //  layer.msg('恭喜提交成功！待管理员审核通过后显示!', {icon: 1});
                        layer.msg('恭喜您，签到成功！', {icon: 1});
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