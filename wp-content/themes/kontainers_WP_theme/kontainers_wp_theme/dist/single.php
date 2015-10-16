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
				<h1> <a class="<?php echo get_page_link() ?>">Shipping Blog</a></h1>

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
										<div id="mc4wp-form-1" class="form mc4wp-form">
											<form method="post">
												<p>
													<label>Email address: </label>
													<input type="email" name="EMAIL" placeholder="Your email address" required="">
												</p>
												<p>
													<input type="submit" value="Sign up">
												</p>
												<div style="position: absolute; left: -5000px;">
													<input type="text" name="_mc4wp_h_dd8f77d18e608e9045463917cd6efbfc" value="" tabindex="-1" autocomplete="off">
												</div>
												<input type="hidden" name="_mc4wp_timestamp" value="1444378160">
												<input type="hidden" name="_mc4wp_form_id" value="0">
												<input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
												<input type="hidden" name="_mc4wp_form_submit" value="1">
												<input type="hidden" name="_mc4wp_form_nonce" value="f4bac3f6da">
											</form>
										</div>
									</aside>
									<!-- / MailChimp for WordPress Plugin -->

								</div>
							</div>
						</div>
						<!-- /newsletter -->

						<aside class="post-aside">


						<?php
						if ( comments_open() || get_comments_number() > 0 ) :
							comments_template( '', true );
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