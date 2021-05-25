<?php
if (!isset($_SESSION)){
    session_start();
}
$php_self_exp = explode("/",$_SERVER['PHP_SELF']);
$url_locate   = end($php_self_exp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= isset($title)?$title:'Document' ?></title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?= isset($meta_description)?$meta_description:'' ?>">
    <meta name="keywords" content="<?= isset($meta_keywords)?$meta_keywords:'' ?>" />
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" />
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111593233-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-111593233-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MKGMSNM');</script>
    <!-- End Google Tag Manager -->
    <style>
        .nav-link
        {
            font-size: 14px;
        }
        .all_product .all_div img
        {
            object-fit: cover;
        }
        .reg_header .text {
            padding-top: 12%;
            padding-bottom: 6%;
        }
    </style>
</head>

<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5eb83ca5967ae56c52187cac/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<nav class="navbar navbar-light navbar-expand-md" uk-sticky="top: 150; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
    <div class="container">
        <a class="navbar-brand nev_left" href="index.php"><img src="assets/images/logo.png" alt="" /></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar_toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="navbar-collapse collapse" id="navbar_toggler">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='index.php'?'active':'' ?> text-center text-md-right text-capitalize" href="index.php">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='tutoring.php'?'active':'' ?> text-center text-md-right text-capitalize" href="tutoring.php">Tutoring Help</a></li>
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='about.php'?'active':'' ?> text-center text-md-right text-capitalize" href="about.php"> About us</a></li>
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='discover.php'?'active':'' ?> text-center text-md-right text-capitalize" href="discover.php">Discover Now</a></li>
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='testimonials.php'?'active':'' ?> text-center text-md-right text-capitalize" href="testimonials.php">Testimonials</a></li>
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='shop.php'?'active':'' ?> text-center text-md-right text-capitalize" href="shop.php">Shop</a></li>
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='contact.php'?'active':'' ?> text-center text-md-right text-capitalize" href="contact.php">Contact</a></li>
                <?php
                if (isset($_SESSION['User'])){
                    ?>
                    <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='myorders.php'?'active':'' ?> text-center text-md-right text-capitalize" href="myorders.php">My Orders</a></li>
                <?php }else{ ?>
                    <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='login.php'?'active':'' ?> text-center text-md-right text-capitalize" href="login.php">Login</a></li>
                    <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='register.php'?'active':'' ?> text-center text-md-right text-capitalize" href="register.php">Register</a></li>
                <?php } ?>
                <li class="nav-item mx-2"><a class="nav-link <?= $url_locate=='cart.php'?'active':'' ?> text-center text-md-right text-capitalize" href="cart.php">Cart</a></li>
            </ul>
        </div>
    </div>
</nav>