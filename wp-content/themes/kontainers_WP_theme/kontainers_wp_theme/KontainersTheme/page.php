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
switch ($pagename) {
	case "Contact Us":
		$currentPage_class = "contact-us";
	case "FAQ":
		$currentPage_class = "faq";
	case "Cookie Policy":
		$currentPage_class = "cookie-policy";
        break;
	case "How It Works":
		$currentPage_class = "how-it-works";
        break;
	case "Media Kit":
		$currentPage_class = "media-kit";
		break;
	case "Terms & Conditions":
		$currentPage_class = "terms";
		break;
	case "The Team":
		$currentPage_class = "who-we-are";
		break;
	default:
		$currentPage_class = "";
	break;
}


?>
<!--  This holds the WP page Content -  -->
<div class="non-app <?php echo $currentPage_class?>">

	<!--  Top bar with nav -->
	<?php include('top-nav.php') ?>

	<!--  form_holder - holds scrolling content -->
	<div class="form_holder">

		<!--  conent_holder - positions content -->
		<div class="content_holder">
			<section class="page-content primary" role="main">
				<article class="post">
					<?php //loop to get content
					if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</article>
			</section>
		</div>
		<!--/content_holder-->

	</div>
	<!--/form_holder-->

</div>
<?php get_footer(); ?>


