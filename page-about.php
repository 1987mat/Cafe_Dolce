<?php
  get_header();
?>

<div class="container">

 
  <div class="bg-image">
    <h1><?php the_title();?></h1>
  </div>


  <div class="about-container">

    <?php while(have_posts()) {
      the_post();
      ?>

      <div class="history">
        <h2>Who We Are</h2>
        <div class="content-wrapper">
          <?php
          the_content();
          ?>
          <img src="<?php echo get_the_post_thumbnail_url();?>" class="image">
        </div>
      </div>

    <?php
    }
    ?>

    <div class="feed">
      <h2>Our Coffee</h2>
      <p>Our dedicated and passionate team carefully selects the best types of coffee from around the world. From Costa Rica to Italy, here you will find a huge variety for every palate.</p>
      <div class="feed-images">
        <?php
          $img_src1 = get_template_directory_uri() . '/images/coffee-about.jpg';
          $img_src2 = get_template_directory_uri() . '/images/coffee-about2.jpg';
        ?>
        <img src="<?php echo $img_src1 ?>">
        <img src="<?php echo $img_src2 ?>">
      </div>
    </div>
  </div>
</div>


<?php
  get_footer();