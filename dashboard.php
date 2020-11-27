<?php 
     session_start();
     
     require_once( __DIR__.'/assets/api/api-get-projects.php' );
     
    //  if(  $_SESSION ) {
    //      header('Location: index.php');
    //  exit();
    //  }
    
    ?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Shared Thinking - Connecting Ideas</title>
    <meta name="description" content="Desde tu proyecto de tesis hasta materializar tu inserción en el mundo profesional">
    <meta property="og:url" content="https://therrou.github.io/hackaton/" />
    <meta property="og:image" content="assets/img/logo/logo200x300.jpg">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<header class="header-area">
    <div class="header-top bg-img" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +45 45 45 45 45</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:#">info@sharedthinking.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <?php 
                            if(  ! $_SESSION ){ ?>
                                       <li><a href="login-register.php">Login</a></li>
                                        <li><a href="login-register.php">Register</a></li> <?php  }
                                        if($_SESSION){ ?> <li> <a href="/profile.php?id=<?=$_SESSION['user_id']?>" > <span><i class="fa fa-user"></i> </span>   Welcome  <?=  $_SESSION['user_first_name'];  ?> </a>
                                    </li>
                                    <li><a href="messages.php">Messages</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="/assets/api/api-logout.php">Log out</a></li>
                                     <?php }  ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.php">
                            <img alt="" src="assets/img/logo/123.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.php"> HOME </a></li>
                                    <li><a href="#"> About Us <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="about-us.php">Our team</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Events</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard.php"> Projects<i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="profiles.php">Recent Users</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> BLOG <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Recent Posts</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php"> CONTACT US </a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="cart-search-wrap">
                            <div class="cart-wrap">
                               
                                
                            </div>
                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search for projects">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.php">HOME</a>
                                
                            </li>
                           
                            </li>
                            <li><a href="#">About Us</a>
                                <ul>
                                    <li><a href="about-us.php">Our Team</a></li>
                                            <li><a href="faq.php">FAQs</a></li>
                                            <li><a href="events.php">Eventos</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard.php"> Dashboard </a></li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.php">Recent Posts</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php"> CONTACT US </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-2.jpg);">
        <div class="container">
            <h2> Dashboard </h2>
            <p><b> Here you can find the latest activities, job offers and posts </b></p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> </li>
            </ul>
        </div>
    </div>
</div>
<?php if( $_SESSION ){
                ?>
                <div class='new-project-container'>
                <a href="" class="btn btn-default default-btn btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">
                        Start a new <?php ?>project</a>
                </div>
                <?php

                } ?>
            


<div class="course-area bg-img pt-130 pb-10" >
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span>Latest </span> Projects</h2>
            <p>The latest research and thesis projects to which you can collaborate, share, comment and if you are a recruiter, you can be inspired by ideas </p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
        <?php
         foreach($row as $project){
              ?>  
                     <div class="single-course">
                         <div class="course-img">
                             <a href="projectPage.php?id=<?=$project['project_id']; ?>"><img class="animated" width='293' height='274' src="https://source.unsplash.com/random/293x274" alt=""></a>
                    </div>
                    <div class="course-content">
                      <h4><a href="projectPage.php?id=<?=$project['project_id']; ?>"><?= $project['project_title'];?></a></h4>
                        <p> <br><i class="fa fa-calendar" aria-hidden="true"></i> Created
                                     <?php     $epoch = $project['project_created'] ;
                                               $dt = new DateTime("@$epoch");
                                               echo $dt->format('d-m-Y');
                                     
                                     ?> </p>
                    </div>
                    <div class="course-position-content">
                      
                      <div class="course-btn">
                          <a class="default-btn" href="projectPage.php?id=<?=$project['project_id']; ?>">More info</a>
                      </div>
                         </div>
                     </div>
                
               <?php
         }
        
        ?>
        </div>
       
    </div>
</div>
<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2> <span>Our</span> Blog</h2>
            <p> Thoughts, analysis, discussions and debates. You can find everything in our great community. <b><a href="login-register.php"> Join us</a>   </b>  </p>
        </div>
        <div class="course-slider-active-3">
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-1.jpg" alt=""></a>
                    <span> Reciente</span>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Biogás</a></h4>
                    <p>Plataforma para controlar parámetros del proceso.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-2.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Cryptomonedas</a></h4>
                    <p>Incorporación de esta moneda en operaciones de Comercio Exterior.</p>
                </div>
                <div class="course-position-content">
                   
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-3.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Food Sharing</a></h4>
                    <p>Modelo económico para la reducción del desperdicio de comida.</p>
                </div>
                <div class="course-position-content">
                   
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-4.jpg" alt=""></a>
                    <span>Reciente</span>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Logística Inteligente</a></h4>
                    <p>Desarrollo de pallets a partir de residuos de coco.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-5.jpg" alt=""></a>
                    <span>Reciente</span>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php"> Sustentable </a></h4>
                    <p> creación de agendas y cuadernos con colillas de cigarrillo.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2> <span>Ofertas de</span> empleo</h2>
            <p> Insertate en el mundo laboral mediante las últimas ofertas de empleo </p>
        </div>
        <div class="course-slider-active-3">
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-6.jpg" alt=""></a>
                    <span> Reciente</span>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Junior Backend Developer</a></h4>
                    <p>Python y NodeJS para importante fintech.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-7.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Ingeniero de Calidad: ISO 9000</a></h4>
                    <p>Buenas prácticas de Manufactura, Six Sigma.</p>
                </div>
                <div class="course-position-content">
                   
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-8.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Ejecutivo Clientes: Banco Santander Río</a></h4>
                    <p> Sucursal Rosario </p>
                </div>
                <div class="course-position-content">
                   
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-9.jpg" alt=""></a>
                    <span>Reciente</span>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Project Manager </a></h4>
                    <p>Nuevo modelo importante automotriz. Se valora experiencia ANPQP.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="tesis-details.php"><img class="animated" src="assets/img/course/course-10.jpg" alt=""></a>
                    <span>Reciente</span>
                </div>
                <div class="course-content">
                    <h4><a href="tesis-details.php">Agile Coach</a></h4>
                    <p> Incubadora de startups incorpora a su equipo coach agile con certificación.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Mas informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div> -->
<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(assets/img/bg/bg-4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>NOSOTROS</h4>
                        </div>
                        <div class="footer-about">
                            <p> Shared Thinking - Conectando Ideas</p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span> Copenhague - Dinamarca</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#">info@plataformaeducativa.com</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> +45 45 45 45 45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>LINKS</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">Nosotros</a></li>
                                <li><a href="#">Nuestra mision</a></li>
                                <li><a href="#">Universidades</a></li>
                                <li><a href="#">Terminos y condiciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>Newsletter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Suscribite a nuestro newsletter y recibirás las ultimas ofertas y posiciones</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="ingresa tu email" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Suscribirme">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">Tomas Herrou</a>
                            . Todos los derechos reservados .
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                           
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<form id='createProjectForm' onsubmit='createProject(); return false;' >
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"></h4>
        <button type="text" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name"><h3 style='text-align: center'><b>Project Title</b></h3></label>
          <input type="text" name='project_title' class="form-control validate">
        
        </div>
        <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name"><b> Where will the project take place? </b> </label>
         <input type="text" name='project_location' class="form-control validate">                           
        </div>
        <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email"> <b>How many people will work in it?</b> </label>
          <input name='project_students' type="number" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email"> <b>What is the field/career of your project?</b> </label>
          <input name='project_career' type="text" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="orangeForm-email"> <b>In which institution / university are you going to carry out your project?</b> </label>
            <input name='project_university' type="text" class="form-control validate">
            </div>

            <div class="md-form mb-4">
            <i class="prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="orangeForm-pass"><b> The description of your project </b>  </label>
            <input style='height: 250px;' type="text" name='project_content' class="form-control validate">
            </div>
            <input style='display: none' name='user_id' type="text" class="form-control validate" value='<?=$_SESSION['user_id']?>'>                          
        </div>
        <div class="modal-footer d-flex justify-content-center ">
            <button  type='submit' class="default-btn">Create project</button>
        </div>
        </div>
    </div>
    </div>
</form>









<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<!-- API's FETCH JS -->
<script src="assets/js/app.js"></script>

</body>

</html>
