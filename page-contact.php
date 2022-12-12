<?php
  get_header();
?>



<div class="container">

  <div class="contact-hero-image" data-observe>
    <h1><?php the_title();?></h1>
  </div>

  <div class="contact-container" data-observe>
    <div class="form-container">
      <h2>Get in touch</h2>
      <span class="message"></span>
      <form class="contact-form">
        <input type="text" placeholder="First Name" required>
        <input type="text" placeholder="Last Name" required>
        <input type="email" placeholder="Email" required>
        <textarea rows="8" maxlength="30" placeholder="Your comments here..." required></textarea>
        <input type="submit" class="submit-btn"></input>
      </form>
    </div>

    <div class="location-wrapper">
      <h2>Location</h2>
      <div class="location-container">
        <div class="hours">
          <h3>Hours</h3>
          <p><i>Mon-Fri</i> 6AM-3PM</p>
          <p><i>Sat-Sun</i> Closed</p>
        </div>
        <div class="map-container">
          <?php
            $mymap = new Mappress_Map(array("width" => 600));
            $mypoi = new Mappress_Poi(array("title" => "DC", "body" => "Washington, DC", "point" => array("lat" => 38.90279, "lng" => -77.037849)));
            $mymap->pois = array($mypoi); 
            echo $mymap->display();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
  get_footer(); ?>
