<?php 
session_start();  
require_once( __DIR__.'/assets/api/api-get-project.php' );
$userId =  $_SESSION['user_id'];   
// echo $userId;
// echo 'xxxxxx'; 
?>
    
<!doctype html>
<html class="no-js" lang="zxx">

<head >
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
    <script src="assets/js/app.js"></script>
</head>

<body >
<header class="header-area">
    <div class="header-top bg-img" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +45 45 45 45 45</li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">info@sharedthinking.com</a></li>
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
                                    <li><a href="about-us.html">Messages</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="/assets/api/api-logout.php">Log out</a></li>
                                     <?php }  ?>
                            <!-- <li><a href="login-register.html">Login</a></li>
                            <li><a href="login-register.html">Registrate</a></li> -->
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
                                            <li><a href="about-us.html">Our team</a></li>
                                            <!-- <li><a href="#">Empresas</a></li>
                                            <li><a href="#">Estudiantes</a></li> -->
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Events</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard.php">  Dashboard </a></li>
                                    <li><a href="propuestas.html"> BLOG </a>
                                        <ul class="submenu">
                                            <li><a href="#">Recent Posts</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html"> CONTACT US </a></li>
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
                            <li><a href="#">Nosotros</a>
                                <ul>
                                    <li><a href="about-us.html">Quienes somos?</a></li>
                                            <li><a href="propuestas.html">Propuestas</a></li>
                                            <li><a href="#">Empresas</a></li>
                                            <li><a href="#">Estudiantes</a></li>
                                            <li><a href="#">Preguntas Frecuentes</a></li>
                                            <li><a href="#">Eventos</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Programas </a></li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Ultimos posts</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> CONTACTO </a></li>
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
            <h2>Thesis Projects</h2>
            <p>here you will find thesis projects, to collaborate with it, discuss or just get inspiration.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="/">Home</a> </li>
            </ul>
        </div>
    </div>
</div>
<div class="course-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="apply-area">
                        <img width='820px' height='400px'src="https://source.unsplash.com/random" alt="">
                        <div class="course-apply-btn">
                            <a href="profile.php?id=<?=$row['user_id']?>" class="default-btn"> Contact Me</a>
                        </div>
                    </div>
                    <div class="course-tab-list nav pt-40 pb-25 mb-35">
                        <a class="active" href="#course-details-1" data-toggle="tab" >
                            <h4>Thesis Summary  </h4>
                        </a>
                        <a href="#course-details-2" data-toggle="tab">
                            <h4> Members  </h4>
                        </a>
                        <a href="#course-details-3" data-toggle="tab">
                            <h4>Questions</h4>
                        </a>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="course-details-1">
                            <div class="over-view-content">
                                <h4> <?= $row['project_title'] ?> .</h4>
                                <h5> <p> <br><i class="fa fa-calendar" ></i> Created <?php     
                                               $epoch = $row['project_created'] ;
                                               $dt = new DateTime("@$epoch");
                                               echo $dt->format('d-m-Y'); ?></h5>

                                <p> <?=$row['project_content']; ?> .</p>
                             
                                <div class="course-details-img">
                                    <img width='656px' height='150px'src="https://source.unsplash.com/random" alt="">
                                </div>
                                <div class="course-summary-wrap" style='justify-content: center;'>
                                    <div class="single-course-summary">
                                        <h4>Total Students</h4>
                                        <span><i class="fa fa-user"></i> <?=$row['project_total_students']; ?></span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Career</h4>
                                        <span><i class="fa fa-graduation-cap"></i> <?=$row['project_career']; ?></span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>University/School</h4>
                                        <span><i class="fa fa-book"></i> <?=$row['project_university']; ?></span>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="tab-pane" id="course-details-2">
                            <div class="over-view-content">
                                <h4>MEMBERS</h4>
                                <h5> <?=$row['user_first_name'].' '.$row['user_last_name'] ; ?></h5>
                                <p> <?=$row['user_profile_subtitle']; ?></p>
                  
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="course-details-3">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="assets/img/blog/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>Juan Carlos Pailazza</h4>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-btn">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p> Muy buen proyecto! Yo tambien soy de una ciudad turistica donde solo se priorizan 3 meses.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review child-review">
                                    <div class="review-img">
                                        <img src="assets/img/blog/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>Juan Ignacio Perez Gonzalez
                                                    </h4>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-btn">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>Gracias! Si queres podriamos ponernos en contacto y vemos de aplicar la misma idea para tu ciudad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="ratting-form-wrapper">
                                <h3>Add a Review</h3>
                                <div class="ratting-form">
                                    <form>
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <input placeholder="Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <input placeholder="Email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="related-course pt-70">
                        <div class="related-title mb-45 mrg-bottom-small">
                            <h3>Proyectos similares</h3>
                            <p> Encuentra aqui otros proyectos, blogposts u ofertas laborales aqui </p>
                        </div>
                        <div class="related-slider-active">
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="#"><img class="animated" src="assets/img/course/related-course-1.jpg" alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="#"> Internship - RRHH en Multinacional</a></h4>
                                
                                </div>
                                <div class="course-position-content">
                                    
                                    <div class="course-btn">
                                        <a class="default-btn" href="#">Mas informacion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="#"><img class="animated" src="assets/img/course/related-course-2.jpg" alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="#">Backend Developer (Node.JS)</a></h4>
                               
                                </div>
                                <div class="course-position-content">
                                    
                                    <div class="course-btn">
                                        <a class="default-btn" href="#">Mas informacion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="#"><img class="animated" src="assets/img/course/related-course-3.jpg" alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="#">Administracion en Farmaceutica</a></h4>
                          
                                </div>
                                <div class="course-position-content">
                                    
                                    <div class="course-btn">
                                        <a class="default-btn" href="#">Mas informacion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="#"><img class="animated" src="assets/img/course/related-course-2.jpg" alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="#">Administracion en Farmaceutica</a></h4>
                              
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
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style sidebar-res-mrg-none">
                    <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Buscador</h4>
                        </div>
                        <form>
                            <input type="text" placeholder="Ingresa tu busqueda...">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15">
                            <h4>Acerca de nosotros</h4>
                        </div>
                        <p> Somos un grupo de jovenes profesionales, como vos, que intentan entrar en el mundo laboral.</p>
                        <a href="#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                        <div class="sidebar-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4> Ultima actividad </h4>
                        </div>
                        <div class="recent-post-wrap">
                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="#">Comentario.</a></h5>
                                    <span>Juan Carlos Pailazza</span>
                                    <p> Comento el proyecto de tesis de...</p>
                                </div>
                            </div>
                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="#"> Respuesta a comentario.</a></h5>
                                    <span>Juan Ignacio Perez Gonzalez</span>
                                    <p> Respondio al comentario en su...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Categorias</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li><a href="#">Proyectos de Tesis <span>19</span></a></li>
                                <li><a href="#">Proyectos de Investigacion <span>08</span></a></li>
                                <li><a href="#">Ofertas de empleo <span>19</span></a></li>
                                <li><a href="#">Internships <span>06</span></a></li>
                                <li><a href="#">Colaboraciones <span>04</span></a></li>
                            </ul>
                        </div>
                    </div>
                   
                    </div>
                    <div class="sidebar-tag-wrap">
                        <div class="sidebar-title mb-40">
                            <h4>Etiquetas</h4>
                        </div>
                        <div class="sidebar-tag">
                            <ul>
                                <li><a href="#">Tesis</a></li>
                                <li><a href="#">Turismo</a></li>
                                <li><a href="#">IA</a></li>
                                <li><a href="#">Inteligencia Artificial</a></li>
                                <li><a href="#">Turismo sustentable</a></li>
                                <li><a href="#">Colaboracion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="brand-logo-area pt-45 pb-130">
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

</body>

</html>