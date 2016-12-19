;$(function () {
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
				break;
			case 'reduction':
				if($amountInput.val() != $amountInput[0].defaultValue){
					$amountInput.val(--amount);
				}
				break;
			default :
				break;
		}
	});

//	传递数量这个数据给后台
	$('.btn-buy').bind('click',function () {
		var amount = $('input[name="amount"]').val();
		var lastIndex = window.location.href.lastIndexOf('/') + 1;
		var id = window.location.href.substr(lastIndex);
		$.ajax({
			url:'/buy/' + id + '?amount='+ amount,
			success: function () {
				debugger
			}
		})
	});

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