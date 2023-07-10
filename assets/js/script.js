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

  /**
   * Ajout de la classe active quand le curseur passe sur un service 
   */
  $('.container__services').on('mouseenter',function(){
    $('.container__services').removeClass('active');
    $(this).addClass('active');
  })
  $('.container__services').on('mouseleave',function(){
    $(this).removeClass('active');
  })

  /**
   * Ajout de la classe active quand le curseur passe sur un membre de l'equipe 
   */
  $('.equipe__bloc').on('mouseenter',function(){
    $('.equipe__bloc').removeClass('active');
    $(this).addClass('active');
  })
  $('.equipe__bloc').on('mouseleave',function(){
    $(this).removeClass('active');
  })
});