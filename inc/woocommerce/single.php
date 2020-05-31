<div class="container-fluid page-default">
  <div class="container">
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
      <div class="col-md-10 col-md-offset-1 matchproduct-single">
      <?php
      /**
       * Hook: woocommerce_before_single_product.
       *
       * @hooked wc_print_notices - 10
       */
      do_action( 'woocommerce_before_single_product' );

      if ( post_password_required() ) {
      	echo get_the_password_form(); // WPCS: XSS ok.
      	return;
      }
      ?>
      <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

      	<?php
      		/**
      		 * Hook: woocommerce_before_single_product_summary.
      		 *
      		 * @hooked woocommerce_show_product_sale_flash - 10
      		 * @hooked woocommerce_show_product_images - 20
      		 */
      		do_action( 'woocommerce_before_single_product_summary' );
      	?>

      	<div class="summary entry-summary">

          <?php
      			/**
      			 * Hook: woocommerce_single_product_summary.
      			 *
      			 * @hooked woocommerce_template_single_title - 5
      			 * @hooked woocommerce_template_single_rating - 10
      			 * @hooked woocommerce_template_single_price - 20
      			 * @hooked woocommerce_template_single_excerpt - 5
      			 * @hooked woocommerce_template_single_add_to_cart - 30
      			 * @hooked woocommerce_template_single_meta - 40
      			 * @hooked woocommerce_template_single_sharing - 50
      			 * @hooked WC_Structured_Data::generate_product_data() - 60
      			 */
      			do_action( 'woocommerce_single_product_summary' );
      		?>



      	</div>


      </div>


      </div>
    </div>


  </div>

  <div class="row">

    <div class="col-md-12">
      <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action( 'woocommerce_after_single_product_summary' );
      ?>

      <?php do_action( 'woocommerce_after_single_product' ); ?>
    </div>

  </div>




</div>
