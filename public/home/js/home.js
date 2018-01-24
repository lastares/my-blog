function myEmail() {
    layer.open({
        type: 1,
        shade: false,
        title: false, //不显示标题
        content: $('.layer_notice'), //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
        cancel: function(){
            layer.msg('捕获就是从页面已经存在的元素上，包裹layer的结构', {time: 5000, icon:6});
        }
    });
}
//logo触发动画
$(document).ready(function(){
    // 标签提示文章数
    $('[data-toggle="tooltip"]').tooltip();

    /* 鼠标特效 */
    var a_idx = 0;

    $("body").click(function(e) {
        var a = ["欢迎您", "么么哒", "你真好", "棒棒哒", "真可爱", "你最美", "喜欢你" ,"真聪明", "爱你哦", "好厉害", "你真帅", "祝福你"];
        var $i = $("<span/>").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
        var x = e.pageX,
            y = e.pageY;
        $i.css({
            "z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
            "top": y - 20,
            "left": x,
            "position": "absolute",
            "font-weight": "bold",
            "color": "#ff6651"
        });
        $("body").append($i);
        $i.animate({
                "top": y - 180,
                "opacity": 0
            },
            1500,
            function() {
                $i.remove();
            });
    });


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



function siteTime(){
    window.setTimeout("siteTime()", 1000);
    var seconds = 1000
    var minutes = seconds * 60
    var hours = minutes * 60
    var days = hours * 24
    var years = days * 365
    var today = new Date()
    var todayYear = today.getFullYear()
    var todayMonth = today.getMonth()
    var todayDate = today.getDate()
    var todayHour = today.getHours()
    var todayMinute = today.getMinutes()
    var todaySecond = today.getSeconds()

    /* Date.UTC() -- 返回date对象距世界标准时间(UTC)1970年1月1日午夜之间的毫秒数(时间戳)
    year - 作为date对象的年份，为4位年份值
    month - 0-11之间的整数，做为date对象的月份
    day - 1-31之间的整数，做为date对象的天数
    hours - 0(午夜24点)-23之间的整数，做为date对象的小时数
    minutes - 0-59之间的整数，做为date对象的分钟数
    seconds - 0-59之间的整数，做为date对象的秒数
    microseconds - 0-999之间的整数，做为date对象的毫秒数 */
    var t1 = Date.UTC(2018,0,1,00,00,00)
    var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond)
    var diff = t2-t1

    var diffYears = Math.floor(diff/years)
    var diffDays = Math.floor((diff/days)-diffYears*365)
    var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours)
    var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes)
    var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds)
    document.getElementById("sitetime").innerHTML="已平稳运行 "+diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒"
}
$(function(){
    siteTime()
    $("#art_title").click(function(){
        var aid = $(this).attr('name');
        $.post("http://www.songyaofeng.com/Home/viewnum",
            {
                id:aid
            });
    });

});