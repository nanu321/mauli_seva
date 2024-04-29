<?php include 'config.php' ?>
<!doctype html>
<html lang="en">

<head>
  <title>Elderly &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo p-3">
              <a href="<?= MAINLINK ?>" class="mb-0">
                <img src="images/logo.png" width="200" alt="mauli service logo">
              </a>
            </div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= MAINLINK ?>" class="<?php echo ($pagename == 'home') ? 'active' : '' ?> nav-link">Home</a></li>
                <li><a href="<?= MAINLINK ?>services" class="<?php echo ($pagename == 'services') ? 'active' : '' ?> nav-link">Services</a></li>
                <li><a href="<?= MAINLINK ?>about" class="<?php echo ($pagename == 'about') ? 'active' : '' ?> nav-link">About</a></li>
                <li><a href="<?= MAINLINK ?>contact" class="<?php echo ($pagename == 'contact') ? 'active' : '' ?> nav-link">Contact</a></li>
                <li class="social"><a target="_blank" href="https://wa.me/7977724576" class="nav-link"><span class="icon-whatsapp"></span></a></li>
                <li class="social"><a target="_blank" href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a target="_blank" href="#contact-section" class="nav-link"><span class="icon-instagram"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-white burger-size"></span></a></div>

        </div>
      </div>

    </header>