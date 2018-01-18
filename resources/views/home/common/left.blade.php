<!--左侧边栏框开始-->
<div class="left_box">
    <!--工具开始-->
    <div class="left_cell" style="height: 200px;">
        <!--书签标题-->
        <div class="ui red ribbon label lmar left_fla" style="background: #337ab7;">
            工具导航
        </div>

        <div style="width: 300px;height: 100px;">
            <div class="card_img">
                <a href="http://qdgu.cn/">
                    <img id="sinasite" src="/home/images/sinap.png">
                    <p>前端工具</p>
                </a>
            </div>

            <div class="card_img">
                <a title="博主邮箱:songyaofeng@aliyun.com" onclick="funem();" href="http://www.huxinchun.com/Home/index">
                    <img id="emailsite" src="/home/images/emailp.png">
                    <p>博主邮箱</p>
                </a>
            </div>
            <script>
                function funem(){
                    alert("博主邮箱:hi@huxinchun.com");
                }
            </script>

            <div class="card_img">
                <a href="http://www.huxinchun.com/Home/content/71">
                    <img id="appsite" src="/home/images/app.png">
                    <p>本站APP</p>
                </a>
            </div>

            <div class="card_img">
                <a href="https://github.com/songyaofeng" target="_blank">
                    <img id="githubsite" src="/home/images/gitp.png">
                    <p>&nbsp;GitHub</p>
                </a>
            </div>
        </div>
    </div>
    <!--工具结束-->

    <div class="left_cell">
        <!--书签标题-->
        <div class="ui red ribbon label lmar left_fla" style="background: #d9534f">
            热门文章
        </div>
        <!--列表-->
        <div class="left_list_box">
            @foreach($topArticle as $k => $vv)
                <a style="text-decoration: none" href="/article/{{ $vv->id }}">
                    <div class="left_list">{{ $vv->title }}</div>
                </a>
            @endforeach
        </div>
        <!--数字-->
        <div class="left_num_box">
            <div class="left_num" style="background:#1dc0f1;">1</div>
            <div class="left_num" style="background:#f15044;">2</div>
            <div class="left_num" style="background:#f59608;">3</div>
            <div class="left_num">4</div>
            <div class="left_num">5</div>
            <div class="left_num">6</div>
            <div class="left_num">7</div>
            <div class="left_num">8</div>
        </div>
    </div>


    <!--左邻右舍开始-->
    <div class="left_cell" style="height: 495px;">
        <!--书签标题-->
        <div class="ui red ribbon label lmar left_fla" style="background: #5cb85c;">
            左邻右舍
        </div>

        <div class="left_narbox" style="height: 325px;width:310px;">
            <div class="left_narcard">
                <a title="技术宅男子" href="http://itruke.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/ji.jpg"></div>
                    <div class="narcard_name">技术宅..</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="柒爱博客" href="http://www.chen101.cn/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/qi.jpg"></div>
                    <div class="narcard_name">柒爱博客</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="破晓博客" href="http://www.dawnfly.cn/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/po.jpg"></div>
                    <div class="narcard_name">破晓博客</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="toilove博客" href="http://toilove.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/to.jpg"></div>
                    <div class="narcard_name">toilove</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="青春博客" href="http://loveteemo.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/qin.jpg"></div>
                    <div class="narcard_name">青春博客</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="连仕彤博客" href="http://www.lianst.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/lian.jpg"></div>
                    <div class="narcard_name">连仕彤</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="一意孤行" href="http://noote.cn/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/yiyi.jpg"></div>
                    <div class="narcard_name">一意孤行</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="fofo博客" href="https://www.fofo.me/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/fofo.jpg"></div>
                    <div class="narcard_name">fofo</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="Adamfei博客" href="https://www.adamfei.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/ada.jpg"></div>
                    <div class="narcard_name">Adamfei</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="不忘初心" href="http://www.allenlan.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/bu.jpg"></div>
                    <div class="narcard_name">不忘初心</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="小忆博客" href="http://blog.iiwo.vip/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/xiao.jpg"></div>
                    <div class="narcard_name">小忆博客</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="Bob`S博客" href="https://www.bobcoder.cc/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/bob.jpg"></div>
                    <div class="narcard_name">Bob`S</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="VVKE博客" href="http://www.vvke.cn/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/vvke.jpg"></div>
                    <div class="narcard_name">VVKE</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="小影志" href="http://c7sky.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/xiaoyin.jpg"></div>
                    <div class="narcard_name">小影志</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="nitrohe" href="http://www.nitrohe.xin/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/nit.jpg"></div>
                    <div class="narcard_name">nitrohe</div>
                </a>
            </div>

            <div class="left_narcard">
                <a title="贤心博客" href="http://sentsin.com/">
                    <div class="narcard_img"><img width="53" height="50" src="/home/images/xian.jpg"></div>
                    <div class="narcard_name">贤心</div>
                </a>
            </div>

        </div>
        <!--更多友联-->
        <div class="left_link">
            <button style="ma" type="button" onclick="javascript:window.location.href=&#39;http://www.huxinchun.com/Home/neigh&#39; " class="btn btn-info">
                <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color: #c14442"></span>&nbsp;更多邻居</button>
        </div>
    </div>
    <!--左邻右舍结束-->

    <!--友好-->
    <div class="left_cell" style="height:170px;">
        <img width="298" height="auto" src="/home/images/huxinchun.gif">
    </div>


    <!--本站文档开始-->
    <div class="left_cell" style="height: 300px;">
        <!--书签标题-->
        <div class="ui red ribbon label lmar left_fla" style="background: #f0ad4e">
            本站文档
        </div>
        <!--列表-->
        <div class="left_list_box" style="height:200px;">
            <div class="left_list"><a href="http://www.huxinchun.com/Home/content/82">SYF博客前端funs主题文档</a></div>
            <div class="left_list"><a href="http://www.huxinchun.com/Home/content/65">本站开放API接口级测试说明</a></div>
            <div class="left_list"><a href="http://www.huxinchun.com/Home/content/65">SYF博客APP手机客户端说明</a></div>
            <div class="left_list"><a href="http://www.huxinchun.com/Home/content/40">SYF博客系统V1.0说明文档</a></div>
            <div class="left_list">SYF博客v1.0默认主题文档</div>
        </div>
        <!--数字-->
        <div class="left_num_box">
            <div class="left_num" style="background:#1dc0f1;">1</div>
            <div class="left_num" style="background:#f15044;">2</div>
            <div class="left_num" style="background:#f59608;">3</div>
            <div class="left_num">4</div>
            <div class="left_num">5</div>
        </div>

    </div>
    <!--本站结束-->



</div>
<!--左侧边栏框结束-->