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
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-6.jpg);">
        <div class="container">
            <h2>Contactate con nosotros</h2>
            <p> Eres estudiante? Empleador? Docente? Escribenos .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li> <a href="#"> <i class="fa fa-home" style='margin-right: 10px;'> <span>   </span></i>Home</a>  </li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.0000447732755!2d12.536941315928765!3d55.70637098054099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46525248eb13378b%3A0xfb49444f2d16c1a6!2sKEA%20Copenhagen%20School%20of%20Design%20%26%20Technology!5e0!3m2!1sen!2sdk!4v1606246907754!5m2!1sen!2sdk" width="590" height="685" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>let's get <span>  in touch</span></h2>
                        <p>Leave us your comment and we will contact you as quickly as possible</p>
                    </div>
                    <form id="contact-form" action="assets/php/mail.php" method="post">
                        <input name="name" placeholder="Name*" type="text">
                        <input name="email" placeholder="Email*" type="email">
                        <input name="subject" placeholder="Subject*" type="text">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button class="submit btn-style" type="submit">Send Message</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-info-area bg-img pt-180 pb-140 default-overlay" style="background-image:url(assets/img/bg/contact-info.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-home"></i></span>
                    </div>
                    <p>Copenhaguen - Denmark </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-phone"></i></span>
                    </div>
                    <div class="contact-info-phn">
                        <div class="info-phn-title">
                            <span>Phone : </span>
                        </div>
                        <div class="info-phn-number">
                            <p>+45 45 45 45 45</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-envelope"></i></span>
                    </div>
                    <a href="#">info@sharedthinking.com</a>
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
                                    <span> Cordoba - Argentina</span>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
<script>

</script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>