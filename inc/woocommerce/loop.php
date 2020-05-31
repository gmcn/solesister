<?php if (have_posts()) : ?>

<div class="container-fluid product-loop">


  <div class="container">
    <div class="row product-loop__category">

      <div class="col-md-4">
        <h1><?php echo single_cat_title(); ?></h1>
      </div>

      <div class="col-md-4 product-loop__category_description">
        <?php echo category_description(); ?>
      </div>

      <div class="col-md-4 breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
          }
          ?>
      </div>
    </div>
  </div>


  <div class="row">

      <?php if ( is_active_sidebar( 'woo-sidebar' ) ) : ?>
      <div class="col-md-2">

        <div class="hidden-xs hidden-sm">
          <?php dynamic_sidebar( 'woo-sidebar' ); ?>
        </div>

        <div class="hidden-md hidden-lg">
          <a class="filter_toggle" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Filter <img src="<?php echo get_template_directory_uri() ?>/images/filter-arrow.svg" alt="filter arrow">
          </a>
          <div class="collapse" id="collapseExample">
          <!-- <div class="well"> -->
            <?php dynamic_sidebar( 'woo-sidebar' ); ?>
          <!-- </div> -->
          </div>
        </div>



      </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'woo-sidebar' ) ) : ?>
        <div class="col-md-10">
      <?php else: ?>
        <div class="col-md-12">
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>

        <div class="col-sm-6 col-md-4 col-lg-3 product-loop__single">
          <div class="wrapper matchheight">
            <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo the_title(); ?>">

              <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID, 'woocommerce_thumbnail') ?>" alt="<?php echo the_title(); ?>">

            	<?php
            		// woocommerce_show_product_sale_flash( $post, $product );
              		// if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
              		// else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="'.the_title().'" />';
              		the_title( '<h2 class="titleheight">', '</h2>' );
                	echo '<span class="price">'. $product->get_price_html() .'</span>';
              	?>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                <div class="clear">
                </div>
            </a>
          </div>

        </div>

      <?php endwhile; ?>
    </div>

    <?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( '<', 'textdomain' ),
    'next_text' => __( '>', 'textdomain' ),
) ); ?>


  </div>
</div>
<?php endif; ?>
