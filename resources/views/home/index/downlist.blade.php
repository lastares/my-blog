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
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://toilove.com/" target="_blank" title="浅听风语">
                                    <h3 class="links-h3"><img src="/uploads/link/20170205/6ab97b4cbd5cfa4f5c4418ec7125652e.ico" width="24" alt="浅听风语">
                                        <span>浅听风语</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">Toilove个人博客，一个开源可供下载的免费个人博客，提供各类模板、教程，这是博主的学习旅程，欢迎大家访问，相互交流，互助学习。</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://toilove.com/" target="_blank" title="浅听风语">
                                    <div>
                                        <img src="/uploads/link/20170205/6ab97b4cbd5cfa4f5c4418ec7125652e.ico" width="48" alt="浅听风语">
                                        <h3 class="links-h3">浅听风语</h3>
                                        <p class="links-p">http://toilove.com/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://www.blogxuan.com/" target="_blank" title="小柯博客">
                                    <h3 class="links-h3"><img src="/favicon.ico" width="24" alt="小柯博客">
                                        <span>小柯博客</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">玄玄博客是为大家打造的一个分享学习博客中心，让我们共同分享学习PHP技术心得，这里记录我的学习资料，程序开源，学习PHP从这里开始，愿访客和自己生活每一天都是 开开心心。</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://www.blogxuan.com/" target="_blank" title="小柯博客">
                                    <div>
                                        <img src="/favicon.ico" width="48" alt="小柯博客">
                                        <h3 class="links-h3">小柯博客</h3>
                                        <p class="links-p">http://www.blogxuan.com/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://ilunhui.cn/" target="_blank" title="轮回博客">
                                    <h3 class="links-h3"><img src="./a1a250cf29aab147207ccc13334f856c.png" width="24" alt="轮回博客">
                                        <span>轮回博客</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">###</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://ilunhui.cn/" target="_blank" title="轮回博客">
                                    <div>
                                        <img src="./a1a250cf29aab147207ccc13334f856c.png" width="48" alt="轮回博客">
                                        <h3 class="links-h3">轮回博客</h3>
                                        <p class="links-p">http://ilunhui.cn/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://www.gouguoyin.cn/" target="_blank" title="够过瘾">
                                    <h3 class="links-h3"><img src="./95c186201c07829dbe8d72cad38e241a.png" width="24" alt="够过瘾">
                                        <span>够过瘾</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">够过瘾——挨踢男的葵花宝典</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://www.gouguoyin.cn/" target="_blank" title="够过瘾">
                                    <div>
                                        <img src="./95c186201c07829dbe8d72cad38e241a.png" width="48" alt="够过瘾">
                                        <h3 class="links-h3">够过瘾</h3>
                                        <p class="links-p">http://www.gouguoyin.cn/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://www.huxinchun.com" target="_blank" title="胡新春博客">
                                    <h3 class="links-h3"><img src="./3922a9a0898de47764ddb1a2e60f64ad.png" width="24" alt="胡新春博客">
                                        <span>胡新春博客</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">web技术博文，胡新春博客-记录工作中遇到的问题、web技术交流、热门博文分享、随手笔记、科技资讯、程序人生等。</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://www.huxinchun.com" target="_blank" title="胡新春博客">
                                    <div>
                                        <img src="./3922a9a0898de47764ddb1a2e60f64ad.png" width="48" alt="胡新春博客">
                                        <h3 class="links-h3">胡新春博客</h3>
                                        <p class="links-p">http://www.huxinchun.com</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://baijunyao.com/" target="_blank" title="白俊遥博客">
                                    <h3 class="links-h3"><img src="/favicon.ico" width="24" alt="白俊遥博客">
                                        <span>白俊遥博客</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">白俊遥的php博客,个人技术博客</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://baijunyao.com/" target="_blank" title="白俊遥博客">
                                    <div>
                                        <img src="/favicon.ico" width="48" alt="白俊遥博客">
                                        <h3 class="links-h3">白俊遥博客</h3>
                                        <p class="links-p">http://baijunyao.com/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="https://smohan.net/" target="_blank" title="水墨寒">
                                    <h3 class="links-h3"><img src="/uploads/link/20170320/0867ba481a5c843844c7e0e0159bbe84.png" width="24" alt="水墨寒">
                                        <span>水墨寒</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">水墨寒，90后双鱼座普通男青年！WEB前端工程师。喜欢敲代码的感觉，相信编程是一门艺术，自诩为游弋在代码里的人生。</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="https://smohan.net/" target="_blank" title="水墨寒">
                                    <div>
                                        <img src="/uploads/link/20170320/0867ba481a5c843844c7e0e0159bbe84.png" width="48" alt="水墨寒">
                                        <h3 class="links-h3">水墨寒</h3>
                                        <p class="links-p">https://smohan.net/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://itruke.com" target="_blank" title="技术宅男子">
                                    <h3 class="links-h3"><img src="/uploads/link/20170810/18e8ca423f312b273f84f59b10860c2e.png" width="24" alt="技术宅男子">
                                        <span>技术宅男子</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">一个菜鸡程序员的学习笔记，乐于分享，乐于“借鉴”</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://itruke.com" target="_blank" title="技术宅男子">
                                    <div>
                                        <img src="/uploads/link/20170810/18e8ca423f312b273f84f59b10860c2e.png" width="48" alt="技术宅男子">
                                        <h3 class="links-h3">技术宅男子</h3>
                                        <p class="links-p">http://itruke.com</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://www.023xs.cn/" target="_blank" title="小张个人博客">
                                    <h3 class="links-h3"><img src="/favicon.ico" width="24" alt="小张个人博客">
                                        <span>小张个人博客</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">不忘初心，php技术经验分享</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://www.023xs.cn/" target="_blank" title="小张个人博客">
                                    <div>
                                        <img src="/favicon.ico" width="48" alt="小张个人博客">
                                        <h3 class="links-h3">小张个人博客</h3>
                                        <p class="links-p">http://www.023xs.cn/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://www.nitrohe.xin/" target="_blank" title="Nitrohe的博客">
                                    <h3 class="links-h3"><img src="/uploads/link/20170723/8e552352e2ca93a69e485469ab763c8f.ico" width="24" alt="Nitrohe的博客">
                                        <span>Nitrohe的博客</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px"> </p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://www.nitrohe.xin/" target="_blank" title="Nitrohe的博客">
                                    <div>
                                        <img src="/uploads/link/20170723/8e552352e2ca93a69e485469ab763c8f.ico" width="48" alt="Nitrohe的博客">
                                        <h3 class="links-h3">Nitrohe的博客</h3>
                                        <p class="links-p">http://www.nitrohe.xin/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="http://www.hxinq.com" target="_blank" title="黄信强个人博客">
                                    <h3 class="links-h3"><img src="/uploads/link/20171201/3e7c9f5734b8dc823974373a5e99abcd.png" width="24" alt="黄信强个人博客">
                                        <span>黄信强个人博客</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">黄信强的php博客,黄信强的个人技术博客,hxinq博客,hxinq官方网站</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="http://www.hxinq.com" target="_blank" title="黄信强个人博客">
                                    <div>
                                        <img src="/uploads/link/20171201/3e7c9f5734b8dc823974373a5e99abcd.png" width="48" alt="黄信强个人博客">
                                        <h3 class="links-h3">黄信强个人博客</h3>
                                        <p class="links-p">http://www.hxinq.com</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="links-two-item">
                            <div class="links-two-inner links-two-3d">
                                <a href="https://townwang.com/" target="_blank" title="文科中的技术宅">
                                    <h3 class="links-h3"><img src="/favicon.ico" width="24" alt="文科中的技术宅">
                                        <span>文科中的技术宅</span>
                                    </h3>
                                    <p class="links-p" style="margin-top: 10px">吾乃Town,逢时不利,选错文理,学文出身,却爱技术,一路艰辛走过.终踏入技术大门,于此分享我之心得,望前人指导,望后人借鉴.</p>
                                </a>
                            </div>
                            <div class="links-two-bg links-two-3d">
                                <a href="https://townwang.com/" target="_blank" title="文科中的技术宅">
                                    <div>
                                        <img src="/favicon.ico" width="48" alt="文科中的技术宅">
                                        <h3 class="links-h3">文科中的技术宅</h3>
                                        <p class="links-p">https://townwang.com/</p>
                                    </div>
                                </a>
                            </div>
                        </div>
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