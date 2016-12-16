$(function () {
//	详情页事件
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