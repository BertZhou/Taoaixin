(function() {
    $('.reg_item2').on({
        click : function() {
            $('.reg_item2').removeClass('reg_current');
            $(this).addClass('reg_current');
        },
        mouseenter : function() {
            var hasCurrent = $(this).hasClass('reg_current');
            if(!hasCurrent) {
                $(this).find('div.line').css('width','150px');
            }
        },
        mouseleave : function() {
            $(this).find('div.line').css('width','0px');
    }});
})();