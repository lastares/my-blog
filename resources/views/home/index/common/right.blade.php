<aside class="myaside">

    <!--关注我开始-->
    <div class="focus-me bg-color animation-div">

        <h4 class="index-title"><i class="el-heart"></i>关注我<small>Focus Me</small></h4>

        <div class="xiangguan">

            <div><a class="benbo" href="JavaScript:void(0);" rel="nofollow" onclick="personMail();"><i class="el el-rss"></i></a><span>个人邮箱</span></div>
            <!-- <div><a class="benbo" href="#" target="_blank"><span id="qq" style="padding-top:45px;">QQ空间</span></a><span>QQ空间</span></div> -->
            <div><a class="taobao" href="https://github.com/songyaofeng"  rel="nofollow" target="_blank"><i class="el el-github"></i></a><span>github</span></div>

            <div><a class="side-fx"><i class="el-share-alt"></i></a><span>分享本博</span></div>

            <div><a class="mail-btn" href="javascript:;"><i class="el el-picasa"></i></a><span>头条号</span></div>

        </div>

        <div class="mail-dy">
            <img src="/home/images/icon/weixin.jpg">
            <i class="el-remove fx-close" style="cursor:pointer;"></i>
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
    <!--关注我结束-->

    <!--右侧个人统计开始-->
    <div class="web-author bg-color animation-div">
        <div class="author-tx">
            <a class="img-circle" href="/Home/Index/about.html" title="点击查看详细信息">
                <img class="img-circle" src="/home/images/ava.jpg"/>
            </a>
        </div>
        <div class="author-name"><span class="blue-text">宋耀锋</span><p>PHPer</p></div>
        <div class="data-info">
            <ul>
                <li><strong>{{ $articleCreateCount }}</strong><span>原创</span></li>
                <li><strong>{{ $articleTransferCount }}</strong><span>转载</span></li>
                <li><strong>{{ $articleClickCount }}</strong><span>点击量</span></li>
                {{--<li><strong>1</strong><span>今日会员</span></li>--}}
                {{--<li><strong>89</strong><span>今日访问ip</span></li>--}}
                {{--<li><strong>108</strong><span>文章数量</span></li>--}}
                {{--<li><strong>106</strong><span>今日访客</span></li>--}}
            </ul>

        </div>

    </div>
    <!--右侧个人统计结束-->

    <!--搜索开始-->
    <div class="search animation-div">
        <form action="{{ url('search') }}" method="get">
            <div class="search-index">
                <input name="wd" type="text"  placeholder="请输入关键字" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键字'" />
                <i class="el-search"><input value=" " type="submit"/></i>
            </div>
        </form>
    </div>
    <!--搜索结束-->

    <!--最新更新-->

    <div class="clos-new bg-color animation-div">

        <h4 class="index-title"><i class="el-bulb"></i>最新更新<small>Close New</small></h4>

        <ul>

            <!-- <li><i class="el-cloud"></i><iframe id="tianqi"  scrolling="no" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></li> -->

            <li><span><i class="el-arrow-up"></i>最近：<font class="blue-text">宋耀锋</font> 前天&nbsp;&nbsp;17:55</span><a title="Thinkphp5模板继承和替换的问题" > 更新了<b class="lable">文章</b></a></li>

            <li><i class="el-calendar"></i>历史上的今天：<a title="1936年2月3日 红军抗日先锋军渡河东征" class="orange-text">红军抗日先锋军渡河东征</a></li>

        </ul>

    </div>

    <!--说说-->
    <div class="bg-color animation-div">
        <h4 class="index-title"><i class="el-headphones"></i>说说<small>Shuo Shuo</small></h4>
        <div class="shuo-side">
            <ul>
                <li id="Hots">
                    <span class="shuobg1"><strong>01-27 </strong></span>
                    <div><a title="PHP 可以获取客户端哪些访问信息" href="/chatdetail/73.html" >PHP 可以获取客户端哪些访问信息</a><b title="点击23">(23)</b></div>
                </li><li id="Hots">
                    <span class="shuobg2"><strong>01-25 </strong></span>
                    <div><a title="You have new mail in /var/spool/mail/root" href="/chatdetail/72.html" >You have new mail in /var/spool/mail/root</a><b title="点击25">(25)</b></div>
                </li><li id="Hots">
                    <span class="shuobg3"><strong>01-24 </strong></span>
                    <div><a title="jQuery实现获取短信邮箱验证码倒计时" href="/chatdetail/71.html" >jQuery实现获取短信邮箱验证码倒计时</a><b title="点击36">(36)</b></div>
                </li>		</ul>
        </div>
    </div>
    <!--推荐图文-->
    <div class="article-push  bg-color animation-div">
        <h4 class="index-title"><i class="el-asl"></i>推荐图文<small>Push Article</small></h4>
        <ul>
            @foreach($topArticle as $kk => $vv)
                <li>
                    <div class="arcimg img_loading">
                        <a href="{{ url('article', ['id' => $vv->id]) }}" target="_blank">
                            <img src="{{ $vv->cover }}" alt="{{ $vv->title }}" title="{{ $vv->title }}">
                        </a>
                    </div>
                    <div class="arc-right">
                        <h4 class="blue-text"><a href="{{ url('article', ['id' => $vv->id]) }}">{{ $vv->title }}</a></h4>
                        <p>{{ $vv->description }}</p>
                        <ul>
                            <li><a title="发表于{{ $vv->created_at }}"><i class="el-time"></i>{{ $vv->created_at }}</a></li>
                            <li><a title="{{ $vv->click }} 次浏览"><i class="el-fire"></i>{{ $vv->click }}</a></li>
                        </ul>
                    </div>
                </li>
            @endforeach
            {{--<li>--}}
            {{--<div class="arcimg img_loading">--}}
            {{--<a href="/article/57.html" target="_blank">--}}
            {{--<img src="/home/images/2017032458d52f2124932.jpg" alt="Linux服务器运维常用操作命令" title="Linux服务器运维常用操作命令">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="arc-right">--}}

            {{--<h4 class="blue-text"><a href="/article/57.html">Linux服务器运维常用操作命令</a></h4>--}}

            {{--<p>我把自己常用的Linux操作命令总结一下，以后用的时候也方便查找</p>--}}

            {{--<ul>--}}

            {{--<li><a title="发表于2017-03-23"><i class="el-time"></i>2017-03-23</a></li>--}}

            {{--<li><a title="1087次浏览"><i class="el-fire"></i>1087</a></li>--}}

            {{--</ul>--}}

            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<div class="arcimg img_loading">--}}
            {{--<a href="/article/50.html" target="_blank">--}}
            {{--<img src="/home/images/2017030258b7a67fe3a5c.jpg" alt="Windows Redis安装及使用" title="Windows Redis安装及使用">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="arc-right">--}}
            {{--<h4 class="blue-text"><a href="/article/50.html">Windows Redis安装及使用</a></h4>--}}
            {{--<p>Redis是一个开源的使用ANSI C语言编写、遵守BSD协议、支持网络、可基于内存亦可持久化的日志型、Key-Value数据库，并提供多种语言的API。它通常被称为数据结构服务器</p>--}}
            {{--<ul>--}}
            {{--<li><a title="发表于2017-03-02"><i class="el-time"></i>2017-03-02</a></li>--}}
            {{--<li><a title="807次浏览"><i class="el-fire"></i>807</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</li>--}}
        </ul>
    </div>

    <!--文章排行tab-->

    <div class="mytab bg-color animation-div">

        <div class="tab-btn">
            <a class="hd-btn tab-active"href="javascript:;"><i class="el-comment-alt"></i>文章互动</a><a class="ph-btn"href="javascript:;"><i class="el-signal"></i>文章排行</a>
        </div>

        <ul class="hudong-ul">
            <!--=======查询相册=============-->
            @foreach($newComment as $k => $comment)
            <li>
                <div class="sd-tx">
                    <a href="/article/{{ $comment->article_id }}" target="_blank" rel="nofollow" title="{{ $comment->title }}">
                        <img src="{{ $comment->avatar }}" alt="{{ $comment->name }}" class="img-circle"/>
                    </a>
                </div>
                <div class="sd-name">
                    <span><i class="el-user"></i>{{ $comment->name }}<time >{{ $comment->created_at }}</time></span>
                    <a class="blue-text" href="/article/{{ $comment->article_id }}" title="{{ $comment->title }}" >{{ $comment->title }}</a>
                </div>
            </li>
            @endforeach
        </ul>

        <!--文章排行-->

        <ul class="paihang-ul">
            @foreach($topArticle as $k1 => $v1)
            <li><span></span>
                <a href="/article/{{ $v1->id }}" title="{{ $v1->title }}">{{ str_limit($v1->title, 40) }}<b>({{ $v1->click }})</b></a>
            </li>
            @endforeach
            {{--<li><span></span>--}}
                {{--<a href="/article/102.html" title="微信小程序如何加载数据库真实数据？">微信小程序如何加载数据库真实数据？<b>(6027)</b></a>--}}
            {{--</li>--}}
            {{--<li><span></span>--}}
                {{--<a href="/article/42.html" title="个人网站微信授权登录功能怎么开发？">个人网站微信授权登录功能怎么开发？<b>(4133)</b></a></li>--}}
            {{--<li><span></span>--}}
                {{--<a href="/article/41.html" title="MySQL双引号、单引号转义保存详解">MySQL双引号、单引号转义保存详解<b>(4123)</b></a></li>--}}
            {{--<li><span></span><a href="/article/48.html" title="一位资深php程序员在北京的面试30个题目">一位资深php程序员在北京的面试30个题目<b>(3865)</b></a>--}}
            {{--</li>--}}
        </ul>

    </div>

    <!--标签-->

    <div class="cloud bg-color animation-div">

        <h4 class="index-title"><i class="el-tags"></i>标签云<small>Tags Clouds</small></h4>

        <ul id="3dcloud">
            @foreach($tag as $k1 => $v1)
                <li>
                    <a target="_blank" class="tstyle-{{ mt_rand(1, 4) }}" href="/tag/{{ $v1->id }}" onclick="return recordId('tid',{{ $v1->id }})" title="标签：{{ $v1->name }} ({{ $v1->article_count }} 篇文章) ">{{ $v1->name }}</a>
                </li>
            @endforeach
        </ul>

    </div>

    <!--左邻右舍-->

    <div class="side-link ">
        <h4 class="index-title"><i class="el-paper-clip"></i>左邻右舍<small>Friend Links</small><a href="/link.html"><i class="el el-plus"></i>申请</a></h4>
        <ul>
            @foreach($friendshipLink as $k2 => $v2)
                <li><a target="_blank" href="{{ $v2->url }}" target="_blank" title="{{ $v2->name }}">{{ $v2->name }}</a></li>
            @endforeach
        </ul>
    </div>

</aside>