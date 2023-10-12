<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php bloginfo("title") ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top <?php echo get_theme_mod('menu_position')?>">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo home_url() ?>">DevFolio</a></h1>
      <!-- <img src="<?php //echo get_template_directory_uri()?>/assets/img/logo.png" alt="" class="img-fluid"> -->
      
      <nav id="navbar" class="navbar">
        <?php
          wp_nav_menu(
            array(
              'menu' => "",
              'menu_class' => "",
              'menu_id' => "",
              'container' => "",
              'container_class' => "",
              'container_id' => "",

              'theme_location' => "primary_menu",

            ));
			  ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">