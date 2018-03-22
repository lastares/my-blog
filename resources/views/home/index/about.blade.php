@include('home.index.common.top')
<!--导航结束-->
<div class="container">

    <section class="mysection">

        <article>
            <div class="about-content" style="padding:0;">
                <h4 class="index-title">
                    <i class="el el-info-circle"></i>关于本站
                </h4>
                <p>
                    <span style="font-size:16px;color:#E53333;font-family:&#39;Microsoft YaHei&#39;;"><strong>2.0版全新上线，行走在原创技术之路......</strong></span>
                </p>
                <p>
                    <br>
                </p>
                <p>
                    <br>
                </p>
                <h4 class="index-title">
                    <i class="el el-list-alt"></i>站长简介
                </h4>
                <p>
                    <strong><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">博主站长</span></strong><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">：</span><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">宋耀锋</span>
                </p>
                <p>
                    <strong><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">职业：</span></strong><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">php开发工程师</span>
                </p>
                <p>
                    <span style="white-space:normal;"><b><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">个人简介：</span></b><span></span></span><span style="white-space:normal;"><b><span style="font-family:&#39;Microsoft YaHei&#39;;"></span></b><span style="color:#64451D;font-family:&#39;Microsoft YaHei&#39;;line-height:2;"><span style="color:#333333;line-height:2;">熟练PHP技术开发，目前擅长ThinkPHP、Laravel、Lumen等框架的开发，掌握Linux系统基本命令操作，lnmp环境配置,熟悉Redis，Memcache等NoSql的使用，熟悉Angular、jQuery、Bootstrap、AJAX、javascript前端页面技术，。</span></span></span>
                </p>
                <p>
	<span style="white-space:normal;font-size:14px;"><span style="color:#64451D;font-family:&#39;Microsoft YaHei&#39;;font-size:16px;"><span style="color:#333333;"><br>
</span></span></span>
                </p>
                <h4 class="index-title">
                    <i class="el el-list-alt"></i>网站简介
                </h4>
                <p>
                    <span style="line-height:2;font-family:&#39;Microsoft YaHei&#39;;"><strong>前台设计</strong></span><span style="line-height:2;font-family:&#39;Microsoft YaHei&#39;;">：</span><span style="line-height:2;"><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">css3+html5自适应布局</span></span>
                </p>
                <p>
                    <strong><span style="line-height:2;font-family:&#39;Microsoft YaHei&#39;;">后台主程序</span><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">：</span></strong><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;"><span style="line-height:2;font-family:&#39;Microsoft YaHei&#39;;">Laravel+MySQL</span></span>
                </p>
                <p>
                    <strong><span style="line-height:2;font-family:&#39;Microsoft YaHei&#39;;">服务器</span><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;">：</span></strong><span style="font-family:&#39;Microsoft YaHei&#39;;line-height:2;"><span style="line-height:2;font-family:&#39;Microsoft YaHei&#39;;">{{ PHP_OS }}(阿里云ECS)</span></span>
                </p>
                <p>
                    <span><span style="line-height:2;color:#000000;font-family:&#39;Microsoft YaHei&#39;;"><strong>网站简介</strong></span><strong><span style="color:#000000;font-family:&#39;Microsoft YaHei&#39;;line-height:2;"><span style="line-height:2;">：</span></span></strong><span style="color:#000000;font-family:&#39;Microsoft YaHei&#39;;"><span style="line-height:1.5;"></span><span style="line-height:2;">{{ $config['WEB_DESCRIPTION'] }}</span></span></span>
                </p>
                <p>
                    <br>
                </p>
                <p>
                    <span style="font-size:14px;"><b></b></span>
                </p>
                <h4 class="index-title">
                    <i class="el el-file-edit"></i>更新日志
                </h4>
                <p>
                    暂无日志。
                </p>
            </div>
        </article>





    </section>

    <!--=========右侧开始==========-->
    <!--=========右侧开始==========-->
    @include('home.index.common.right')
    <!--=========END右侧==========-->
    <!--=========END右侧==========-->

</div>
<!---底部开始-->
@include('home.index.common.footer')