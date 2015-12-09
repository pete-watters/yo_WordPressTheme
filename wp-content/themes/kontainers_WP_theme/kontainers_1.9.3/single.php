<?php
/**
 * kontainers_WP_theme template for displaying Single-Posts
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
				<h1> <a class="<?php echo get_page_link() ?>">Blog</a></h1>

				<!--  blog-nav - holds navigation elements scraped from standard WP elements -->
				<?php include('blog-nav.php'); ?>

				<!-- main - scraped from standard WP page structure -->
				<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : the_post();

						get_template_part( 'loop', get_post_format() );
						?>


						<!-- newsletter -->
						<div class="k-newsletter">
							<div class="row">
								<div class="four columns">
									<!-- Twitter button -->
									<a href="https://twitter.com/KontainersUK" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @KontainersUK</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								</div>
								<div class="eight columns">
									<!-- MailChimp for WordPress v2.3.12 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
									<aside id="mc4wp_widget-3" class="widget widget_mc4wp_widget">
										<h2 class="widget-title">Newsletter</h2>

										<!--Mailchimp PHP START -->
										<?php

										if( function_exists( 'mc4wp_form' ) ) {
											mc4wp_form();
										}
										?>
										<!--Mailchimp PHP END -->
									</aside>
									<!-- / MailChimp for WordPress Plugin -->

								</div>
							</div>
						</div>
						<!-- /newsletter -->

						<aside class="post-aside">


						<?php
						if ( comments_open() || get_comments_number() > 0 ) :
							comments_template( );
						endif;
						?>

						</aside><?php

					else :

						get_template_part( 'loop', 'empty' );

					endif;
					?>



				</main>
				<!-- /main -->

			</div>
			<!--/content_holder-->

		</div>
		<!--/form_holder-->

	</div>
	<!-- This holds the WP page Content - /non-app k-blog-holder-->

<?php get_footer(); ?>
