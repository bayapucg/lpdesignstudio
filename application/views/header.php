<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lp Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="arkainfoteck">
    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/demo.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/et-line-font/style.css" type="text/css">

    <!-- revolution slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/rev-settings.css" type="text/css">

<style>
    nav ul li .active:a{
        color:red;
        
    }
</style>
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                            <div class="col">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                            <!-- social icons -->
                            <div class="col social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo base_url(); ?>">
                                <img class="logo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="" style="width: 50%;">
								<!--<h2>LP Design Studio</h2>-->
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <?php $class=$this->router->fetch_class();
                                  $method=$this->router->fetch_method(); ?>
                            <ul id="mainmenu">
								<li class="active"><a href="<?php echo base_url(); ?>">Home<span></span></a><li>
								<li><a href="<?php echo base_url(); ?>about">About<span></span></a><li>
                                <li>
                                    <a href="#">Services</a><span></span>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>interior_design">Interior Design</a></li>
                                        <li><a href="<?php echo base_url(); ?>space_planning">Space Planning</a></li>
                                        <li><a href="<?php echo base_url(); ?>furniture_design">Furniture Design</a></li>
                                        <li><a href="<?php echo base_url(); ?>project_management">Project Management</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->
                </div>
            </div>
        </header>
        <!-- header close -->