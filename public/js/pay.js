$(function() { 
	var clickNumber=0;
	$(".xianshi").click(function(){
		if(clickNumber%2==0){
				$("#xianshi_").show();
		}else{
			$("#xianshi_").hide();
		}
		clickNumber++;
	});


	$('a.zhifu_tupian1').mouseover(function (e) {
      var zhifu_tupian_fangda =  "<div id='zhifu_tupian_fangda'><img src='"+ $(this).find('img')[0].src +"' alt='产品预览图'/><\/div>";
      $(this).parent().parent().append(zhifu_tupian_fangda).show('fast');
  	}).mouseout(function (e) {
      $('#zhifu_tupian_fangda').remove();
  	});
})

