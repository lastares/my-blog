<!--脚部开始-->
<div class="foot_box">
    <div class="copyright">
        Copyright © 2015-2017 songyaofeng.com All Rights Reserved. 备案号:鄂ICP备15020375号-1
    </div>
    <div class="foot_time">
        程序:宋耀锋博客v1.0+ 主题:宋耀锋博客前端SYF主题&nbsp; &nbsp; 环境：LNMP  </a>
    </div>
    <div class="foot_time">博客平稳运行2年+</div>
</div>
<!--脚部结束-->
<!--主体部分结束-->
</body>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
    //logo触发动画
    $(document).ready(function(){
        $('#logo_img').mouseover(function(){
            $('#logo_img').addClass('animated  rubberBand');
            //监听执行一次
            $('#logo_img').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#logo_img').removeClass('animated  rubberBand');});
        });
    });

    //新浪微博触发动画
    $(document).ready(function(){
        $('#sinasite').mouseover(function(){
            $('#sinasite').addClass('animated  tada');
            //监听执行一次
            $('#sinasite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#sinasite').removeClass('animated  tada');});
        });
    });

    //博主邮箱触发动画
    $(document).ready(function(){
        $('#emailsite').mouseover(function(){
            $('#emailsite').addClass('animated  tada');
            //监听执行一次
            $('#emailsite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#emailsite').removeClass('animated  tada');});
        });
    });

    //新浪微博触发动画
    $(document).ready(function(){
        $('#appsite').mouseover(function(){
            $('#appsite').addClass('animated  tada');
            //监听执行一次
            $('#appsite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#appsite').removeClass('animated  tada');});
        });
    });

    //新浪微博触发动画
    $(document).ready(function(){
        $('#githubsite').mouseover(function(){
            $('#githubsite').addClass('animated  tada');
            //监听执行一次
            $('#githubsite').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){$('#githubsite').removeClass('animated  tada');});
        });
    });
</script>

<script type = "text/javascript">
    $(function(){
        $("#art_title").click(function(){
            var aid = $(this).attr('name');
            $.post("http://www.huxinchun.com/Home/viewnum",
                {
                    id:aid
                });
        });
    });
</script>
