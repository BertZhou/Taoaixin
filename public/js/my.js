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
});