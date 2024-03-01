<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'V&kX|F<P/u8jtPG33)lIZ<1,B(0NBt$y*pA3Z_DfD{91Xg2W8+IBwFx&B+A{h?ER' );
define( 'SECURE_AUTH_KEY',   'MK#psZ{l7~S)(8R[;gkK;2_:FM-aHtBtv^Y,BK>t7wG0ekm~dhiQ:2*}&^8H^9O^' );
define( 'LOGGED_IN_KEY',     'u^B(o]kqNIDY{d?C ^]R,&S14^;N0<|+ vKh*Yb`?im%rej3ihR,h9.#[0=/>?-G' );
define( 'NONCE_KEY',         ':*$ig]r53+l4_ymk6ScQu(0GXreBFi{>WVQPZ>):oyH+d~Lr4zNii=`}[sQ(]1}|' );
define( 'AUTH_SALT',         'Hc87&L/s]IQPXx:LG;}wd]g<E!7zLlh3?Y)F.4(rMSYTL!C]u%si]d|=n1IE,#Gq' );
define( 'SECURE_AUTH_SALT',  'R[3:^8*_{i9}~Xn<]-{!4M-CX4cu8e/kKd_3_;|;BtOs0:q_xG!fn);8w=8WmHLS' );
define( 'LOGGED_IN_SALT',    '<BJY.&tJrLX*mr,,_e.P5a~I.Dw}<-{dbS3bJb.x6=`+XTQ_C52W1$wNCN,_2q>i' );
define( 'NONCE_SALT',        '{@INw;2`4b2`p/]F7x/:4#(~H^,c_lMIYXp67sH-0:4rjp9*Vd5i[7#IH4~j j8j' );
define( 'WP_CACHE_KEY_SALT', 'jUHWiwvGKrd#w!wooI,e#jB!1D$JQ~M%;Y/)Gi)(bPe!%}evFC<6,;4&:tWxJuYw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
