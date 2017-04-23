/**
 * Created by GaoTing 2016/12/19
 * 订单相关js
 * */
$(function () {

    //左侧栏选中效果
    $('.mt-menu-item a').each(function () {
        var selectedValue = $('#selectedMenu').val();
        var this_val = $(this).data('content');
        if(this_val == selectedValue) {
            $(this).toggleClass('active');
        }
    });
    //爱心大使认证方式
    $('.yonghu').bind("change",function(){
        if($(this).val()=="0"){
            $('.integral').show();
            $('.personalUser').show();
            $('.deposit').hide();
            $('.enterpriseUser').hide();
        }
        else if($(this).val()=="1"){
            $('.deposit').hide();
            $('.integral').hide();
            $('.personalUser').hide();
            $('.enterpriseUser').show();
        }
    });
    $('.authentication').bind("change",function(){
    	if($(this).val()=="0"){
    		$('.integral').show();
    		$('.deposit').hide();
    	}
    	else if($(this).val()=="1"){
    		$('.deposit').show();
    		$('.integral').hide();
    	}
    });
    // $('.daifukuan').click(function(){
    //     $('.suoyou').hide();
    //     $('.meiyou').show();
    // });
    // $('.daifahuo').click(function(){
    //     $('.suoyou').hide();
    //     $('.meiyou').show();
    // });
    // $('.daishouhuo').click(function(){
    //     $('.suoyou').hide();
    //     $('.meiyou').show();
    // });
    // $('.daipingjia').click(function(){
    //     $('.suoyou').hide();
    //     $('.meiyou').show();
    // });
    // $('.suoyoudingdan').click(function(){
    //     $('meiyou').hide();
    //     $('suoyou').show();
    // });

});