<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-2 footer-branding">
					<?php $description = get_bloginfo( 'description', 'display' ); ?>
					<a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=" <?php echo $description; /* WPCS: xss ok. */ ?>"></a>



				</div>
				<div class="col-md-2">
					<h4>Shop</h4>
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-shop',
						'items_wrap' => '<ul>%3$s</ul>' ) );
						?>
				</div>
				<div class="col-md-4">
					<h4>Help & Information</h4>
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-info',
						'items_wrap' => '<ul>%3$s</ul>' ) );
						?>
				</div>
				<div class="col-md-4">
					<h4>Contact</h4>
					<p class="address">28 Dungannon Rd, Coalisland, Dungannon BT71 4HP</p>
					<p>Phone: <a href="tel:028 8774 7780"> 028 8774 7780</a> <br />
						Email: <a href="email:customersupport@solesisterfooterwear.com">customersupport@solesisterfooterwear.com</a><br />
						Website: <a href="https://www.solesisterfootwear.com">www.solesisterfootwear.com</a></p>
				</div>
			</div>
			<div class="row sig">
				<div class="col-md-6">
					<?php echo date('Y'); ?> © Sole Sister Footwear
				</div>
				<div class="col-md-6 byline">
					Website by <a target="_blank" href="https://digital-only.com"><img src="<?php echo get_template_directory_uri() ?>/images/digital-only.svg" alt="Website Designed and Developed by Digital Only"></a>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
