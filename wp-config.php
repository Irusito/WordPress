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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '*G;C6+u|1LnMhj^]?;=gf>0C!GA+.LL, ^(X% Q67?}_nR/}UF2wFLtM3Oe99t8B' );
define( 'SECURE_AUTH_KEY',  'wH|M-CVlS]0i$[)6i&4@+i8CVX;^Jh:`6cn~0Dk-{2s#m;fN+QS$0+s_%~>85-os' );
define( 'LOGGED_IN_KEY',    'l3z5o]1u;W:?`AH>Eh}7+i(ixykzTG0fIQs;td1a$x3 4B:Z*kuqRp,lvmQf<1Od' );
define( 'NONCE_KEY',        'yG [vQl7`Pca_ixscphK^j/?.W}A=P(zp5<zxxhh^/[SZ0G.}*)Q]D:x@oNO!m&C' );
define( 'AUTH_SALT',        'cBY!:Gy *d[(Wc5+U;[D+X2[k6>nH;QO@R^efH&ax#}E,d8D9I!k9?I`J)a<m(CG' );
define( 'SECURE_AUTH_SALT', '<b#(7VOr6)?7g6;a~8X&y*bVe9%P&GnmPe7`Aoi>T.7 aRg>FB(:_zTs*O!-$^wf' );
define( 'LOGGED_IN_SALT',   'u_-Ut%f=v) 5CR#/Gls^s&xKCg$L^8wfHLt^qn{S=,rL+O|uEXbjA}S%vdk>, 72' );
define( 'NONCE_SALT',       'MT2,kjp[qb^0+[eVCY=N16z(2S.v.O$1hDtwo#,r@yIj!HXY^9C?zB=HG!C]W8s/' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
