$(function(){
  $(".leftNav ul li a").click(function(){
      $(".leftNav ul li ul li a").removeClass("active")
      $(this).addClass('active');
  });
  $(".courseNav .nav .nav-item .nav-link").click(function() {
    $(".courseNav .nav .nav-item .nav-link").removeClass("active");
    $(this).addClass("active");
  });
  $('.leftNav .arrowOpen').click(function(){
    $('.coursesContent').css({
      'padding' : '80px 0',
      'width' : '84%',
      'padding-left' : '250px'});
  });
  $('.leftNav.opened .arrowOpen').click(function(){
    $('.coursesContent').css({
      'padding' : '80px 15px',
      'width' : '80%'});
  });
});
