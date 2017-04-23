
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


        $('.create').bind('click', function () {
           if(!$(this).hasClass('focus')){
               $(this).addClass('focus')
                   .parent()
                   .siblings()
                   .find('.create')
                   .removeClass('focus');
           }
           m = $(this).data('type');
        });
	});
	

//发布商品
	$(function(){
		$("#second").click(function(){
			$("#Item_details").show();
			$("#select").hide();
			$("#fbsuccess").hide();
			switch(m){
				case '1':
				$("#goodtype").show();
				$("#condition").show();
				$("#goodprice").show();
				$("#payment").hide();
				$("#timestr").hide();
				$("#timefin").hide();
				$("#place").show();
				break;
				case '2':
				 $("#goodtype").hide();
				$("#condition").hide();
				$("#goodprice").show();
				$("#payment").hide();
				$("#timestr").show();
				$("#timefin").show();
				$("#place").hide();
				break;
				case '3':
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
				case 1:
				$("#goodtype").show();
				$("#condition").show();
				$("#goodprice").show();
				$("#payment").hide();
				$("#timestr").hide();
				$("#timefin").hide();
				$("#place").show();
				break;
				case 2:
				 $("#goodtype").hide();
				$("#condition").hide();
				$("#goodprice").show();
                    $('.unit').text('/小时');
                    // $('.rows_title').hide();
				$("#payment").hide();
				$("#timestr").show();
				$("#timefin").show();
				$("#place").hide();
				break;
				case 3:
				$("#goodtype").hide();
				$("#condition").hide();
				$("#goodprice").hide();
                    $('.unit').text('/小时');
				$("#payment").show();
				$("#timestr").hide();
				$("#timefin").hide();
				$("#place").show();
				break;
			}
		});
		
	});
	/*点击登录*/
	;$(function () {
		$('.login_btn').bind('click', function () {
			var username = $('#username').val();
			var password = $('#password').val();

			$.ajax({
				url:'signin_check',
				method:'POST',
				data: {
					username: username,
					password: password
				},
				success: function (json) {
					if(json.message == "success") {
						window.location.href = 'http://' +   window.location.host;
					}else {
						// var message = json.data;
						$('.status').text(json.data);
						$('#myModal').modal('show');
					}
				}
			})
		});
	});

