<?php
  get_header();
?>

<div class="container">

  <div class="menu-hero-image">
    <h1><?php the_title();?></h1>
  </div>

  <div class="menu-container">
    <h2>Find your favourite</h2>

    <?php 
      $src = get_template_directory_uri() . '/images/menu-img.jpg';
    ?>
    <img src="<?php echo $src; ?>">

    <div class="images-wrapper">
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img1.jpg'; ?>">
        <p>Espresso Coffee <strong>- $2.50 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img2.jpg'; ?>">
        <p>Cappuccino <strong>- $3.50 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img3.jpg'; ?>">
        <p>Iced latte <strong>- $2.75 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img4.jpg'; ?>">
        <p>Frappuccino <strong>- $3.50 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img5.jpg'; ?>">
        <p>Americano <strong>- $2.00 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img6.jpg'; ?>">
        <p>Matcha Latte <strong>- $3.75 -</strong></p>
      </div>
    </div>
  </div>  
</div>

<?php
  get_footer();