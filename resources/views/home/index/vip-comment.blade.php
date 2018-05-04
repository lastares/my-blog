<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>评论留言-会员中心</title>
    <link rel="stylesheet" href="/home/plugins/layui-v2.2.5/layui/css/layui.css">
    <link rel="stylesheet" href="/home/css/page.css"/>
    <script type="text/javascript" src="/home/js/jquery.2.1.4.min.js"></script>
    <script type="text/javascript" src="/home/plugins/layer-v3.1.1/layer/layer.js" ></script>
    <script src="/home/plugins/layui-v2.2.5/layui/layui.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        a {
            color: none;
        }
        #main {
            padding: 15px 20px;
        }

        .sub-title {
            font-size: 16px;
            margin-bottom: 3px;
            color: #8A8A8A;
        }

        .layui-table tbody .list-item:hover {
            background-color: #14c327;
            color: #ffffff;
        }
        .layui-table {
            background: none;
            text-align: center;
        }

        .layui-table th {
            text-align: center;
        }

    </style>
</head>
<body>
    <div id="main">
        <div class="sub-title">个人资料</div>
        <div class="tableList">
            <table class="layui-table" lay-size="sm">
                <colgroup>
                    <col width="150">
                    <col width="200">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th><strong>编号</strong></th>
                    <th><strong>评论文章</strong></th>
                    <th><strong>评论内容</strong></th>
                    <th><strong>评论时间</strong></th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $k => $comment)
                <tr class="list-item">
                    <td>{{ $comment->id }}</td>
                    <td><a href="/article/{{ $comment->article_id }}" target="_blank">{{ $comment->article_name }}</a></td>
                    <td>{!! $comment->content !!}</td>
                    <td>{{ $comment->created_at }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div style="text-align: center;">
                {{ $pageString }}
            </div>
        </div>
    </div>
</body>
</html>