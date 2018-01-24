@extends('layouts.home')
@section('title', $title)
@section('my-css')
    <style>
        #msgBox{width:100%;background:#fff;border-radius:4px;margin:10px auto;padding-top:10px;margin-top: -50px;}
        #msgBox form h2{font-weight:400;font:400 18px/1.5 \5fae\8f6f\96c5\9ed1;}
        #msgBox form{background:url(/home/images/boxBG.jpg) repeat-x 0 bottom;padding:20px 30px;}
        #userName,#conBox{color:#777;border:1px solid #d0d0d0;border-radius:4px;background:#fff url(/home/images/inputBG.png) repeat-x;padding:3px 5px;font:14px/1.5 arial;}
        #userName.active,#conBox.active{border:1px solid #7abb2c;}
        #userName{height:38px;}
        #conBox{width:100%;resize:none;min-height:140px;overflow:auto;}
        #msgBox form div{position:relative;color:#999;margin-top:10px;}
        #msgBox img{border-radius:3px;}
        #face{position:absolute;top:0;left:172px;}
        #face img{width:38px;height:38px;margin-left: 15px; cursor:pointer;margin-right:6px;opacity:0.5;filter:alpha(opacity=50);}
        #face img.hover,#face img.current{width:38px;height:38px;border:1px solid #028074;opacity:1;filter:alpha(opacity=100);}
        #sendBtn{border:0;width:112px;height:30px;cursor:pointer;margin-left:10px;background:url(/home/images/btn.png) no-repeat;}
        #sendBtn.hover{background-position:0 -30px;}
        #msgBox form .maxNum{font:26px/30px Georgia, Tahoma, Arial;padding:0 5px;}
        #msgBox .list{padding:30px;}
        #msgBox .list h3{position:relative;height:33px;font-size:14px;font-weight:400;background:#e3eaec;border:1px solid #dee4e7;}
        #msgBox .list h3 span{position:absolute;left:6px;top:6px;background:#fff;line-height:38px;display:inline-block;padding:0 15px;}
        #msgBox .list ul{overflow:hidden;zoom:1;}
        #msgBox .list ul li{float:left;clear:both;width:100%;border-bottom:1px dashed #d8d8d8;padding:10px 0;background:#fff;overflow:hidden;}
        #msgBox .list ul li.hover{background:#f5f5f5;}
        #msgBox .list .userPic{float:left;width:50px;height:50px;display:inline;margin-left:10px;border:1px solid #ccc;border-radius:3px;}
        #msgBox .list .content_box{float:left;width:600px;font-size:14px;margin-left:10px;font-family:arial;word-wrap:break-word;}
        #msgBox .list .userName{display:inline;padding-right:5px;}
        #msgBox .list .userName a{color:#2b4a78;}
        #msgBox .list .msgInfo{display:inline;word-wrap:break-word;}
        #msgBox .list .times{color:#889db6;font:12px/18px arial;margin-top:5px;overflow:hidden;zoom:1;}
        #msgBox .list .times span{float:left;}
        #msgBox .list .times a{float:right;color:#889db6;display:none;}
        .tr{overflow:hidden;zoom:1;}
        .tr p{float:right;line-height:30px;}
        .tr *{float:left;}
        .inputbox{
            width: 230px;
            height:62px;
            margin:0px;
            float: left;
            margin-right:10px;
            display: inline-block;
        }
        button {
            color: #fff !important;
            font-size: 16px;
            padding: 4px 25px;
            background: #009688;
            border-radius: 3px;
            border:1px solid #ddd;
            cursor: pointer;
        }
        button:hover {
            background: #038478;
        }
        /*头像*/
        .touxiang{
            width: 50px;height: 50px;background: #fff;display: inline-block;text-align: center;float: left;margin:0px 10px;
        }
        .touxiang img{width: 50px;height: 50px;}
        .yan-text{
            height: 38px;border:1px solid #d0d0d0;border-radius: 4px;font-size: 14px;padding: 3px 5px;
        }
        .userPic img{width: 50px;height: 50px;}
    </style>
@endsection
@section('content')
    <div class="article_box">
        <div class="article_sebox">
            <!--留言块开始-->
            <div id="msgBox">
                <form id="frm">
                    <h2>啊啊啊！！！不要问我在干什么。。 我已经疯了！！！</h2>

                    <!--选择头像-->
                    <div style="height: 80px;width: 100%; text-align: left;float: left;">
                        @foreach($pictures as $k => $picture)
                        <div class="touxiang">
                            <img src="{{ $prefix_route . $picture->banner_path }}" class="current" />
                            <label><input name="image_id" type="radio" value="{{ $picture->id }}" @if($k == 0) checked @endif /></label>
                        </div>
                        @endforeach
                    </div>

                    <!--验证吗框-->
                    <div style="height: 60px;width: 100%; float: left;">

                        <div class="inputbox" style="width: 215px;">
                            <input id="userName" name="msg_title" placeholder="昵称或站名(必填)"  type="text" class="f-text" />
                        </div>
                        <div class="inputbox" style="width: 140px;">
                            <!--显示验证码-->
                            <img title="点击刷新验证码" src="{{url('captcha')}}" style="cursor: pointer;" onclick="this.src='{{ url('captcha') }}?r=' + Math.random();" />
                        </div>

                        <div class="inputbox" style="width: 200px;">
                            <!--验证码输入框 -->
                            <input id="verify" placeholder="验证码(必填)" autocomplete="off"  type="text" class="yan-text" name="verify"/>
                        </div>
                    </div>

                    <!--留言内容-->
                    <textarea placeholder="留言内容不为空" id="conBox" class="f-text" name="msg_content" type="text" ></textarea>
                    <!--提交按钮-->
                    <div class="tr">
                        <p>
                            <span class="countTxt">啊啊啊啊！请勿打广告，谢谢，谢谢！&nbsp;&nbsp;</span>
                            <button type="button" href="javascript: void(0);" onclick="messageInsert();" >弹幕发射！</button>
                        </p>
                    </div>
                </form>

                <!--留言展示区开始-->
                <div class="list" style="margin-top:-50px;">
                    <h3><span>留言吐槽</span></h3>
                    <ul>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">web前端中文站</a>:</div>
                                <div class="msgInfo">博主，可以申请友链吗？
                                    我已经添加贵站链接了。
                                    web前端中文站   http://www.lisa33xiaoq.net</div>
                                <div class="times"><span>2018-01-18 13:16:23</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/4.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">猫酱杂货店</a>:</div>
                                <div class="msgInfo">还是懒得分不清楚东西南北~</div>
                                <div class="times"><span>2018-01-16 13:19:28</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/2.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">zoe</a>:</div>
                                <div class="msgInfo">入ci，过来瞅瞅</div>
                                <div class="times"><span>2018-01-11 16:19:48</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">uu</a>:</div>
                                <div class="msgInfo">uu</div>
                                <div class="times"><span>2018-01-10 14:50:02</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">1</a>:</div>
                                <div class="msgInfo">顶顶顶顶</div>
                                <div class="times"><span>2018-01-07 15:09:48</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/img/1.gif" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;"></a>:</div>
                                <div class="msgInfo"></div>
                                <div class="times"><span>2018-01-04 14:21:27</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/3.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">月宅</a>:</div>
                                <div class="msgInfo">请把我的友联https://ikmoe.com/更换为http://ikmoe.com</div>
                                <div class="times"><span>2018-01-02 16:35:03</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">友链博客</a>:</div>
                                <div class="msgInfo">元旦快乐(*^▽^*)</div>
                                <div class="times"><span>2018-01-01 12:44:31</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/2.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">友链博客</a>:</div>
                                <div class="msgInfo">圣诞节快乐！o(*￣▽￣*)ブ</div>
                                <div class="times"><span>2017-12-25 17:03:55</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">天天</a>:</div>
                                <div class="msgInfo">天天</div>
                                <div class="times"><span>2017-12-20 14:52:49</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">youyou</a>:</div>
                                <div class="msgInfo">来看看</div>
                                <div class="times"><span>2017-12-06 08:52:00</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/4.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">裤裆里有大蟒蛇</a>:</div>
                                <div class="msgInfo">做的很不错啊</div>
                                <div class="times"><span>2017-11-29 22:31:56</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">唯心</a>:</div>
                                <div class="msgInfo">水中月，镜中花</div>
                                <div class="times"><span>2017-11-26 13:47:32</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">HXC</a>:</div>
                                <div class="msgInfo">回复：FGHRSH 本人菜鸡一枚，一切都是假像...</div>
                                <div class="times"><span>2017-11-26 10:45:12</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/7.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">FGHRSH</a>:</div>
                                <div class="msgInfo">"(? Д ?*) 哇，才发现是自写博客程序的 dalao，厉害了</div>
                                <div class="times"><span>2017-11-22 20:41:24</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/3.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">大大泡泡超人</a>:</div>
                                <div class="msgInfo">写的不错！拿去研究了谢谢</div>
                                <div class="times"><span>2017-11-21 17:12:49</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/4.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">香菇</a>:</div>
                                <div class="msgInfo">嗯我喜欢我的友链头像(●ˇ?ˇ●)</div>
                                <div class="times"><span>2017-11-19 21:09:16</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">aa</a>:</div>
                                <div class="msgInfo">aa</div>
                                <div class="times"><span>2017-11-17 15:57:43</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">iurkut</a>:</div>
                                <div class="msgInfo">这。。。。。。
                                </div>
                                <div class="times"><span>2017-11-14 21:35:38</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/6.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">小c</a>:</div>
                                <div class="msgInfo">啊啊啊啊啊啊啊啊啊</div>
                                <div class="times"><span>2017-11-13 12:06:35</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">msark</a>:</div>
                                <div class="msgInfo">66666</div>
                                <div class="times"><span>2017-11-13 10:08:01</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/7.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">哈哈</a>:</div>
                                <div class="msgInfo">啊哈哈哈哈哈哈哈，66666</div>
                                <div class="times"><span>2017-11-12 16:58:17</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">大帅比</a>:</div>
                                <div class="msgInfo">我最帅啦！！谁不服？！！！</div>
                                <div class="times"><span>2017-11-12 16:57:52</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/3.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">测试</a>:</div>
                                <div class="msgInfo">啊啊啊啊啊！！！我疯狂了！</div>
                                <div class="times"><span>2017-11-12 16:57:02</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">隔壁老王吧</a>:</div>
                                <div class="msgInfo">前来参观！</div>
                                <div class="times"><span>2017-11-12 16:49:22</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com//public/tanmu/tanimg/6.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">马晓东</a>:</div>
                                <div class="msgInfo">666666666</div>
                                <div class="times"><span>2017-11-12 16:44:51</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/6.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">扫黄大队长</a>:</div>
                                <div class="msgInfo">博客更新了！前来围观</div>
                                <div class="times"><span>2017-11-12 16:54:09</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/8.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">nitrohe的博客</a>:</div>
                                <div class="msgInfo">博主加个友链呗http://www.nitrohe.xin感谢回复邮件nitrohe@163.com</div>
                                <div class="times"><span>2017-11-22 22:15:12</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/2.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">bing</a>:</div>
                                <div class="msgInfo">插画很漂亮~~</div>
                                <div class="times"><span>2017-11-12 16:53:56</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/4.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">渣渣</a>:</div>
                                <div class="msgInfo">路过路过，喜欢这个风格</div>
                                <div class="times"><span>2017-11-12 16:55:45</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/1.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">小青子</a>:</div>
                                <div class="msgInfo">博客挺好看，仿了</div>
                                <div class="times"><span>2017-11-12 16:53:56</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/5.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">二狗</a>:</div>
                                <div class="msgInfo">来参观</div>
                                <div class="times"><span>2017-11-12 16:55:11</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/2.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">李逵</a>:</div>
                                <div class="msgInfo">不错不错~</div>
                                <div class="times"><span>2017-11-12 16:53:56</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                        <li>
                            <div class="userPic"><img src="http://www.huxinchun.com/public/tanmu/tanimg/2.jpg" /></div>
                            <!--内容-->
                            <div class="content_box">
                                <div class="userName"><a href="javascript:;">嗷嗷</a>:</div>
                                <div class="msgInfo">嗷嗷嗷嗷嗷嗷嗷嗷嗷嗷嗷嗷嗷嗷嗷嗷！！！</div>
                                <div class="times"><span>2017-11-12 16:53:56</span><a class="del" href="javascript:;">删除</a></div>
                            </div>

                        </li>

                    </ul>
                </div>
                <!--留言展示区结束-->

            </div>
        </div>

    </div>


@endsection
@section('my-js')
    <script>
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        function messageInsert() {
            const msg_title = $('#userName').val();
            const verify = $('#verify').val();
            alert(verify);
            const msg_content = $('textarea[name=msg_content]').val();
            const _token = $('meta[name="csrf-token"]').attr('content');
            if(msg_title === '') {
                alert('昵称或站名不能为空');
            }
            if(verify === '') {
                alert('验证码不能为空');
            }
            if(msg_content === '') {
                alert('留言内容不能为空');
            }

            const data = {msg_title: msg_title, msg_content: msg_content, verify: verify, _token: _token};
            $.ajax({
                type: "post",
                url: "/message/insert",
                dataType: 'json',
                data: {msg_title: msg_title},
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    if(data.code === 0) {
                        alert(data.msg);
                    }else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>
@endsection
