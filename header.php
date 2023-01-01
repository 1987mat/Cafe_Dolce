<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Coffee Shop Website. Artisan coffee selection.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
  <title>Café Dolce</title>
</head>
<body <?php body_class(); ?>>
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
        <li <?php if(is_page('home')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url(''); ?>" aria-label="home">Home</a></li>
        <li <?php if(is_page('about')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about'); ?>" aria-label="about">About</a></li>
        <li <?php if(is_page('menu')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/menu'); ?>" aria-label="menu">Menu</a></li>
        <li <?php if(is_page('contact')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/contact'); ?>" aria-label="contact">Contact</a></li>
      </ul>
    </nav>
    <div class="social-media">
      <a href="https://www.facebook.com/" target="_blank" aria-label="facebook"><i class="fa fa-facebook-official"></i></a>
      <a href="https://www.instagram.com" target="_blank" aria-label="instagram"><i class="fa fa-instagram"></i></a>
      <a href="https://twitter.com" target="_blank" aria-label="twitter"><i class="fa fa-twitter"></i></a>
    </div>
  </header>