<?php
/**
 * Yo_WP_Theme template for displaying the footer
 *
 * @package WordPress
 * @subpackage Yo_WP_Theme
 * @since Yo_WP_Theme 1.0
 */
?>

				<ul class="footer-widgets"><?php
					if ( function_exists( 'dynamic_sidebar' ) ) :
						dynamic_sidebar( 'footer-sidebar' );
					endif; ?>
				</ul>

			</div>
		<?php wp_footer(); ?>
	</body>
</html>