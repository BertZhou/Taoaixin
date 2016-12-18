<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的购物车</title>
    <link type="text/css" rel="stylesheet" href="/css/reset.css">
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link type="text/css" rel="stylesheet" href="/css/main2.css">
    <link type="text/css" rel="stylesheet" href="/css/shopping.css">
</head>
<body>
    @include('layout.tao.hearder')
    @include('user.shopping.menu')
    @yield('content')
    @include('layout.tao.footer')

</body>
</html>