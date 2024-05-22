<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysql' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' +OE2}|[0`( 5ONFF}:~R.2RNPDIGiLXvE6$Ld/F8:8b[7OaN~&n0w-*``d2:O;2' );
define( 'SECURE_AUTH_KEY',  'o`p2RhK5/SK<Ep<Pik2_)SK24gdQPBbIw5tHGX[0e6TC;4VnNZWL^EF}ad`J(C.H' );
define( 'LOGGED_IN_KEY',    'cAR(B%),Qx) IDcQ.gy(H-U-D=oqqZ{CWyTzJ2WQqsK<7I?7sO3.S.g@B[Wh6?DM' );
define( 'NONCE_KEY',        'G?Fn&1c:iInzpJ2i;6}*lGf1xwkZ}86qtJf{5Zo2!t)XNS(hA.|jFss1T(^??Pwc' );
define( 'AUTH_SALT',        'c~x 0Hc<zxz,SAU#p)PpMM4K T* c*ol*:zjI.kG+%1umcF>hRFr4M[w;X^>g;BC' );
define( 'SECURE_AUTH_SALT', '~%Y3XF?B-q]W,P4^RxkTQJng#DZ4uI0TKj4SMQqy llA0QV~l`:%O!/yucvC%U*e' );
define( 'LOGGED_IN_SALT',   '{jKy3DIK)Paj(5BpFr58I?j9@zTqyTgv24V>q[CsgFAGw}AMA]WKVQ?&l3;vnEY?' );
define( 'NONCE_SALT',       'S74md9RjzypPo.zXiaznNF*f7OD`t+C!qQD|+3Ra-DyI>P1^w-:10/V8WK9DN;p)' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
