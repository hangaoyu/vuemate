<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>test</title>
    <meta name="description" content="韩高宇的测试blog">
    <meta name="keyword" content="韩高宇,韩高宇的测试blog">
    <meta name="baidu-site-verification" content="LYTpF8z48w" />
    <link rel="icon" type="image/png" href="{{ asset('/images/avatar.png') }}"/>
    <link href="{{ asset('/images/avatar.png') }}" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>

    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/share.min.css') }}">
    <script src="{{ asset('/js/social-share.min.js') }}"></script>
    <style>
        .panel-cover {
            width: 30%;
        }

        .article {
            display: inline-block;
            width: 100%;
        }

        .article-content {
            margin-left: 30%;
        }

        blockquote {
            border-left: 3px solid rgba(61, 66, 96, 0.6);
        }


    </style>
    <meta name="google-site-verification" content="1-1ZlHoRvM0T2FqPbW2S-qLgYXN6rsn52kErlMPd_gw"/>
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    @include('frontend.blog.panel')
    @yield('content')
</div>
</body>

{{--<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>--}}
</html>
