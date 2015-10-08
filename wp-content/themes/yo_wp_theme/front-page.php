<?php
/**
 * Yo_WP_Theme template for displaying the Front-Page
 *
 * @package WordPress
 * @subpackage Yo_WP_Theme
 * @since Yo_WP_Theme 1.0
 */

get_header(); ?>

	<div class="home-widgets"><?php
		if ( function_exists( 'dynamic_sidebar' ) ) :
			dynamic_sidebar( 'home-sidebar' );
		endif; ?>
	</div>

	<section class="page-content primary" role="main">
		<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'loop', get_post_format() );

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>
	</section>

<?php get_footer(); ?>