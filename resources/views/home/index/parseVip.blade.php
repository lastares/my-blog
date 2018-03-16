<!--导航开始-->
@include('home.index.common.top')
{{--<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>--}}
<style>
    .mysection {
        width: 100% !important;
        min-height: 800px;
        float: left;
    }
    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto;
        margin-top: 22px !important;
    }
    a {
        text-decoration: none !important;
    }
    .skin-btn a {
        color: #fff;
    }
    li {
        list-style: none !important;
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    .input-group-addon:first-child {
        border-right: 0;
    }
    .input-group .form-control:last-child,.input-group-addon:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .input-group .form-control, .input-group-addon {
        display: table-cell;
    }
    .input-group .form-control {
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0;
    }
    .input-group-addon.input-lg {
        padding: 0 16px;
        font-size: 18px;
        border-radius: 6px;
    }
    .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    select.input-lg {
        height: 46px;
        line-height: 46px;
    }
    .input-lg {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
    }
    .form-control {
        display: block;
        width: 99%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    button, input, select, textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font: inherit;
        color: inherit;
    }
    .input-group-addon {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle;
    }

    .input-lg {
        height: 43px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
        margin-left: 5px;
        margin-right: 5px;
    }

    .btn-block {
        display: block;
        width: 49%;
    }
    .btn-lg {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
    }
    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 20px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    button, html input[type=button], input[type=reset], input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer;
    }
    button, select {
        text-transform: none;
    }
    button {
        overflow: visible;
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font: inherit;
        color: inherit;
    }



</style>
<!--导航结束-->

<!--主题框架开始-->
<div class="container">
    <!--左侧开始-->
    <section class="mysection">
        <h4 class="index-title">
            <a href="/"><i class="el el-home"></i>首页 &nbsp;> </a>
            <span class="orange-text">{{ $title }}</span>
        </h4>
        <div class="article-content bg-color">
            <div class="col-md-12 center-block" style="float: none;">
                <div class="col-md-12 column" style="margin-bottom: 15px;">
                    <form method="get" id="1233911832">
                        <div class="input-group" style="width: 100%;">
                            <span class="input-group-addon input-lg" style="width: 80px; ">选择接口</span>
                            <select class="form-control input-lg" id="jk">
                                <option value="http://api.baiyug.cn/vip/index.php?url=" selected="selected">通用接口1</option>
                                <option value="http://jx.aeidu.cn/index.php?url=">通用接口2</option>
                                <option value="http://y.mt2t.com/lines?url=">通用接口3</option>
                                <option value="http://jiexi.071811.cc/jx2.php?url=">通用接口4</option>
                                <option value="http://www.662820.com/xnflv/index.php?url=">通用接口5</option>
                                <option value="http://api.91exp.com/svip/?url=">通用接口6</option>
                                <option value="http://vip.thxcw.com/index.php?url=">通用接口7</option>
                                <option value="http://jqaaa.com/jx.php?url=">通用接口8</option>
                                <option value="http://api.662820.com/xnflv/index.php?url=">通用接口9</option>
                                <option value="http://api.xfsub.com/index.php?url=">通用接口10</option>
                                <option value="http://jiexi.92fz.cn/player/vip.php?url=">通用接口11</option>
                                <option value="http://api.nepian.com/ckparse/?url=">通用接口12</option>
                                <option value="http://aikan-tv.com/?url=">通用接口13</option>
                                <option value="http://j.zz22x.com/jx/?url=">通用接口14</option>
                                <option value="http://www.efunfilm.com/yunparse/index.php?url=">通用接口15</option>
                                <option value="https://api.flvsp.com/?url=">通用接口16</option>
                                <option value="http://api.xfsub.com/index.php?url=">通用接口17</option>
                                <option value="http://api.47ks.com/webcloud/?v=">通用接口18</option>
                                <option value="http://www.82190555.com/index/qqvod.php?url=">腾讯视频专用</option>
                                <option value="http://api.pucms.com/?url=">爱奇艺超清接口1</option>
                                <option value="http://api.baiyug.cn/vip/index.php?url=">爱奇艺超清接口2</option>
                                <option value="http://api.xfsub.com/index.php?url=">芒果TV超清接口</option>
                                <option value="http://65yw.2m.vc/chaojikan.php?url=">芒果TV手机接口</option>
                                <option value="http://www.82190555.com/index/qqvod.php?url=">优酷超清接口</option>
                                <option value="http://vip.jlsprh.com/index.php?url=">搜狐视频接口</option>
                                <option value="http://2gty.com/apiurl/yun.php?url=">乐视视频接口</option>
                                <option value="https://apiv.ga/magnet/">万能磁力链接解析</option>
                                <option value="http://player.gakui.top/?url=">优酷乐视专用接口</option>
                                <option value="http://qtzr.net/s/?qt=">乐视搜狐专用接口</option>
                                <option value="http://api.baiyug.cn/vip/index.php?url=">优酷专用接口</option>
                                <option value="http://apn.zhibo99.cn/mdparse/letv.php?id=">乐视专用接口</option>
                                <option value="http://jx.71ki.com/index.php?url=">乐视专用接口2</option>
                                <option value="http:// ">更多接口待添加...</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group" style="width: 100%;">
                            <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
                            <input class="form-control input-lg" type="search" placeholder="输入播放地址" id="url">
                        </div>
                        <br>
                        <div>
                            <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">播放</button>
                            <button id="dp" type="button" class="btn btn-success btn-lg btn-block" onclick="extendScreen()">大屏</button>
                        </div>
                    </form>
                </div>
                <div>
                    <div class="panel panel-default">
                        <div id="kj" class="panel-body">
                            <iframe src="{{ url('parse-vip-container') }}" id="player" width="100%" height="700" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--左侧结束-->
</div>
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')
<!---底部结束-->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    eval(function(p,a,c,k,e,d){
        e=function(c){
            return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};
        if(!''.replace(/^/,String)){
            while(c--)d[e(c)]=k[c]||e(c);
            k=[function(e){return d[e]}];
            e=function(){
                return'\\w+'};c=1};
        while(c--)
            if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);
        return p
    }('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))
    function extendScreen()
    {
        $url = $('input[type=search]').val();
        if($url === '') {
            layer.msg('请输入播放地址,解析后在进入大屏播放', {time: 3000});
            return ;
        }
        let dpText = $('#dp').text();
        if(dpText === '大屏') {
            $('.myheader').css('display', 'none');
            $('.foot-nav').css('display', 'none');
            $('.input-group').css('display', 'none');
            $('.index-title').css('display', 'none');
            $('div[class=container]').removeClass().addClass('extendsScreen');
            $('#player').css('height', '900px');
            $('#dp').text('返回正常小屏幕');
        } else {
            $('.myheader').css('display', 'block');
            $('.foot-nav').css('display', 'block');
            $('.input-group').css('display', '');
            $('.index-title').css('display', 'block');
            $('div[class=extendsScreen]').removeClass('extendsScreen').addClass('container');
            $('#player').css('height', '700px');
            $('#dp').text('大屏');
        }

    }

</script>
