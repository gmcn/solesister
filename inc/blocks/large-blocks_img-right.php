<?php

$copy = get_field('copy');
$copyBg = get_field('copy_background');
$image = get_field('image');

 ?>


<div class="row custom-block">
  <div class="col-md-6 custom-block__copy matchheight" style="background: <?php echo $copyBg ?>">
    <div class="vert-align">
      <?php echo $copy ?>
    </div>
  </div>
  <div class="col-md-6 custom-block__img matchheight">
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  </div>
</div>
