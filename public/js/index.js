/**
*   网页的header中通用的js
*/ 

$(function () {
    var proImgList = ['http://o7jajeu9a.bkt.clouddn.com/iphone6s.jpg',
                      'http://o7jajeu9a.bkt.clouddn.com/ipad.jpg',
                      'http://o7jajeu9a.bkt.clouddn.com/mac.jpg',
                      'http://o7jajeu9a.bkt.clouddn.com/iwatch.jpg'];

    product (proImgList);
    var username = sessionStorage.getItem('username');
    $('.sign-success').text(username);

    // fetch(function(data) {
    //     processData(data);
    // });
    productInfoFetch();

/*
* ① 搜索滚动
* ② 右侧栏快捷 
*/
    $(document).scroll(function () {
      var body = $('body')[0];
      if(body.scrollTop > 180){
          $('.scrollSearch').show();
      }else {
          $('.scrollSearch').hide();
      }
      if(body.scrollTop > 100) {
        $('.icon-top').show();
        $('.go-top').css('background', '#fff');
      }else {
        $('.icon-top').hide();
        $('.go-top').css('background', '#fcf9fd');
      }
    });
    $('.go-top').bind('click', function() {
        $(document.body).animate({
            scrollTop : 0
        },1000);
    });

    $('.nav li').hover(function(){
        $(this).find('div.aLinkMask').addClass('aMask');
    }, function(){
        $(this).find('div.aLinkMask').removeClass('aMask');
    });

    $(".subNav").hover(function(){
        $(this).next(".index_daohang").toggle(0);
    });

    $(".index_daohang").hover(function(){
        $(this).toggle(0);
    });

});



var productInfoFetch = function () {
    // 查看全部
    $.ajax ({
        url : 'Http://taoaixin-api.com/product',
        method : 'GET',
        dataType : 'json',
        success : function (data) {

            callback(data);
            console.log(data.length);
        }
    });
};

var product = function (proImgList) {
    var str = '';
    var length = proImgList.length,
        i = 0;

    for (i = 0; i < length; i++) {
        str += '<div class="shop_item"><div class="shop_img"><a href="#"><img src="' + proImgList[i] + '"></a></div><h3>HTC新渴望8系列</h3><p>1899元</p></div>';
    }
    var rightArea = $('.rightArea')[2];
    // rightArea.innerHTML = str;
};

//对数据进行加工
var processData = function (data) {
    var length = data.length,
        i;
    if (data) {
        for(i = 0; i < length; i++) {
            data[i].forEach(function (val) {
                
            });
        }
    }
};

var n = 0;
$(function(){
    count=$(".cont a").length;//显示区域的内容长度
    $(".item a").click(function(){
        $(this).addClass("seld").siblings().removeClass("seld");
        var _index=$(this).index();//分屏的数字索引
        $(".cont>a").eq(_index).fadeIn(300).siblings().fadeOut(300);
    });
    t = setInterval("showAuto()",1500);//执行定义好的函数
    $(".boxer").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()",2000);});/*当鼠标划向图片时终止定时器，离开时再调用定时器*/
});
function showAuto()
{
    n = n >=(count - 1)?0: ++n;
    $(".item a").eq(n).trigger('click');
}

//轮播
var pointer = document.querySelectorAll('input[type="radio"]');
var init;
window.onload = function() {
    for(var i = 0;i<pointer.length;i++){
        pointer[i].index = i;  
        //鼠标点击input切换图片
        pointer[i].onclick = function() { 
            for(var l = 0;l<pointer.length;l++){ 
                pointer[l].checked = false; 
            }   
            this.checked = true;  
        };
    }  
    //初始化自动轮播  
    // fnStop();
    // fnStart();
};        
//启动自动轮播
function fnStart() {  
    init = setInterval('fnAuto()',6000); 
}        
//停止自动轮播
function fnStop() {  
    window.clearInterval(init); 
}          //自动轮播
function fnAuto() { 
    var aa =document.querySelector('input[type="radio"]:checked').index; 
    if(aa == 4) { 
        aa=-1;  
    } 
    aa+=1; 
    pointer[aa].checked = true;
}

