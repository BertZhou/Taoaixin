$(function () {
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