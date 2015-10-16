<?php get_header(); ?>

	<!--  This holds the WP page Content - the appended class (e.g. home-page) needs to be pplied for individual pages-->
	<div class="non-app home-page">

		<!--  Top bar with nav -->
		<?php include('top-nav.php') ?>


		<!--  Piled content - homepage slides transitioned by scroll-->
		<div id="pagepiling">
			<section class="section home-page-start" id="section1">
				<div class="content_holder">
					<h1><?php echo get_post_meta($post->ID, "kontainers_home_h1", true); ?></h1>
					<p class="home-page-intro"><?php echo get_post_meta($post->ID, "kontainers_home-page-intro", true); ?></p>
					<a class="bc_button action_goToApp"><?php echo get_post_meta($post->ID, "kontainers_home-action_goToApp", true); ?></a> </div>
				<!--testimonials-->
				<?php include('testimonials.php') ?>
				<!--/testimonials-->

			</section>


		</div>
		<!-- /pagepiling -->

	</div>
	<!-- This holds the WP page Content - /non-app-->
<?php get_footer(); ?>