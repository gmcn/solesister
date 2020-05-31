<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151671428-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-151671428-1', { 'anonymize_ip': true });
	</script>


<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="/humans.txt" />
<link type="text/plain" rel="robots" href="/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>

		<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php $description = get_bloginfo( 'description', 'display' ); ?>

						<img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=" <?php echo $description; /* WPCS: xss ok. */ ?>">

					</a>

        </div>

				<div class="header-search hidden-xs hidden-sm">
					<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
							<input type="search" class="search-field" placeholder="Search for brands, items and inspiration" value="" name="s">
						<input type="submit" class="search-submit" value="" alt="Submit">
					</form>

					<ul>
						<li class="col-md-2">


							<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
						$count = WC()->cart->cart_contents_count; ?>
							<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
								<?php if ( $count > 0 ) : ?>
					        <span class="cart-contents-count">
										<?php echo esc_html( $count ); ?>
									</span>
								<?php endif; ?>
							</a>
						<?php endif; ?>


							<a href="<?php echo WC()->cart->get_cart_url(); ?>">
								<img src="<?php echo get_template_directory_uri() ?>/images/cart.svg" alt="View Cart">
							</a>
						</li>
						<li class="col-md-2">
							<a href="<?php echo site_url(); ?>/shipping">
								<img src="<?php echo get_template_directory_uri() ?>/images/shipping.svg" alt="View Shipping & Delivery Policy">
							</a>
						</li>
						<li class="col-md-8">

							<?php $promoInfo = get_field('promotion_info', 'option', false, false ); ?>

							<?php if ($promoInfo): ?>
								<p>We ship internationally <?php echo $promoInfo; ?></p>
							<?php endif; ?>

						</li>
					</ul>
				</div>

        <div id="navbar" class="navbar-collapse collapse">

					<ul class="nav navbar-nav navbar-right header-search hidden-md hidden-lg">
						<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
								<input type="search" class="search-field" placeholder="Search for brands, items and inspiration" value="" name="s">
							<input type="submit" class="search-submit hidden" value="" alt="Submit">
						</form>

						<ul>
							<li class="col-xs-2">


								<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
							$count = WC()->cart->cart_contents_count; ?>
								<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
									<?php if ( $count > 0 ) : ?>
						        <span class="cart-contents-count">
											<?php echo esc_html( $count ); ?>
										</span>
									<?php endif; ?>
								</a>
							<?php endif; ?>


								<a href="<?php echo WC()->cart->get_cart_url(); ?>">
									<img src="<?php echo get_template_directory_uri() ?>/images/cart.svg" alt="View Cart">
								</a>
							</li>
							<li class="col-xs-2">
								<a href="<?php echo site_url(); ?>/shipping">
									<img src="<?php echo get_template_directory_uri() ?>/images/shipping.svg" alt="View Shipping & Delivery Policy">
								</a>
							</li>
							<li class="col-xs-8">

								<?php $promoInfo = get_field('promotion_info', 'option', false, false ); ?>

								<?php if ($promoInfo): ?>
									<p>We ship internationally <?php echo $promoInfo; ?></p>
								<?php endif; ?>

							</li>
						</ul>
					</ul>

					<?php wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id' => 'navbar',
						'menu_class' => 'navbar-collapse mainnav',
						'items_wrap' => '<ul id="" class="nav navbar-nav">%3$s</ul>' ) );
						?>


						<ul class="nav navbar-nav navbar-right header-social hidden-xs">
              <li><a target="_blank" href="https://www.facebook.com/solesisterfootwear"><img src="<?php echo get_template_directory_uri() ?>/images/facebook_white.svg" alt="Follow Sole Sister Footwear on Facebook"></a></li>
              <li><a target="_blank" href="https://www.instagram.com/solesister_coalisland/"><img src="<?php echo get_template_directory_uri() ?>/images/instagram_white.svg" alt="Follow Sole Sister Footwear on Instagram"></a></li>
            </ul>


        </div><!--/.nav-collapse -->
      </div>
    </nav>

	</header><!-- header -->

	<div id="content" class="site-content">
