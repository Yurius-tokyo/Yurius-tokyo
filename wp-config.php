<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vity-systems_adventures_db' );

/** MySQL database username */
define( 'DB_USER', 'vity-systems' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mhhXPe8IPKIdxIED' );

/** MySQL hostname */
$hostname = $_SERVER["HTTP_HOST"];
if($hostname == 'localhost'){
	define('DB_HOST', 'localhost');
}else{
	define('DB_HOST', 'mysql57.vity-systems.sakura.ne.jp');
};
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&:@x>z)*3xrH^=lw7gOeB6a)E%A]GH9tn-9FZ5e %{;JqVR;We]_8<v{:{9 h8l~' );
define( 'SECURE_AUTH_KEY',  'WnxcOM2HfH:U&?Jkl$} l;&?0 k[>q>@H(~w[4s?|i=_d,Unad}Uz7zAPw:/rjHU' );
define( 'LOGGED_IN_KEY',    '34W]}Vbd0r7D:c.1I.VExbri;8g7(4g{|4l7V5})vKRQkrjTY`k#9[]@E*!;hP:O' );
define( 'NONCE_KEY',        'i55NFR06->b<0f]cW^bDpiaq.]@QV71=#%6jGV$9M.yc:7 u6)yCz4!+2:g2)>a2' );
define( 'AUTH_SALT',        'kaR:4U@jlX:dJVa[Pfv(W}f5%?kC%^$iUCtv_S3Z`XVC,1GZ w.pfMi.re!p]C)i' );
define( 'SECURE_AUTH_SALT', 'FxLFa#X#C!=vLP~ts>;7lYs@<{/zOqNZ$s4+t2<Y[XB::61pH-/eE{_7 ?o0u?B*' );
define( 'LOGGED_IN_SALT',   'D:yZo^U-plsCFkX9<#`^AHYtnw/tonoO.R(OLs1Yr9J-uv.X4)&%n/G(2Yr_cTKg' );
define( 'NONCE_SALT',       '-$%|]/>e@Ww.Xj/7-{#&~#fb|+(/dpliWA>W:!SL]l&xpv9Uh@iQAMy{}E+U@BZw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
