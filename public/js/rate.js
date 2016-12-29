/* Created by GaoTing 2016/12/20
*  点击评论按钮
*  点击提交订单按钮
*  点击确认收货地址
* */

$(function () {
   //点击确认收货地址
   var areaText = {
      province: $('input[name="province"]').val(),
      city: $('input[name="city"]').val(),
      area: $('input[name="area"]').val()
   };
   $('.select-address').citys({
      province:areaText.province,
      city:areaText.city,
      area:areaText.area,
      onChange: function (data) {
         areaText.province = data['province'];
         areaText.city = data['city'];
         areaText.area = data['area'];
      }
   });
   $('.btn-address').bind('click', function () {
       var message = {
           province: areaText.province,
           city: areaText.city,
           area: areaText.area,
           address: $('input[name="address"]').val(),
           name: $('input[name="name"]').val(),
           mobile: $('input[name="mobile"]').val()
       };
      $.ajax({
         url: '/info_check',
         method: 'POST',
         data: {
             message: message
         },
         success: function () {
             $('#myModal').modal('show');
         }
      })
   });
   //点击发表评论按钮
   $('.btm').bind('click', function () {
      var content = $('textarea').val();
      var stars = $('.rater-star-result').text().substr(0,1);
      var id = $('input[name="orderId"]').val();
      var url = '/my/order/'+id +'/rate';
      $.ajax({
         url: url,
         method:'POST',
         data : {
            stars: stars,
            content: content
         },
         success: function () {
            $('#myModal').modal('show');
         },
         error: function () {
         }
      })
   });

//   点击提交订单按钮
   $('.btn-submit').bind('click', function () {

      var lastIndex = window.location.href.lastIndexOf('=') + 1;
      var number =  window.location.href.substr(lastIndex);
      var itemID = $('input[name="itemID"]').val();
      var note = $('input[name="note"]').val();
      var url = '/item/' + itemID + '/pay';
       var name = $('input[name="name"]').val();
       if(!name) {
           $('#failModal').modal('show');
       }else {
           $.ajax({
               url: '/my/order',
               method: 'POST',
               data: {
                   number: number,
                   item_id: itemID,
                   note: note
               },
               success: function () {
                   window.location.href = 'http://' + window.location.host + url;
               }
           })

       }
   });
//   点击添加到购物车

});