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
 * Ajout de la classe active quand l'utilisateur clique sur un lien de menu
 */


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

  /**
   * Focus sur la section clinique
   */
  window.addEventListener('scroll',function(){
    const clinique = document.querySelector("#clinique");
    const equipe = document.querySelector("#equipe");
    const services = document.querySelector("#services");
    const galeries = document.querySelector("#galeries");
    const contact = document.querySelector("#contact");
    const minus = 220;
    $('.menu li').removeClass('active');
    if(window.scrollY >= (equipe.offsetTop - minus) && this.window.scrollY <= (equipe.offsetTop + equipe.scrollHeight)){
        //$('.menu li').removeClass('active');
       $('a[href="#equipe"]').parent().addClass('active');        
    }
    else if(window.scrollY >= (clinique.offsetTop - minus) && this.window.scrollY <= (clinique.offsetTop + clinique.scrollHeight)){
      $('.menu li').removeClass('active');
      $('a[href="#clinique"]').parent().addClass('active');
      $('.sectionCliniqueGroup__:nth-child(1)').addClass('show'); 
      $('.sectionCliniqueGroup__:nth-child(2)').addClass('show');
      $('.sectionCliniqueGroup__:nth-child(3)').addClass('show'); 
      $('.sectionCliniqueGroup__:nth-child(4)').addClass('show');
    }
    else if(window.scrollY >= (services.offsetTop - minus) && this.window.scrollY <= (services.offsetTop + services.scrollHeight)){
      $('a[href="#services"]').parent().addClass('active'); 
    } 
    else if(window.scrollY >= (galeries.offsetTop - minus) && this.window.scrollY <= (galeries.offsetTop + galeries.scrollHeight)){
      $('a[href="#galeries"]').parent().addClass('active'); 
    }
    else if(window.scrollY >= (contact.offsetTop - minus) && this.window.scrollY <= (contact.offsetTop + contact.scrollHeight)){
      $('a[href="#contact"]').parent().addClass('active'); 
    }
    else if(window.scrollY >= (temoignages.offsetTop - minus) && this.window.scrollY <= (temoignages.offsetTop + temoignages.scrollHeight)){
      $('a[href="#temoignages"]').parent().addClass('active'); 
    }
  });

  /**
   * Defilement des temoignages
   */
  
//   $('.temoignages__navigation').on('click',function(){
//     var temoignages = $('.temoignages__bloc__group');
//     var compteur;
//     var next;
//     $.each(temoignages, function(index, temoignage){
//      if(temoignage.classList.contains('active')){
//       temoignage.classList.remove('active');
//       compteur = index;
//     }

//   });
//   if(compteur < temoignages.length - 1){
//   next = temoignages[compteur + 1];
//   }
//   else{
//     next = temoignages[0];
//   }
 
//   console.log(next);
//   next.classList.add('active');
// });

/**
 * Modification de la section temoignages
 */
  $('.temoignages__navigation').on('click',function(){
    var temoignages = $('.temoignages__bloc__group');
    var compteur;
    var next;
    $.each(temoignages, function(index, temoignage){
     if(temoignage.classList.contains('active')){
      if(index == 0){
        temoignages[index].classList.add('posX102');
      }else if(index == 1){
        temoignages[index].classList.add('posX204');
      }
      else if(index == 2){
        temoignages[index].classList.add('posX306');
      }
      else{
        temoignages[0].classList.remove('posX102');
        temoignages[1].classList.remove('posX102');
        temoignages[1].classList.remove('posX204');
        temoignages[2].classList.remove('posX306');
        temoignages[2].classList.remove('posX204');
        temoignages[3].classList.remove('posX306');
      }
      temoignage.classList.remove('active');
      compteur = index;
    }

  });
  if(compteur < temoignages.length - 1){
    next = temoignages[compteur + 1];
    /* Deplacement du bloc temoignage */
    if(compteur == 0){
      next.classList.add('posX102');
    }
    else if(compteur == 1){
      next.classList.add('posX204');
    }
    else if(compteur == 2){
      next.classList.add('posX306');
    }
  }
  else{
    next = temoignages[0];
    // temoignages[0].classList.remove('posX102');
    // emoignages[0].classList.remove('posX102');
    // emoignages[0].classList.remove('posX102');
  }
 next.classList.add('active');
});


});