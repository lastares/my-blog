<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #mail-background {
            background: url("http://p3eomknru.bkt.clouddn.com/banner/20180208/Yxd37HY2uKv6rfM4SU8fJOLqmahdPIcwSxvMgoOO.jpeg") no-repeat;
            width: 100%;
            min-height: 330px;
            padding: 15px 20px;
            font-family: '微软雅黑';

        }
        #mail-background p {
            text-indent: 2em;
        }
        #code {
            text-indent: 15em !important;
        }
        #code span {
            font-weight: bold;
            color: #ee3333;
            font-size: 18px;

        }

        #logo {
            text-indent: 28em;
            margin-top: -15px;
        }
    </style>

</head>
<body>
    <div id="mail-background">
        尊贵的用户:<br />
        <p>您好!</p>
        <p>您于 {{ date('Y-m-d H:i:s', time()) }} 申请邮箱验证：</p>
        <p>欢迎注册宋耀锋博客，相遇是一种缘分，历尽千辛万苦验证码终于来到您的邮箱</p>
        <div id="code">
            <span> {{ $code }} </span><br>
        </div>
        <p>验证码2分钟内有效，管理员不会索要您的验证码</p>
        <p>拿好哟，祝您生活愉快，欢迎回访！</p>
        <div id="logo">
            <img src="http://www.songyaofeng.com/home/images/icon/logo.png" alt="宋耀锋博客" title="宋耀锋博客">
        </div>
    </div>
</body>
</html>