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
define( 'AUTH_KEY',          '2%-Bo!:P3#CJ7=c3[{#?,0Jn=QJ20>%il$T.e_:KB;2^~/o8z`KH2MXsG)LEcKdW' );
define( 'SECURE_AUTH_KEY',   'M)r.db6y&kFW1.`TqI#BF*oTjYAJjBH4W8XSyAuG,*1fm%C)0H.iC|6n5#IDv*}!' );
define( 'LOGGED_IN_KEY',     ',fi}J%D%N]QPmDm~]G?!I)qlRb +LYQ#/H38qU3ZuR-{afIVxUTVU}ZK9SD*- V(' );
define( 'NONCE_KEY',         'o1$LtZ-1-4h*7$n,6|>up_J..M~in5//JjxKWnBgr?n|VD/wPqS}<>Xb!#O#ogO1' );
define( 'AUTH_SALT',         'V5y6!F=%E&+iHjqR++55CBnP;%<;Ht9RW1le|%W0n>/^8*2#4AfxtU}!/N0(G1kE' );
define( 'SECURE_AUTH_SALT',  'L#N0$?1Gpo`ks)Z7b^#}c,VvNbzAwXX9jY.|]wwD$)W,P$&ytO@A#*Q>K=Q]BT^`' );
define( 'LOGGED_IN_SALT',    '(xR1,ri-%{Pghil5^YymkC)UwX823z!m2qgCe4c3KVxn|NxZt*a,L.}l4`EBEl~G' );
define( 'NONCE_SALT',        'XB*H!%WC&lrp!3 ZtYw{oL{_Sn1y}p92[5.=iFH5!>]I%08f}o>^Q[)oDIkyx~<R' );
define( 'WP_CACHE_KEY_SALT', 'qqqfCL@r;LsNvtac|A>23n{&4e.q4^homB=kwRC$;@zFqqNK-|>rW*D(vM(fwX6B' );


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
