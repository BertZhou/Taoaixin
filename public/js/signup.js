(function() {


    $('.btn-submit').bind('click', function () {
        $.ajax({
           url :'signup_check',
            data : {
                username : username,
                password : password,
                contact  : contact
            },
            method : 'POST',
            dataType : 'json',
            success : function (json){
                if(!json.code || json.code == 200){
                    // location.href = 'indexLogin.html?username='+json.username + '&id=' + json.id;
                    sessionStorage.setItem('username',username);
                    // sessionStorage.setItem('id',json.user.id);
                    //location.href = 'signin';
                }
            }
        });
    });
})();