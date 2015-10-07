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
define('AUTH_KEY',         ':O%pJsqCOiZ.Jk{pO|cAfgm^(S+qJy*I<cGx7hgza+xALm*)~8izS^QK]u@~-Ma.');
define('SECURE_AUTH_KEY',  '|KAq;{HO5R6l0VB3eI#NU-6Vb+8+v|uuJ,[CM1C-4K?-PH&D2{+-FEu1I5~0xTW?');
define('LOGGED_IN_KEY',    '+[{@4CK%WT$7=-6(~=wwae4 Qqu]_cNKYSS{q-BUV>x()5?o$VyEAVVrm5aHf1_C');
define('NONCE_KEY',        's1g4[)pYni[PN}?O%<Tt~a)fOONbP#=KOl_*dxAIa@lPBU|&oo$9z9.W0+}DMhv@');
define('AUTH_SALT',        'I F0%,Q0fEw7>n@U=]W#b~SF$#t:X$)=t>F~[LV?Wsle/,2tC1-y.Vm2UHZMsk@&');
define('SECURE_AUTH_SALT', '[ +D/4-v(%-E4!>YfO&G/{_(jeto,=Zm2T;jGJF`zSqL%nXzv=U)pPWr~/+idWoU');
define('LOGGED_IN_SALT',   '5ZKZ)Lo@NLGH!Rcw?)V3WsPC^2_LE^F)/_T:}y#szXm9YT!qW#v-MU|f:FDNP%BQ');
define('NONCE_SALT',       'b:7!H<%Gd/g-/ZW0tbj0{bCxB%ZTZG9<Cw:uJi2[(j=4,[XS#d4^^-[Y2;G-jid,');

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
