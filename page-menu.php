<?php
  get_header();
?>

<div class="container">

 
  <div class="menu-image">
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

      <!-- <?php 

        // $src1 = get_template_directory_uri() . '/images/menu-img1.jpg';
        // $src2 = get_template_directory_uri() . '/images/menu-img2.jpg';
        // $src3 = get_template_directory_uri() . '/images/menu-img3.jpg';
        // $src4 = get_template_directory_uri() . '/images/menu-img4.jpg';
        // $src5 = get_template_directory_uri() . '/images/menu-img5.jpg';
        // $src6 = get_template_directory_uri() . '/images/menu-img6.jpg';

        // $images = array($src1, $src2, $src3, $src4, $src5, $src6);

        //   foreach ($images as $image) {
        //     echo "<img src='".$image."'>";
        //   } 

        class MenuImage {
          public $src;
          public $description;
        }

        $image1 = new MenuImage();
        $image1->src = get_template_directory_uri() . '/images/menu-img1.jpg';
        $image1->description = 'Same coffee';
        $image2 = new MenuImage();
        $image2->src = get_template_directory_uri() . '/images/menu-img2.jpg';
        $image2->description = 'Same other coffee';
        $image3 = new MenuImage();
        $image3->src = get_template_directory_uri() . '/images/menu-img3.jpg';
        $image3->description = 'Same other super coffee';
        $image3 = new MenuImage();
        $image3->src = get_template_directory_uri() . '/images/menu-img3.jpg';
        $image3->description = 'Same other super coffee';
        $image3 = new MenuImage();
        $image3->src = get_template_directory_uri() . '/images/menu-img3.jpg';
        $image3->description = 'Same other super coffee';


        $images = array($image1, $image2, $image3, $image4, $image5, $image6);


        foreach ($images as $image) {
          echo "<div class='image-wrapper'>
                  <img src='".$image->src."'>
                  <div>".$image->description."</div>
                </div>";
        } 
      ?> -->

      
    </div>
  </div>  
</div>

<?php
  get_footer();