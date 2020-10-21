<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Capelectrotek</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link rel="icon" type="image/png" href="<?php echo $faviconpartpath;?>">	
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: BizPage - v3.1.1
        * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top header-transparent">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-11 d-flex align-items-center">
                        <!-- <h1 class="logo mr-auto"><a href="index.html">Capelectrotek</a></h1> -->
                        <!-- Uncomment below if you prefer to use an image logo -->
                        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/header-2.png" alt="" class="img-fluid"></a> -->
                        <?php echo anchor('', img(array('src'=>"assets/img/logo.png",'alt'=>"logo",'class'=>"img-fluid")), array('class'=>"logo mr-auto"));?>
                        <nav class="nav-menu d-none d-lg-block">
                            <ul>
                                <li class="active"><?php echo anchor('', 'Home');?></li>
                                <li><a href="#about">About Us</a></li>
                                <li class="drop-down"><a href="">Services</a>
                                    <ul>
                                        <li><a href="#services">CES Training</a></li>
                                        <li><a href="#services">CES Technical</a></li>
                                        <li><a href="#services">CES Consulting</a></li>
                                    </ul>
                                </li>              
                                <li><a href="#portfolio">Portfolio</a></li>
                                <!-- <li><a href="#team">Team</a></li> -->
                                <li><a href="#contact">Contact Us</a></li>
                            </ul>
                        </nav><!-- .nav-menu -->
                    </div>
                </div>
            </div>
        </header><!-- End Header -->