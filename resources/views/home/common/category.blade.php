<div class="senav">
    <div class="nav_ul">
        <a href="/">
            <li class="nav_ul_first">首页</li>
        </a>
        <!--其他栏目开始-->
        @foreach($category as $k => $v)
            <a href="{{ url('category', ['id' => $v->id]) }}"><li>{{ $v->name }}</li></a>
        @endforeach
    </div>
</div>