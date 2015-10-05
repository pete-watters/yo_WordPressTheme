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
define('AUTH_KEY',         'd,}/qwd4Bm!2F, 2tML-gBI[9@5)B7 I<Cq/*B?Nc#[).(D`wYtS#GCq.xM{BwbY');
define('SECURE_AUTH_KEY',  'mIiyfLDRGFSg/PIGEfTP0JDsTQ-Kr8/7a9-hYyZ+~0rNw?-fkp6 Y-HTO?a[<c|5');
define('LOGGED_IN_KEY',    'XiUII*4QnsO-ENF:+f3L(y(z3?,s7zP!2Uiw<X9WZPq!6/*Sr<dKHrlxGIA|pQ3A');
define('NONCE_KEY',        'tEFPIxCRi8BTgB3Y!^P4. @U(/.NZ9||>>)L]G+S$Pn*A@.$[^.$llRZbd+JX+Tp');
define('AUTH_SALT',        '*e@-igSSzyZAGo;yv>fW-tb1DGQ.B]W=41b%<*G2=)j^4<S(pBXWTdvGuY:^ZT.4');
define('SECURE_AUTH_SALT', 'FOD3+cU(ilT.Ts-,@G]8.Gvp~+RK)~Km|M;H^b<?WwCcQ,u.H@ewvj-ELx+F~C8U');
define('LOGGED_IN_SALT',   'V_pL,k<,PxDm0Wu7H K)VNWq5E..F7kyc1Zh*VXlq|%U.d7r?`liH50gWfV2N,bD');
define('NONCE_SALT',       'xuf6aV8xd/(1#:kN7bubOdZ@`,*Sz?qbkz>f)Oy87Vl9tF[*n#O[a5s3y#_C>{~v');

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
