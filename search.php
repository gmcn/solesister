<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="container-fluid home-products">

	<div class="row">

		<div class="col-md-6">
			<h1><?php printf( esc_html__( 'Search Results for: %s', 'starting-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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

	<?php
	if ( have_posts() ) : ?>

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );

		endwhile;

		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => __( '<', 'textdomain' ),
			'next_text' => __( '>', 'textdomain' ),
		) );

	else : ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'starting-theme' ); ?></p>

	<?php endif; ?>

</div>

</div>

<?php
//get_sidebar();
get_footer();
