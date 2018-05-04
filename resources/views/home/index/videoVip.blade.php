<!--导航开始-->
@include('home.index.common.top')
{{--<link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">--}}
<link rel="stylesheet" href="/home/css/my.css?v=3.0" />
<link rel="stylesheet" href="//at.alicdn.com/t/font_1477105914_3430886.css">
<style>
    .mysection {
        width: 100% !important;
        min-height: 780px;
        float: left;
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
            {{--<div class="row aerousel">--}}
                <div class="links">
                    <div class="links-two">
                        @foreach($videoVips as $k => $videoVip)
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="javascript: void(0);" title="{{ $videoVip->video_vip_description }}">
                                    <h3 class="links-h3"><img src="{{ $videoVip->video_vip_logo }}" width="210" height="67" alt="{{ $videoVip->video_vip_description }}">
                                    </h3>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="javascript: void(0);" onclick="saleVip();" title="{{ $videoVip->video_vip_description }}">
                                    <div>
                                        <img src="{{ $videoVip->video_vip_logo }}" width="150" height="64" title="{{ $videoVip->video_vip_description }}">
                                        <p class="links-p">{{ str_limit($videoVip->video_vip_description, 22) }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @for($i=0; $i<3; ++$i)
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="javascript: void(0);" title="视频vip特价来袭">
                                    <h3 class="links-h3"><img src="/home/images/price.jpg" width="210" height="67" alt="视频vip特价来袭">
                                    </h3>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a onclick="saleVip();" href="javascript: void(0);"  title="视频vip特价来袭">
                                    <div>
                                        <img src="/home/images/price.jpg" width="150" height="64" alt="视频vip特价来袭" title="视频vip特价来袭">
                                        <p class="links-p">视频vip特价来袭</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            {{--</div>--}}
        </div>
    </section>
    <!--左侧结束-->
</div>
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')
<!---底部结束-->
<script>
    function saleVip() {
        layer.open({
            type: 1 //Page层类型
            ,area: ['500px', '400px']
            ,title: '亲，购买视频会员请微信联系站长！'
            ,shade: 0.6 //遮罩透明度
            ,anim: 0 //0-6的动画形式，-1不开启
            ,content: '<div style="padding:25px;text-align: center;height:auto"><img src="/home/images/vip.png" width="300" alt=""></div>'
        });

    }
</script>