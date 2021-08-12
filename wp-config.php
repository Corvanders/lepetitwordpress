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
define( 'DB_NAME', 'wordpressblog' );

/** MySQL database username */
define( 'DB_USER', 'longueville' );

/** MySQL database password */
define( 'DB_PASSWORD', 'francois1156' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'I+>G%Q9hN0^f#MKr=l(VzG5!]L0$i4@12[4cr/jZ#%@=G(aoHK1rBXyv5VQp,Fyp' );
define( 'SECURE_AUTH_KEY',  'b@M0Md?PxLjM9Gmcx}R{UOIT~jy2C:SF9ruRs<A4I,&zm{u7<^$-(O5V@+)%5%7{' );
define( 'LOGGED_IN_KEY',    ';XD<kFnq@4BPx@NsX2Lhlb^Nh;gK_UYax.-0GFfkLCZ4fl?:E6{-Qh&<i_45Viz`' );
define( 'NONCE_KEY',        '8afxl5W0(^ 5s4XIXD5H3.-.AD,bVpLx|/RR!e^(tEBgJu-!=C4rGgbZRMky~Ja{' );
define( 'AUTH_SALT',        'Er7YxzQxDU$,Q<[h=P<,#pXt6L7&@j3k%zmh+6ok}r/l+k:=TL=c2#bQIXCgHEG~' );
define( 'SECURE_AUTH_SALT', '[jh/u(#PgozH1a0^ep(4p`/0;6`e{!== [AAWvsW^TwDI_0sj;(je+`.mN~bVnT#' );
define( 'LOGGED_IN_SALT',   '@m>X[tdUxftyeh>jMHrj~7>F{f8r#dVetW&?D5a;/rY~a; 4fJK-%8| 5rM775C ' );
define( 'NONCE_SALT',       'sxW?(NfV@yj{%XEPa&k@]{20wu^{.mVo]]]a5`81*;H,U@?4P;lJxYHt*vsJuXGl' );

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

define( 'UPLOADS', 'wp-content/medias' );