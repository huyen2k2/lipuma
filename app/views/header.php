<!DOCTYPE html>
<html lang="en-CA">

<head>
    <title>MVC Framework PHP Tutorial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <!--rieng-->
    <meta property="og:url"                content="<?php

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $actual_link;

     ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?php echo $this->title ?>" />
    <meta property="og:description"        content="<?php echo $this->desc ?>" />
    <meta property="og:image"              content="<?php echo $this->image ?>" />
    <!--rieng-->
    <!--tkw-->
   
    <meta vary="User-Agent" />
    <meta name="geo.region" content="VN-SG" />
    <meta name="geo.placename" content="Ho Chi Minh City" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />
    <link rel="icon" type="image/png" href="template/Default/img/favicon.png">
    <!--tkw-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--     <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/font-awesome.min.css" type="text/css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/product.css">    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>
 <header>
        <div class="info_top">
            <div class="bg_in">
                <div class="p_infor">
                    <a href = "#"><i class="fa fa-map-marker" aria-hidden="true"></i> CÔNG TY TNHH LIPUMA, MỄ TRÌ HẠ, NAM TỪ LIÊM, HÀ NỘI</a>
                    <a href = "tel:760-696-3480"><i class="fa fa-phone" aria-hidden="true"></i>  012356789</a>
                </div>
            </div>
        </div>
        <div class="header_top_menu">
            <div class="header_top_menu_all">
                <div class="header_top">
                    <div class="bg_in">
                        <div class="logo">
                            <a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>/public/images/logo3.jpg" width="100" height="100" alt="logohere.jpeg" /></a>
                        </div>
                        <nav class="menu_top">
                            <form autocomplete="off" class="search_form" method="GET" action="<?php echo BASE_URL . '/search' ?>">
                                <input class="searchTerm" name="search" placeholder="Nhập từ cần tìm..." />
                                <button class="searchButton" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="btn_menu_search">
                <div class="bg_in_menu">
                    <div class="table_row_search">
                        <div class="menu_top_cate">
                            <div class="">
                                <div class="menu" id="menu_cate">
                                    <div class="menu_left">
                                        <i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm
                                    </div>
                                    <div class="cate_pro">
                                        <div id='cssmenu_flyout' class="display_destop_menu">
                                            <ul>
                                                <?php
                                                    foreach($category as $key => $cate){ 
                                                ?>
                                                <li class='active has-sub'>
                                                  
                                                    <a href='<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>'><span><?php echo $cate['title_category_product'] ?></span></a>

                                                </li>
                                                 <?php
                                                    } 
                                                    ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_top">
                            <div id='cssmenu'>
                                <ul>
                                    <li class='active'><a href='<?php echo BASE_URL ?>'>TRANG CHỦ</a></li>
                                    <li class=''><a href='<?php echo BASE_URL ?>/index/ourstory'>GIỚI THIỆU</a></li>
                                    <li class=''>
                                        <a href='<?php echo BASE_URL ?>/sanpham/tatca'>SẢN PHẨM</a>
                                        <ul>
                                            <?php
                                                foreach($category as $key => $cate){ 
                                            ?>
                                            <li>                                               
                                                <a href='<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>'><span><?php echo $cate['title_category_product'] ?></span></a>                                                                                    
                                            </li>
                                             <?php
                                                } 
                                                ?>
                                        </ul>
                                    </li>
                                    <li class=''><a href='<?php echo BASE_URL ?>/tintuc/tatca'>TIN TỨC</a>                                                                      
                                        <ul>
                                            <?php
                                                foreach($category_post as $key => $cate_post){ 
                                            ?>
                                            <li> <a href='<?php echo BASE_URL ?>/tintuc/danhmuc/<?php echo $cate_post['id_category_post'] ?>'><span><?php echo $cate_post['title_category_post'] ?></span></a></li>
                                            <?php
                                            } 
                                            ?>
                                        </ul>
                                    </li>
                                    <li class=''><a href='<?php echo BASE_URL ?>/index/lienhe'>LIÊN HỆ</a></li>
        
                                </ul>
                                
                            </div>
                        </div>
                        <div class = "list-icon" style= "margin-top: 18px;">
                            <div id = "cssmenu"> 
                             <?php
                                       if(Session::get('customer')==true){
                                           ?> 
                                         <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangxuat'><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                                           <?php 
                                       }else{
                                        ?>   
                                        <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangnhap'><i class="fa-solid fa-user"></i></a></li>
                                        <?php 
                                    }
                                    ?>                                
                                <li class=''><a href='<?php echo BASE_URL ?>/giohang'><i class="fa-solid fa-cart-shopping"></i></a></li>
                                
                            </div>
                        </div>
                        <!-- <div class="clear"></div> -->
                    </div>
                </div>
                <!-- <div class="clear"></div> -->
            </div>
        </div>
    </header>
    <!-- <div class="clear"></div> -->