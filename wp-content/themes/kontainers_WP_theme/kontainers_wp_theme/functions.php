<?php

update_option('siteurl','https://kontainers.com');
update_option('home','https://kontainers.com');
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
	# the 1.0 here is adding version = 1.0
	wp_enqueue_style( 'kontainers_wp_theme-styles', get_stylesheet_uri() , array(), '1.2' );
	wp_deregister_script('jquery');
	wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-fullpage', get_template_directory_uri() . '/js/jquery.fullpage.js', array('jquery'), '1.2', true );
	wp_enqueue_script( 'default-scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery' , 'jquery-fullpage'), '1.0', true );
	wp_enqueue_script('default-scripts');
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
		echo "<a href=\"#\"><span class=\"posted-on\">";
		echo sprintf(
			__( 'Posted on %s in %s%s. ', 'kontainers_wp_theme' ),
			get_the_time( get_option( 'date_format' ) ),
			get_the_category_list( ', ' ),
			get_the_tag_list( __( ', <b>Tags</b>: ', 'kontainers_wp_theme' ), ', ' ),
			get_the_author_link()
		);
		echo  "</span></a>";
	}
	edit_post_link( __( ' (edit)', 'kontainers_wp_theme' ), '<span class="edit-link">', '</span>' );
}


/**
 * Include editor stylesheets
 * @return void
 */
//TODO move functionality from top-nav and contact-us here to share global vars
//function kontainers_wp_theme_check_domain() {
//
//
//	global $phone_number;
//	global $contact_email;
//
//	/* Domain internationalisation */
//	$serverHost = $_SERVER['HTTP_HOST'] ;
//	if (fnmatch('*kontainers.co.uk', $serverHost)) {
//		// .co.uk domain
//		$phone_number = get_post_meta($post->ID, "kontainers_uk_email", true);
//		$contact_email = get_post_meta($post->ID, "kontainers_uk_phone", true);
//	} else {
//		// not .co.uk e.g. us
//		$phone_number = get_post_meta($post->ID, "kontainers_us_email", true);
//		$contact_email = get_post_meta($post->ID, "kontainers_us_phone", true);
//	}
//	//return [$phone_number, $contact_email];
//}
//add_action( 'init', 'kontainers_wp_theme_check_domain' );

function myStartSession() {
	if(!session_id()) {
		session_start();
	}else{
		session_destroy();
		session_start();
	}
}

#add_action('init', 'myStartSession', 1);


function setup_locale() {

	// uncomment session_unset() below for testing as session needs to persist and will not clear
	//session_unset();

	// if no session var OR you are resetting via URL
	if(!isset($_SESSION['localeSetting']) || fnmatch('*locale*', $_SERVER['REQUEST_URI'])){

		// first default to US
		$_SESSION['localeSetting'] = 'us';
		$_SESSION['phoneNumber'] =  get_post_meta(20, "kontainers_us_phone", true);
		$_SESSION['contactEmail'] =  get_post_meta(20, "kontainers_us_email", true);

		// then if it's GB
		if (fnmatch('*locale=gb', $_SERVER['REQUEST_URI'])) {
			// uk passed
			$_SESSION['localeSetting'] = 'gb';
			$_SESSION['phoneNumber'] = get_post_meta(20, "kontainers_uk_phone", true);
			$_SESSION['contactEmail'] = get_post_meta(20, "kontainers_uk_email", true);
		}elseif (fnmatch('*locale=us', $_SERVER['REQUEST_URI'])){
			// us passed
			$_SESSION['localeSetting'] = 'us';
			$_SESSION['phoneNumber'] = get_post_meta(20, "kontainers_us_phone", true);
			$_SESSION['contactEmail'] = get_post_meta(20, "kontainers_us_email", true);

		}elseif (fnmatch('*locale=clear', $_SERVER['REQUEST_URI'])){
			session_unset();

			session_destroy();

		}
	}
}
#add_action('init', 'setup_locale');

//function add_my_var($public_query_vars) {
//	$public_query_vars[] = 'myvar';
//	return $public_query_vars;
//}
//
//add_filter('query_vars', 'add_my_var');
//
//function do_rewrite() {
//	add_rewrite_rule('mypage/([^/]+)/?$', 'index.php?pagename=mypage&myvar=$matches[1]','top');
//}
//
//add_action('init', 'do_rewrite');
//
//function add_query_vars($aVars) {
//	$aVars[] = "msds_pif_cat"; // represents the name of the product category as shown in the URL
//	return $aVars;
//}
//
//// hook add_query_vars function into query_vars
//add_filter('query_vars', 'add_query_vars');
//
//function add_rewrite_rules($aRules) {
//	$aNewRules = array('msds-pif/([^/]+)/?$' => 'index.php?pagename=msds-pif&msds_pif_cat=$matches[1]');
//	$aRules = $aNewRules + $aRules;
//	return $aRules;
//}
//
//// hook add_rewrite_rules function into rewrite_rules_array
//add_filter('rewrite_rules_array', 'add_rewrite_rules');

//function get_locale_function() {
//	if (fnmatch('*locale=gb', $_SERVER['REQUEST_URI'])) {
//		$_SESSION['localeSetting'] = 'gb';
//		$_SESSION['phoneNumber'] = get_post_meta(12, "kontainers_uk_phone", true);
//		$_SESSION['contactEmail'] = get_post_meta(12, "kontainers_uk_email", true);
//	} else {
//		$_SESSION['localeSetting'] = 'us';
//		$_SESSION['phoneNumber'] =  get_post_meta(12, "kontainers_us_phone", true);
//		$_SESSION['contactEmail'] =  get_post_meta(12, "kontainers_us_phone", true);
//	}
//}
//
//add_action('wp_footer', 'get_locale_function');

// get URL

//$GLOBALS['locale_setting'] = '';
//global $locale_setting;
//
//$url = (isset($_SESSION['use_case'])) ? $_SESSION['use_case'] : 'default';
//echo 'my-page.php?use_case='.urlencode($url);
function locale_function() {

	static $locale_value;
	static $phone_number;
	static $contact_email;

	// Function has already run
	if ( $locale_value !== null )
		return $locale_value;


	if (fnmatch('*locale=gb', $_SERVER['REQUEST_URI'])) {
		$locale_value = 'gb';

	} else {
		$locale_value = 'us';
	}
	return $locale_value;
}


#add_action('wp_footer', 'locale_function');

//if (fnmatch('*locale=gb', $_SERVER['REQUEST_URI'])) {
//$locale_value = 'gb';
//} else {
//
//	$locale_value = 'us';
//}



/**
 * Custom redirect
 */
function wprdcv_param_redirect(){

	static $local_param;

	if (fnmatch('*locale*', $_SERVER['REQUEST_URI']) === "gb"){
		$local_param = "gb";
	}else{
		$local_param = "us";
	}

	if( !is_admin() && !isset($_GET['locale']) ){
		$location = "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$location .= "?locale=" . $local_param . "";
		wp_redirect( $location );
	}
}
#add_action('template_redirect', 'wprdcv_param_redirect');

function remove_more_anchor($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_anchor');

/**
 * Add Google Analytics code
 */
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() {
	?>

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-58749663-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

<?php } ?>
