<?php
/**
 * The slider for the front page.
 *
 * This is the Orbit Slider from Zurb Foundation.
 *
 * @link https://foundation.zurb.com/sites/docs/orbit.html
 *
 * @package Wholegrain_Australia
 */
?>

<!-- Image variables used in Orbit -->
<?php
$slide1=get_field("slide_1");
$slide2=get_field("slide_2");
$slide3=get_field("slide_3");
$slide4=get_field("slide_4");


if ( is_front_page() ) : ?>

<!-- Orbit -->
<div class="fullscreen-image-slider">
  <div class="orbit" role="region" aria-label="Wholegrain Australia Farm Images" data-orbit>
    <div class="orbit-wrapper">
      <div class="orbit-controls">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
      </div>
      <ul class="orbit-container">
        <li class="is-active orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" style="background-image:url(<?php echo $slide1; ?>);">
            <!-- <figcaption class="orbit-caption">The Whole Grain</figcaption> -->
          </figure>
        </li>
        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" style="background-image:url(<?php echo $slide2; ?>);">
            <!-- <figcaption class="orbit-caption">Lets Rocket!</figcaption> -->
          </figure>
        </li>
        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" style="background-image:url(<?php echo $slide3; ?>);">
            <!-- <figcaption class="orbit-caption">Encapsulating</figcaption> -->
          </figure>
        </li>
        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" style="background-image:url(<?php echo $slide4; ?>);">

            <!-- <figcaption class="orbit-caption">Outta This World</figcaption> -->
          </figure>
        </li>
        <div class="overlay"></div>
      </ul>
      <nav class="orbit-bullets" style="z-index: 999000">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
        <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
      </nav>
    </div>
    <!-- End orbit-wrapper -->
  </div>
  <!-- End data-orbit -->
</div>
<!-- End Fullscreen Image Slider -->
<?php endif; ?>
