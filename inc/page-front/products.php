<?php //global $product; ?>

<?php

// WP_Query arguments
$args = array(
'post_type'       => array( 'product' ),
'posts_per_page'  => 15,
'meta_query' => array(
        array(
            'key' => '_stock_status',
            'value' => 'instock'
        ),
        array(
            'key' => '_backorders',
            'value' => 'no'
        ),
    ),
'orderby'         => 'date',
'order'         => 'DESC',
);

// The Query
$products = new WP_Query( $args ); ?>

<?php if($products->have_posts()) : ?>
  <div class="container-fluid home-products">
    <div class="row">

      <div class="col-xs-8 col-md-6">
        <h1>NEW ARRIVALS | Our Spring / Summer Collection 2020</h1>
      </div>

      <div class="col-xs-4 col-md-6 breadcrumbs">
        <a href="/shop">View all</a>
      </div>

    </div>

    <div class="row">

      <?php while($products->have_posts()) : $products->the_post();

      $thumb = get_the_post_thumbnail( $post_id, 'woocommerce_thumbnail' , array( 'loading' => 'lazy' ) );


      ?>

        <?php if ( !$product->is_on_sale() ) : ?>

          <div class="col-sm-6 col-md-3 home-products__product matchheight">
            <a href="<?php the_permalink() ?>">
              <?php echo $thumb; ?>


              <?php
            		// woocommerce_show_product_sale_flash( $post, $product );
              		// if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
              		// else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="'.the_title().'" />';
              		the_title( '<h2 class="titleheight">', '</h2>' );
                	echo '<span class="price">'. $product->get_price_html() .'</span>';
              	?>
                <?php woocommerce_template_loop_add_to_cart( ); ?>
                <div class="clear">
                </div>

            </a>
          </div>

        <?php endif; ?>


      <?php endwhile; wp_reset_postdata(); ?>



    </div>
    <a class="viewmore" href="<?php echo site_url(); ?>/shop/">View More</a>
  </div>

<?php endif; ?>
