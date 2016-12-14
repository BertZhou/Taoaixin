
    var username = sessionStorage.getItem('username');
    $('.sign-success').text(username);
	//我的淘爱心 
	$(function(){
		$("#wdtax").hover(function(){
			$("#wdtax_mune").show();
			$("#wdtax").addClass("navigation_hover");
		},
			function(){
			$("#wdtax_mune").hide();
			$("#wdtax").removeClass("navigation_hover");
		});
	});

	//卖家中心
	$(function(){
		$("#seller").hover(function(){
			$("#seller_mune").toggle();
			$("#seller").addClass("navigation_hover");
		},
			function(){
			$("#seller_mune").toggle();
			$("#seller").removeClass("navigation_hover");
		});
	});
	//联系客服
	$(function(){
		$("#service").hover(function(){
			$("#service_mune").toggle();
			$("#service").addClass("navigation_hover");
		},
			function(){
			$("#service_mune").toggle();
			$("#service").removeClass("navigation_hover");
		});
	});
	//我的账户
	$(function(){
		$("#account").hover(function(){
			$("#account_mune").show();
			$("#account").addClass("navigation_hover");
		},
			function(){
            $("#account_mune").hide();
			$("#account").removeClass("navigation_hover");
		});
	});
	

// 注册之间的切换
$(document).ready(function() {  
	$("#reg_student").click(function(){
		$("#reg_student2").show();
		$("#reg_other2").hide();

	});
	$("#reg_other").click(function(){
		$("#reg_other2").show();
		$("#reg_student2").hide();
	});
});


  //收藏夹
  $(document).ready(function(){
    $(function(){
    $(".fav-baobei").hover(function(){
      $(".menu").toggle();
      $(".fav-baobei").addClass("navigation_hover");
    },
      function(){
      $(".menu").toggle();
      $(".fav-baobei").removeClass("navigation_hover");
    });
  })
  });

  //点击退出 退出到首页
  $(document).ready(function () {
    $(function () {
      $('.exit').bind('click', function () {
        location.href = 'login.html';
      });
      $('.manage').bind('click',function () {
        location.href = 'personalData.html';
      });
    });
  });

//点击淘爱心首页 登录过后的跳转到登录成功页
(function (){
  var username = sessionStorage.getItem('username');
  $('.F_tax').bind('click',function () {
    if(username){
      location.href = 'indexLogin.html';
    }else{
      location.href = 'index.html';
    }
  });

})();

//发布商品选择类型按钮
	var m = 0;
	$(function(){
		$("#radio1").click(function(){
			$("#radio1").addClass("focus");
			$("#radio2").removeClass("focus");
		});
		$("#radio2").click(function(){
			$("#radio2").addClass("focus");
			$("#radio1").removeClass("focus");
		});
		$("#type_select1").click(function(){
			$("#type_select1").addClass("focus");
			$("#type_select2").removeClass("focus");
			$("#type_select3").removeClass("focus");
			m=1;
		});
		$("#type_select2").click(function(){
			$("#type_select2").addClass("focus");
			$("#type_select1").removeClass("focus");
			$("#type_select3").removeClass("focus");
			m=2;
		});
		$("#type_select3").click(function(){
			$("#type_select3").addClass("focus");
			$("#type_select1").removeClass("focus");
			$("#type_select2").removeClass("focus");
			m=3;
		});
		
		
	});
	

//发布商品
	$(function(){
		$("#second").click(function(){
			$("#Item_details").show();
			$("#select").hide();
			$("#fbsuccess").hide();
			switch(m){
				case 2:
				$("#goodtype").show();
				$("#condition").show();
				$("#goodprice").show();
				$("#payment").hide();
				$("#timestr").hide();
				$("#timefin").hide();
				$("#place").show();
				break;
				case 1:
				 $("#goodtype").hide();
				$("#condition").hide();
				$("#goodprice").show();
				$("#payment").hide();
				$("#timestr").show();
				$("#timefin").show();
				$("#place").hide();
				break;
				case 3:
				$("#goodtype").hide();
				$("#condition").hide();
				$("#goodprice").hide();
				$("#payment").show();
				$("#timestr").hide();
				$("#timefin").hide();
				$("#place").show();
				break;
			}
		});
		$("#first").click(function(){
			$("#Item_details").hide();
			$("#select").show();
			$("#fbsuccess").hide();
		});
		$("#third").click(function(){
			$("#Item_details").hide();
			$("#select").hide();
			$("#fbsuccess").show();
		});
		$("#item_next").click(function(){
			$("#Item_details").show();
			$("#select").hide();
			$("#fbsuccess").hide();
			switch(m){
				case 2:
				$("#goodtype").show();
				$("#condition").show();
				$("#goodprice").show();
				$("#payment").hide();
				$("#timestr").hide();
				$("#timefin").hide();
				$("#place").show();
				break;
				case 1:
				 $("#goodtype").hide();
				$("#condition").hide();
				$("#goodprice").show();
				$("#payment").hide();
				$("#timestr").show();
				$("#timefin").show();
				$("#place").hide();
				break;
				case 3:
				$("#goodtype").hide();
				$("#condition").hide();
				$("#goodprice").hide();
				$("#payment").show();
				$("#timestr").hide();
				$("#timefin").hide();
				$("#place").show();
				break;
			}
		});
		
	});
	