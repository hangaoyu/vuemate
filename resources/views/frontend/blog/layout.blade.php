<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>OneV&#39;s Den</title>
    <meta name="description" content="嗨，我是王巍 (@onevcat)，一名来自中国的 iOS / Unity 开发者。现居日本，就职于 LINE。正在修行，探求创意之源。">
    <meta name="author" content="Wei Wang">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="OneV&#39;s Den">
    <meta name="twitter:description" content="嗨，我是王巍 (@onevcat)，一名来自中国的 iOS / Unity 开发者。现居日本，就职于 LINE。正在修行，探求创意之源。">
    <meta property="og:type" content="article">
    <meta property="og:title" content="OneV&#39;s Den">
    <meta property="og:description" content="嗨，我是王巍 (@onevcat)，一名来自中国的 iOS / Unity 开发者。现居日本，就职于 LINE。正在修行，探求创意之源。">
    <link rel="icon" type="image/png" href="{{ asset('/images/avatar.png') }}"/>
    <link href="{{ asset('/images/avatar.png') }}" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/share.min.css') }}">
    <script src="{{ asset('/js/social-share.min.js') }}"></script>
    <style>
        .panel-cover{
            width: 30%;
        }
        .article {
            display: inline-block;
            width: 100%;
        }
        .article-content {
            margin-left: 30%;
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
