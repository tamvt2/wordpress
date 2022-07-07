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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Dcxb74Px `l&z_:LG?V~$MQAne@~p.QeGsDue17x=c!Cc_`G-Uvz2^N*TDBVs;0c' );
define( 'SECURE_AUTH_KEY',  'E!O/q@kAZnYlI:JU0FNCycn%6>RI +j]B7%K50@_Q5+A%u&/h(J=-q;2{?//-JRJ' );
define( 'LOGGED_IN_KEY',    '.w7S%Gy(3=oCf-LMVb@lh#wi_TiqCQ*-$yJvSg*m{0LVXTT2f`&R4vzox%Wl(+SK' );
define( 'NONCE_KEY',        'x4?}GU7oXt,ECpgZuHL/mN+fpYse;aoA-6L}y;ck.F^}vS|W7)0ii;;=S;_ QjMh' );
define( 'AUTH_SALT',        'FP0sjoo)^ PpxfX}0e*y>[#eGoz/!@y3kRe4,|XS:nrEjxnJ@9/|W}UGj5;TbM0N' );
define( 'SECURE_AUTH_SALT', 'H]G_6` GVtx&zTmGf/(XT}S1Re[-.+K;o9MO7|BSHVH~&FPxAY-Ow8Y@.~{u+!?)' );
define( 'LOGGED_IN_SALT',   'Lgv[d8SkoOm T*4402[Ra7xfE2):Gs[v7#}Kp6mEX&h*_H-}LYbi:nFXPIU0p3d.' );
define( 'NONCE_SALT',       'axXVGMCOUgAd!/eDR}7)l#19Kx6NTCnXmpdg>gt?e[j%zw@2]~9mvJO@zvJNZ4BM' );

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
