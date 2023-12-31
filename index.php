<?php
declare(strict_types = 1);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="La clinique Jeannot Cadet vieille d'une vingtaine d'annees est specialisee dans le traitement des maladies liees aux yeux, nez, gorge, oreille. La clinique possede une large gamme de services pour desservir sa clientele" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>Clinique Jeannot Cadet - Bienvenue</title>
</head>
<body>
  <!-- Conteneur global -->
  <div class="wrapper">
    <!-- Container Header Global -->
    <header id="header">
      <!-- Container centre header --> 
      <div class="headerTop">
        <nav id="nav" role=navigation>
          <!-- Container centre navigation --> 
          <div class="navigation">
          <!-- Logo et Nom clinique-->
            <div class="logo">
              <img src="assets/images/logo-clinique-jeannot-cadet.png" alt="logo clinique" />
              <h1><a href="#headerMiddle">Clinique Jeannot Cadet</a></h1>    
            </div>
            <!--Menuburger -->
            <div class="menuburger">
              <div class="menuburger-ligne menuburger-ligne__1"></div>
              <div class="menuburger-ligne menuburger-ligne__2"></div>
              <div class="menuburger-ligne menuburger-ligne__3"></div>
            </div>
            <!-- Menu -->
            <ul class="menu">
              <li>
                <a href="#clinique"><span>Clinique</span><span class="fa-solid fa-house-chimney-medical"></span></a>
              </li>
              <li>
                <a href="#equipe"><span>Equipe</span><span class="fa-solid fa-people-group"></span></a>
              </li>
              <li>
                <a href="#services"><span>Services</span><span class="fa-solid fa-wrench"></span></a>
              </li>
              <li>
                <a href="#galeries"><span>Galeries</span><span class="fa-regular fa-image"></span></a>
              </li>
              <li>
                <a href="#temoignages"><span class="menuLinkHidden">T&eacute;moignages</span><span class="fa-regular fa-comments"></span></a>
              </li>
              <li>
                <a href="#contact"><span class="menuLinkHidden">Contact</span><span class="fa-regular fa-envelope"></span>
                </a>
              </li>
              <li>
                <a href="#"><span class="menuLinkHidden">Connexion</span><span class="fa-regular fa-circle-user"></span>
              </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Container Navigation Global -->
     <div class="headerMiddle" id="headerMiddle">
      <!-- Images illustratives -->
        <img src="assets/images/docteur.svg" />
      <!-- Phrase d'accrode -->
      <div class="accroche">
        <!-- <strong>Virage au num&eacute;rique</strong> -->
        <strong>Traitement m&eacute;dical et <br />chirurgical de qualit&eacute;</strong>
        <h2>Leader et pionnier du domaine</h2>
        <p>La clinique ophtalmologique Jeannot Cadet, l'une des cliniques les plus r&eacute;put&eacute;s du pays utilise des technologies &agrave; la fine pointe de la technologie.</p>
        <a href="#" class="btn-accroche"> Suivi m&eacute;dical</a>
      </div>
     </div>
    </header>
    <!-- Section Clinique Wrapper -->
    <section id="clinique">
      <div class="sectionClinique">
        <div class="sectionCliniqueGroup">
          <!-- SectionCliniqueGroup__#1 -->
          <div class="sectionCliniqueGroup__">
            <span class="fa-regular fa-clock"></span>
            <strong>Horaire</strong>
            <p>Les heures de fonctionnement de la clinique sont variées tant pour la partie privée que pour la partie sociale. Une équipe dévouée est disponible sur les différentes pour vous accueillir à tout moment.</p>
          </div>
          <!-- SectionCliniqueGroup__#2 -->
          <div class="sectionCliniqueGroup__">
            <span class="fa-regular fa-newspaper"></span>
              <strong>Actualit&eacute;s</strong>
              <p>Toutes les activités tant dans la clinique qu'à l’extérieur, les cliniques mobiles réalisées dans la capitale et dans les zones rurales du pays pour les personnes les plus démunies et à faible revenu.</p>
          </div>
          <!-- SectionCliniqueGroup__#3 -->
          <div class="sectionCliniqueGroup__">
            <span class="fa-regular fa-circle-play"></span>
              <strong>Espace num&eacute;rique</strong>
              <p>Nous partageons nos connaissances dans les interventions médiatiques, dans la formation post-universitaire, dans l'enseignement et dans les opérations chirurgicales.</p>
          </div>
          <!-- SectionCliniqueGroup__#4 -->
          <div class="sectionCliniqueGroup__">
            <span class="fa-regular fa-calendar-days"></span>
              <strong>&Eacute;v&eacute;nements</strong>
              <p>Nos services de consultation mobile &agrave; l'int&eacute;rieur et &agrave; l'ext&eacute;rieur de la clinique sont r&eacute;alis&eacute;ees mensuellement. Nos partenaires nationaux travaillent dans les endroits recul&eacute;s du pays. </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin clinique -->
    <!-- Section Equipe Wrapper -->
    <section id="equipe">
      <div class="equipe">
        <!-- Titre de la section -->
          <h3>Notre &eacute;quipe</h3>
          <!-- Equipe__group__bloc#1 -->
          <div class="equipe__group">
            <!-- Equipe #1 -->
          <div class="equipe__bloc">
            <span>PHD.</span>
            <p class="equipe__img">
              <img src="assets/images/jean-claude-cadet.jpg" alt="Jean Claude Cadet">
            </p>
            <strong>Jean Claude Cadet</strong>
            <span>Ophtalmologue</span>
            <div class="equipe__socialmedia">
              <p>
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
              <i class="fa-regular fa-envelope"></i>
              </p>
            </div>
          </div>
          <!-- Equipe__group__bloc#2 -->
          <div class="equipe__bloc">
            <span>MD.</span>
            <p class="equipe__img">
              <img src="assets/images/claudy-cadet.jpg" alt="Claudy Cadet">
            </p>
            <strong>E.M. Claude Cadet</strong>
            <span>Ophtalmologue</span>
            <div class="equipe__socialmedia">
              <p>
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
              <i class="fa-regular fa-envelope"></i>
              </p>
            </div>
          </div>
          <!-- Equipe__group__bloc#3 -->
          <div class="equipe__bloc">
            <span>MD.</span>
            <p class="equipe__img">
              <img src="assets/images/valerie-cadet.jpg" alt="Jean Claude Cadet">
            </p>
            <strong>M. Val&eacute;rie Cadet</strong>
            <span>Ophtalmologue</span>
            <div class="equipe__socialmedia">
              <p>
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
              <i class="fa-regular fa-envelope"></i>
              </p>
            </div>
          </div>
         <!-- Equipe__group__bloc#4 -->
          <div class="equipe__bloc">
            <span>MD.</span>
            <p class="equipe__img">
              <img src="assets/images/stephane.jpg" alt="Stephane Cadet">
            </p>
            <strong>J. St&eacute;phane Cadet</strong>
            <span>Ophtalmologue</span>
            <div class="equipe__socialmedia">
              <p>
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
              <i class="fa-regular fa-envelope"></i>
              </p>
            </div>
          </div>
          </div>
      </div>
    </section>
    <!-- Fin Equipe -->
    <!-- Section Services Wrapper -->
    <section id="services">
      <div class="services">
         <!-- Service top -->
      <div class="services__top">
        <div class="services__left">
          <div class="services__left_wrapper">
            <!-- Service #1 -->
            <div class="services__left__box">
              <div class="container__services">
                <span class="far fa-building"></span>
                <div class="services__left__box__label">
                <span>Administration</span>
                </div>
               
              </div>
          </div>
          <!-- Fin #1 -->
          <div class="container__top">
            <div class="services__left__box">
            <div class="container__services">
              <span class="fas fa-clinic-medical"></span>
              <div class="services__left__box__label">
                <span>Clinique</span>
                </div>
            </div>
            </div>
            <div class="services__left__box">
            <div class="container__services">
              <span class="fas fa-cut"></span>
              <div class="services__left__box__label">
                <span>Chirurgies</span>
                </div>
            </div>
            </div>
          </div>
          <div class="container__top">
            <!-- Service #2 -->
            <div class="services__left__box">
            <div class="container__services">
              <span class="fas fa-notes-medical"></span>
              <div class="services__left__box__label">
                <span>Pharmacie</span>
                </div>
            </div>
            </div>
            <div class="services__left__box">
            <div class="container__services">
              <span class="fas fa-glasses"></span>
              <div class="services__left__box__label">
                <span>Lunettrie</span>
                </div>
            </div>
            </div>
            <div class="services__left__box">
            <div class="container__services">
              <span class="fas fa-diagnoses"></span>
              <div class="services__left__box__label">
                <span>Examen</span>
                </div>
            </div>
            </div>
          </div>
          </div>
        </div>
        <div class="services__right">
         <p>Une large gamme de services sont disponibles au local de la clinique pour desservir notre commnunaut&eacute;. Les examens m&eacute;dicaux et les op&eacute;rations chirurgicales sont r&eacute;alis&eacute;s sur place. La clinique poss&egrave;de &eacute;galement une boutique de lunetterie exposant des montures tendances et de marque.</p>
        </div>
      </div>
      <div class="services__bottom">
        <h3>Services diversifi&eacute;s</h3>
        <span>Pour une client&egrave;le de choix</span>
        <hr />
      </div>
      </div>
    </section>
    <!-- Fin Service -->
    <!-- Section Galerie Wrapper  -->
    <section id="galeries">
      <div class="galeries">
        <p class="galeries__img_1"><img src="assets/images/img-1.jpeg"</p>
        <p class="galeries__img_2"><img src="assets/images/img-2.jpeg"</p>
        <p class="galeries__img_3"><img src="assets/images/img-3.jpeg"</p>
        <p class="galeries__img_4"><img src="assets/images/img-4.jpeg"</p>
        <p class="galeries__img_5"><img src="assets/images/img-5.jpeg"</p>
        <p class="galeries__img_6"><img src="assets/images/img-6.jpeg"</p>
        <p class="galeries__img_7"><img src="assets/images/img-7.jpeg"</p>
        <p class="galeries__img_8"><img src="assets/images/img-8.jpeg"</p>
        <p class="galeries__img_9"><img src="assets/images/img-9.jpeg"</p>
        <p class="galeries__img_10"><img src="assets/images/img-10.jpeg"</p>
      </div>
    </section>
    <!-- Fin Galeries -->
     <!-- Section Temoignages Wrapper -->
     <section id="temoignages">
      <div class="temoignages">
        <!-- Titre de la section -->
        <h3>
          Ce que disent <span>nos visiteurs ?</span>
        </h3>
        <!-- Temoignages [Zone de navigation] -->
        <div class="temoignages__navigation__bloc">
        <p class="temoignages__navigation temoignages__navigation__left">
            <i class="fa-solid fa-arrow-left"></i>
          </p>
          <p class="temoignages__navigation temoignages__navigation__right active">
            <i class="fa-solid fa-arrow-right"></i>
          </p>
          
        </div>
        <!-- Bloc de temoignages -->
        <div class="temoignages__bloc">
          <!-- Temoignages comments [Temoignages1] -->
          <div class="temoignages__bloc__group active">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>John Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->

          <!-- Temoignages comments [Temoignages2] -->
          <div class="temoignages__bloc__group">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>Johnny Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->

          <!-- Temoignages comments [Temoignages3] -->
          <div class="temoignages__bloc__group">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>Jane Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->

          <!-- Temoignages comments [Temoignages4] -->
          <div class="temoignages__bloc__group">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>Spence Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->

           <!-- Temoignages comments [Temoignages5] -->
           <div class="temoignages__bloc__group">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>Steeve Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->

           <!-- Temoignages comments [Temoignages6] -->
           <div class="temoignages__bloc__group">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>Bryan Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->

           <!-- Temoignages comments [Temoignages7] -->
           <div class="temoignages__bloc__group">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>Jack Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->

           <!-- Temoignages comments [Temoignages8] -->
           <div class="temoignages__bloc__group">
              <div class="temoignages__bloc__comments">
                <div class="temoignages__bloc__comments_user">
                  <blockquote>
                  <i class="fa-solid fa-quote-left"></i>
                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.
                    </p>
                    <i class="fa-solid fa-quote-right"></i>
                    <cite>
                      <span>Pitt Doe</span>
                    </cite>
                  </blockquote>
                </div>
              </div>
              <!-- Temoignages bloc design -->
              <div class="temoignages__bloc__design"></div>
              <!-- Temoignages profil de l'utilisateur -->
              <div class="temoignages__bloc__profil">
                  <img src="assets/images/avatar.png" alt="avatar"/>    
              </div>
            </div>
          <!-- Fin -->
     </section>
     <!-- Section Contact Wrapper -->
     <section id="contact">
      <div class="contact">
        <!-- Titre de la section Contact -->
        <h3>Nous contacter</h3>
        <div class="contact__bloc">
          <!-- Formulaire de contact -->
          <form action="#" method="POST">
            <div class="contact__bloc__left">
                <textarea name="message"></textarea>
                <p>
                  <img src="assets/images/Feedback-amico.svg" />
                </p>
            </div>  
            <div class="contact__bloc__middle">
                <input type="text" name="nom" placeholder="Votre nom">
                <input type="email" name="email" placeholder="Votre email">
                <input type="tel" name="telephone" placeholder="Telephone [Optionnel]">
                <input type="submit" name="submitContact" value="Envoyer">
            </div>
              <address class="contact__bloc__right">
                <p>
                  <strong>Clinique Jeannot Cadet</strong>
                </p>
                <p>
                <i class="fa-solid fa-location-dot"></i>
                  <span>180, Avenue Lamartini&egrave;re</span><br />
                  <span>Port-au-Prince, Haiti HT6112</span>
                </p>
                <p>
                  <i class="fa-solid fa-phone"></i>
                  <span>(509) 3122-1122</span>
                </p>
                <p>
                  <i class="fa-solid fa-envelope"></i>
                  <span>jeannotcadetclinique@gmail.com</span>
                </p>
              </address>
          </form>            
        </div>
      </div>
     </section>
     <!-- Section Footer wrapper -->
     <footer id="footer">
      <div class="footer">
        <!-- Les icones de medias sociaux -->
        <p class="footer__social">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-linkedin-in"></i>
          <i class="fa-brands fa-youtube"></i>
         </p>
         <!-- Liens de menu footer -->
        <ul class="menufooter">
          <li><a href="#">Misson</a></li>
          <li><a href="#">Partenaires</a></li>
          <li><a href="#">Carri&egrave;res</a></li>
          <li><a href="#">Termes et conditions</a></li>  
        </ul>
        <!-- Copyright et contact du webmaster -->
        <p class="footer__copyright"><span>Clinique Jeannot Cadet@2023</span><span> Tous droits r&eacute;serv&eacute;s</span> <span>|</span> <span>Conception par : Ricardo Samedi</span></p>
      </div>
     </footer>
  </div>







  <!-- Inclusion de jQuery -->
  <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
