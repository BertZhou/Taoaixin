$(function () {
        // $.ajax({
        //     url : 'http://120.27.131.127:12450/trade',
        //     data : {
        //         token : token,
        //         receiver : userId,
        //         money : money
        //     },
        //     method : 'post',
        //     dataType : 'json',
        //     success : function (json){
        //         if(!json.code || json.code == 200){
        //             console.log('trade');
        //         }            
        //     }
        //   });

    //收藏夹
    
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
    
});