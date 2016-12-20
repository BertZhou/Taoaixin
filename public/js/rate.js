$(function () {
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
});