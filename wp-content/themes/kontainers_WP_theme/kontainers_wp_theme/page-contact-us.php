<?php
/**
 * kontainers_WP_theme template for displaying Pages
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */
get_header();
?>
<!--  This holds the WP page Content -  -->
<div class="non-app">

    <!--  Top bar with nav -->
    <?php include('top-nav.php') ?>
    <!--  form_holder - holds scrolling content -->
    <div class="form_holder contact-us">
        <!--  conent_holder - positions content -->
        <div class="content_holder">
            <section class="page-content primary" role="main">
                <article class="post">
                    <div class="row">
                        <div class="twelve columns">
                            <h1>Get in touch</h1>
                            <div class="page-holder">
                                <div class="row primary-contact">

                                    <div class="four columns">
                                        <div class="contact-action action-chat">
                                            <a onclick="Intercom('showMessages')"><strong>Chat</strong>Start Live Chat</a>
                                        </div>
                                    </div>

                                    <div class="four columns">
                                        <div class="contact-action action-phone">
                                            <a href="tel:<?php echo str_replace(' ', '', $phoneNumber); ?>"><strong>Call</strong><?php echo $phoneNumber ?></a>
                                        </div>
                                    </div>

                                    <div class="four columns">
                                        <div class="contact-action action-mail">
                                            <a  href="mailTo:<?php echo $contactEmail ?>"><strong>Email</strong><?php echo $contactEmail ?></a>
                                        </div>
                                    </div>

                                </div>

                                <!-- Page content now loaded -->
                                <?php //loop to get content
                                if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                    <?php the_content(); ?>
                                <?php endwhile; ?>


                                <?php
                                if ($localeSetting === "gb") {

                                    ?>
                                    <div class="row ">
                                        <div class="twelve columns">
                                            <p class="k-contact-us-company-info">
                                                <strong>Company No:</strong> 09080630<br />
                                                <strong>VAT No:</strong> 188 7903 47</p>
                                        </div>
                                    </div>
                                <?php }
                                ?>


                            </div>
                        </div>
                    </div>

        </div>
    </div>
</div>
</div>

</article>
</section>
</div>
<!--/content_holder-->

</div>
<!--/form_holder-->

</div>
<?php get_footer(); ?>
