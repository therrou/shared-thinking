<?php 
     session_start();
   
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
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-height-1 bg-img" style="background-image:url(assets/img/slider/slider-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">Listo  para  tu próximo desafío ? </h1>
                            <p class="animated">Aquí podrás conectarte con otros estudiantes para <br> lograr que tu tesis sea inigualable. <br>  </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="#">BUSCANDO DESAFIOS</a>
                                <a class="animated default-btn btn-white-color" href="#">PROPONIENDO DESAFIOS</a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
       
    </div>
</div>
<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-light-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-1.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Últimas materias? </h3>
                        <p> <br>Te ayudadamos a inspirarte y así poder encontrar el proyecto ideal para tu tesis <br> <br></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-yellow">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Recién graduado?</h3>
                        <p> <br>Compartí tu proyecto de tesis en búsqueda de inversores <br>‎<br>. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-44.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Descubriendo Talentos</h3>
                        <p>Resolvé desafíos propuestos por empresas alrededor del mundo.
                            Ganando experiencia real, proponiendo soluciones para las organizaciones. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-green">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-112.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Poderoso networking</h3>
                        <p><br>Relaciones sinérgicas, aprovechando todo el potencial de la hiperconectividad <br><br> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>Acerca de <span>Nosotros</span></h2>
                        <p>Somos una plataforma Web que conecta estudiantes de diversas carreras para la elaboración conjunta de su tesis.​

                            Conectamos estudiantes que se encuentran cursando la última etapa de su carrera con organizaciones que presentan desafíos reales. ​
                            
                            </p>
                    </div>
                    <p>Esto permitirá la formación de un equipo multidisciplinario con distintos perfiles para desarrollo de una solución integral y de mayor calidad.</p>
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="about-us.php">Nosotros</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img embed-responsive embed-responsive-16by9">
                    <iframe class='embed-responsive-item' src="https://www.youtube.com/embed/ROGbG6UAZ8w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-area bg-img pt-130 pb-10" style="background-image:url(assets/img/bg/bg-1.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span>Nuevos proyectos de</span> Tesis</h2>
            <p> Aquí podrás encontrar las ultimas propuestas de Tesis, ya sea para colaborar con las mismas o materializarlas en el mundo profesional </p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
            <div class="single-course">
                <div class="course-img">
                    <a href="#"><img class="animated" src="assets/img/course/1.jpg" alt=""></a>
                    <span>Vacantes disponibles</span>
                </div>
                <div class="course-content">
                    <h4><a href="#">Deep Learning</a></h4>
                    <p> <br> Entender jugadas de ajedrez.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Aplica ahora</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="#"><img class="animated" src="assets/img/course/2.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="#">Bancos Digitales</a></h4>
                    <p>App dedicada a inversiones, comprar y vender acciones.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Aplica ahora</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="#"><img class="animated" src="assets/img/course/3.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="#">Economía Circular</a></h4>
                    <p>Reintroducir botellas de plástico en la construcción.</p>
                </div>
                <div class="course-position-content">
                   
                    <div class="course-btn">
                        <a class="default-btn" href="#">Aplica ahora</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="#"><img class="animated" src="assets/img/course/4.jpg" alt=""></a>
                    <span>Cierra pronto</span>
                </div>
                <div class="course-content">
                    <h4><a href="#"> Cybersecurity </a></h4>
                    <p> <br> IoT, Penetration Testing- Web
                    </p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Aplica ahora</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="#"><img class="animated" src="assets/img/course/4.jpg" alt=""></a>
                    <span>Cierra pronto</span>
                </div>
                <div class="course-content">
                    <h4><a href="#"> MKT Digital </a></h4>
                    <p> <br> Placeholder para el contenido de la tesis..</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Aplica ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Nuestros <span>logros</span></h2>
            <p> A través de nuestra plataforma, muchos jóvenes pudieron materializar su tesis, conseguir experiencia laboral <br> y generar enlaces profesionales que permitieron un crecimiento mutuo </p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">239</h2>
                        <span>ESTUDIANTES</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">670</h2>
                        <span>RECIEN EGRESADOS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-3.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">430</h2>
                        <span>NUEVOS EMPLEOS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-4.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>CONTACTOS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b1.jpg">
                    </div>
                   <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Gracias a SYNNUP pude trabajar con una empresa real, que decidió contratarme cuando terminé mi proyecto final.</p>
                                <div class="testi-info">
                                   <h5> Juan Manuel Insaurralde </h5>
                                   <span>Máster  en Biologia -  MIT</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b3.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Gracias a Shared Thinking pude finalizar mi tesis y en paralelo una empresa decidio hacerme seguimiento por el proyecto y me contrataron al poco tiempo.</p>
                                <div class="testi-info">
                                   <h5>Rolando Sanchez</h5>
                                   <span> RRHH - Universidad Catolica Argentina </span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Gracias a Shared Thinking pude finalizar mi tesis y en paralelo una empresa decidio hacerme seguimiento por el proyecto y me contrataron al poco tiempo.</p>
                                <div class="testi-info">
                                   <h5>Selena Ysinbayeva</h5>
                                   <span>Profesorado de Astrofisica - UNC</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                    <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Gracias a Shared Thinking pude finalizar mi tesis y en paralelo una empresa decidio hacerme seguimiento por el proyecto y me contrataron al poco tiempo.</p>
                                <div class="testi-info">
                                   <h5>Anastasia Lorencci</h5>
                                   <span> DevOps - UTN </span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s2.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s1.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s3.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/testi-s3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="testimonial-text-img">
       
        </div>
    </div>
</div>

<div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Confiaron en <span>nosotros</span></h2>
            <p>Agradecemos a todas las organizaciones que nos eligieron: </p>
        </div>

        <div class="brand-logo-area pb-130">
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
    </div>
        <div class="custom-row">
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-1.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Gonzalo Bidone</h4>
                        <h5>CEO </h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Gonzalo Bidone</h4>
                            <h5>CEO</h5>
                            <p>Coca Cola Andina Argentina.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-2.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Richard Valdez</h4>
                        <h5>CTO </h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Richard Valdez</h4>
                            <h5>CTO</h5>
                            <p>Sinergic S.A Chile</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-3.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4> Claudia Drago</h4>
                        <h5>Presidente </h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Claudia Drago</h4>
                            <h5>Presidente</h5>
                            <p>Presidente IBM Sudamerica</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-4.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Juan Perez</h4>
                        <h5>Manager Regional </h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Juan Perez</h4>
                            <h5>Manager Regional</h5>
                            <p>Pritty Limon SRL </p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="assets/img/teacher/teacher-5.jpg" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Julian Khan</h4>
                        <h5>Recruiter</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Julian Khan</h4>
                            <h5>Recruiter</h5>
                            <p>Recruiter Talentos SA Brasil</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url(assets/img/bg/bg-3.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Próximos </span> Eventos</h2>
            <p> Podrás encontrar todas las novedades y eventos que no te podés perder!
            </p>
        </div>
        <div class="event-active owl-carousel nav-style-1">
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="#"><img src="assets/img/event/event-1.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">12</span>
                        <span>Nov</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="#">DigiEduHack <br> </a></h3>

                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Youtube </span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>11:00 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="#"><img src="assets/img/event/event-1.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">25</span>
                        <span>Nov</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="#">Startup Weekend <br>  </a></h3>
                   
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Youtube</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>08:30 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="#"><img src="assets/img/event/event-1.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">08</span>
                        <span>Dic</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="#">Julefrokost - By Copenhagen Fintech  </a></h3>
                   
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Presencial - Youtube</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>10:00 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="#"><img src="assets/img/event/event-1.jpg" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">5</span>
                        <span>Jun</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="#">Emociones y Educacion.</a></h3>
                    <p>Placeholder para la descripcion del evento .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Presencial (Montevideo)</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>10:30 am</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Nuestro <span>Blog</span></h2>
            <p>Tambien contamos con la posibilidad de que los usuarios compartan experiencias, vivencias o informacion en nuestro blog.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Educacion</span>
                        <div class="blog-content">
                            <h4><a href="#">Una nueva profesion a los 30.</a></h4>
                            <p>Placeholder para la intro al blogpost</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Autor del Blog</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 15</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> 11 de Noviembre 2020</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Motivacion</span>
                        <div class="blog-content">
                            <h4><a href="#">Una nueva profesion a los 30.</a></h4>
                            <p>Placeholder para la intro al blogpost</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Autor del Blog</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 12</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> 11 de Noviembre 2020</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Random</span>
                        <div class="blog-content">
                            <h4><a href="#">Una nueva profesion a los 30.</a></h4>
                            <p>Placeholder para la intro al blogpost</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Autor del Blog</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 20</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> 11 de Noviembre 2020</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Educacion</span>
                        <div class="blog-content">
                            <h4><a href="#">Una nueva profesion a los 30.</a></h4>
                            <p>Placeholder para la intro al blogpost</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Autor del Blog</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> 11 de Noviembre 2020</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                    <span><a href="#">info@sharedthinking.com</a></span>
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">Nosotros</a></li>
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
                                        <input class="email" type="email" required="" placeholder="ingresa tu email" name="EMAIL" value="">>
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