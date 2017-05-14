<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link type="text/css" rel="stylesheet" href="/css/main2.css">
    <link type="text/css" rel="stylesheet" href="/css/main.min.css">
    <link rel="shortcut icon" href="/img/logo/tax-logo.ico" />

</head>
<body>
    @include('layout.tao.hearder')
    @include('user.my.menu')
    <div class="pdata comWidth clearfix ">
        @yield('content')
    </div>
    @include('layout.tao.footer')


    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/myjs.js"></script>
    <script type="text/javascript" src="/js/my.js"></script>
    <script type="text/javascript" src="/js/jquery-ui/jquery.citys.js"></script>
    <script type="text/javascript" src="/js/rate.js"></script>
    <script type="text/javascript" src="/js/libs/bootstrap.min.js"></script>
</body>
</html>