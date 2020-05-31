<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<div class="col-xs-6 col-sm-4 col-md-3 home-products__product matchheight">
	<?php $featimg = get_the_post_thumbnail_url($post->ID, 'woocommerce_thumbnail');  ?>
	<a href="<?php the_permalink() ?>">

		<?php if ($featimg) : ?>
			<img class="imgmatchheight" src="<?php echo $featimg ?>" alt="<?php echo the_title(); ?>">
		<?php else : ?>
			<img class="imgmatchheight" src="<?php echo get_template_directory_uri(); ?>/images/placeholder.svg" alt="<?php echo the_title(); ?>">
		<?php endif; ?>

		<?php
				the_title( '<h2 class="titleheight">', '</h2>' );
			?>
			<div class="clear">
			</div>

	</a>
</div>
