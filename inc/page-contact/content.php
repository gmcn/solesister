<div class="container page-default">
		<div class="row">

      <div class="col-md-6">
        <h1><?php echo the_title(); ?></h1>
      </div>

      <div class="col-md-6 breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
          }
          ?>
      </div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<?php echo the_content(); ?>

				<p class="contact_social"><a target="_blank" href="https://www.facebook.com/solesisterfootwear"><img src="<?php echo get_template_directory_uri() ?>/images/facebook_blk.svg" alt="Follow us on Facebook">CLICK TO FOLLOW US ON FACEBOOK</a></p>
				<p class="contact_social"><a target="_blank" href="https://www.instagram.com/solesister_coalisland/"><img src="<?php echo get_template_directory_uri() ?>/images/instagram_black.svg" alt="Follow us on Instagram">CLICK TO FOLLOW US ON INSTAGRAM</a></p>

			</div>
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2314.6752874863078!2d-6.70630728404205!3d54.53922049239161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48608b16a30635c9%3A0x4b81aa2d1799d10f!2sSole%20Sister%20NI!5e0!3m2!1sen!2suk!4v1589564925654!5m2!1sen!2suk" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1 contact_form">
				<h3>Want To Know More?</h3>
				<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]') ?>
			</div>
		</div>

	</div>
