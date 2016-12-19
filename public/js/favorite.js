(function(){
	/**
	*  批量管理操作 全选 删除
	*/ 
	var $rightManage = $('.right-manage'),
		$chooseAll = $rightManage.find('li.chooseAll'),//全选
		$batchManage = $rightManage.find('li.batchManage'),//批量管理
		$deleteManage = $rightManage.find('li.deleteManage');//删除
		$productCmp = $rightManage.find('li.productCmp'),//宝贝对比
		$manageCancel = $rightManage.find('ul.manage-cancel'),
		$iconAll = $rightManage.find('span.icon-all');

        //事件委托处理几个控件 
	$rightManage.bind('click', function(e) {
    	var cls = e.target.classList[1];
    	switch(cls) {
    		case 'batchManage' :
    			$batchManage
    				.text('取消管理')
    				.addClass('cancelManage')
    				.removeClass('batchManage');
    			$productCmp.hide();
    			$manageCancel.show();
    			$('.list-mask').show();
    			break;
    		case 'cancelManage' :
    			$('.cancelManage')
    				.text('批量管理')
    				.addClass('batchManage')
    				.removeClass('cancelManage');
    			$productCmp.show();
    			$manageCancel.hide();
    			$('.list-mask').hide();
    			break;
    		case 'chooseAll' : 
                $('.icon-choose').each(function(index, val){
                    if($(val).css('color') == "rgb(204, 204, 204)") {
                        $(this).toggleClass('changeIconColor');
                    }
                });
    			break;
    		case 'icon-all' :
    			$('.icon-choose').toggleClass('changeIconColor');
    			break;
    		case 'deleteManage' :
                $('.fav-list').each(function(index, val) {
                    if($(this).find('span').hasClass('changeIconColor')){
                        // $(this).remove();
						deleteFetch();
                    }
                });
    			break;
    	}
	});

    $('.fav-list').bind('click', function() {
        $(this).find('div.mask').css('opacity', '0.2');
        $(this).find('span.icon-choose').toggleClass('changeIconColor');
    });

    $('.alink').bind('click', function(e) {
        $('.fav-tab-menu2').find('a.alink').removeClass('current');
        $(this).addClass('current');
    });
})();
var deleteFetch = function () {
	var id =
	$.ajax({
		url:'/my/favorite/'+id,
	})
};

