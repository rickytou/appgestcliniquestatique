$(function(){
  $('.menuburger').on('click',function(){
    $(this).toggleClass('onOffMenuburger');
    $('.menu').toggleClass('onOffMenuburger');
  });
});