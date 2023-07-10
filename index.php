<?php
declare(strict_types = 1);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <h1>Clinique Jeannot Cadet</h1>    
            </div>
            <!--Menuburger -->
            <div class="menuburger">
              <div class="menuburger-ligne menuburger-ligne__1"></div>
              <div class="menuburger-ligne menuburger-ligne__2"></div>
              <div class="menuburger-ligne menuburger-ligne__3"></div>
            </div>
            <!-- Menu -->
            <ul class="menu">
              <li class="active"><a href="#"><span>Clinique</span><span class="fa-solid fa-house-chimney-medical"></span></a></li>
              <li><a href="#"><span>Equipe</span><span class="fa-solid fa-people-group"></span></a></li>
              <li><a href="#"><span>Services</span><span class="fa-solid fa-wrench"></span></a></li>
              <li><a href="#"><span>Galeries</span><span class="fa-regular fa-image"></span></a></li>
              <li><a href="#"><span class="menuLinkHidden">Contact</span><span class="fa-regular fa-envelope"></span></a></li>
              <li><a href="#"><span class="menuLinkHidden">Connexion</span><span class="fa-regular fa-circle-user"></span></a></li>
              <li><a href="#"><span class="menuLinkHidden">T&eacute;moignages</span><span class="fa-regular fa-comments"></span></a></li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Container Navigation Global -->
     <div class="headerMiddle">
      <!-- Images illustratives -->
        <img src="assets/images/docteur.svg" />
      <!-- Phrase d'accrode -->
      <div class="accroche">
        <!-- <strong>Virage au num&eacute;rique</strong> -->
        <strong>Traitement m&eacute;dical et chirurgical de qualit&eacute;</strong>
        <h2>Leader et pionnier du domaine</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit sit aliquam, fuga blanditiis vero nemo repudiandae accusamus porro pariatur quod?</p>
        <a href="#" class="btn-accroche"> Suivi m&eacute;dical</a>
      </div>
     </div>
    </header>
    <!-- Clinique -->
    <section id="clinique">
      <div class="sectionClinique">
        <div class="sectionCliniqueGroup">
          <div class="sectionCliniqueGroup__">
           
            <span class="fa-solid fa-user-doctor"></span>

            <strong>Nos m&eacute;decins</strong>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates praesentium veniam ad, aperiam voluptatum esse inventore dicta pariatur veritatis libero!</p>
          </div>
          <div class="sectionCliniqueGroup__">
            <span class="fa-regular fa-newspaper"></span>
              <strong>Actualit&eacute;s</strong>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates praesentium veniam ad, aperiam voluptatum esse inventore dicta pariatur veritatis libero!</p>
          </div>
          <div class="sectionCliniqueGroup__">
            <span class="fa-regular fa-circle-play"></span>
              <strong>Espace num&eacute;rique</strong>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates praesentium veniam ad, aperiam voluptatum esse inventore dicta pariatur veritatis libero!</p>
          </div>
          <div class="sectionCliniqueGroup__">
            <span class="fa-regular fa-circle-play"></span>
              <strong>&Eacute;v&eacute;nements</strong>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates praesentium veniam ad, aperiam voluptatum esse inventore dicta pariatur veritatis libero!</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin clinique -->
    <!-- Equipe -->
    <section id="equipe">
    
      <div class="equipe">
          <h3>Notre &eacute;quipe</h3>
          
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
          <!-- Equipe #2 -->
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
          <!-- Equipe #3 -->
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
          <!-- Equipe #4 -->
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
    <!-- Services -->
    <section id="services">
      <!-- Wrapper services -->
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
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum facere dolores eaque inventore eos nam perferendis. Delectus tempora beatae distinctio facilis explicabo earum voluptatem.</p>
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
  </div>







  <!-- Inclusion des scripts Bootstrap [popper.min.js et bootstrap-min-js] -->
  <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
