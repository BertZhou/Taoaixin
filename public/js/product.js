;$(function () {
    //搜索
    $('.search_btn').bind('click', function () {
        var type = location2obj(window.location.href);
        var name = $('.search_text').val();
       $.ajax ({
           url: 'search',
           data: {
               name: name
           },
           success:function () {
               window.location.href = 'http://' + window.location.host + '/search?type=' + type.type + '&name=' + name;
           }
       })
    });

    //上侧栏选中效果
    $('.col-lg-3 a').each(function () {
        var selectedValue = $('#selectedMenu').val();
        var this_val = $(this).data('type');
        if(this_val == selectedValue && selectedValue != undefined) {
            $(this).toggleClass('active');
        }
    });

    //点击添加到购物车
	$('.btn-cart').bind('click', function () {
		var itemId = $('input[name="itemID"]').val();
		var number = $('input[name="amount"]').val();

		$.ajax({
			url: '/cart',
			method: 'POST',
			data: {
				item_id: itemId,
				number: number
			},
			success:function (json) {
				$('#myModalLabel').text('淘爱心添加到购物车');
				$('.status').text('添加购物车成功！');
				$('#myModal').modal('show');
			}
		})
			
	});
    //点击添加到收藏
	$('.detail-icon').bind('click',function () {
		var itemID = $('input[name="itemID"]').val();
		$.ajax({
			url: '/my/favorite',
			type: 'POST',
			data:{
				item_id: itemID
			},
			success: function(){
				$('#myModalLabel').text('淘爱心收藏');
				$('.status').text('爱心宝贝收藏成功！');
				$('#myModal').modal('show');
			}
		})
	});

    //数量控件的增加、删除
	$('.des_number').bind('click',function (e) {
		var cls = e.target.classList[0];
		var $amountInput = $('input[name="amount"]');
		var amount = $amountInput.val();
		switch (cls){
			case 'plus':
				$amountInput.val(++amount);
				setURL(amount);
				break;
			case 'reduction':
				if($amountInput.val() != $amountInput[0].defaultValue){
					$amountInput.val(--amount);
					setURL(amount);
				}
				break;
			default :
				break;
		}
	});

//	传递数量这个数据给后台
// 	$('.btn-buy').bind('click',function () {
// 		var amount = $('input[name="amount"]').val();
// 		var lastIndex = window.location.href.lastIndexOf('/') + 1;
// 		var id = window.location.href.substr(lastIndex);
// 		var URL = '/buy/' + id + '?amount='+ amount;
// 		$.ajax({
// 			url: URL,
// 			success: function () {
// 				debugger
// 				window.location.href = window.location.host + URL;
// 				// $('.btn-buy').attr('href',window.location.host + URL);
// 			}
// 		})
// 	});

//	详情页事件:产品介绍、产品评价、月成交记录切换
	$('.des_tit').on('click','li' ,function (e) {
		if(!$(this).hasClass('active')) {
			$(this).toggleClass('active')
				.siblings()
				.removeClass('active');
			var $content = +$(this).data('content');
			var $des_infoContent = $('.des_infoContent');
			$des_infoContent.each(function (i) {
				if($content != i) {
					$(this).hide();
				}else {
					$(this).show();
				}
			});
		}
	});

});


var getId = function () {
	var amount = $('input[name="amount"]').val();
	var lastIndex = window.location.href.lastIndexOf('/') + 1;
	return window.location.href.substr(lastIndex);
};
var setURL = function (amount) {
	var id = getId();
	var url = '/item/'+ id + '/buy?amount=' + amount;
	$('.btn-buy').attr('href', url);
};
var  location2obj = function(url) {
    url = url || window.location.href;
    if (url.indexOf('?') == -1) {
        return {};
    }
    url = url.substr(url.indexOf('?') + 1);
    url = url.substring(0, url.lastIndexOf('#') == -1 ? undefined : url.lastIndexOf('#'));
    var params = url.split('&');
    var obj = {};
    for ( var i = 0, len = params.length; i < len; i++) {
        var ps = params[i].split('=');
        obj[ps[0]] = decodeURI(ps.slice(1).join('='));
    }
    return obj;
};



//商品详情页，点击图片进行放大
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


//items页面商品网格显示和列表显示的切换
$(function(){
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
