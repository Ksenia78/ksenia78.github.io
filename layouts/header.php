<?php
session_start();

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Photomedia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-4 d-none d-md-block">
                        <div class="header_links ">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="twiter" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="insta" href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 d-none d-md-block">
                        <div class="login_resiter">
                            <?
                            if(!isset($_SESSION['user'])){

                            ?>
                            <p><a href="/login.php"><i class="flaticon-user"></i>login</a> | <a href="/register.php">Resister</a></p>
                       <?}else {
                                ?>

                                <p><i class="flaticon-user"></i><?=$_SESSION['user']['name']?> | <?=$_SESSION['user']['last_name']?> | <a href="logout.php">выход</a></p>


                                <?
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area white-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="index.php">Home</a></li>
                                    <li><a href="upload.php">Добавить изображение </a></li>
                                    <li><a href="myimage.php">Мои изображение</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</header>
<!-- header-end -->