<?php
/**
 * kontainers_WP_theme template for displaying the standard Loop
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */
?>
<article  class=" post type-post status-publish format-standard hentry category-uncategorized" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="post-title entry-title"><?php

		if ( is_singular() ) :
			the_title();
		else : ?>

			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php
				the_title(); ?>
			</a><?php

		endif; ?>

		</h2>
	</header>

	<div class="post-content entry-content"><?php

		if ( '' != get_the_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?><?php
		endif; ?>

		<?php if ( is_front_page() || is_category() || is_archive() || is_search() ) : ?>

			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>"><?php _e( 'Read more ', 'kontainers_wp_theme' ); ?></a>

		<?php else : ?>

			<?php the_content( __( 'Continue reading &raquo', 'kontainers_wp_theme' ) ); ?>

		<?php endif; ?>

		<?php
			wp_link_pages(
				array(
					'before'           => '<div class="linked-page-nav"><p>'. __( 'This article has more parts: ', 'kontainers_wp_theme' ),
					'after'            => '</p></div>',
					'next_or_number'   => 'number',
					'separator'        => ' ',
					'pagelink'         => __( '&lt;%&gt;', 'kontainers_wp_theme' ),
				)
			);
		?>

	</div>

	<footer class="entry-footer">

		<?php kontainers_wp_theme_post_meta(); ?>

	</footer>

	<aside class="widget widget_synved_social_share">
		<h2 class="widget-title">Sharing</h2>
		<div>
			<?php if (function_exists('synved_social_share_markup')) echo synved_social_share_markup(); ?>
		</div>
	</aside>


</article>