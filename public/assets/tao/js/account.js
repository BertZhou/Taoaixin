$(function () {
  $('.YTDAX').bind('click', function () {
    $(this).find('ul.YTDAX_LIST').toggle();
    var $span = $(this).find('span');
    if($span.eq(0).is(':visible')) {
      $span.eq(0).removeClass('icon-down').css('display','none');
      $span.eq(1).addClass('icon-up').css('display','inline-block');
    }else {
      $span.eq(0).addClass('icon-down').css('display','inline-block');
      $span.eq(1).removeClass('icon-up').css('display','none');
    }
    return false;
  })
});
