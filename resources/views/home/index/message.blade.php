@include('home.index.common.top')
<!--主题框架开始-->
<div class="container" id="location">
    <!--左侧开始-->
    <section>
        <div class="comment-area">
            {{--<img src="/home/images/feedback.png" style="width:100%;" alt="雷小天博客留言板"/>--}}
            <h4 class="index-title"> <i class="el-comment-alt"></i>当前共有<span> {{ $messages->count() }} </span>条留言<a href="#leaveMessage"  rel="nofollow" ><i class="el-edit"></i>发表留言</a></h4>
            <ul class="feedback-comment" id="feedbackdata">
                @foreach($messages as $k => $message)
                <li class="bg-color">
                    <span class="louceng" >{{ $k + 1 }}</span>
                    <div class="comment-ava">
                        <a href="" id="Comment-{{ $message->id }}" target="_blank" rel="nofollow" title="《雷小天》 没有填写网站?">
                            <img class="img-circle" src="{{ $message->image_path }}" alt="{{ $message->name }}"/></a>
                        <!--<span><i class="el-user"></i>闫恒</span>-->
                    </div>
                    <div class="comment-info ">
                        <div class="comment-line ">
                            <ul>
                                <li><a title=""><i class="el-user"></i>{{ $message->name }}</a></li>
                                <li><a title="发表于{{ $message->created_at }}"><i class="el-time"></i>2018-01-27 10:35</a></li>
                                <li><a title="{{ $message->name }} 当前位于：{{ $message->location }}"><i class="el-map-marker"></i>{{ $message->location }}</a></li>
                                <li><a title="{{ $message->name }} 当前IP:{{ $message->ip }}"><i class="el-network"></i>{{ $message->ip }}</a></li>
                            </ul>
                        </div>
                        <div class="comment-content">{!! $message->msg_content !!}</div>
                        <!--回复-->
                        <ul class="re-comment" id="{{ $message->id }}">
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
            <div id="pagerArea" unselectable="on" onselectstart="return false;" style="-moz-user-select:none;"></div>
        </div>
        <!-- 分页 -->
        <!-- <div class="pagination">
            <div class="list-page">
                <ul class="post-data">
                    <li ><a>第 1 - 12 页</a> <a>共 111 条</a></li>
                </ul>
            </div>
            <ul>
                <li class="active"><a>首页</a></li>
                <li class="active"><a>上一页</a></li>
                <li ><a href="?5-2.html">下一页</a></li>
                <li ><a href="?5-12.html">尾页</a></li>
            </ul>
        </div> -->
        <!--评论表单-->
        <h3 class="form-btn blue-text" ><a href="javascript:;" ><i class="el-edit"></i>我要留言 / 展开表单</a></h3>
        <div id="leaveMessage" class="form-zd form-in">
            <!--表单开始-->
            <form id="contact-form" name="myform">
                {{ csrf_field() }}
                <ul class="hdmenu">
                    <li><i class="el-ok-sign"></i> 审核开启</li>
                    <li><input name="jizhu" type="checkbox" value="1" checked class="comment-fuxuna" /> 记住信息</li>
                    <li><input name="huifu" type="checkbox" value="1" checked class="comment-fuxuna" /> 邮件回复</li>
                </ul>
                <!----昵称------->
                <div class="input-prepend">
                    <i class="el-user"></i>
                    <input name="u_name" type="text" id="u_name" value="{{ session('user.name') }}" size="16"  placeholder="您的称呼（必须）" disabled onkeyup="value=value.replace(/[^\a-\z\A-\Z\u4E00-\u9FA5]/g,'')"/>
                    <input name="type" type="hidden" id="type" value="0" />
                </div>
                <!------邮箱----->
                <div class="input-prepend">
                    <i class="el-envelope"></i>
                    <input name="u_mail" type="text"  id="u_mail" @if(session('user.email')) value="{{ session('user.email') }}" @else value="" @endif size="16" placeholder="您的邮箱（必须）" disabled onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\@\.]/g,'')"/>
                </div>
                <!----网址------->
                <div class="input-prepend">
                    <i class="el-globe"></i>
                    <input name="u_url" type="text"  id="u_url" size="16" value="" placeholder="您的网站（选填）" onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\/\.\:]/g,'')"/>
                </div>
                <!--表情按钮-->
                <div class="face-box">
                    <div id="face-btn"><a href="javascript:void(0);" ><img src="/home/images/face/mr/0.gif" width='25'/></a></div>
                    <textarea name="u_content"  id="txaArticle" placeholder="听说留言会让人更美..."  ></textarea>
                    <!--表情--------->
                    <div class="face-main" id="face-area" style="display:none;">
                        <ul class="face-tab clearfix">
                            <li><a href="javascript:void(0);" class="selected-a">默认</a></li>
                            <li><a href="javascript:void(0);">阿狸</a></li>
                            <li><a href="javascript:void(0);">贴吧表情</a></li>
                            <!--<li><a href="javascript:void(0);">暴走漫画</a></li>-->
                        </ul>
                        <ul class="face-ul clearfix face_selected"></ul>
                        <ul class="face-ul clearfix" style="display:none;"></ul>
                        <ul class="face-ul clearfix" style="display:none;"></ul>
                        <ul class="face-ul clearfix" style="display:none;"></ul>
                        <a href="javascript:void(0);" class="face-close"><i class="el-remove"></i></a>
                    </div>
                </div>
                <!--验证码-->
                <div class="input-prepend yzm">
                    <i class="el-question-sign"></i>
                    <input name="verify" type="text"  id="verify" size="16"  placeholder="验证码" />
                    <span>
					<img id="verifyCode" src="{{url('captcha')}}" style="cursor: pointer;" onclick="this.src='{{ url('captcha') }}?r=' + Math.random();" title="点击刷新验证码" />
				</span>
                </div>
                <!--提交表单--------->
                <div class="feed-sub">
                    <input type="hidden" id="token" name="token" value="{{ csrf_token() }}" />
                    <button type="button" class="btn btn-inverse"  onclick="checkform();">提交留言</button>
                </div>
            </form>
            <!--表单结束-->
        </div>
    </section>
    <!--左侧结束-->
    <!--=========右侧开始==========-->
    @include('home.index.common.right')
    <!--=========END右侧==========-->

</div>
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')