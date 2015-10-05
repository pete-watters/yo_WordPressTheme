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
	define('DB_NAME', 'yo_wordpress');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'yo_wordpress');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'yo_wordpress');
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
define('AUTH_KEY',         '(Ir41ACIABRz#O6QKTNa@B7046f<|,rN92 tS49{e5g@BP@2s9:?+_=`v%Kv5P/Y');
define('SECURE_AUTH_KEY',  'tCG*EN@Kg|ru)T1fh;H2f,n ,f`:<Fv`_#mc.u1p=^N-^7GrK! |yLL== :08sk{');
define('LOGGED_IN_KEY',    'EuENz[}z$Z5OB=roGG}}91a s)G[gM@c)jQ-dy4qo5U.>-Ra4NzM8Znx#&{`*8r`');
define('NONCE_KEY',        'Z+M9,F!5XTE-%[e!1dPhxZC!^z.3U:{*4Lv2M&,#9Q/#)sY9%8w @@**4@;*Ij9C');
define('AUTH_SALT',        'h[#kB=%t48YwFr@Sw=T>][?Vdln-g|wloUL/|IrMEG}o-ln*QuN.=0;({aRXRxZ{');
define('SECURE_AUTH_SALT', ' y4+5Mfrvgal2~O75?` 3vr>}1k3Sno9^%&G`3H<j#d>Cn*0N[6b^sxRS!lXZ_c]');
define('LOGGED_IN_SALT',   '|)PoL~P29%X>nyYbbjb|/u%%E4[wCwRo*;Vr8*y50Zf?$~V?%M.W%{N)N{MLVQs:');
define('NONCE_SALT',       'r<Qh;r[w:2ouw}`s(k!rm`I-7T<FS!4|.]M|hRwNntyz5)llAZ{!uM1-q9O8Ii[f');

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
