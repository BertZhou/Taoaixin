<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    {{--<link type="text/css" rel="stylesheet" href="css/reset.css">--}}
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link type="text/css" rel="stylesheet" href="/css/main2.css">
    <link type="text/css" rel="stylesheet" href="/css/main.min.css">
    <link rel="shortcut icon" href="/img/logo/tax-logo.ico" />
</head>
<body>
    @include('layout.tao.hearder')
    @include('user.buy.menu')
    <div class="smallcomWidth order bought pay">
        @section('topbar')
        <ol class="tb-rate-nav-steps">
            <li class="zhifufukuan">
                <span class="">1.拍下商品</span>
            </li>
            <li class="">
                <span class="">2.付款到淘爱心</span>
            </li>
            <li>
                <span>3.确认收货</span>
            </li>
            <li class="fklast-current ">
                <strong>4.评价</strong>
            </li>
        </ol>
        @show
     @yield('content')
    </div>
    @include('layout.tao.footer')

    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/myjs.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript" src="/js/jquery-ui/jquery.citys.js"></script>
    <script type="text/javascript">
        $('.select-address').citys({province:'浙江',city:'杭州市',area:'江干区'});
    </script>
</body>
</html>