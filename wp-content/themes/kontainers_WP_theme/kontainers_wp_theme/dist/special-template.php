<?php

/*
 Template name: Special Template
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
                <h1> <a class="<?php echo get_page_link() ?>">Shipping Blog</a></h1>

                <!--  blog-nav - holds navigation elements scraped from standard WP elements -->
                <?php include('blog-nav.php'); ?>

                <!-- main - scraped from standard WP page structure -->
                <main id="main" class="site-main" role="main">

                    <!-- post - scraped from standard WP post -->
                    <article  class=" post type-post status-publish format-standard hentry category-uncategorized">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="blog-post.html" rel="bookmark">Hazardous Materials and Goods</a></h2>
                        </header>
                        <div class="entry-content"> <a href="blog-post.html"><img src="http://chaosdigital.co.uk/kontainers/wp-content/uploads/2015/09/oil-802209-1024x760.jpg" alt="payment" /></a>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
                            <p> <a href="blog-post.html#more-6" class="more-link">Continue reading <span class="screen-reader-text">Less than Container Load</span></a></p>
                        </div>
                        <footer class="entry-footer"> <a href="blog-post.html"> <span class="posted-on"><span class="screen-reader-text">Posted on </span></span></a><a href="blog-post.html" rel="bookmark">
                                <time class="entry-date published" datetime="2015-09-24T14:49:09+00:00">September 24, 2015</time>
                                <time class="updated" datetime="2015-10-07T07:19:20+00:00">October 7, 2015</time>
                            </a> </footer>
                    </article>
                    <!-- /post -->

                </main>
                <!-- /main -->

            </div>
            <!--/content_holder-->

        </div>
        <!--/form_holder-->

    </div>
    <!-- This holds the WP page Content - /non-app k-blog-holder-->


<?php get_footer(); ?>