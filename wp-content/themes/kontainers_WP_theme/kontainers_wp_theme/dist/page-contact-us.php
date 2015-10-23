<?php
/**
 * kontainers_WP_theme template for displaying Pages
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */
get_header();
/*
	Switch statement to alter the class added to the 'non-app' div
	TODO - move this to be post-meta so it's configurable from CMS
*/
$currentPage_class = "contact-us";


// get URL
$serverHost = $_SERVER['HTTP_HOST'] ;
if (fnmatch('* kontainers.com?locale=gb', $serverHost)) {
    // .co.uk domain
    $phone_number = get_post_meta($post->ID, "kontainers_uk_phone", true);
    $contact_email = get_post_meta($post->ID, "kontainers_uk_email", true);
} else {
    // not .co.uk e.g. us
    $phone_number = get_post_meta($post->ID, "kontainers_us_phone", true);
    $contact_email = get_post_meta($post->ID, "kontainers_us_email", true);
}
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
                                            <strong>Chat</strong> <a>Start Live Chat</a>
                                        </div>
                                    </div>

                                    <div class="four columns">
                                        <div class="contact-action action-phone"><strong>Call</strong>
                                            <a href="tel:<?php echo str_replace(' ', '', $phone_number); ?>"><?php echo $phone_number ?></a>
                                        </div>
                                    </div>

                                    <div class="four columns">
                                        <div class="contact-action action-mail"><strong>Email</strong>
                                            <a  href="mailTo:<?php echo $contact_email ?>"><?php echo $contact_email ?></a>
                                        </div>
                                    </div>

                                </div>

                                    <!-- Page content now loaded -->
                                    <?php //loop to get content
                                    if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>
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


