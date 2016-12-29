;$(function () {
    $("#favorites").hover(function(){
            $("#favorites_mune").toggle();
            $("#favorites").addClass("navigation_hover");
            $('.icon-fav').css('color','#c51929');
        },
        function(){
            $("#favorites_mune").toggle();
            $("#favorites").removeClass("navigation_hover");
            $('.icon-fav').css('color','#9C9C9C');
        });
    //0 推荐 1 商品 2 时间 3job
    $('#item_fb').bind('click', function () {
        var message ={
            type: '',
            price: $('#product-price').val(),
            name: $('input[name="name"]').val(),
            content: $('#editor').text()
        };

        $('.create').each(function (index, val) {
            if($(this).hasClass('focus')){
               message.type = $(this).data('type');
            }
        });
        switch(message.type) {
            case '0':
                break;
            case '1':
                break;
            case '2':
                var start = $('.start').val();
                var end = $('.end').val();
                // message.content =
                break;
            case '3':
                message.price = $('#time-price').val();
                break;
            default:
                break;
        }
        $.ajax({
            url: 'create',
            method: 'POST',
            data: {
                message: message
            },
            success: function (json) {
                $('#Item_details').hide();
                $('#fbsuccess').show();
            }
        })
    });

});