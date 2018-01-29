@extends('layouts.tools')
@section('content')
    <!-- container开始 -->
    <div id="container" class="wrap">
            <div class="section mtop" id="hot">
                <h2 class="title">
                    <i class="icon-"></i>{{ $catename }}
                    <a href="/tools" class="more">返回&gt;&gt;</a>
                </h2>
                <div class="content">
                    <ul class="time-list clearfix">
                        @foreach($urlsData as $k => $v)
                            <li>
                                <a href="{{ $v->tools_url }}" target="_blank" rel="nofollow">{{ $v->tools_name }} <img src="/home/images/hot.gif"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
    <!--.section-->
    </div>
    <!-- container结束 -->
@endsection
