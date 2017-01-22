<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.header')
<body class="reader-black-font" lang="zh-CN">
<!-- 全局顶部导航栏 -->
@include('frontend.layouts.nav')
@yield('content')
@include('frontend.layouts.footer')
</body>
</html>
