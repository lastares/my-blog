@extends('layouts.tools')
@section('content')
    <!-- container开始 -->
    <div id="container" class="wrap">
        @foreach($urlsData as $k => $url)
        <div class="section mtop" id="hot">
            <h2 class="title">
                <i class="icon-"></i>{{ $url->category_name }}
                <span class="sub-category">
                    @foreach($url->childCategory as $kk => $vv)
                        <a href="/toolsCategory/{{ $vv->id }}/catename/{{ $vv->category_name }}" @if($kk == 0)) class="current" @endif>{{ $vv->category_name }}</a>
                    @endforeach
                </span>
                <a href="/toolsCaetgory/{{ $url->id }}" class="more">更多&gt;&gt;</a>
            </h2>
            <div class="content">
                <ul class="time-list clearfix">
                    @foreach($url->childUrls as $kkk => $vvv)
                    <li>
                        <a href="{{ $vvv->tools_url }}" target="_blank" rel="nofollow">{{ $vvv->tools_name }}
                            {{--<img src="/home/images/hot.gif">--}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
        <!--.section-->
    </div>
    <!-- container结束 -->
@endsection
