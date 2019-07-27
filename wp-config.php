<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thelemonadeproject' );

/** MySQL database username */
define( 'DB_USER', 'jamielife' );

/** MySQL database password */
define( 'DB_PASSWORD', 'islife21' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '-E}w%zUU{puV_tAXhK fBorWPSR ZK]iWhecU>{KF4ii.rr,%0DH^7sezx?{fjVJ' );
define( 'SECURE_AUTH_KEY',  'G[JJbgAuhgN]W4)(f/NGGsM{_k??,ObCnXt82UsU#(DB_5*biAb}#;!~H}~W+)JJ' );
define( 'LOGGED_IN_KEY',    'LJ{:q3&Fy/%b:[1(f%FNa4gPYj3;dM+KK[nA4-^+L4]/I1~e~.KQ0&@TJA^q[d$|' );
define( 'NONCE_KEY',        '-%/bRUKv@0aq+4 N|Uz2!a3biHs5O4}.:l,+e}v99]JSF@PZ>8.,};yHclu?=dQ`' );
define( 'AUTH_SALT',        ';y&=:]#+/?Z{u[Q+se7[DgY$}6m(%.]SN3l+gTH}<mmq;*!}OY!XS?(p.[&NB{`V' );
define( 'SECURE_AUTH_SALT', 'VlU/46A+t,`+Z2NwJvzk@3Pya2?@=3Bvr|v(~NpKug+Sh#*;kA7 k<Z+YqiU!%wT' );
define( 'LOGGED_IN_SALT',   '*ciX[W81A[VvJHdET:+v3!g9Y#jSbl=O^r5-{5{-nx@|_H3gEj:se6H6I@N6dHkw' );
define( 'NONCE_SALT',       '{{A 2JTJ6y:!z<o._XLUK {?4a[ v^Vxw>dyTUB?ug:A8ifEwTC])tdjIkCxfgH%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
