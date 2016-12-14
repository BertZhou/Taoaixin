/*
* Created by GaoTing 
*/ 


/**
* 处理商品的数量、价格、是否被选择等功能  宝贝删除 遮罩处理等功能
*/

$(function () {
    var $parent = $('.cart-layout');
    var $checkall = $parent.find('input.check-all');
    var $checkboxshop = $parent.find('input.checkboxshop');
    var $checkshop = $parent.find('input.check-shop');
    var $shopcontent = $parent.find('div.shop-content');

  /*
  * 通过事件委托 来处理商品的添加与删除
  */
  $('.td-amount').bind('click', function (e) {
      var cls = e.target.classList[0];
      var $parent = $(this).children('.' + cls);
      var $next = $parent.next();
      var $prev = $parent.prev();
      var num;
      switch (cls) {
        case 'reduce':
            num = parseInt($next.val()) - 1;
            $next.val(num);
            calcProPrice($parent, num);
            calcProdSubTotal();
            break;
        case 'add':
            num = parseInt($prev.val()) + 1;
            $prev.val(num);
            calcProPrice($parent, num);
            calcProdSubTotal();
            break;
        default :
            break;
    }
  });
  /**
  *  对数量操作进行处理 分为按键输入事件以及粘贴事件
  */
    $('.text').keyup(function(){
          $(this).val($(this).val().replace(/[^0-9.]/g,''));
          var num = $(this).val();
          calcProPrice(this, num);
      }).bind("paste",function(){  //CTR+V事件处理
          $(this).val($(this).val().replace(/[^0-9.]/g,''));
          var num = $(this).val();
          calcProPrice(this, num);
      }).css("ime-mode", "disabled"); //CSS设置输入法不可用
      // 设置全部商品数量
      $('.cart-top').find('span.number:first').text($checkboxshop.length);
      /*
      *点击全选按钮 选中所有商品
      */
    $('.check-all').change(function () {
      if($(this).prop('checked')){
        $checkboxshop.prop('checked', true);
        $checkshop.prop('checked', true);
        $checkall.prop('checked', true);
      }else {
        $checkboxshop.prop('checked', false);
        $checkshop.prop('checked', false);
        $checkall.prop('checked', false);
      }
      calcProdSubTotal();
      calcTotalNumber();
    });
  /*
  * 点击选择商品 如果选择了这个店铺下的所有商品的话 则店铺的按钮也处于选中状态
  */
  $($checkboxshop).bind('click', function () {
      var $parent = $(this).parent();
      var $shopparent = $parent.siblings('div.shop-content');
      var $checkbox = $parent.siblings('div.cart-checkbox');
      var flag, mark = 1;
      $($shopparent).each(function () {
          $(this).find('input').prop('checked') ? (flag = 1):(mark = 0);
      });

      if(mark == 1 && ($(this).prop('checked'))) {
          $checkbox.find('input.check-shop').prop('checked',true);
      }else {
          $checkbox.find('input.check-shop').prop('checked',false);
          $checkall.prop('checked', false);
      }
      calcProdSubTotal();
      calcTotalNumber();
  });
  /*
  * 点击店铺按钮，选中店铺下方所有商品
  */
    $($checkshop).change(function () {
        var $inputcheckboxshop = $(this).parent().siblings().find('input.checkboxshop');
        if($(this).prop('checked')){
            $inputcheckboxshop.prop('checked',true);
        }else {
            $inputcheckboxshop.prop('checked',false);
            $checkall.prop('checked', false);
        }
        calcProdSubTotal();
        calcTotalNumber();
  });


  /**
  * 处理删除业务 以及遮罩效果
  */
  //点击单个删除按钮 弹出遮罩
  var target;//将要删除的元素
  $('.delete').bind('click', function () {
      var flag = 0;
      openDelProWin(flag);
      target = $(this).parent().parent();
      targetLength = $(this).parent().parent().siblings('div.shop-content').length;

      return false;
  });
  // 点击deleteAll按钮 可以删除一个，也可以删除多个商品
  $('.deleteAll').bind('click', function () {
      var flag = 1, mark = 0;
      var checkLength = $('.checkboxshop:checked').length;
      if(checkLength) {
          openDelProWin(flag);
      }else {
          $('.focus').css({'z-index':'10','background-color':'black','-webkit-filter':'opacity(70%)'});
          $('.message').show();
      }
      return false;
  });
  //点击关闭 取消遮罩
  $(".del_btn").bind("click", closeDelProWin);
  $('.btn_close').bind('click', closeDelProWin);
  //点击确认删除宝贝 进行DOM操作，删除响应宝贝 目前没有跟后台交互 20160729
  $('.btn_confirm').bind('click', function () {
      if(targetLength) {
        target.remove(); 
      }else {
        target.parent().remove();
      }
      closeDelProWin();
      calcProdSubTotal();
      return false;
  });
  /**
  * 对底部菜单监听scroll事件 绑定在滚动的元素上
  */
  $(document).scroll(function () {
      var body = $('body')[0];
      if((body.scrollHeight-body.scrollTop) < 940 ){
          $('.floatBar').addClass('floatBar-after');
      }else {
          $('.floatBar').removeClass('floatBar-after');
      }
      $('.selected-view').hide();
  });

  /**
  * 鼠标滑动到商品上 进行商品图片预览 将预览的图片绝对定位到父级元素
  */
  $('a.productPic').mouseover(function (e) {
      var productImg =  "<div id='productImg'><img src='"+ $(this).find('img')[0].src +"' alt='产品预览图'/><\/div>";
      $(this).parent().parent().append(productImg).show('fast');
  }).mouseout(function (e) {
      $('#productImg').remove();
  });
  /**
  * 点击已选商品按钮 显示选中的商品的图片
  */
  $('.selected').bind('click', function (e) {
      var checkLength = $('.checkboxshop:checked').length;
      if(checkLength) {
          $('.selected-view').toggle();
          $('.floatBar').toggleClass('show');
      }
  });
  /**
  * 点击取消选择 弹出的图片消失，同时主页面的选择框为未选择状态
  * 如果是全选 店铺以及全选的框变为未选状态 已选商品数量重新计算
  */
  $('#selectedViewList').bind('click', function (e) {
      var index = $(e.target).attr('data-index');
      if(e.target.classList == 'cancle'){
          $('.checkboxshop:checked')
            .eq(index)
            .click(); //触发click事件 商品变为未选中的状态，此时弹出的图片也会随之消失
          var checkLength = $('.checkboxshop:checked').length;
          if(!checkLength) {
              $('.selected-view').hide();
          }
      }
  });

  // js end
});


  //计算总价格
  var calcProdSubTotal = function () {
      var proSubTotal = 0;
      var HTMLStr = '';
      $('.checkboxshop:checked').siblings('.td-total').each(function(index, val){
          var valString = $(this).text() || 0;
          HTMLStr += "<div><img src = '"+ $(this).parent().find('img')[0].src +"'><span class='cancle' data-index = '"+index +"'>取消选择</span></div>"
          proSubTotal += parseFloat(valString);
      });
      $('#selectedViewList').html(HTMLStr);
      $('.priceTotal').text(proSubTotal);
      $('.bottom_priceTotal').text(proSubTotal);
      submitFn();
  };
  //计算选中商品数量
  var calcTotalNumber = function () {
      var proNum = 0;
      $('.checkboxshop:checked')
      .siblings('.td-amount')
      .find('.text').each(function(){
          var valString = $(this).val() || 0;
          proNum += parseInt(valString);
      });
      $('#selectedTotal').text(proNum);
  };
  //计算单个商品的总价 并对减号进行处理
  var calcProPrice = function (target, num) {
      var $parent = $(target).parent();
      if(num > 1) {
          $(target)
          .siblings('span.prereduce')
          .removeClass('prereduce')
          .addClass('reduce')
          .text('-');
    }else {
        $(target)
            .removeClass('reduce')
            .addClass('prereduce')
            .text('');
    }
    var price = $parent.siblings('div.td-price').text();
    $parent.siblings('div.td-total').text(num*price);
    // calcTotalNumber();
  };
  //关闭提醒窗口时效果 取消遮罩
  var closeDelProWin = function () {
      $(".error").hide();
      $(".success").hide();
      $('.message').hide();//关闭message提示框
      $('.focus').css({'z-index':'0','background-color':'transparent','-webkit-filter':'opacity(100%)'});
  };
  //打开提醒窗口 显示遮罩
  var openDelProWin = function (flag) {
      $('.focus').css({'z-index':'10','background-color':'black','-webkit-filter':'opacity(70%)'});
      flag ?$('.proDelete p').text('确认要删除这些宝贝吗？'): $('.proDelete p').text('确认要删除该宝贝吗？');
      $(".success").show();
      $('.rewrite').hide();
  };
  var submitFn = function () {
      var checkLength = $('.checkboxshop:checked').length;
      if(!checkLength) {
          $('#jiesuan').attr('disabled',true);
          $('.closing').css('background-color','#B0B0B0');
      }else {
          $('.closing').css('background-color','#f50');
          $('#jiesuan').attr('disabled',false);
    }
  };
