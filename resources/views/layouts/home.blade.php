@include('home.index.common.top')

<!--主题内容开始-->
<div class="container">
    <!--左侧开始-->
    @yield('content')

    <!--=========右侧开始==========-->
    @include('home.index.common.right')

    <!--=========END右侧==========-->

</div>
<!--主题内容结束-->

<!---底部开始-->
@include('home.index.common.footer')