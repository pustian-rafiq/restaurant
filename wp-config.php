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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'restuarant_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gn7RiI%%n+=Nv,Bt`*~DOQvLB,6/7IyUba{~{[pD[Rjn:0m8oA9e:e4)Hdw6lP)]' );
define( 'SECURE_AUTH_KEY',  '/kDEWlM6:7OZn`B*W.`GI#b*K/Z7&W6]K32F@m`s=SLLAeENWjNnmJn]xs]if*;(' );
define( 'LOGGED_IN_KEY',    'LBxAtS.eb19]nn9l{S338dyA0PFlsx{@w*Hv_.^H){Em<oYwpFox~YCb3Fpp;9Za' );
define( 'NONCE_KEY',        'Z8.*7yOal#Js,m</AVl$c&i`,;mM&ft:Q8L1~2-VA}y)U&@AEBbil11SxPX}9)fh' );
define( 'AUTH_SALT',        'uB=uf10/bV;dOQNP/x pt>}vd!58@vK~~OTj-h8kSd;dj5F-:LMx>gf=ExdB)}xr' );
define( 'SECURE_AUTH_SALT', 'MlrwI{,# _1(,$6mxRC@uop/!~?7!z(O%[0Mm~V2T4aJ5PKJ3EJ<ZUD)!.IsE0[.' );
define( 'LOGGED_IN_SALT',   'v;rQ-vEsBT@D(B1@G_eFZN(XpqRgM+<3i-Q2;F)919}gKJ,Fi}RO6N(bZDlI0.oB' );
define( 'NONCE_SALT',       'NM b@ybcRE7P9AH-+ZD`*[Wa50BSZl=p8~hEALRa6P(yudw>1}62-$kf?el?NJ)%' );

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
