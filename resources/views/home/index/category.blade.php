@include('home.index.common.top')

<!--主题内容开始-->
<div class="container">
    <!--左侧开始-->
    <section>
        <h4 class="index-title">
            <a href="/"><i class="el el-home"></i>首页 &nbsp;> </a>
            <span class="orange-text">{{ $title }}</span>
            <span style="float:right;margin-right:10px;">共有文章:<span class="orange-text"> {{ $total }} </span>篇</span>
        </h4>
        <div class="arclist">
            <!--列表开始-->
            <ul>
                @foreach($article as $k => $v)
                    <li>
                        <!-- <li id="tuijian"id="Hot"> -->
                        <div class="arcimg">
                            <img  src="{{ $v->cover }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
                        </div>
                        <div class="arc-right">
                            <h4 class="blue-text"><a href="/article/{{ $v->id }}" title="{{ $v->title }}">{{ $v->title }}</a></h4>
                            <p>{{ $v->description }}</p>
                            <ul>
                                <li><a title="{{ $v->author }} {{ $v->created_at }}发表"><i class="el-time"></i> 2017-07-14</a></li>
                                <li><a href="#" title="作者： {{ $v->author }}"><i class="el-user"></i>{{ $v->author }}</a></li>
                                <li><a href="#"title="已有 0 条评论"><i class="el-comment"></i>0</a></li>
                                <li><a title="已有 {{ $v->click }} 次浏览"><i class="el-eye-open"></i>{{ $v->click }} </a></li>
                                <!-- <li class="mob-hidden">
                                  <i class="el-tag"></i>
    <a href= "Search/?s=朋友圈 ">朋友圈</a>&nbsp;
                                </li> -->
                                <li><a href="/category/{{ $v->id }}" title="查看分类"><i class="el-th-list"></i>{{ $v->category_name }}</a></li>
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
            <!--列表结束-->
        </div>
        <!--分页-->

        <!-- <div class="pagination">
            <div class="list-page">
                <ul class="post-data">
                    <li ><a>第 1 - 2 页</a> <a>共 16 条</a></li>
                </ul>
            </div>
            <ul>
                <li class="active"><a>首页</a></li>
                <li class="active"><a>上一页</a></li>
                <li ><a href="?1+2.html">下一页</a></li>
                <li ><a href="?1+2.html">尾页</a></li>
            </ul>
        </div> -->
        <div class="page">
            {{ $pageString }}
        </div>
        {{--<div class="page"><a class="first" href="/category/29/p/1.html">首页</a> <a class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span><a class="num" href="/category/29/p/2.html">2</a> <a class="next" href="/category/29/p/2.html">下一页</a> <a class="end" href="/category/29/p/2.html">尾页</a> <span class="rows">共 16 条记录</span></div>--}}
    </section>
    <!--左侧结束-->

    <!--=========右侧开始==========-->
@include('home.index.common.right')

    <!--=========END右侧==========-->

</div>
<!--主题内容结束-->

<!---底部开始-->
@include('home.index.common.footer')
<!--底部结束-->