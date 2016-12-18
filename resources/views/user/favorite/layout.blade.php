<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/reset.css">
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link type="text/css" rel="stylesheet" href="/css/main2.css">
    <link type="text/css" rel="stylesheet" href="/css/favorite.css">
    <link rel="shortcut icon" href="/img/logo/tax-logo.ico" />
</head>
<body>
    @include('layout.tao.hearder')
    @include('user.favorite.menu')
    @yield('content')
    @include('layout.tao.footer')


    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/myjs.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript" src="/js/easyPay.js"></script>
    <script type="text/javascript" src="/js/favorite.js"></script>
</body>
</html>