<?php get_header(); ?>

    <!--  This holds the WP page Content - the appended class (e.g. home-page) needs to be pplied for individual pages-->
    <div class="non-app home-page">

        <!--  Top bar with nav -->
        <?php include('top-nav.php') ?>

        <!--  Piled content - homepage slides transitioned by scroll-->
        <div id="pagepiling">
            <section class="section home-page-start" id="section1">
                <div class="content_holder">
                    <h1>FAQ Shipping made Simple</h1>
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



<?php get_footer(); ?>