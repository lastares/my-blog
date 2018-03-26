<!--导航开始-->
@include('home.index.common.top')
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
                    <li><a href="#Comment" title="转到评论"><i class="el-comment"></i>{{ $data->commentCount }}条</a></li>
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
        <!--随机推荐-->
        {{--<div class="maybe-love">--}}
            {{--<h4 class="index-title"><i class="el-heart"></i>您还可能喜欢</h4>--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<a href="/article/71.html">--}}
                        {{--<img src="/home/images/2017032958db625a684a9.png"  alt="jquery ajax异步加载分类文章实例" title="jquery ajax异步加载分类文章实例" />--}}
                        {{--<span >jquery ajax异步加载分类文章实例</span>--}}
                    {{--</a>--}}
                {{--</li><li>--}}
                    {{--<a href="/article/34.html">--}}
                        {{--<img src="/home/images/201612295864dab12c7bd.jpg"  alt="ecos框架入门之留言板开发" title="ecos框架入门之留言板开发" />--}}
                        {{--<span >ecos框架入门之留言板开发</span>--}}
                    {{--</a>--}}
                {{--</li><li>--}}
                    {{--<a href="/article/19.html">--}}
                        {{--<img src="/home/images/585949886ec58.jpg"  alt="10个吸引百度蜘蛛爬行网站的技巧" title="10个吸引百度蜘蛛爬行网站的技巧" />--}}
                        {{--<span >10个吸引百度蜘蛛爬行网站的技巧</span>--}}
                    {{--</a>--}}
                {{--</li><li>--}}
                    {{--<a href="/article/38.html">--}}
                        {{--<img src="/home/images/20170118587f0307db632.jpg"  alt="一个php程序员的学习过程" title="一个php程序员的学习过程" />--}}
                        {{--<span >一个php程序员的学习过程</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        <!--评论列表-->

        <!--END评论列表-->
        <!--评论表单-->
        <h3 class="form-btn blue-text" ><a href="javascript:;" ><i class="el-edit"></i>我要评论 / 展开表单</a></h3>
        <!-- 通用评论开始 -->
        <script>
            var userEmail= "{{ session('user.email') }}";
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
                height: auto;
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
                    &nbsp;<i class="el el-reddit" onclick="getTuzki(this)"></i>
                    <input style="height:30px;width:21%;font-size:12px;margin-top:1px;" class="form-control b-email" type="text" name="email" @if(empty(session('user.email'))) placeholder="亲，邮箱请到会员中心认证" value="" @else value="{{ session('user.email') }}"  @endif disabled>
                    <div class="b-tuzki">

                    </div>
                </li>
                <li class="b-submit-button">
                    <input type="hidden" name="csrf_token" value="{{ csrf_token() }}" id="csrf_token" />
                    <input type="button" style="cursor: pointer;" value="评 论" aid="{{ request()->id}}" pid="0" onclick="comment(this)">
                </li>
                <li class="b-clear-float"></li>
            </ul>
        </div>

        <!-- 新的评论 -->
        <div class="comment-area" id="Comment">
            <h4 class="index-title"><i class="el el-comment-alt"></i> 当前共有<span>{{ count($comment) }}</span> 条评论
                {{--<a href="Comment/"><i class="el el-th-list"></i>浏览所有评论</a>--}}
            </h4>
            <ul class="b-user-comment">
                {{--<li class="bg-color">--}}
                    {{--<div class="comment-ava">--}}
                        {{--<a href="#" id="Comment-137" target="_blank" rel="nofollow" title="蓝笑灵晨">--}}
                            {{--<img class="img-circle" src="http://qzapp.qlogo.cn/qzapp/101370818/18298955B2ED231527EC85FE74F8DBCC/100" alt="蓝笑灵晨"/></a>--}}
                        {{--<!--<span><i class="el-user"></i>木杉</span>-->--}}
                    {{--</div>--}}
                    {{--<div class="comment-info ">--}}
                        {{--<div class="comment-line ">--}}
                            {{--<ul>--}}
                                {{--<li><a ><i class="el-user"></i>蓝笑灵晨</a></li>--}}
                                {{--<li><a title="发表于2016-7-8"><i class="el-time"></i>2018-02-07 16:42:32</a></li>--}}
                                {{--<li><a title="蓝笑灵晨 当前位于：中国浙江杭州"><i class="el-map-marker"></i>中国浙江杭州</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="comment-content">来来来&nbsp;<a href="javascript:;" aid="120" pid="316" username="蓝笑灵晨" onclick="reply(this)"><button style="background:#da1a8d;color:#f3efef;">回复</button></a></div>--}}
                        {{--<!--回复-->--}}
                        {{--<ul class="re-comment">--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</li>--}}
                @foreach($comment as $k1 => $v1)
                <li class="bg-color">
                    <div class="comment-ava">
                        <a href="#" id="Comment-137" target="_blank" rel="nofollow" title="{{ $v1['name'] }}">
                            <img class="img-circle" src="{{ $v1['avatar'] }}" alt="{{ $v1['name'] }}"/></a>
                        <!--<span><i class="el-user"></i>木杉</span>-->
                    </div>
                    <div class="comment-info ">
                        <div class="comment-line ">
                            <ul>
                                <li><a ><i class="el-user"></i>{{ $v1['name'] }}&nbsp;</a></li>
                                <li><a title="发表于{{ $v1['created_at'] }}"><i class="el-time"></i>{{ $v1['created_at'] }}</a>&nbsp;</li>
                                <li><a title="{{ $v1['name'] }} 当前位于：{{ $v1['city'] }}"><i class="el-map-marker"></i>{{ $v1['city'] }}</a></li>
                            </ul>
                        </div>
                        <div class="comment-content">
                            {!! $v1['content'] !!}
                            <a href="javascript:;" aid="{{ request()->id }}" pid="{{ $v1['id'] }}" username="{{ $v1['name'] }}" onclick="reply(this)"><button style="background:#da1a8d;color:#f3efef;">回复</button></a>
                        </div>
                        <!--回复-->
                        <ul class="re-comment">
                            @foreach($v1['child'] as $m => $n)
                            <li style="border-left:none;">
                                <div class="admin-ava">
                                    <img src="{{ $n['avatar'] }}" alt="{{ $n['name'] }}" title="{{ $n['name'] }}" class="img-circle"></div>
                                <div class="re-info">
                                <span>
                                    <img src="/home/images/icon/ok.png"><a href="#" target="_blank">{{ $n['name'] }}</a><time>{{ $n['created_at'] }}</time> 回复 <a href="#Comment-1">{{ $n['reply_name'] }}</a>
                                </span>
                                <div class=" re-content">{!! $n['content'] !!}<a href="javascript:;" aid="{{ request()->id }}" pid="{{ $n['id'] }}" username="{{ $v1['name'] }}" childname="{{ $n['name'] }}" onclick="reply(this)"><button style="background:#da1a8d;color:#f3efef;">回复</button></a></div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>
        <!-- 通用评论结束 -->

    </section>
    <!--左侧结束-->
    <!--=========右侧开始==========-->
    @include('home.index.common.right')
    <!--=========END右侧==========-->
</div>
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')
<div class="hide_box"></div>
<div class="shang_box">
    <a class="shang_close" href="javascript:void(0)" onClick="dashangToggle()" title="关闭"><img src="/home/images/icon/close.jpg" alt="取消" /></a>
    <img class="shang_logo" src="/home/images/icon/logo.png" alt="宋耀锋" />
    <div class="shang_tit">
        <p>感谢您的支持，我会继续努力的!</p>
    </div>
    <div class="shang_payimg">
        <img src="/home/images/icon/alipayimg.jpg" alt="扫码查看" title="扫一扫" />
    </div>

    <div class="pay_explain">感谢阅读本篇文章</div>

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

<script>
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
<!---底部结束-->