<?php $promoInfo = get_field('promotion_info', 'option'); ?>

<?php if ($promoInfo): ?>
  <div class="container-fluid promobanner">
    <div class="container">
      <?php echo $promoInfo; ?>
    </div>
  </div>
<?php endif; ?>
