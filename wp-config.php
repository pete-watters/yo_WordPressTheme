<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'yo_wp');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'yo_wp');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'yo_wp');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|,|H,+ga-wZ@MzsM<D;g/?,|jq(;8,M1.~d,:kx$S%sj!F9N67/deNvZ7#k|]XpI');
define('SECURE_AUTH_KEY',  '^Qotk|L`6v|t*1UGzrT-Y$tPP?Si7J,^lpUS~&qL=vuwzDO4LUdukIVFl&p]t(-E');
define('LOGGED_IN_KEY',    '1TJ_$BXeJ%)|>MA_B7KU&y~.7-R9EMI,q+z*|kt:MM`|e~_vy[]?jwqW|en,J)y`');
define('NONCE_KEY',        'n#X>E{-9jo5nj;0!1+q~5$LUa1Y80q0Z-4$g5ywSL?-A>/1e%@~OH<LfYHR2nIH{');
define('AUTH_SALT',        'T~nvy(1Txi@V@PJ1b/9 YIQS3|n4 FwbQ+9Q*)2W4OA.jlL5O0Ifvpe|P$b]OdSV');
define('SECURE_AUTH_SALT', 'DCbtO8EL-2y+jq(78q9`KFxr1KKLsO>=JT:XRsbH|ZTYrq =uvT+qrYfQuvS-ptD');
define('LOGGED_IN_SALT',   'l9Aoe+[GjyWKx6P>b-XrFFiWqTmaf,!E8g;|]+!z^0-dl>-&1,OPy+j(;F&2H/5i');
define('NONCE_SALT',       'NR<Jm)9(y^nI~e[,.z]/yx|NZD0jr?kmT{)CFs!W8g8H6iBguG46y,A#gg*BOv`H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
