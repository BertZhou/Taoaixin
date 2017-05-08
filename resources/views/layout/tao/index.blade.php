<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    {{--<link type="text/css" rel="stylesheet" href="css/reset.css">--}}
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link type="text/css" rel="stylesheet" href="/css/index.css">
    <link type="text/css" rel="stylesheet" href="/css/main.min.css">
    <link rel="shortcut icon" href="/img/logo/tax-logo.ico" />
</head>
<body>
    @include('layout.tao.hearder')
    @section('midbar')
        <div class="midbar">
            <div class="tiaofu">
                <img src="/img/index/taxzy-4.jpg">
            </div>
        </div>
    @show
    @include('layout.tao.menu')
    @yield('content')
    @include('layout.tao.footer')
    <script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/myjs.js"></script>
    <script type="text/javascript" src="/js/index.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript" src="/js/product.js"></script>
    <script type="text/javascript" src="/js/libs/bootstrap.min.js"></script>
    <script>  
    $(function(){  
        $(".bigbigimg").click(function(){  
            var _this = $(this);//将当前的pimg元素作为_this传入函数  
            imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);  
        });
    });
    function imgShow(outerdiv, innerdiv, bigimg, _this){  
        var src = _this.attr("src");//获取当前点击的pimg元素中的src属性  
        $(bigimg).attr("src", src);//设置#bigimg元素的src属性  
      
            /*获取当前点击图片的真实大小，并显示弹出层及大图*/  
        $("<img/>").attr("src", src).load(function(){  
            var windowW = $(window).width();//获取当前窗口宽度  
            var windowH = $(window).height();//获取当前窗口高度  
            var realWidth = this.width;//获取图片真实宽度  
            var realHeight = this.height;//获取图片真实高度  
            var imgWidth, imgHeight;  
            var scale = 0.8;//缩放尺寸，当图片真实宽度和高度大于窗口宽度和高度时进行缩放  
              
            if(realHeight>windowH*scale) {//判断图片高度  
                imgHeight = windowH*scale;//如大于窗口高度，图片高度进行缩放  
                imgWidth = imgHeight/realHeight*realWidth;//等比例缩放宽度  
                if(imgWidth>windowW*scale) {//如宽度扔大于窗口宽度  
                    imgWidth = windowW*scale;//再对宽度进行缩放  
                }  
            } else if(realWidth>windowW*scale) {//如图片高度合适，判断图片宽度  
                imgWidth = windowW*scale;//如大于窗口宽度，图片宽度进行缩放  
                            imgHeight = imgWidth/realWidth*realHeight;//等比例缩放高度  
            } else {//如果图片真实高度和宽度都符合要求，高宽不变  
                imgWidth = realWidth*1.5;  
                imgHeight = realHeight*1.5;  
            }  
                    $(bigimg).css("width",imgWidth);//以最终的宽度对图片缩放  
              
            var w = (windowW-imgWidth)/2;//计算图片与窗口左边距  
            var h = (windowH-imgHeight)/2;//计算图片与窗口上边距  
            $(innerdiv).css({"top":h, "left":w});//设置#innerdiv的top和left属性  
            $(outerdiv).fadeIn("fast");//淡入显示#outerdiv及.pimg  
        });  
          
        $(outerdiv).click(function(){//再次点击淡出消失弹出层  
            $(this).fadeOut("fast");  
    });  
    
}  

$(function(){
    //items页商品网格显示和列表显示的切换
    //用了部分我的订单里的样式
    $('.viewlist').click(function(){
        if($('.item_lists').hasClass('col-lg-4')){
            $('.item_lists').removeClass('col-lg-4 col-md-4 col-sm-6').addClass('col-lg-12 col-md-12');
            $('.product-item').addClass('panel-body');
            $('.product-img').addClass('col-md-3');
            $('.product-img img').css({'width':'193','height':'110'});
            $('.product-info').addClass('col-md-9');
            $('.product-info .title').addClass('col-md-5 content');
            $('.metas .price').parent().addClass('col-md-3 col-md-offset-2');
            $('.metas .num').parent().addClass('col-md-2');
        }
    });

    $('.viewgallery').click(function(){
        if($('.item_lists').hasClass('col-lg-12')){
            $('.item_lists').removeClass('col-lg-12 col-md-12').addClass('col-lg-4 col-md-4 col-sm-6');
            $('.product-item').removeClass('panel-body');
            $('.product-img').removeClass('col-md-3');
            $('.product-img img').removeAttr('style');
            $('.product-info').removeClass('col-md-9');
            $('.product-info .title').removeClass('col-md-5 content');
            $('.metas .price').parent().removeClass('col-md-3 col-md-offset-2');
            $('.metas .num').parent().removeClass('col-md-2');
        }
    });
});
    
</script> 
</body>
</html>