(function() {
    $('.btn-submit').bind('click',function () {
        var message = {
            email: $('input[name="email"]').val(),
            username: $('input[name="username"]').val(),
            password: $('#pass').val(),
            passwordagain: $('#passagain').val(),
            identity: $('input[name="radio"]:checked').data('id')
        };
        debugger
        $.ajax({
            url:'/signup_check',
            data: {
                message: message
            },
            method: 'POST',
            success: function (json) {
                if(json.message == "success") {
                    window.location.href = 'http://' +   window.location.host;
                }else {
                    $('.status').text(json.data);
                    $('#myModal').modal('show');
                }
            }
        })
    });

})();