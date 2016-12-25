<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品发布</title>

    <link href="/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/reset.css">
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link type="text/css" rel="stylesheet" href="/css/main2.css">
    <script type="text/javascript" src="/js/timeselect/laydate.js"></script>
    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <style>
        .footer {
            height:220px;
        }
        .hr_45 {
            line-height:45px;
        }
    </style>
</head>
<body>
@include('layout.tao.hearder')
<div class="midBar">
    <div class="fav-tab">
        <div class="selllogo fl">
            <img src="/img/seller center/logo2.jpg">
            {{--<span class="seller-lianjie fr"><a href="#">商品上架</a></span>--}}
        </div>
    </div>
</div>

@yield('content')
@include('layout.tao.footer')
<script type="text/javascript">
    !function(){
        laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
        laydate({elem: '#demo'});//绑定元素
    }();

    //日期范围限制
    var start = {
        elem: '#start',
        format: 'YYYY-MM-DD',
        min: laydate.now(), //设定最小日期为当前日期
        max: '2099-06-16', //最大日期
        istime: true,
        istoday: false,
        choose: function(datas){
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };

    var end = {
        elem: '#end',
        format: 'YYYY-MM-DD',
        min: laydate.now(),
        max: '2099-06-16',
        istime: true,
        istoday: false,
        choose: function(datas){
            start.max = datas; //结束日选好后，充值开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);

    //自定义日期格式
    laydate({
        elem: '#test1',
        format: 'YYYY年MM月DD日',
        festival: true, //显示节日
        choose: function(datas){ //选择日期完毕的回调
            alert('得到：'+datas);
        }
    });

    //日期范围限定在昨天到明天
    laydate({
        elem: '#hello3',
        min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
        max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
    });
</script>
<script type="text/javascript" src="/js/myjs.js"></script>
<!-- <script src="js/jquery.min.js"></script> -->
<script src="/js/bootstrap.min.js"></script>
{{--<script src="js/easyPay.js"></script>--}}
<script src="/js/product.js"></script>
<script src="/js/create.js"></script>

</body>
</html>