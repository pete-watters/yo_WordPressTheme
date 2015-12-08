<?php
/**
 * kontainers_WP_theme template for displaying Pages
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */
get_header();
/*
	Switch statement to alter the class added to the 'non-app' div
	TODO - move this to be post-meta so it's configurable from CMS
*/

?>
<!--  This holds the WP page Content -  -->
<div class="non-app">
	<!--  Top bar with nav -->
	<?php include('top-nav.php') ?>



	<?php //loop to get content
	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

	</div>
	<!--/form_holder-->

</div>
<?php get_footer(); ?>


