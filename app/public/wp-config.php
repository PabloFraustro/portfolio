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
define( 'AUTH_KEY',          'bt[t.gGr8Q!r|>77mP:D`P_RWR<}(5+g>5e7ADi wrTzXpf[,7CI5^yOCQc*?4hY' );
define( 'SECURE_AUTH_KEY',   '<Yx?3pnEmfSHj>9[pafsiBE%A6xQ5KLC{H$S7Hw5M*l5}q(|LWy]&.062j}4qM.p' );
define( 'LOGGED_IN_KEY',     '}sp:b3DAt!&R0<jg$N.:T:28 Am5Y7J-&FC{S%)/_KqgXde)A7V RtGqMSdt]]j7' );
define( 'NONCE_KEY',         'cj4?7ZD)ybVmNdBf1fBwZ5m&J!hB$X9jTi@S=|nj{U20[(_<6vc]wOnzMu0B,oK)' );
define( 'AUTH_SALT',         'Y>#mq9JOdJ5n@uN/w|;5zATt.R(y&wSbH93rJ| @DmGz2ji7!xC<,_yvz1AtYxRq' );
define( 'SECURE_AUTH_SALT',  'muR:]VwqE7#gNwUCZ-i C,y,vIytN*uXFQ,/hauFD~{E(Y*gURXhSJN6z!sQesJJ' );
define( 'LOGGED_IN_SALT',    '~hiY.tP; <zaefR3zcti=y`2`(ug9!E|(%WaD[KSXHU6E*GP`W&RV~.=a~W9Ula]' );
define( 'NONCE_SALT',        'S1%:Fy6MkWZcHgvU:M)jAFtV%Z>lBDsx3OWjO^d$JQWE&nh04EA1 R6:C*>kvo5=' );
define( 'WP_CACHE_KEY_SALT', '.%gHXo1wr9?:B^3sDiS`(_z^G;_3|Y[@er+LsI:F4}(lNCZVWdeIqJys`W-A+xnI' );


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
