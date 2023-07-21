$(function(){
  $('.theme').on('click', function(){
    $(this).toggleClass('active');
    $('.headerdashboard').toggleClass('active');
  });
  $('.dashboard__link__submenu').on('click', function(){
    $('.dashboard__container').toggleClass('active__submenu');
  });
});