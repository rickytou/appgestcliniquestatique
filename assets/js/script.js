$(function(){
  /* Ajout de la classe onOffMenuBurger sur le menu  et le menuburger*/
  $('.menuburger').on('click',function(){
    $(this).toggleClass('onOffMenuburger');
    $('.menu').toggleClass('onOffMenuburger');
  });

  /**
   * Ajout et suppression de la classe active sur le lien du menu
   */
  $('.menu li').on('click', function(){
    $('.menu li').removeClass('active');
    $(this).addClass('active');
  })
});