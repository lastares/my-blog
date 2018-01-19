<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>HXC-胡新春博客时间轴</title>
    <link rel="stylesheet" href="home/css/index.css">
    <link rel="stylesheet" href="home/css/tingle.min.css">
    <link rel="stylesheet" href="home/css/weather-icons.min.css">
</head>
<body marginwidth="0" marginheight="0">
<div class="tingle-modal" style="display: none;">
    <button class="tingle-modal__close"><span class="tingle-modal__closeIcon">×</span><span
                class="tingle-modal__closeLabel">Close</span></button>
    <div class="tingle-modal-box">
        <div class="tingle-modal-box__content"></div>
    </div>
</div>

<div style="width: 100%;">
    <!--临时视频-->
    <!-- 标题 -->
    <div style="font-size: 40px;text-align: center;width: 100%;">时间轴</div>
    <!-- 右侧日期选择 -->
    <div id="chose-date">

        <ul class="rightDateSort">
            <li>
                <a class="saa">2017</a>
                <ul class="aas">
                    <li class="diaryDateList"><a
                                href="http://www.huxinchun.com/public/time/index.php?year=2017&amp;month=11">2017 .
                            11</a></li>
                    <li class="diaryDateList"><a
                                href="http://www.huxinchun.com/public/time/index.php?year=2017&amp;month=10">2017 .
                            10</a></li>
                    <li class="diaryDateList"><a
                                href="http://www.huxinchun.com/public/time/index.php?year=2017&amp;month=09">2017 .
                            09</a></li>
                    <li class="diaryDateList"><a
                                href="http://www.huxinchun.com/public/time/index.php?year=2017&amp;month=08">2017 .
                            08</a></li>
                </ul>
            </li>
        </ul>


    </div>


    <!-- 左侧日期 -->
    <div id="years">
        <h1>2017 . 11</h1>
    </div>

    <!-- 时间轴和内容 -->
    <div id="circle_line" style="transition-duration: 500ms; transition-delay: 2000ms;">
        <!--时间轴循环开始-->
        <ul>

            <li class="circle" style="margin-top: 85px;">
		<span style="margin-left: -95px;font-family: &#39;Constantia&#39;;font-size: 20px;color:#f9703b;">
		12号 09点		</span>
            </li>
            <li class="line" style="height: 126px;"></li>

            <li class="circle">
		<span style="margin-left: -95px;font-family: &#39;Constantia&#39;;font-size: 20px;color:#f9703b;">
		08号 14点		</span>
            </li>
            <li class="line" style="height: 126px;"></li>

            <li class="circle">
		<span style="margin-left: -95px;font-family: &#39;Constantia&#39;;font-size: 20px;color:#f9703b;">
		08号 13点		</span>
            </li>
            <li class="line"></li>
        </ul>
        <!--时间轴循环结束-->        </div>
    <div id="text">
        <!-- 弹出框放在这里 -->
        <div id="modal" style="display:none;">
            <h3 style="text-align:center" class="content-font modal-title"></h3>
            <div class="modal-addition modal-by-text">
                    <span class="content-font diary-by-text">类型:&nbsp;
                        <a class="under-line"></a></span> 
                <span class="content-font diary-by-text">发布时间:&nbsp;
                        <span class="created_time diary-time"></span>
                    </span> 
                <span class="content-font diary-by-text">最后修改于:&nbsp;
                        <span class="updated_time diary-time"></span>
                    </span> 
                <i class="wi"></i> 
                <img class="modal-emotion" src="http://www.huxinchun.com/public/time/index.php" alt="心情">
            </div>
            <div class="content-font content-color content-line modal-content"></div>
        </div>
        <!-- 正文 -->
        <ul>
            <li class="content">
                <span class="content-id">109</span>
                <p class="content-intro content-font content-color">
                    刷十一剁手了买？必须剁啊，也没买什么东西，说实话，双十一优没优惠我还真不知道，就是象征性的买了件东西吧 </p>
                <p class="diary-time" style="float: right">
                    <!--  href="http://localhost/jianguoCloud/TimeLineDiary/category.php?category=心情" -->
                    <span class="diary-by-text content-font"> 心情：
		<img class="diary-emotion" src="/home/images/calm.png" alt="心情"> 
		</span>
                    <span class="diary-by-text content-font">发布时间:&nbsp;</span>
                    2017-11-12 09:23:09 </p>
            </li>
            <li class="content">
                <span class="content-id">108</span>
                <p class="content-intro content-font content-color">
                    明天有空再把主题完善完善，最近光瞎折腾了，没更新博客了 </p>
                <p class="diary-time" style="float: right">
                    <!--  href="http://localhost/jianguoCloud/TimeLineDiary/category.php?category=心情" -->
                    <span class="diary-by-text content-font"> 心情：
		<img class="diary-emotion" src="/home/images/calm.png" alt="心情"> 
		</span>
                    <span class="diary-by-text content-font">发布时间:&nbsp;</span>
                    2017-11-08 14:38:53 </p>
            </li>
            <li class="content">
                <span class="content-id">107</span>
                <p class="content-intro content-font content-color">
                    好久没有更新博客了，这几天重新写了一个主题样式，还没有写完，有时间再 慢慢写吧 </p>
                <p class="diary-time" style="float: right">
                    <!--  href="http://localhost/jianguoCloud/TimeLineDiary/category.php?category=感想" -->
                    <span class="diary-by-text content-font"> 心情：
		<img class="diary-emotion" src="/home/images/calm.png" alt="心情"> 
		</span>
                    <span class="diary-by-text content-font">发布时间:&nbsp;</span>
                    2017-11-08 13:02:26 </p>
            </li>
        </ul>
    </div>

    <!-- 页脚 -->
    <div id="footer">

    </div>

    <!--
     <video width="460" height="320" src="./images/chuyin.mp4" controls="controls">
                你的浏览器暂不支持该视频播放！
    </video>
    -->


</div>
<script src="/home/js/jquery-3.1.1.min.js"></script>
{{--<script src="/home/js/jquery.min.js"></script>--}}
<script src="/home/js/index.js"></script>
<script src="/home/js/move.min.js"></script>
<script src="/home/js/tingle.min.js"></script>

</body>
</html>