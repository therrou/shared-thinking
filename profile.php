<?php 
     session_start();
     require_once( __DIR__.'/assets/api/api-get-user.php' );
     $message_sender_id = $_SESSION['user_id'];
     $message_receiver_id = $_GET['id']; 
    
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
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
                <?php if ( $_GET['id'] !== $_SESSION['user_id'] ) { ?>
                <h2>  </h2> 
                <?php }else {?> <h2> Welcome to your profile </h2>
                    <p> here you can find and update your profile and personal information</p>
                     <?php }; ?>
          </p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> </li>
            </ul>
        </div>
    </div>
</div>
<div class="single-product-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-details-img">
                    <img class="zoompro" height='582' width='591' src="https://source.unsplash.com/random" data-zoom-image="https://source.unsplash.com/random"  alt="zoom"/>
                    <div id="gallery" class="mt-15 product-dec-slider dec-slider-overlay">
                        <a class="active" data-image="assets/img/product-details/product-detalis-l2.jpg" data-zoom-image="assets/img/product-details/single-product-bl2.jpg">
                           
                        </a>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="product-details-content pl-30">
                    <h2> <?= $row['user_first_name']." ".$row['user_last_name'] ?> </h2>
                    <div class="pro-details-rating-wrap">
                        <div class="pro-details-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div>
                        <span>(Based on reviews from other users)</span>
                    </div>
                    <?php if ( $_GET['id'] === $_SESSION['user_id'] ) { ?>
                        <a href="" class="btn btn-default default-btn btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">
                        Update your profile</a>

                        <?php }?>
                     
                    <h2> <?= $row['user_profile_title']; ?></h3>
                    <br>
                    <h3><?= $row['user_profile_subtitle']; ?> </h3>
                  
                    <br>
                    <br>
                    <br>
                    <div class="pro-details-social">
                        <ul>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pb-120">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                <?php if ( $_GET['id'] !== $_SESSION['user_id'] ) { ?> <a data-toggle="tab" href="#des-details3">Contact me</a> <?php } ?> 
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <p><?= $row['user_profile_description']; ?></p>
                      
                    </div>
                </div>
            
                <div id="des-details3" class="tab-pane">
                    <div class="row">
                        <br>
                        <br>
                        <div class='col-lg-3'></div>
                        <div class="col-lg-9">
                            <div class="ratting-form-wrapper pl-50 ratting-nagative-mrg">
                              
                                <br>

                                <div class="ratting-form">
                                    <form id='sendMessageForm' onsubmit='sendMessage(); return false;' >
                                        <div class="row">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-10">
                                                    <input name='message_subject' placeholder="Subject" type="text">
                                                </div>
                                            </div>
                                            <div style='display: none' class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <input type="text" name='message_sender_id' value='<?=$message_sender_id?>'>
                                                    <input type="text" name='message_receiver_id' value='<?=$message_receiver_id?>'>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="message_content" placeholder="Message"></textarea>
                                                    <input type="submit" value="Send Message">
                                                </div>
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
    </div>
</div>
<div class="related-course">
    <div class="container">
        <div class="related-title mb-45 related-mrg-small">
            <h3>Related Profiles</h3>
            <p>Hempor incididunt ut labore et dolore mm, itation ullamco laboris <br>nisi ut aliquip. </p>
        </div>
        <div class="producta-active">
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="assets/img/product/pro-1.jpg" alt=""></a>
                    <div class="product-action">
                        <ul>
                     
                            <li><a title="Share this profile" href="#"><i class="fa fa-share-alt"></i></a></li>
                            <li><a title="Like this profile" href="#"><i class="fa fa-heart-o"></i></a></li>
                            <li><a title="Go to profile"  data-target="#exampleModal" href="#"><i class="fa fa-user"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="pro-title-rating-wrap">
                        <div class="product-title">
                            <h3><a href="single-product.html"> USERNAME profile</a></h3>
                        </div>
                        <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="assets/img/product/pro-2.jpg" alt=""></a>
                    <div class="product-action">
                        <ul>
                     
                            <li><a title="Share this profile" href="#"><i class="fa fa-share-alt"></i></a></li>
                            <li><a title="Like this profile" href="#"><i class="fa fa-heart-o"></i></a></li>
                            <li><a title="Quick View"  data-target="#exampleModal" href="#"><i class="fa fa-user"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="pro-title-rating-wrap">
                        <div class="product-title">
                            <h3><a href="single-product.html"> USERNAME profile</a></h3>
                        </div>
                        <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div>
                    </div>
                 
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="assets/img/product/pro-3.jpg" alt=""></a>
                    <div class="product-action">
                        <ul>
                     
                            <li><a title="Share this profile" href="#"><i class="fa fa-share-alt"></i></a></li>
                            <li><a title="Like this profile" href="#"><i class="fa fa-heart-o"></i></a></li>
                            <li><a title="Quick View"  data-target="#exampleModal" href="#"><i class="fa fa-user"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="pro-title-rating-wrap">
                        <div class="product-title">
                            <h3><a href="single-product.html"> USERNAME profile</a></h3>
                        </div>
                        <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div>
                    </div>
               
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="assets/img/product/pro-4.jpg" alt=""></a>
                    <div class="product-action">
                        <ul>
                     
                            <li><a title="Share this profile" href="#"><i class="fa fa-share-alt"></i></a></li>
                            <li><a title="Like this profile" href="#"><i class="fa fa-heart-o"></i></a></li>
                            <li><a title="Quick View"  data-target="#exampleModal" href="#"><i class="fa fa-user"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="pro-title-rating-wrap">
                        <div class="product-title">
                            <h3><a href="single-product.html"> USERNAME profile</a></h3>
                        </div>
                        <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html"><img src="assets/img/product/pro-2.jpg" alt=""></a>
                    <div class="product-action">
                        <ul>
                     
                            <li><a title="Share this profile" href="#"><i class="fa fa-share-alt"></i></a></li>
                            <li><a title="Like this profile" href="#"><i class="fa fa-heart-o"></i></a></li>
                            <li><a title="Quick View"  data-target="#exampleModal" href="#"><i class="fa fa-user"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="pro-title-rating-wrap">
                        <div class="product-title">
                            <h3><a href="single-product.html"> USERNAME PROFILE</a></h3>
                        </div>
                        <div class="product-rating">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- <div class="brand-logo-area pt-130 pb-130">
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

<form  id='updateForm' onsubmit='updateUser(); return false;'>
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <input type="text" name='username' class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Update username</label>
        </div>
        <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <input type="text" name='profile_title' class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Complete with your title/position</label>
        </div>
        <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <input name='profile_subtitle' type="text" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">A brief description about your position and responsability</label>
        </div>

        <div class="md-form mb-4">
          <i class="prefix grey-text"></i>
          <input type="text" name='profile_description' class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your description</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center ">
        <button class="default-btn">Update</button>
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
<!-- APP JS -->
<script src="assets/js/app.js"></script>

</body>

</html>