<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

    <meta name="google-site-verification" content="1-1ZlHoRvM0T2FqPbW2S-qLgYXN6rsn52kErlMPd_gw"/>
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app" >

    @yield('content')
</div>
</body>

{{--<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>--}}
</html>
