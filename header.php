<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
  <title>Cafe' Dolce</title>
</head>
<body>
  <header class="site-header">
    <div class="hamburger">
      <div></div>
    </div>
    <a href="<?php echo site_url(''); ?>">
      <div class="logo">
      </div>
    </a>
    <nav class="main-navigation">
      <ul>
        <li <?php if(is_page('home')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url(''); ?>">Home</a></li>
        <li <?php if(is_page('about')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
        <li <?php if(is_page('menu')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/menu'); ?>">Menu</a></li>
        <li <?php if(is_page('contact')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
      </ul>
    </nav>
    <div class="social-media">
      <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official"></i></a>
      <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
    </div>
  </header>