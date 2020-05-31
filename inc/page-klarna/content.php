<div class="container-fluid page-default">
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

			<div class="col-md-12">
				<?php echo the_content(); ?>
			</div>
		</div>
	</div>
