<?php get_header(); ?>

	<!--  This holds the WP page Content - the appended class (e.g. home-page) needs to be pplied for individual pages-->
	<div class="non-app home-page">
		<!-- Video modal -->
		<div class="video_modal"> <a class="btn-close closeVideo"  onclick="pause()"><span class="displayNone">Close Video</span></a>
			<div class="video-holder" id="video-holder"> </div>
		</div>

		<!--  Top bar with nav -->
		<?php include('top-nav.php') ?>

		<!--  Piled content - homepage slides transitioned by scroll-->
		<div id="fullpage">
			<section class="section home-page-start" id="section1">
				<div class="content_holder">
					<h1><?php echo get_post_meta($post->ID, "kontainers_home_h1", true); ?></h1>
					<p class="home-page-intro"><?php echo get_post_meta($post->ID, "kontainers_home-page-intro", true); ?></p>
					<a class="bc_button action_goToApp"><?php echo get_post_meta($post->ID, "kontainers_home-action_goToApp", true); ?></a>
					<a class="btn-blog-movie btn_watchVideo intro-help"><?php echo get_post_meta($post->ID, "kontainers_home-watch-movie", true); ?></a>
				</div>

				<!-- to be used when we have more content and have more slides-->
        <a href="#TheFuture" class="btn_start"></a>

				<!--testimonials-->
				<?php include('testimonials.php') ?>
				<!--/testimonials-->

			</section>

			<!-- TheFuture  -->
	<section class="section section-2" id="section2">
				<div class="content_holder ">
			<!--  -->
			<h1>Witness the Future of Shipping</h1>
			<p>The Kontainers online platform instantly connects you to multiple carriers so that you can compare and select from the best rates and schedules in real-time; making your freight shipments up to up to <strong>80% faster and 20% cheaper</strong>.</p>

			<!-- TheFuture-->
			<div class="home-image">

					</div>
			<div class="flare flare-one"></div>
			<div class="flare flare-two"></div>
			<div class="flare flare-three"></div>
			<div class="flare flare-four"></div>
			<div class="flare flare-five"></div>
			<div class="flare flare-six"></div>
			<div class="flare flare-seven"></div>
			<div class="flare flare-eight"></div>
			<div class="flare flare-nine"></div>
		</div>
				<a href="#Benefits" class="btn_start"></a> </section>

	<!-- Benefitss  -->

	<section class="section section-3" id="section3">
				<div class="cloud"></div>
				<div class="cloud-1"></div>
				<div class="cloud-2"></div>
				<div class="cloud-3"></div>
				<div class="cloud-4"></div>
				<div class="cloud-5"></div>
				<div class="content_holder ">
			<div class="key-points">
						<div class="key-point point-1">
						<h2>All Inclusive</h2>
					<p>From sailing, to trucking, to customs clearance, Kontainers is your one-stop-shop for getting your products from ‘A’ to ‘B’ by sea. Simply search, select, and book - it’s that simple to place an order. </p>

				</div>
						<div class="key-point point-2">
					<h2>Transparent</h2>
					<p>Signing up for an account is FREE. There’s never any hidden costs or nasty surprises. You can always track your order through real-time updates and even share booking details and contacts with your team.</p>
				</div>
						<div class="key-point point-3">
					<h2>Secure</h2>
					<p>We use the most advanced cloud technology. Your information and any files you share with us are always 100% secure. Our team is available for live support 24/7, so you know you’re in trusted hands.  </p>
				</div>
					</div>
		</div>
			<div class="cloudline"></div>
			<a href="#InstantQuotes" class="btn_start"></a> </section>

	<!-- InstantQuotes  -->
	<section class="section section-4" id="section4">
			<div class="actions-panel">
							<h1>Peace of Mind</h1>
							<p>At Kontainers, we eliminate the countless phone calls and emails from the equation and provide instant quotes directly to you, making your shipping experience fast, reliable, and more efficient than ever before. <a href="how_it_works.html">Learn more...</a></p>
							<a class="bc_button action_goToApp">Get Instant Quotes</a>
							<div class="affiliation">

										<p><em>‘Bringing Logistics to the 21st Century’</em> - Wall Street Journal</p>
										<div class="investors-and-partners"> </div>
									</div>
						</div>
						<div class="contact-us">
					<div class="contact-us-holder">
								<h1>Any questions?</h1>
								<p>If you’d like to know more about our product or have any queries, don’t hesitate to get in touch. </p>

								<div class="row primary-contact">
							<div class="four columns">
										<div class="contact-action action-phone"><a href="tel:02081338011"><strong>Call</strong>0208 1338011</a> </div>
									</div>
							<div class="four columns">
										<div class="contact-action action-mail"><a href="mailTo:help@kontainers.co.uk"><strong>Email</strong>help@kontainers.co.uk</a> </div>
									</div>
							<div class="four columns">
										<div class="contact-action action-chat"><a onclick="Intercom('showMessages')"><strong>Chat</strong>Start Live Chat</a> </div>
									</div>
						</div>
							</div>
				</div>
			</section>


		</div>
		<!-- /pagepiling -->

	</div>
	<!-- This holds the WP page Content - /non-app-->
<?php get_footer(); ?>
