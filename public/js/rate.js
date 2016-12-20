$(function () {
   //点击发表评论按钮
   $('.btm').bind('click', function () {
      var content = $('textarea').val();
      var stars = $('.rater-star-result').text().substr(0,1);
      var lastIndex = window.location.href.lastIndexOf('/') + 1;
      var id =  window.location.href.substr(lastIndex);
      $.ajax({
         url:'/my/order/rate/'+id,
         method:'POST',
         data : {
            stars: stars,
            content: content
         },
         success: function () {
            debugger
         },
         error: function () {
            debugger
         }
      })
   });

//   点击提交订单按钮
   $('.btn-submit').bind('click', function () {
      var itemID = $('input[name="itemID"]').val();
      var note = $('input[name="note"]').val();
      var url = '/pay/' + itemID;
      $.ajax({
         url: '/my/order',
         method: 'POST',
         data: {
            item_id: itemID,
            note: note
         },
         success: function () {
            debugger
            $('.order-link').attr('href', url);
         }
      })
   })
});