<?php

/*
 Template name: Blog Layout
*/

get_header();
?>
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
				<h1> <a href="<?php echo get_page_link() ?>">Blog</a></h1>
				<!--  blog-nav - holds navigation elements scraped from standard WP elements -->
				<?php include('blog-nav.php'); ?>
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'loop', get_post_format() );

					endwhile;
				else :
					get_template_part( 'loop', 'empty' );
				endif; ?>

				<div class="pagination">
					<?php get_template_part( 'template-part', 'pagination' ); ?>
				</div>
			</div>
			<!--/content_holder-->
		</div>
		<!--/form_holder-->
	</div>
	<!-- This holds the WP page Content - /non-app k-blog-holder-->


<?php get_footer(); ?>
