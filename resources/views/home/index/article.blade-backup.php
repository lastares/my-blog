
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $data->title }}-宋耀锋博客</title>
    <meta name="keywords" content="Laravel5" />
    <meta name="description" content="{{ $data->description }}" />
    <meta name="author" content="宋耀锋" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="no" />
    <!--CSS-->


    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="shortcut icon" href="/home/images/favicon.ico" />

    <!--CSS-->
    <link rel="stylesheet" href="/home/css/default.css"/>
    <link rel="stylesheet" href="/home/css/public.css"/>
    <link rel="stylesheet" href="/home/css/animation.css"/>

    <link rel="stylesheet" type="text/css"href="/home/css/skin_1.css"title="qingxin" />
    <link rel="stylesheet" type="text/css" href="/home/css/skin_2.css"title="jianyue" />
    <link rel="stylesheet" type="text/css" href="/home/css/skin_3.css"title="qingshuang" />
    <link rel="stylesheet" href="/home/css/font-icon.css"/>
    <link rel="stylesheet" href="/home/css/face.css"/>
    <!--JS-->
    <script type="text/javascript" src="/home/js/jquery.2.1.4.min.js"></script>
    <script>
        $("html").append("<div class='jiazai'><img src='/home/images/loading3.gif'/><span>正在加载中请等待...</span></div>")

    </script>
    <script type="text/javascript" src="/home/js/my.js"></script>
    <!-- <script type="text/javascript" src="/home/js/scripts.js"></script> -->

    <script type="text/javascript" src="/home/js/superbg.min.js"></script>
    <!-- <script type="text/javascript" src="/home/js/supersized.3.2.7.min.js"></script> -->
    <script type="text/javascript" src="/home/js/superbg-custom.js"></script>

    <script type="text/javascript" src="/home/js/album.js"></script>
    <script type="text/javascript" src="/home/js/tooltip.js"></script>
    <script type="text/javascript" src="/home/js/face.js"></script>
    <script type="text/javascript" src="/home/plugins/layer/layer.js" ></script>
    <script type="text/javascript" src="/home/js/checkform.js" charset="utf-8"></script>
    <script type="text/javascript"  src="/home/js/skin.js"></script>
    <!--[if lte IE 9]>
    <script>window.location.href='http://cdn.dmeng.net/upgrade-your-browser.html?referrer='+location.href;</script>
    <![endif]-->
    <script type="text/javascript"  src="/home/js/index.js"></script>
    <script type="text/javascript">

        ajaxCommentUrl="http://www.100txy.com/Home/Index/ajax_comment";

        check_login="http://www.100txy.com/Home/User/check_login";

        logoutUrl="http://www.100txy.com/Home/User/logout";

    </script>
    <script type="text/javascript" src="/home/js/comment.js"></script>
    <!-- 百度统计 -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?136bd7aac0d158dec628add4b8dd4c3a";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- 百度统计 end-->


    <script>
        $(function(){
            $("nav").find("li").eq(2).addClass("nav-active");
        });
    </script>
</head>
<body class="nobg">
<!--导航开始-->
<header class="myheader">
    <div class="top">
        <!--头像左边部分-->
        <div class="top-left">
            <div class="logo"><a href="/"><img src="/home/images/logo3.gif"/></a></div>
            <!--滚动消息-->
            <div class="web-xiaoxi">
                <i class="el-speaker"></i>
                <ul class="mulitline">
                    <li>做了一些小调整，使之看起来更像博客。</li>
                    <li>本站提供丰富的素材下载，有源码、模板、插件...</li>
                    <li>内容如有侵犯，请立即联系管理员删除</li>
                </ul>
            </div>
            <!--END 消息 -->
            <!--手机菜单按钮-->
            <div class="mobile-nav"><i class="el-lines"></i><i class="el-remove"></i></div>
        </div>
        <!--电脑导航开始-->
        <nav class="mynav">
            <ul class="orange-text">
                <li class=""><a href="/">首页</a></li>
                <!-- <li  ><a href="./Index/chat.html" >说说</a></li> -->
                <li  ><a href="/chat.html" >说说</a></li>
                <li class='drop'  >
                    <a href="JavaScript:;" >分类<i class='el-chevron-down'></i></a>
                    <div class="drop-nav orange-text ">
                        <ul>
                            <li><a href="/category/28.html">PHP</a></li>
                            <li><a href="/category/29.html">Linux</a></li>
                            <li><a href="/category/36.html">Java</a></li>
                            <li><a href="/category/39.html">C</a></li>
                            <li><a href="/category/31.html">MySQL</a></li>
                            <li><a href="/category/37.html">Python</a></li>
                            <li><a href="/category/30.html">Web</a></li>
                            <li><a href="/category/34.html">SEO</a></li>
                            <li><a href="/category/33.html">黑客</a></li>
                            <li><a href="/category/35.html">面试</a></li>
                            <li><a href="/category/32.html">修养</a></li>
                            <li><a href="/category/38.html">站长</a></li>
                        </ul>
                    </div>
                </li>
                <!-- <li  ><a href="/Links/" >链接</a></li> -->
                <li  ><a href="/album.html" >相册</a></li>
                <li  ><a href="/downlist.html" >下载</a></li>
                <li  ><a href="/feedback.html" >留言</a>	</li>
                <li  ><a href="/about.html" >关于</a></li>
            </ul>
            <!--移动的滑动-->
            <div class="move-bg"></div>
            <!--移动的滑动 end-->
        </nav>
        <!--会员登录-->
        <div class="vip" style="width: 4%;float: right;text-align: right;">
            <a href="javascript:;" onclick="comment(this)"><img class="img-circle" src="/home/images/icon/default_head_img.gif" alt="宋耀锋博客" title="宋耀锋博客" style="margin-top: 17px;"></a>
        </div>
        <!--会员登录-->
        <!--这里是手机导航-->
        <div class="mob-menu">
            <!--手机顶部搜索-->
            <div class="search ">
                <ul class="loginwap-third-list">
                    <li><a class="weixin-login" title="微信账号登录" href="./User/oauth_login/type/wechat.html"></a></li>
                    <li><a class="qq-login" title="QQ账号登录" href="./User/oauth_login/type/qq.html"></a></li>
                    <li style="margin-right: 0!important;"><a class="weibo-login" title="新浪微博账号登录" href="./User/oauth_login/type/sina.html"></a></li>
                </ul>
            </div>
            <!--手机下拉菜单-->
            <ul class="mob-ulnav">
                <li><a href="/">首页</a></li>
                <li ><a href="./Index/chat.html">说说</a></li>
                <li class='mob-drop' >
                    <a href="javascrip:;">分类<i></i></a>
                    <ul class="mob-dropmenu">
                        <li><a href="/category/28.html">PHP</a></li>
                        <li><a href="/category/29.html">Linux</a></li>
                        <li><a href="/category/36.html">Java</a></li>
                        <li><a href="/category/39.html">C</a></li>
                        <li><a href="/category/31.html">MySQL</a></li>
                        <li><a href="/category/37.html">Python</a></li>
                        <li><a href="/category/30.html">Web</a></li>
                        <li><a href="/category/34.html">SEO</a></li>
                        <li><a href="/category/33.html">黑客</a></li>
                        <li><a href="/category/35.html">面试</a></li>
                        <li><a href="/category/32.html">修养</a></li>
                        <li><a href="/category/38.html">站长</a></li>
                    </ul>
                </li>
                <!-- <li  ><a href="/Links/" >链接</a></li> -->
                <li  ><a href="./Index/album.html" >相册</a></li>
                <li  ><a href="./Index/downlist.html" >下载</a></li>
                <li  ><a href="./Index/feedback.html" >留言</a>	</li>
                <li  ><a href="./Index/about.html" >关于</a></li>
            </ul>
        </div>
    </div>
</header>
<!--导航结束-->

<!--主题框架开始-->
<div class="container">
    <!--左侧开始-->
    <section>
        <article >
            <div class="mbnav"><i class="el el-home"></i><a href="/" title="">首页</a>&gt;<a href="/category/{{ $data->category_id }}" >{{ $data->category_name }}</a>&gt;正文</div>
            <h3 class="arc-title index-title">{{ $data->title }}</h3>
            <div class="post-line bg-color">
                <ul>
                    <li><a title="{{ $data->author }}发表于{{ $data->created_at }}"><i class="el-time"></i><time>{{ $data->created_at }}</time></a></li>
                    <li><a href="#" title="本文作者：{{ $data->author }}"><i class="el-user"></i>{{ $data->author }}</a></li>
                    <li><a href="#Comment" title="转到评论"><i class="el-comment"></i>0条</a></li>
                    <li><a title="已有 {{ $data->click }} 次浏览"><i class="el-eye-open"></i>({{ $data->click }})</a></li>
                </ul>
            </div>


            <div class="article-content bg-color">
                <!-- <div class="article-content bg-color" id="Hotbg"> -->
                <!--文章正文-->
                <div class="article-body">
                    {!! $data->html !!}
                </div>
                <!--END 文章正文->
                <!--分享-->
                <div class="article-fx"><span class="img-circle" href="javascript:void(0)" onClick="dashangToggle()" class="img-circle">打赏</span>&nbsp;&nbsp;&nbsp;<a class="fx-btn img-circle" href="javascript:;" class="img-circle">分享</a>
                    <div class="bd-fx arc-bdfx">
                        <i class="el-remove fx-close"></i>
                        <ul class="bdsharebuttonbox">
                            <li><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></li>
                            <li><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></li>
                            <li><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></li>
                            <li><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a></li>
                        </ul>
                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

                    </div>
                </div>
                <!--END 分享-->
                <hr>
                <!--标签-->
                <div class="article_tag">
                    <ul >
                        <!--		<li><a title="封寒紫 当前位于：浙江省金华市">浙江省金华市</a></li>-->
                        <!-- <li><a href="./Index/category.html" title="归类："></a></li> -->
                        <li><a href="/category/{{ $data->category_id }}" title="归类：{{ $data->category_name }}">{{ $data->category_name }}</a></li>
                        @foreach($data->tag as $k => $v)
                        <li>
                            <a class="b-tag-name" title="标签：{{ $v->name }}" href="/tag/{{ $v->id }}">{{ $v->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </article>
        <!--上一篇，下一篇-->
        <div class="shangyip bg-color">
            @if(!is_null($prev))
            <span><i class="el-arrow-up"></i>上一篇：<a class='blue-text' href="/article/{{ $prev->id }}" title='上一篇：{{ $prev->title }}'>{{ $prev->title }}</a></span>
            @else
                <span><i class="el-arrow-up"></i>上一篇：<a class='blue-text' href="javascript: void(0);" >没有了</a></span>
            @endif

            @if(!is_null($next))
            <span><i class="el-arrow-down"></i>下一篇：<a class='blue-text' href="/article/{{ $next->id }}" title='上一篇：{{ $next->title }}'>{{ $next->title }}</a></span>
            @else
            <span><i class="el-arrow-down"></i>下一篇：<a class='blue-text' href="javascript: void(0);" >没有了</a></span>
            @endif
        </div>
        <!--淘宝橱窗广告-->
        <div>
            <script type="text/javascript">
                document.write('<a style="display:none!important" id="tanx-a-mm_128084981_40056229_151324323"></a>');
                tanx_s = document.createElement("script");
                tanx_s.type = "text/javascript";
                tanx_s.charset = "gbk";
                tanx_s.id = "tanx-s-mm_128084981_40056229_151324323";
                tanx_s.async = true;
                tanx_s.src = "http://p.tanx.com/ex?i=mm_128084981_40056229_151324323";
                tanx_h = document.getElementsByTagName("head")[0];
                if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
            </script>
            <div id="authorad" style="width:20px;height:90px;background-color:#ff4400;float:right;font-size:10px;color:#fff;">
                <ul style="text-align:center;height:90px;">
                    <li style="height:22.5px;">博</li>
                    <li style="height:22.5px;">主</li>
                    <li style="height:22.5px;">推</li>
                    <li style="height:22.5px;">荐</li>
                </ul>
            </div>
        </div>
        <!--淘宝橱窗广告end-->
        <!--随机推荐-->
        <div class="maybe-love">
            <h4 class="index-title"><i class="el-heart"></i>您还可能喜欢</h4>
            <ul>
                <li>
                    <a href="/article/71.html">
                        <img src="/home/images/2017032958db625a684a9.png"  alt="jquery ajax异步加载分类文章实例" title="jquery ajax异步加载分类文章实例" />
                        <span >jquery ajax异步加载分类文章实例</span>
                    </a>
                </li><li>
                    <a href="/article/34.html">
                        <img src="/home/images/201612295864dab12c7bd.jpg"  alt="ecos框架入门之留言板开发" title="ecos框架入门之留言板开发" />
                        <span >ecos框架入门之留言板开发</span>
                    </a>
                </li><li>
                    <a href="/article/19.html">
                        <img src="/home/images/585949886ec58.jpg"  alt="10个吸引百度蜘蛛爬行网站的技巧" title="10个吸引百度蜘蛛爬行网站的技巧" />
                        <span >10个吸引百度蜘蛛爬行网站的技巧</span>
                    </a>
                </li><li>
                    <a href="/article/38.html">
                        <img src="/home/images/20170118587f0307db632.jpg"  alt="一个php程序员的学习过程" title="一个php程序员的学习过程" />
                        <span >一个php程序员的学习过程</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--评论列表-->

        <!--END评论列表-->
        <!--评论表单-->
        <h3 class="form-btn blue-text" ><a href="javascript:;" ><i class="el-edit"></i>我要留言 / 展开表单</a></h3>
        <!-- 通用评论开始 -->
        <script>
            var userEmail='';
        </script>
        <style type="text/css">

            .b-head-img{
                width: 45px;
                height: 45px;
                position: absolute;
                left: 15px;top: 5px;
            }
            .b-box-textarea{
                margin: 5px 0;
                height: 120px;
                border-radius: 4px;
                position: relative;z-index: 1;
                border:#ddd 1px solid;
                box-sizing:border-box;
                box-shadow:inset 0 0 2px rgba(0,0,0,0.05);
                font-family:'Microsoft YaHei';
                /*text-indent:10px;*/
                background:rgba(255,255,255,0.5);transition:all 0.5s;
                -webkit-transition:all 0.5s;
            }
            .b-box-content{
                padding: 5px;
                height: 75px;
                border: none;
                border-bottom: 1px solid #E6EAED;
                color: #999;overflow-y: auto;
                font-size: 12px;
            }
            .b-box-content:focus{
                outline:none;border:#ff6700 1px solid;box-shadow: 0 0 8px rgba(255, 103, 0,0.7);
            }
            .b-submit-button{
                position: absolute;
                right: 0.5px;
                bottom: 1px;
            }
            .b-submit-button input{
                height:30px;
                width:60px;
            }
        </style>
        <div class="b-box-textarea" >
            <div class="b-box-content" contenteditable="true" onfocus="delete_hint(this)">请先登陆后发表评论</div>
            <ul class="b-emote-submit">
                <li class="b-emote">
                    <i class="el el-reddit" onclick="getTuzki(this)"></i>
                    <input style="height:30px;width:20%;font-size:12px;margin-top:1px;" class="form-control b-email" type="text" name="email" placeholder="邮箱未认证" value="" disabled>
                    <div class="b-tuzki">

                    </div>
                </li>
                <li class="b-submit-button">
                    <input type="button" value="评 论" aid="124" pid="0" onclick="comment(this)">
                </li>
                <li class="b-clear-float"></li>
            </ul>
        </div>


        <!-- 新的评论 -->
        <div class="comment-area" id="Comment">
            <h4 class="index-title"><i class="el el-comment-alt"></i> 当前共有<span>0</span> 条评论
                <a href="Comment/?48-1.html"><i class="el el-th-list"></i>浏览所有评论</a>
            </h4>
            <ul class="b-user-comment">
            </ul>
        </div>
        <!-- 通用评论结束 -->

    </section>
    <!--左侧结束-->
    <!--=========右侧开始==========-->
    <aside class="myaside">

        <!--关注我-->

        <div class="focus-me bg-color animation-div">

            <h4 class="index-title"><i class="el-heart"></i>关注我<small>Focus Me</small></h4>
            <div class="xiangguan">
                <div><a class="benbo" href="http://weibo.com/100txy" rel="nofollow" target="_blank"><i class="el el-rss"></i></a><span>新浪微博</span></div>
                <!-- <div><a class="benbo" href="#" target="_blank"><span id="qq" style="padding-top:45px;">QQ空间</span></a><span>QQ空间</span></div> -->
                <div><a class="taobao" href="https://github.com/leiphp"  rel="nofollow" target="_blank"><i class="el el-github"></i></a><span>github</span></div>
                <div><a class="side-fx"><i class="el-share-alt"></i></a><span>分享本博</span></div>
                <div><a class="mail-btn" href="javascript:;"><i class="el el-picasa"></i></a><span>公众号</span></div>

            </div>
            <!-- <div class="mail-dy">

                <form  action="http://list.qq.com/cgi-bin/qf_compose_send" method="post" target="_blank">

                    <input type="hidden" name="t" value="qf_booked_feedback"/>

                    <input type="hidden" name="id" value="b2b151b4bc010575c083e18e227ae907aac82bc47e84d3e0"/>

                    <span>订阅</span>

                    <input name="to" type="text"  placeholder="输入邮箱点击订阅吧" onfocus="this.placeholder=''" onblur="this.placeholder='输入邮箱点击订阅吧'"/>

                    <i class="el-envelope"><input value=" "type="submit"/></i>

                </form>

                <i class="el-remove fx-close"></i>

            </div> -->

            <div class="mail-dy">

                <img src="/home/images/icon/weixin.jpg">
                <i class="el-remove fx-close"></i>

            </div>

            <div class="bd-fx side-bdfx ">

                <i class="el-remove fx-close"></i>

                <ul class="bdsharebuttonbox">

                    <li><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></li>
                    <li><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></li>
                    <li><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></li>
                    <li><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a></li>
                </ul>
                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
            </div>
        </div>
        <!--右侧个人统计-->
        <div class="web-author bg-color animation-div">
            <div class="author-tx">
                <a class="img-circle" href="./Index/about.html" title="点击查看详细信息">
                    <img class="img-circle" src="/home/images/icon/ava.jpg"/>
                </a>
            </div>
            <div class="author-name"><span class="blue-text">宋耀锋</span><p>一位90后全栈开发站长</p></div>
            <div class="data-info">
                <ul>
                    <li><strong>0</strong><span>今日会员</span></li>
                    <li><strong>76</strong><span>今日访问ip</span></li>
                    <!-- <li><strong>108</strong><span>文章数量</span></li> -->
                    <li><strong>90</strong><span>今日访客</span></li>
                </ul>
            </div>
        </div>
        <!--END 右侧个人统计-->
        <!--搜索-->
        <div class="search animation-div">
            <form action="/Home/Index/search.html" method="get">
                <div class="search-index">
                    <input name="search_word" type="text"  placeholder="请输入关键字" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键字'"/>
                    <i class="el-search"><input value=" "type="submit"/></i>
                </div>
            </form>
        </div>
        <!--最新更新-->
        <div class="clos-new bg-color animation-div">
            <h4 class="index-title"><i class="el-bulb"></i>最新更新<small>Close New</small></h4>
            <ul>
                <!-- <li><i class="el-cloud"></i><iframe id="tianqi"  scrolling="no" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></li> -->
                <li><span><i class="el-arrow-up"></i>最近：<font class="blue-text">宋耀锋</font> 五天前&nbsp;&nbsp;17:55</span><a title="Thinkphp5模板继承和替换的问题" > 更新了<b class="lable">文章</b></a></li>
                <li><i class="el-calendar"></i>历史上的今天：<a title="1922年2月6日 侵犯中国主权的“九国公约”在华盛顿签订" class="orange-text">侵犯中国主权的“九国公约”在华盛顿签订</a></li>
            </ul>
        </div>
        <!--说说-->
        <div class="bg-color animation-div">
            <h4 class="index-title"><i class="el-headphones"></i>说说<small>Shuo Shuo</small></h4>
            <div class="shuo-side">
                <ul>
                    <li id="Hots">
                        <span class="shuobg1"><strong>01-27 </strong></span>
                        <div><a title="PHP 可以获取客户端哪些访问信息" href="/chatdetail/73.html" >PHP 可以获取客户端哪些访问信息</a><b title="点击38">(38)</b></div>
                    </li><li id="Hots">
                        <span class="shuobg2"><strong>01-25 </strong></span>
                        <div><a title="You have new mail in /var/spool/mail/root" href="/chatdetail/72.html" >You have new mail in /var/spool/mail/root</a><b title="点击34">(34)</b></div>
                    </li><li id="Hots">
                        <span class="shuobg3"><strong>01-24 </strong></span>
                        <div><a title="jQuery实现获取短信邮箱验证码倒计时" href="/chatdetail/71.html" >jQuery实现获取短信邮箱验证码倒计时</a><b title="点击44">(44)</b></div>
                    </li>		</ul>
            </div>
        </div>
        <!--推荐图文-->
        <div class="article-push  bg-color animation-div">
            <h4 class="index-title"><i class="el-asl"></i>推荐图文<small>Push Article</small></h4>
            <ul>
                <li>
                    <div class="arcimg img_loading">
                        <a href="/article/64.html" target="_blank">
                            <img src="/home/images/20170118587f0307db632.jpg" alt="PHP生成excel表格导入及导出实用案例" title="PHP生成excel表格导入及导出实用案例">
                        </a>
                    </div>
                    <div class="arc-right">
                        <h4 class="blue-text"><a href="/article/64.html">PHP生成excel表格导入及导出实用案例</a></h4>
                        <p>以前记得总是用PHP生成csv格式的表格，可现在excel表格越来越流行了，许多公司都要求做成excel格式表格，但这并不复杂，因为phpexcel为我们提供了方便、快捷的excel操作类</p>
                        <ul>
                            <li><a title="发表于2017-05-16"><i class="el-time"></i>2017-05-16</a></li>
                            <li><a title="1313次浏览"><i class="el-fire"></i>1313</a></li>
                        </ul>
                    </div>
                </li><li>
                    <div class="arcimg img_loading">
                        <a href="/article/57.html" target="_blank">
                            <img src="/home/images/2017032458d52f2124932.jpg" alt="Linux服务器运维常用操作命令" title="Linux服务器运维常用操作命令">
                        </a>
                    </div>
                    <div class="arc-right">
                        <h4 class="blue-text"><a href="/article/57.html">Linux服务器运维常用操作命令</a></h4>
                        <p>我把自己常用的Linux操作命令总结一下，以后用的时候也方便查找</p>
                        <ul>
                            <li><a title="发表于2017-03-23"><i class="el-time"></i>2017-03-23</a></li>
                            <li><a title="1100次浏览"><i class="el-fire"></i>1100</a></li>
                        </ul>
                    </div>
                </li><li>
                    <div class="arcimg img_loading">
                        <a href="/article/50.html" target="_blank">
                            <img src="/home/images/2017030258b7a67fe3a5c.jpg" alt="Windows Redis安装及使用" title="Windows Redis安装及使用">
                        </a>
                    </div>
                    <div class="arc-right">
                        <h4 class="blue-text"><a href="/article/50.html">Windows Redis安装及使用</a></h4>
                        <p>Redis是一个开源的使用ANSI C语言编写、遵守BSD协议、支持网络、可基于内存亦可持久化的日志型、Key-Value数据库，并提供多种语言的API。它通常被称为数据结构服务器</p>
                        <ul>
                            <li><a title="发表于2017-03-02"><i class="el-time"></i>2017-03-02</a></li>
                            <li><a title="817次浏览"><i class="el-fire"></i>817</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!--文章排行tab-->
        <div class="mytab bg-color animation-div">
            <div class="tab-btn"><a class="hd-btn tab-active"href="javascript:;"><i class="el-comment-alt"></i>文章互动</a><a class="ph-btn"href="javascript:;"><i class="el-signal"></i>文章排行</a></div>
            <ul class="hudong-ul">
                <!--=======查询相册=============-->
                <li>
                    <div class="sd-tx">
                        <a href="/article/65.html" target="_blank" rel="nofollow" title="去《svn post-commit钩子实现多个项目同步》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/B1AF704D1182BE47F57A201020FB9253/100" alt="木子伟" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>木子伟<time >2018-02-05</time></span>
                        <a class="blue-text" href="#" title="windows&amp;nbsp;怎么写动态目录？" >windows&nbsp;怎么写动态目录？</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/123.html" target="_blank" rel="nofollow" title="去《PHP操作Memcached简单案例演示》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/676C95317C3A2B80E5CE2C532894C83C/100" alt="小天科技" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>小天科技<time >2018-01-25</time></span>
                        <a class="blue-text" href="#" title="service memcached {start|stop|status|restart|reload}服务控制" >service memcached {start|stop|status|restart|reload}服务控制</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/69.html" target="_blank" rel="nofollow" title="去《thinkPHP多张图片上传功能》看看">
                            <img src="http://tvax3.sinaimg.cn/crop.18.15.202.202.180/006bhstily8fhbt9ku196j306o06oweu.jpg" alt="素材火官网" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>素材火官网<time >2018-01-02</time></span>
                        <a class="blue-text" href="#" title="我也做了个tp多图上传的http://www.sucaihuo.com/php/3300.html" >我也做了个tp多图上传的http://www.sucaihuo.com/php/3300.html</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/81.html" target="_blank" rel="nofollow" title="去《阿里云短信服务API接入案例》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/61DD52998BE196F3B68D24C245463359/100" alt="风萧萧兮" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>风萧萧兮<time >2017-11-01</time></span>
                        <a class="blue-text" href="#" title="//短信API产品域名 &amp;nbsp; &amp;nbsp; &amp;nbsp;$domain = &quot;dysmsapi.aliyuncs.com&quot;; 哪来的 ,在控制台哪找的???" >//短信API产品域名 &nbsp; &nbsp; &nbsp;$domain = "dysmsapi.aliyuncs.com"; 哪来的 ,在控制台哪找的???</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="/article/70.html" target="_blank" rel="nofollow" title="去《PHP实现上一篇下一篇文章功能跳转》看看">
                            <img src="http://qzapp.qlogo.cn/qzapp/101370818/EE1039AFBDC3EDB86897511599F41328/100" alt="冥冥之中天注定" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span><i class="el-user"></i>冥冥之中天注定<time >2017-10-19</time></span>
                        <a class="blue-text" href="#" title="文章页的ID 为啥后台GET没得到呢 &amp;nbsp;$id=$_GET['id'];这样得不到" >文章页的ID 为啥后台GET没得到呢 &nbsp;$id=$_GET['id'];这样得不到</a>
                    </div>
                </li>	</ul>
            <!--文章排行-->
            <ul class="paihang-ul">
                <li><span></span><a href="/article/43.html" title="PHP实现一次性多张图片上传功能">PHP实现一次性多张图片上传功能<b>(8122)</b></a></li><li><span></span><a href="/article/102.html" title="微信小程序如何加载数据库真实数据？">微信小程序如何加载数据库真实数据？<b>(6236)</b></a></li><li><span></span><a href="/article/42.html" title="个人网站微信授权登录功能怎么开发？">个人网站微信授权登录功能怎么开发？<b>(4169)</b></a></li><li><span></span><a href="/article/41.html" title="MySQL双引号、单引号转义保存详解">MySQL双引号、单引号转义保存详解<b>(4168)</b></a></li><li><span></span><a href="/article/48.html" title="一位资深php程序员在北京的面试30个题目">一位资深php程序员在北京的面试30个题目<b>(3892)</b></a></li>
            </ul>
        </div>
        <!--标签-->
        <div class="cloud bg-color animation-div">
            <h4 class="index-title"><i class="el-tags"></i>标签云<small>Tags Clouds</small></h4>
            <ul id="3dcloud">


                <li><a class="tstyle-1" href="/tag/20.html" onclick="return recordId('tid',20)" title="标签：CSS3 ">CSS3 (0)</a></li>

                <li><a class="tstyle-2" href="/tag/21.html" onclick="return recordId('tid',21)" title="标签：HTML5 ">HTML5 (1)</a></li>

                <li><a class="tstyle-3" href="/tag/22.html" onclick="return recordId('tid',22)" title="标签：Ecstore ">Ecstore (1)</a></li>

                <li><a class="tstyle-4" href="/tag/23.html" onclick="return recordId('tid',23)" title="标签：Linux ">Linux (14)</a></li>

                <li><a class="tstyle-1" href="/tag/24.html" onclick="return recordId('tid',24)" title="标签：Mysql ">Mysql (4)</a></li>

                <li><a class="tstyle-2" href="/tag/25.html" onclick="return recordId('tid',25)" title="标签：jQuery ">jQuery (12)</a></li>

                <li><a class="tstyle-3" href="/tag/26.html" onclick="return recordId('tid',26)" title="标签：ThinkPHP ">ThinkPHP (9)</a></li>

                <li><a class="tstyle-4" href="/tag/27.html" onclick="return recordId('tid',27)" title="标签：搜索引擎 ">搜索引擎 (6)</a></li>

                <li><a class="tstyle-1" href="/tag/28.html" onclick="return recordId('tid',28)" title="标签：工程师 ">工程师 (1)</a></li>

                <li><a class="tstyle-2" href="/tag/29.html" onclick="return recordId('tid',29)" title="标签：Mysql ">Mysql (1)</a></li>

                <li><a class="tstyle-3" href="/tag/30.html" onclick="return recordId('tid',30)" title="标签：个人博客 ">个人博客 (3)</a></li>

                <li><a class="tstyle-4" href="/tag/31.html" onclick="return recordId('tid',31)" title="标签：session ">session (2)</a></li>

                <li><a class="tstyle-1" href="/tag/32.html" onclick="return recordId('tid',32)" title="标签：cookie ">cookie (1)</a></li>

                <li><a class="tstyle-2" href="/tag/33.html" onclick="return recordId('tid',33)" title="标签：安全 ">安全 (4)</a></li>

                <li><a class="tstyle-3" href="/tag/34.html" onclick="return recordId('tid',34)" title="标签：Web开发 ">Web开发 (4)</a></li>

                <li><a class="tstyle-4" href="/tag/35.html" onclick="return recordId('tid',35)" title="标签：node.js ">node.js (1)</a></li>

                <li><a class="tstyle-1" href="/tag/36.html" onclick="return recordId('tid',36)" title="标签：bootstrap ">bootstrap (1)</a></li>

                <li><a class="tstyle-2" href="/tag/37.html" onclick="return recordId('tid',37)" title="标签：个人博客模板 ">个人博客模板 (4)</a></li>

                <li><a class="tstyle-3" href="/tag/38.html" onclick="return recordId('tid',38)" title="标签：微信 ">微信 (2)</a></li>

                <li><a class="tstyle-4" href="/tag/39.html" onclick="return recordId('tid',39)" title="标签：缓存 ">缓存 (1)</a></li>

                <li><a class="tstyle-1" href="/tag/40.html" onclick="return recordId('tid',40)" title="标签：页面静态化 ">页面静态化 (1)</a></li>

                <li><a class="tstyle-2" href="/tag/41.html" onclick="return recordId('tid',41)" title="标签：面试题 ">面试题 (4)</a></li>

                <li><a class="tstyle-3" href="/tag/42.html" onclick="return recordId('tid',42)" title="标签：数据结构 ">数据结构 (2)</a></li>

                <li><a class="tstyle-4" href="/tag/43.html" onclick="return recordId('tid',43)" title="标签：Redis ">Redis (2)</a></li>

                <li><a class="tstyle-1" href="/tag/44.html" onclick="return recordId('tid',44)" title="标签：Nosql ">Nosql (2)</a></li>

                <li><a class="tstyle-2" href="/tag/45.html" onclick="return recordId('tid',45)" title="标签：socket ">socket (4)</a></li>

                <li><a class="tstyle-3" href="/tag/46.html" onclick="return recordId('tid',46)" title="标签：UDP协议 ">UDP协议 (2)</a></li>

                <li><a class="tstyle-4" href="/tag/47.html" onclick="return recordId('tid',47)" title="标签：TCP协议 ">TCP协议 (1)</a></li>

                <li><a class="tstyle-1" href="/tag/48.html" onclick="return recordId('tid',48)" title="标签：SVN ">SVN (2)</a></li>

                <li><a class="tstyle-2" href="/tag/49.html" onclick="return recordId('tid',49)" title="标签：ajax ">ajax (2)</a></li>

                <li><a class="tstyle-3" href="/tag/50.html" onclick="return recordId('tid',50)" title="标签：模块功能 ">模块功能 (5)</a></li>

                <li><a class="tstyle-4" href="/tag/51.html" onclick="return recordId('tid',51)" title="标签：laravel ">laravel (2)</a></li>

                <li><a class="tstyle-1" href="/tag/52.html" onclick="return recordId('tid',52)" title="标签：LAMP ">LAMP (4)</a></li>

                <li><a class="tstyle-2" href="/tag/53.html" onclick="return recordId('tid',53)" title="标签：API ">API (1)</a></li>

                <li><a class="tstyle-3" href="/tag/54.html" onclick="return recordId('tid',54)" title="标签：VMware ">VMware (2)</a></li>

                <li><a class="tstyle-4" href="/tag/55.html" onclick="return recordId('tid',55)" title="标签：手机模板 ">手机模板 (11)</a></li>

                <li><a class="tstyle-1" href="/tag/56.html" onclick="return recordId('tid',56)" title="标签：源码项目 ">源码项目 (1)</a></li>

                <li><a class="tstyle-2" href="/tag/57.html" onclick="return recordId('tid',57)" title="标签：PC模板 ">PC模板 (3)</a></li>

                <li><a class="tstyle-3" href="/tag/58.html" onclick="return recordId('tid',58)" title="标签：XSS ">XSS (1)</a></li>

                <li><a class="tstyle-4" href="/tag/59.html" onclick="return recordId('tid',59)" title="标签：开发工具 ">开发工具 (2)</a></li>

                <li><a class="tstyle-1" href="/tag/60.html" onclick="return recordId('tid',60)" title="标签：小程序 ">小程序 (7)</a></li>

                <li><a class="tstyle-2" href="/tag/61.html" onclick="return recordId('tid',61)" title="标签：图片上传 ">图片上传 (3)</a></li>

                <li><a class="tstyle-3" href="/tag/62.html" onclick="return recordId('tid',62)" title="标签：学习 ">学习 (3)</a></li>

                <li><a class="tstyle-4" href="/tag/63.html" onclick="return recordId('tid',63)" title="标签：正则表达式 ">正则表达式 (1)</a></li>

                <li><a class="tstyle-1" href="/tag/64.html" onclick="return recordId('tid',64)" title="标签：http协议 ">http协议 (2)</a></li>

                <li><a class="tstyle-2" href="/tag/65.html" onclick="return recordId('tid',65)" title="标签：软件安装 ">软件安装 (2)</a></li>

                <li><a class="tstyle-3" href="/tag/66.html" onclick="return recordId('tid',66)" title="标签：Composer ">Composer (1)</a></li>

                <li><a class="tstyle-4" href="/tag/67.html" onclick="return recordId('tid',67)" title="标签：SSL ">SSL (1)</a></li>

                <li><a class="tstyle-1" href="/tag/68.html" onclick="return recordId('tid',68)" title="标签：个人站长 ">个人站长 (1)</a></li>

                <li><a class="tstyle-2" href="/tag/69.html" onclick="return recordId('tid',69)" title="标签：文件上传 ">文件上传 (0)</a></li>

                <li><a class="tstyle-3" href="/tag/70.html" onclick="return recordId('tid',70)" title="标签：验证码 ">验证码 (1)</a></li>

                <li><a class="tstyle-4" href="/tag/71.html" onclick="return recordId('tid',71)" title="标签：github ">github (1)</a></li>

                <li><a class="tstyle-1" href="/tag/72.html" onclick="return recordId('tid',72)" title="标签：Tomcat ">Tomcat (2)</a></li>

                <li><a class="tstyle-2" href="/tag/73.html" onclick="return recordId('tid',73)" title="标签：Eclipse ">Eclipse (2)</a></li>

                <li><a class="tstyle-3" href="/tag/74.html" onclick="return recordId('tid',74)" title="标签：C指针 ">C指针 (0)</a></li>

                <li><a class="tstyle-4" href="/tag/75.html" onclick="return recordId('tid',75)" title="标签：存储器 ">存储器 (1)</a></li>

                <li><a class="tstyle-1" href="/tag/76.html" onclick="return recordId('tid',76)" title="标签：Memcached ">Memcached (1)</a></li>
            </ul>
        </div>
        <!--最近会员-->

        <!-- <div class="cloud bg-color animation-div">

            <h4 class="index-title"><i class="el el-torso"></i>活跃会员<small>Active Members</small></h4>

            <ul id="3dcloud">

                <li>
                                    <a  class="orange-text" href="./Index/picture/id/1.html" title="杨青个人博客">
                                    <img class="img-circle" alt="杨青个人博客" src="/home/images/2016411192233455.jpg" title="杨青个人博客"/>
                                    </a>
                            </li><li>
                                    <a  class="orange-text" href="./Index/picture/id/2.html" title="卢松松博客">
                                    <img class="img-circle" alt="卢松松博客" src="/home/images/2016418225948574.jpg" title="卢松松博客"/>
                                    </a>
                            </li><li>
                                    <a  class="orange-text" href="./Index/picture/id/3.html" title="个人博客主页欣赏">
                                    <img class="img-circle" alt="个人博客主页欣赏" src="/home/images/20161225585ea5215cfc2.jpg" title="个人博客主页欣赏"/>
                                    </a>
                            </li><li>
                                    <a  class="orange-text" href="./Index/picture/id/4.html" title="月光博客">
                                    <img class="img-circle" alt="月光博客" src="/home/images/201701095872e61ed4a98.jpg" title="月光博客"/>
                                    </a>
                            </li><li>
                                    <a  class="orange-text" href="./Index/picture/id/5.html" title="全球中文网站前5排行榜">
                                    <img class="img-circle" alt="全球中文网站前5排行榜" src="/home/images/201705085872e61ed4a98.jpg" title="全球中文网站前5排行榜"/>
                                    </a>
                            </li><li>
                                    <a  class="orange-text" href="./Index/picture/id/6.html" title="laravel框架个人博客系统">
                                    <img class="img-circle" alt="laravel框架个人博客系统" src="/home/images/2017061559425a3e45e41.jpg" title="laravel框架个人博客系统"/>
                                    </a>
                            </li><li>
                                    <a  class="orange-text" href="./Index/picture/id/7.html" title="企业招聘前端工程师面试题">
                                    <img class="img-circle" alt="企业招聘前端工程师面试题" src="/home/images/201708155992a4329eefe.jpg" title="企业招聘前端工程师面试题"/>
                                    </a>
                            </li><li>
                                    <a  class="orange-text" href="./Index/picture/id/8.html" title="优秀的网站设计欣赏">
                                    <img class="img-circle" alt="优秀的网站设计欣赏" src="/home/images/201801265a6aa5325b5b4.jpg" title="优秀的网站设计欣赏"/>
                                    </a>
                            </li>
            </ul>

        </div> -->

    </aside>
    <!--=========END右侧==========-->

</div>
<!--主题框架结束-->
<!---底部开始-->
<footer>
    <div class="footer-area">
        <!--博客相关-->
        <div class="about-blog">
            <h4>素材排行</h4>
            <div class="ft-part1">
                <!--素材排行-->
                <ul class="paihang-ul" style="display:block;width:100%;">
                    <li><span></span><a href="./Index/downdetail/id/3.html" title="杨青个人博客模板分享"> 杨青个人博客模板分享<b>(5713)</b></a></li><li><span></span><a href="./Index/downdetail/id/6.html" title="个人博客模板下载（emlog系统）"> 个人博客模板下载（emlog系统）<b>(4122)</b></a></li><li><span></span><a href="./Index/downdetail/id/2.html" title="柠檬绿兔小白个人博客模板下载"> 柠檬绿兔小白个人博客模板下载<b>(3000)</b></a></li><li><span></span><a href="./Index/downdetail/id/5.html" title="jQuery俄罗斯方块小游戏下载"> jQuery俄罗斯方块小游戏下载<b>(1796)</b></a></li><li><span></span><a href="./Index/downdetail/id/4.html" title="juqery图片特效轮播图插件（转动）"> juqery图片特效轮播图插件（转动）<b>(1724)</b></a></li>				</ul>
            </div>
        </div>
        <!--最新留言-->
        <div class="close-fd mob-hidden">
            <h4>留言频道</h4>
            <ul >
                <li>
                    <div class="sd-tx">
                        <a href="./Index/feedback.html/#Comment-262"  target="_blank" rel="nofollow" title="去留言板看看?">

                            <img src="/home/images/Portrait/95.jpg" alt="宋耀锋" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span>宋耀锋</span>
                        <a class="blue-text" href="./Index/feedback.html/#Comment-262" title="留言频道重新开通了！" >留言频道重新开通了！</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="./Index/feedback.html/#Comment-261"  target="_blank" rel="nofollow" title="去留言板看看?">

                            <img src="/home/images/Portrait/86.jpg" alt="xjian" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span>xjian</span>
                        <a class="blue-text" href="./Index/feedback.html/#Comment-261" title="不知道该说啥好" >不知道该说啥好</a>
                    </div>
                </li><li>
                    <div class="sd-tx">
                        <a href="./Index/feedback.html/#Comment-260"  target="_blank" rel="nofollow" title="去留言板看看?">

                            <img src="/home/images/Portrait/73.jpg" alt="town" class="img-circle"/>
                        </a>
                    </div>
                    <div class="sd-name">
                        <span>town</span>
                        <a class="blue-text" href="./Index/feedback.html/#Comment-260" title="https://townwang.com   交换友链  可以的话去我博客留言 帮我增点人气" >https://townwang.com   交换友链  可以的话去我博客留言 帮我增点人气</a>
                    </div>
                </li>    </ul>
        </div>

        <!--图文频道-->
        <div class="tuwen-pd mob-hidden">
            <h4>博主相册</h4>
            <ul >
                <li>
                    <a  class="orange-text" href="./Index/picture/id/1.html" title="杨青个人博客">
                        <img class="img-circle" alt="杨青个人博客" src="/home/images/2016411192233455.jpg" title="杨青个人博客"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="./Index/picture/id/2.html" title="卢松松博客">
                        <img class="img-circle" alt="卢松松博客" src="/home/images/2016418225948574.jpg" title="卢松松博客"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="./Index/picture/id/3.html" title="个人博客主页欣赏">
                        <img class="img-circle" alt="个人博客主页欣赏" src="/home/images/20161225585ea5215cfc2.jpg" title="个人博客主页欣赏"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="./Index/picture/id/4.html" title="月光博客">
                        <img class="img-circle" alt="月光博客" src="/home/images/201701095872e61ed4a98.jpg" title="月光博客"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="./Index/picture/id/5.html" title="全球中文网站前5排行榜">
                        <img class="img-circle" alt="全球中文网站前5排行榜" src="/home/images/201705085872e61ed4a98.jpg" title="全球中文网站前5排行榜"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="./Index/picture/id/6.html" title="laravel框架个人博客系统">
                        <img class="img-circle" alt="laravel框架个人博客系统" src="/home/images/2017061559425a3e45e41.jpg" title="laravel框架个人博客系统"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="./Index/picture/id/7.html" title="企业招聘前端工程师面试题">
                        <img class="img-circle" alt="企业招聘前端工程师面试题" src="/home/images/201708155992a4329eefe.jpg" title="企业招聘前端工程师面试题"/>
                    </a>
                </li><li>
                    <a  class="orange-text" href="./Index/picture/id/8.html" title="优秀的网站设计欣赏">
                        <img class="img-circle" alt="优秀的网站设计欣赏" src="/home/images/201801265a6aa5325b5b4.jpg" title="优秀的网站设计欣赏"/>
                    </a>
                </li>			</ul>
        </div>
        <!--数据统计-->
        <div class="data-count ">
            <h4>数据统计</h4>
            <ul>

                <li><span><i class="el-picture"></i>图片数量：</span><a title="共有 21 张图片">21</a> 张</li>
                <li><span><i class="el-headphones"></i>说说数量：</span><a title="共有 62 条说说">62</a> 条</li>
                <li><span><i class="el-pencil"></i>文章数量：</span><a title="共有 108 篇文章">108</a> 篇</li>
                <li><span><i class="el-comment"></i>留言数量：</span><a title="共有 95 条留言">95</a> 条</li>
                <li><span><i class="el-comment-alt"></i>评论数量：</span><a title="共有 26 条评论">26</a> 条</li>
                <li><span><i class="el-paper-clip"></i>素材个数：</span><a title="共有 24 个">24</a> 个</li>
                <li><span><i class="el-cog"></i>运行天数：</span><a title="宋耀锋博客 已正常运行 779 天">779</a> 天</li>

                <li><span><i class="el-adjust-alt"></i>访问统计：</span><a title="累计访问48972">48972</a> 次</a></li>

                <!--<li><span><i class="el-arrow-up"></i>4天前 12:15</span><a title="晓晓 最后更新了文章" >更新了<b class="lable">文章</b></a></li>-->

            </ul>
        </div>

    </div>
    <!--底部导航-->
    <div class="foot-nav">
        <div class="copy-right"><span >CopyRight &#169; 2015-2017 宋耀锋博客 &#160;Design by Lei</span></div>
        <div class="bottom-nav">
            <span><a href="http://www.100txy.com/sitemap.xml" target="_blank">网站地图</a>-<a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action"> 粤ICP备16001325号-1</a></span>
        </div>
    </div>
    <div  id="toTop">Back to Top</div>
    <script>
        window.onload=function(){
            $(".img_loading").removeClass("img_loading");
            $(".silde-title").show();
        }
        // 替换
        document.body.innerHTML = document.body.innerHTML.replace(/\[Q([0-9]*)\]/g, "<img src='/home/images/face/mr/$1.gif'/>");
        document.body.innerHTML = document.body.innerHTML.replace(/\[yc_([0-9]*)\]/g,"<img src='/home/images/face/yc/$1.gif'/>");
        document.body.innerHTML = document.body.innerHTML.replace(/\[ali_([0-9]*)\]/g,"<img src='/home/images/face/ali/$1.gif'/>");
    </script>


</footer>
<!---返回顶部-->
<!--换肤--->

<div class="select-skin">
    <div class="skin-btn">
        <a href="javascript:void(0);" class="skin-btn-open">换<br>肤</a>
    </div>

    <div class="skin-content">
        <h1>选择风格<span class="skin-close">关闭</span></h1>
        <div class="skin-content-list">
            <div class="skin-list"><a href="#" onclick="setActiveStyleSheet('qingxin'); return false;" class="btn1">清新</a></div>
            <div class="skin-list"><a href="#" onclick="setActiveStyleSheet('jianyue'); return false;" class="btn2">简约</a></div>
            <div class="skin-list"><a href="#" onclick="setActiveStyleSheet('qingshuang'); return false;" class="btn3">清爽</a></div>
        </div>
    </div>
</div>
<!---END 底部开始-->


<!-- <p><a href="javascript:void(0)" onClick="dashangToggle()" class="dashang" title="打赏，支持一下">APP下载</a></p> -->
<div class="hide_box"></div>
<div class="shang_box">
    <a class="shang_close" href="javascript:void(0)" onClick="dashangToggle()" title="关闭"><img src="/home/images/icon/close.jpg" alt="取消" /></a>
    <img class="shang_logo" src="/home/images/icon/logo2.png" alt="宋耀锋" />
    <div class="shang_tit">
        <p>感谢您的支持，我会继续努力的!</p>
    </div>
    <div class="shang_payimg">
        <img src="/home/images/icon/alipayimg.jpg" alt="扫码查看" title="扫一扫" />
    </div>

    <div class="pay_explain">1元=1金币，支付后关注公众号联系站长</div>

    <div class="shang_payselect">
        <div class="pay_item checked" data-id="alipay">
            <span class="radiobox"></span>
            <span class="pay_logo"><img src="/home/images/icon/alipay.jpg" alt="支付宝" /></span>
        </div>
        <div class="pay_item" data-id="weipay">
            <span class="radiobox"></span>
            <span class="pay_logo"><img src="/home/images/icon/wechat.jpg" alt="微信" /></span>
        </div>
    </div>
</div>
<!-- 手机端 -->
<div class="shang_box_wap">

    <a class="shang_close" href="javascript:void(0)" onClick="dashangToggle()" title="关闭"><img src="/home/images/icon/close.jpg" alt="取消" /></a>
    <div class="shang_tit">

        <p>感谢您的支持，我会继续努力的!</p>

    </div>

    <div class="shang_payimg">

        <img src="/home/images/icon/alipayimg.jpg" alt="扫码查看" title="扫一扫" />

    </div>


    <div class="pay_explain">长按二维码打赏，你说多少就多少</div>


    <div class="shang_payselect">

        <div class="pay_item checked" data-id="alipay">

            <span class="radiobox"></span>

            <span class="pay_logo"><img src="/home/images/icon/alipay.jpg" alt="支付宝" /></span>

        </div>

        <div class="pay_item" data-id="weipay">

            <span class="radiobox"></span>

            <span class="pay_logo"><img src="/home/images/icon/wechat.jpg" alt="微信" /></span>

        </div>

    </div>

</div>
<!-- 手机端end -->

<script type="text/javascript">
    $(function(){
        $(".pay_item").click(function(){
            $(this).addClass('checked').siblings('.pay_item').removeClass('checked');
            var dataid=$(this).attr('data-id');
            $(".shang_payimg img").attr("src","/home/images/icon/"+dataid+"img.jpg");
            $("#shang_pay_txt").text(dataid=="alipay"?"支付宝":"微信");
        });
    });
    function dashangToggle(){
        $(".hide_box").fadeToggle();
        var is_pc=IsPC();
        if(is_pc==true){
            $(".shang_box").fadeToggle();
        }else{
            $(".shang_box_wap").fadeToggle();
        }
    }
    // 判断是不是手机端
    function IsPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = ["Android", "iPhone",
            "SymbianOS", "Windows Phone",
            "iPad", "iPod"];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }
</script>

<style type="text/css">
    .TY-login-window {
        font-size:12px;
        line-height:1.5;
        font-family:"微软雅黑",Arial,Helvetica;
        padding:15px;
        /*background:#fff;
        border-radius:6px;*/
    }
    .login-window-header {
        height:65px;
        overflow:hidden;
        position:relative;
        *zoom:1;
    }
    .loginWin-tab {
        text-align:center;
        margin-bottom:15px;
    }
    .loginWin-tab-list {
        display:inline-block;
        vertical-align:middle;
        *display:inline;
        *zoom:1;
    }
    .loginWin-tab-list li {
        float:left;
        display:inline;
        border-bottom:1px solid #aaa;
        color:#aaa;
        width:143px;
        height:21px;
        line-height:21px;
    }
    .loginWin-tab-list li span {
        padding-left:16px;
        /*background:url(resources/images/loginWin_icons.png?_v=20170104) no-repeat;*/
        cursor:pointer;
    }
    .loginWin-tab-list .normal-login-tab span {
        background-position:0 -159px;
    }
    .loginWin-tab-list .qrcode-login-tab span {
        background-position:0 -95px;
    }
    .loginWin-account {
        width:286px;
        margin:0 auto 15px;
    }
    .loginWin-account-title {
        color:#000;
        font-size:14px;
        margin-bottom:15px;
        text-indent:10px;
    }
    .loginWin-account-list {
        margin-right:-10px!important;
        height:152px;
        overflow:hidden;
    }
    .loginWin-account-list li {
        float:left;
        display:inline;
        margin-right:10px;
    }
    .loginWin-account-list li a {
        display:block;
        padding:9px 10px;
        line-height:20px;
        width:118px;
        color:#aaa;
        white-space:nowrap;
        text-overflow:ellipsis;
        overflow:hidden;
        text-decoration:none;
    }
    .loginWin-account-list li a:hover {
        color:#308ee3;
    }
    .loginWin-account-list li.checked a {
        color:#fff;
        background:#308ee3;
        border-radius:6px;
    }
    .loginWin-account-list li.checked a:hover {
        color:#fff;
    }
    .loginWin-form {
        color:#000;
    }
    .loginWin-login-form {
        width:286px;
        margin:0 auto;
    }
    .loginWin-login-form a,.loginWin-login-form a:link,.loginWin-login-form a:visited {
        color:#308ee3;
        text-decoration:none;
    }
    .loginWin-login-form a:hover,.loginWin-login-form a:active {
        color:#308ee3;
        text-decoration:underline;
    }
    .loginWin-form-item {
        margin-bottom:10px;
    }
    .loginWin-form-item .input-text {
        border:1px solid #aaa;
        border-radius:6px;
        padding:6px 12px;
        width:286px;
        height:38px;
        line-height:38px;
        outline:0 none;
    }
    .loginWin-form-item .input-text:focus {
        border-color:#308ee3;
    }
    .loginWin-form-item .input-checkbox {
        vertical-align:middle;
        margin:-2px 4px 0 0;
        outline:0 none;
    }
    .loginWin-submit-btn {
        border:0 none;
        width:286px;
        height:38px;
        line-height:38px;
        font-size:16px;
        color:#fff;
        text-align:center;
        background:#308ee3;
        border-radius:6px;
        cursor:pointer;
        vertical-align:middle;
        outline:0 none;
    }
    .loginWin-account-input,.loginWin-password-input {
        position:relative;
        *zoom:1;
    }
    .loginWin-account-input .input-text,.loginWin-password-input .input-text {
        padding-left:42px;
        width:286;
    }
    .loginWin-account-input label,.loginWin-password-input label {
        position:absolute;
        width:24px;
        height:24px;
        font-size:0;
        line-height:0;
        left:12px;
        top:6px;
        background:url(/home/images/icon/loginWin_icons.png?_v=20170104) no-repeat;
    }
    .fr {
        float: right;
        display: inline;
    }
    .loginWin-account-input label {
        background-position:0 -256px;
    }
    .loginWin-password-input label {
        background-position:0 -338px;
    }
    .loginWin-account-input .input-text:focus ~ label {
        background-position:0 -296px;
    }
    .loginWin-password-input .input-text:focus ~ label {
        background-position:0 -381px;
    }
    .switch-login-toggle,.normal-login-toggle {
        color:#f9a30f;
        padding-left:15px;
        /*background:url(resources/images/loginWin_icons.png?_v=20170104) no-repeat;*/
        cursor:pointer;
    }
    .normal-login-toggle {
        background-position:0 -190px;
    }
    .switch-login-toggle {
        background-position:0 -223px;
    }
    .loginWin-qrcode {
        margin-top:50px;
        height:273px;
    }
    .loginWin-qrcode-box {
        width:180px;
        padding-left:216px;
        margin:0 auto;
        text-align:center;
        /*background:url(resources/images/loginWin_qrcode_bg.png?_v=20170104) no-repeat;*/
        position:relative;
        *zoom:1;
    }
    .loginWin-third {
        width:286px;
        margin:20px auto 0;
    }
    .loginWin-third-title {
        text-align:center;
        margin-bottom:20px;
        position:relative;
        *zoom:1;
    }
    .loginWin-third-title:before {
        content:"";
        width:100%;
        height:1px;
        background:#aaa;
        position:absolute;
        top:50%;
        left:0;
    }
    .loginWin-third-title span {
        padding:0 10px;
        color:#aaa;
        background:#fff;
        position:relative;
        *zoom:1;
    }
    .loginWin-third-list {
        margin-right:-53px!important;
        overflow:hidden;
    }
    .loginWin-third-list li {
        float:left;
        display:inline;
        width:60px;
        height:60px;
        margin-right:53px;
    }
    .loginWin-third-list li a {
        display:block;
        width:60px;
        height:60px;
        background:url(/home/images/icon/loginWin_third.png?_v=20170104) no-repeat;
    }
    .loginWin-third-list .weixin-login {
        background-position:0 0;
    }
    .loginWin-third-list .qq-login {
        background-position:0 -60px;
    }
    .loginWin-third-list .weibo-login {
        background-position:0 -120px;
    }
    /*手机端登录*/
    .loginwap-third-list li {
        float:left;
        display:inline;
        width:33.333%;
        height:40px;
        /*margin-right:32%;*/
    }
    .loginwap-third-list li a {
        display:block;
        width:40px;
        height:40px;
        margin-left: 34.76%;
        background:url(/home/images/icon/loginwap_third.png?_v=20170104) no-repeat;
    }
    .loginwap-third-list .weixin-login {
        background-position:0 0;
    }
    .loginwap-third-list .qq-login {
        background-position:0 -40px;
    }
    .loginwap-third-list .weibo-login {
        background-position:0 -80px;
    }

    #loginWin_content_wrapper {
        padding:10px 0;
    }
    .loginWin-switch-login-wrapper .loginWin-tab,.loginWin-switch-login-wrapper .loginWin-qrcode,.loginWin-switch-login-wrapper .loginWin-third,.loginWin-switch-login-wrapper .loginWin-account-input,.loginWin-switch-login-wrapper .loginWin-register-link,.loginWin-switch-login-wrapper .switch-login-toggle {
        display:none;
    }
    .loginWin-normal-login-wrapper .loginWin-account,.loginWin-normal-login-wrapper .loginWin-qrcode,.loginWin-normal-login-wrapper .normal-login-toggle {
        display:none;
    }
    .loginWin-normal-login-wrapper .normal-login-tab {
        border-bottom-color:#308ee3;
        color:#308ee3;
    }
    .loginWin-normal-login-wrapper .normal-login-tab span {
        background-position:0 -127px;
        cursor:text;
    }
    .loginWin-qrcode-login-wrapper .loginWin-account,.loginWin-qrcode-login-wrapper .loginWin-form,.loginWin-qrcode-login-wrapper .loginWin-third {
        display:none;
    }
    .loginWin-qrcode-login-wrapper .qrcode-login-tab {
        border-bottom-color:#308ee3;
        color:#308ee3;
    }
    .loginWin-qrcode-login-wrapper .qrcode-login-tab span {
        background-position:0 -64px;
        cursor:text;
    }
</style>
<div class="hide_box2"></div>
<div class="shang_box2">
    <a class="shang_close2" href="javascript:void(0)" onClick="dashangToggle2()" title="关闭"><img src="/home/images/icon/close.jpg" alt="取消" /></a>
    <img class="shang_logo2" src="/home/images/icon/logo2.png" alt="宋耀锋博客" />
    <!-- <div class="ty-content clearfix shang_box2" style="padding:0;"> -->
    <div class="TY-login-window">

        <div class="login-window-body">
            <div id="loginWin_content_wrapper" class="loginWin-normal-login-wrapper">
                <div class="loginWin-tab">
                    <ul class="loginWin-tab-list cf">
                        <li class="normal-login-tab"><span>普通登录</span></li>
                        <li class="qrcode-login-tab"><span>扫码登录</span></li>
                    </ul>
                </div>
                <div class="loginWin-form">
                    <form class="loginWin-login-form" id="topguideloginform" name="topguideloginform" method="post" action="javascript::void(0);" accept-charset="UTF-8" target="_top">
                        <div class="loginWin-form-item loginWin-account-input"><input type="text" class="input-text" id="vwriter" name="vwriter" placeholder="用户名/手机/邮箱" autocomplete="off">
                            <input type="hidden" id="user_action" name="action" value="f7.1483930809431.111114|b2de5928fa17c27cadcda46f7cd0197f|d41d8cd98f00b204e9800998ecf8427e|Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36|0|9|v2.2"><label for="vwriter"></label>
                        </div>
                        <div class="loginWin-form-item loginWin-password-input">
                            <input type="password" class="input-text" id="vpassword" name="vpassword" placeholder="密码"><label for="vpassword"></label>
                        </div>
                        <div class="loginWin-form-item cf"><label class="fl">
                                <input type="checkbox" class="input-checkbox" id="rmflag" name="rmflag" value="1" checked="checked">下次自动登录</label><a class="loginWin-password-link fr" href="javascript::void(0);" onclick="return alert('暂不开放！');" target="_blank">忘记密码？</a>
                        </div>
                        <div class="loginWin-form-item"><button type="submit" onclick="return alert('暂不开放，请选择第三方！');" class="loginWin-submit-btn">登 录</button>
                        </div>
                        <div class="cf"><a class="loginWin-register-link fl" href="javascript::void(0);" onclick="return alert('暂不开放，请选择第三方！');" target="_blank">立即注册</a><span class="normal-login-toggle fr">返回登录</span>
                        </div>
                    </form>
                </div>
                <div class="loginWin-third"><p class="loginWin-third-title"><span>使用第三方账号登录</span></p>
                    <ul class="loginWin-third-list cf">
                        <li><a class="weixin-login" title="微信账号登录" href="./User/oauth_login/type/wechat.html"></a></li>
                        <li><a class="qq-login" title="QQ账号登录" href="./User/oauth_login/type/qq.html"></a></li>
                        <li><a class="weibo-login" title="新浪微博账号登录" href="./User/oauth_login/type/sina.html"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- <ul class="row">
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="./User/oauth_login/type/qq.html"><img src="/home/images/icon/qq-login.png" alt="QQ登录" title="QQ登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="./User/oauth_login/type/sina.html"><img src="/home/images/icon/sina-login.png" alt="微博登录" title="微博登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="./User/oauth_login/type/douban.html"><img src="/home/images/icon/douban-login.png" alt="豆瓣登录" title="豆瓣登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="./User/oauth_login/type/renren.html"><img src="/home/images/icon/renren-login.png" alt="人人登录" title="人人登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="./User/oauth_login/type/kaixin.html"><img src="/home/images/icon/kaixin-login.png" alt="开心网登录" title="开心网登录"></a>
        </li>
        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
            <a href="./User/oauth_login.html"><img src="" alt="待定" title="待定"></a>
        </li>
    </ul> -->

</div>
<script type="text/javascript">
    function dashangToggle2(){
        $(".hide_box2").fadeToggle();
        $(".shang_box2").fadeToggle();
    }
</script>

</body>
<script>
    //判断是不是手机端
    function IsPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = ["Android", "iPhone",
            "SymbianOS", "Windows Phone",
            "iPad", "iPod"];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }
    var is_pc=IsPC();
    if(is_pc==false){
        $("#authorad").css('display','none');
    }
</script>
</html>