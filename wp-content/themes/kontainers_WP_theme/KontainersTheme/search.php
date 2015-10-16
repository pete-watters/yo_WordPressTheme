<?php
/**
 * kontainers_WP_theme template for displaying Search-Results-Pages
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */

get_header(); ?>
	<!--  This holds the WP page Content - k-blog-holder class for blog pages only -->
	<div class="non-app k-blog-holder">

		<!--  Sliding shutters preloader -->
		<div class="page-loader">
			<div class="page-loader-slide-one"></div>
			<div class="page-loader-slide-two"></div>
		</div>

		<!--  Top bar with nav -->
		<?php include('top-nav.php') ?>

		<!--  form_holder - holds scrolling content -->
		<div class="form_holder">

			<!--  conent_holder - positions content -->
			<div class="content_holder">
				<h1> <a href="<?php echo get_page_link() ?>">Shipping Blog</a></h1>


				<!--  blog-nav - holds navigation elements scraped from standard WP elements -->
				<?php include('blog-nav.php'); ?>



				<section class="page-content primary" role="main"><?php

					if ( have_posts() ) : ?>


						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'kontainers_wp_theme' ), get_search_query() ); ?></h1>
						</header>

							<?php

						while ( have_posts() ) : the_post();

							get_template_part( 'loop', get_post_format() );

							wp_link_pages(
								array(
									'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'kontainers_wp_theme' ), get_the_title() ) . '<br />',
									'after'            => '</p></div>',
									'next_or_number'   => 'number',
									'separator'        => ' ',
									'pagelink'         => __( ' Part %', 'kontainers_wp_theme' ),
								)
							);

						endwhile;

					else :
						get_template_part( 'loop', 'empty' );

					endif; ?>

					<div class="pagination">

						<?php get_template_part( 'template-part', 'pagination' ); ?>

					</div>
				</section>
			</div>
			<!--/content_holder-->

		</div>
		<!--/form_holder-->

	</div>
	<!-- This holds the WP page Content - /non-app k-blog-holder-->
<?php get_footer(); ?>