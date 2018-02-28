<!--导航开始-->
@include('home.index.common.top')
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
            导航模块开发中。。。
        </div>
    </section>
    <!--左侧结束-->
</div>
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')
<!---底部结束-->