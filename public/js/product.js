$(function () {






// Show(查看对应id的商品)
// ## Show(查看对应id的商品)
// - 方式：GET
// - 地址：Http://ip:port/product/{商品id}
// - 返回：成功返回单个商品ID，失败返回'商品id不存在'
	$('').bind('click' , function () {
		$.ajax ({
			url : 'Http://taoaixin-api.com/product/{}',
			method : 'GET',
			dataType : 'json',
			success : function () {
				console.log('show');
			}
		});
	});

// ## Store(创建)
// - 方式：POST
// - 地址：Http://ip:port/product
// - 参数：'name'          =>  （商品名称）必须，只允许数字、字母和下划线
//         'price'         =>  （商品价格）必须，只允许大于0的数字
//         'surplus'       =>  （余量）必须，只允许大于0的整数
//         'provider_id'   =>  （上架者ID）必须，只允许大于0的整数
//         'provider_name' =>  （上架者Name）必须，只允许数字、字母和下划线

// - 返回：成功返回商品信息，失败返回数组[['失败的字段名' => '失败的理由'], [...], [...], ...]

	$('#item_fb').bind('click' , function () {
		var name = $('.seled')[0].innerHTML="时令水果",
			price = $('#product-price').val(),
			provider_name = $('#provider').val(),
			provider_id = sessionStorage.getItem('id'),
			surplus = $('#amount').val(),
			tel = $('.tel').val(),
			type = $('li').find('.focus').attr('data-type'),
			way = $('.way').html(),
			location = $('.location').html(),
			new_old = $('.new-old').html(),
			start_at = $('.start').val(),
			finish_at = $('.end').val();

		$.ajax ({
			url : 'Http://taoaixin-api.com/product',
			data : {
				name : name,
				price : price,
				provider_id : provider_id,
				provider_name : provider_name,
				surplus : surplus,
				type = type
			},
			method : 'POST',
			dataType : 'json',
			error : function () {
				alert('请将信息填写完整哦！');
			},
			success : function () {
				if (name && price && provider_id && provider_name && surplus) {
					console.log('show');
					$("#Item_details").hide();
		 			$("#select").hide();
		 			$("#fbsuccess").show();
		 			$('.phone').text(tel);
	 			}else {
					alert('请将信息填写完整哦！');
	 			}
			}
		});
	});

});

