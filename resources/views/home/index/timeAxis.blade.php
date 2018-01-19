@extends('layouts.home')
@section('title', '时间轴')
@section('content')
<!--文章开始-->
<div class="article_box">
    <div class="article_sebox">

        <div style="width:100%;height:auto;">
            <iframe src="{{ url('axis') }}" id="iframepage" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" onLoad="iFrameHeight()" width="100%"></iframe>
        </div>
        <!--高度自适应处理-->
        <script type="text/javascript" language="javascript">
            function iFrameHeight() {
                var ifm= document.getElementById("iframepage");
                var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument;
                if(ifm != null && subWeb != null) {
                    ifm.height = subWeb.body.scrollHeight;
                    ifm.width = subWeb.body.scrollWidth;
                }
            }
        </script>
    </div>

</div>
<!--文章结束-->
@endsection