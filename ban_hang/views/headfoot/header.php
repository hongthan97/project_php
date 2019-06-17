<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Flower Project</title>

    <!-- Favicon  -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <link rel="icon" href="public/img_sp/flowers-icon.png">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="public/style/new.css">
    <!-- <link rel="stylesheet" href="public/style.css"> -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style type="text/css">
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    .carousel-inner h1 {
        color: #AA0000;
    }
    .carousel-inner h2 {
        color: #AA0000;
    }
    .carousel-caption{
      background-color: white;
      opacity: 0.8;
    }

</style>
</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="?mod=shop&act=search" method="POST">
                            <input type="search" name="tim_kiem" id="search" placeholder="Nhập tên sản phẩm bạn muốn tìm">
                            <button type="submit"><img src="public/img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><p>FLOwerPJ</p></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php">
                    <div>
                        <img src="public/img_sp/logo.jpg" width="150px" height="150px">
                    </div>
                    <div>
                        <p style="font-family: 'Merienda One', Helvetica, sans-serif; font-size: 25px; text-align: center; color: #bc070a" >Flower PJ</p>
                    </div>
                    
                </a>
            </div>
            <!-- Amado Nav -->
            <?php 
            if ($select == 'home') {
                ?>
                <nav class="amado-nav">
                    <ul>
                        <li class="active"><a href="index.php?mod=home&act=list&select=home"><i class="fa fa-home fa-2x"></i>&nbsp&nbspTrang chủ</a></li>
                        <li><a href="index.php?mod=shop&act=list&select=shop"><i class="fa fa-shopping-bag fa-2x"></i>&nbsp&nbspCửa hàng</a></li>
                        <li><a href="index.php?mod=shop&act=cart&select=cart"><i class="fa fa-shopping-basket fa-2x"></i>&nbsp&nbspGiỏ hàng</a></li>
                    </ul>
                </nav> 
                <?php
            } elseif ($select == 'shop') {
                ?>

                <nav class="amado-nav">
                    <ul>
                        <li><a href="index.php?mod=home&act=list&select=home"><i class="fa fa-home fa-2x"></i>&nbsp&nbsp&nbspTrang chủ</a></li>
                        <li class="active"><a href="index.php?mod=shop&act=list&select=shop"><i class="fa fa-shopping-bag fa-2x"></i>&nbsp&nbsp&nbspCửa hàng</a></li>
                        <li><a href="index.php?mod=shop&act=cart&select=cart"><i class="fa fa-shopping-basket fa-2x"></i>&nbsp&nbsp&nbspGiỏ hàng</a></li>
                        <li><a href="index.php?mod=shop&act=contact"><i class="fa fa-car fa-2x"></i>&nbsp&nbsp&nbspLiên hệ</a></li>
                    </ul>
                </nav> 
                <?php
            } elseif ($select == 'cart') {
                ?>
                <nav class="amado-nav">
                    <ul>
                        <li><a href="index.php?mod=home&act=list&select=home"><i class="fa fa-home fa-2x"></i>&nbsp&nbsp&nbspTrang chủ</a></li>
                        <li><a href="index.php?mod=shop&act=list&select=shop"><i class="fa fa-shopping-bag fa-2x"></i>&nbsp&nbsp&nbspCửa hàng</a></li>
                        <li class="active"><a href="index.php?mod=shop&act=cart&select=cart"><i class="fa fa-shopping-basket fa-2x"></i>&nbsp&nbsp&nbspGiỏ hàng</a></li>
                        <li><a href="index.php?mod=shop&act=contact"><i class="fa fa-car fa-2x"></i>&nbsp&nbsp&nbspLiên hệ</a></li>
                    </ul>
                </nav> 
                <?php
            } else {
                ?>
                <nav class="amado-nav">
                    <ul>
                        <li class="active"><a href="index.php?mod=home&act=list&select=home"><i class="fa fa-home fa-2x"></i>&nbsp&nbsp&nbspTrang chủ</a></li>
                        <li><a href="index.php?mod=shop&act=list&select=shop"><i class="fa fa-shopping-bag fa-2x"></i>&nbsp&nbsp&nbspCửa hàng</a></li>
                        <li><a href="index.php?mod=shop&act=cart&select=cart"><i class="fa fa-shopping-basket fa-2x"></i>&nbsp&nbsp&nbspGiỏ hàng</a></li>
                        <!-- <li><a href="index.php?mod=shop&act=contact"><i class="fa fa-car fa-2x"></i>&nbsp&nbsp&nbspLiên hệ</a></li> -->
                    </ul>
                </nav> 
                <?php
            }
            ?>
            
            <!-- Cart Menu -->
            <br><br><br>
            <div class="cart-fav-search mb-100">
                <?php 
                $so_luong = 0;
                foreach ($_SESSION['cart'] as $value){ 
                    $so_luong += $value['so_luong_mua'];
                    ?>

                <?php } ?>
                <a href="?mod=shop&act=cart" class="cart-nav"><img src="public/img/core-img/cart.png" alt=""> Cart <span>(<?= $so_luong ?>)</span></a>
                <a href="#" class="fav-nav"><img src="public/img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="public/img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fhuynhnd__%2F%3Ffbclid%3DIwAR18lcedaaSxVCZwH93OeykLMBCxhL-_4KQ2FMOMryxR1QEOvv8ZddPTFDE&h=AT1vz3Rswyg1oi803nNK2OPnJjxZT8nPr7gLefOwMhFQZhSV0J087-Ce63oA3dujz6oDSrzkKor8O-wRgsr9DPELexXu8PXSqgWft1vknNnn-dO_Oehv55V4lAU2U3-HOJhexQ"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/truongnguyet.myhuong.3"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->