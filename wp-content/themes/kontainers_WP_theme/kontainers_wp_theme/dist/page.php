<?php get_header(); ?>

	<!--  This holds the WP page Content - the appended class (e.g. home-page) needs to be pplied for individual pages-->
	<div class="non-app home-page">

		<!--  Top bar with nav -->
		<?php include('top-nav.php') ?>

		<!--  Piled content - homepage slides transitioned by scroll-->
		<div id="pagepiling">
			<section class="section home-page-start" id="section1">
				<div class="content_holder">
					<h1>Shipping made Simple</h1>
					<p class="home-page-intro">Kontainers is the smart and efficient new way to ship your containers. Instantly compare multiple carriers and freight schedules, allowing for up to <strong>80% faster and 20% cheaper</strong> bookings.</p>
					<a class="bc_button action_goToApp">Get Instant Quotes</a> </div>


				<!-- to be used when we have more content and have more slides
                  <a href="#page2" class="btn_start"></a>
                  -->

				<!--testimonials-->
				<?php include('testimonials.php') ?>
				<!--/testimonials-->

			</section>


		</div>
		<!-- /pagepiling -->

	</div>
	<!-- This holds the WP page Content - /non-app-->


<!--Original PHP from index to show blog posts below -->


	<!-- GENERATED CONTENT BELOW -->
		<section class="page-content primary" role="main">
			<?php
			if ( have_posts() ):

				while ( have_posts() ) : the_post();

					get_template_part( 'loop', get_post_format() );

					wp_link_pages(
						array(
							'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'kontainers_wp_theme' ), get_the_title() ) . '<br />',
							'after'            => '</p></div>',
							'next_or_number'   => 'number',
							'separator'        => ' ',
							'pagelink'         => __( '&raquo; Part %', 'kontainers_wp_theme' ),
						)
					);

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
			<div class="pagination">

				<?php get_template_part( 'template-part', 'pagination' ); ?>

			</div>
		</section>


<!--Original PHP from page.php below -->

	<section class="page-content primary" role="main">

		<?php
			if ( have_posts() ) : the_post();

				get_template_part( 'loop' ); ?>

				<aside class="post-aside"><?php

					wp_link_pages(
						array(
							'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'kontainers_wp_theme' ), get_the_title() ) . '<br />',
							'after'            => '</p></div>',
							'next_or_number'   => 'number',
							'separator'        => ' ',
							'pagelink'         => __( '&raquo; Part %', 'kontainers_wp_theme' ),
						)
					); ?>

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

	</section>

<?php get_footer(); ?>