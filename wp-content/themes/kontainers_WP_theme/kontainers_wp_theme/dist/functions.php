<?php
/**
 * kontainers_WP_theme functions file
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */


/******************************************************************************\
	Theme support, standard settings, menus and widgets
\******************************************************************************/

add_theme_support( 'post-formats', array( 'image', 'quote', 'status', 'link' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

/**
 * Print custom header styles
 * @return void
 */

register_nav_menu( 'main-menu', __( 'Primary menu', 'kontainers_wp_theme' ) );

/**
 * Include editor stylesheets
 * @return void
 */
function kontainers_wp_theme_editor_style() {
    add_editor_style( 'css/wp-editor-style.css' );
}
add_action( 'init', 'kontainers_wp_theme_editor_style' );


/******************************************************************************\
	Scripts and Styles
\******************************************************************************/

/**
 * Enqueue kontainers_wp_theme scripts
 * @return void
 */
function kontainers_wp_theme_enqueue_scripts() {
	wp_enqueue_style( 'kontainers_wp_theme-styles', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'default-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0', true );
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'kontainers_wp_theme_enqueue_scripts' );


/******************************************************************************\
	Content functions
\******************************************************************************/

/**
 * Displays meta information for a post
 * @return void
 */
function kontainers_wp_theme_post_meta() {
	if ( get_post_type() == 'post' ) {
		echo sprintf(
			__( 'Posted %s in %s%s by %s. ', 'kontainers_wp_theme' ),
			get_the_time( get_option( 'date_format' ) ),
			get_the_category_list( ', ' ),
			get_the_tag_list( __( ', <b>Tags</b>: ', 'kontainers_wp_theme' ), ', ' ),
			get_the_author_link()
		);
	}
	edit_post_link( __( ' (edit)', 'kontainers_wp_theme' ), '<span class="edit-link">', '</span>' );
}