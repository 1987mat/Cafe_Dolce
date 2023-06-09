<?php
  get_header();
?>

<div class="container">

  <div class="menu-hero-image">
    <h1 data-observe><?php the_title();?></h1>
  </div>

  <div class="menu-container">
    <h2 data-observe>Choose Your Favorite Coffee</h2>

    <?php 
      $src = get_template_directory_uri() . '/images/menu-img.jpg';
    ?>
    <img src="<?php echo $src; ?>" alt="menu">

    <div class="images-wrapper" data-observe>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img1.jpg'; ?>" alt="menu-1">
        <p>Espresso Coffee <strong>- $2.50 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img2.jpg'; ?>" alt="menu-2">
        <p>Cappuccino <strong>- $3.50 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img3.jpg'; ?>" alt="menu-3">
        <p>Iced latte <strong>- $2.75 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img4.jpg'; ?>" alt="menu-4">
        <p>Frappuccino <strong>- $3.50 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img5.jpg'; ?>" alt="menu-5">
        <p>Americano <strong>- $2.00 -</strong></p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/images/menu-img6.jpg'; ?>" alt="menu-6">
        <p>Matcha Latte <strong>- $3.75 -</strong></p>
      </div>
    </div>
  </div>  
</div>

<?php
  get_footer();