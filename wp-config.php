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
define( 'AUTH_KEY',          '=y~{JE_VR5uLtplAgF|m-rQ)F.xFe;){if{vO>tJt99&wW&s2r+bC(U+$3%.FKCI' );
define( 'SECURE_AUTH_KEY',   'J1eTnYye3%$|hLFUCBC0DcIuqpL5n0^L3dC0A)0c]{bJ]LB3eCV+M:?O4I9-I,F!' );
define( 'LOGGED_IN_KEY',     '(;$#fz-OD_Jc`U/@Xcf%l&(H[<&]TRb_(lqXN`+<FeCJP*M%!GEm|3TJI`nAWi86' );
define( 'NONCE_KEY',         ':32LrDGrF*0eHk0</kb]2WF,tOdV_Pta8kBx/_TQrfdxD3l(UGlMCShpU]*Ces8u' );
define( 'AUTH_SALT',         'KhEUu^;UoE#A~7o)@^[D_BhKmU`C.lIY)Hb;.SpCbv0e/:)MTXP-,wyHY}N=<PIS' );
define( 'SECURE_AUTH_SALT',  'Z}([o%6MLKQo@3 s+9b )/b_EWKpN]FIKc4OcbWT>sU4oDm[w4#p$G;&XX!!`n#6' );
define( 'LOGGED_IN_SALT',    '%35br(f6O*I,^0M{MTE-lqg@f%}BCaqB#<?nP9?Sx/(7-+}7(`ryCb-P^^SQAV_5' );
define( 'NONCE_SALT',        '$E(]LQO]&@X[/0AB{vsPzQb?6S~]ROKkwgD7Oc:l.:w.$D>wc$qBJ1G:lF`k%%7h' );
define( 'WP_CACHE_KEY_SALT', 'a2b9K^b17GBGAkx@S&D&}V]TA9)wx{l#~JyZ7RcI:`lua:4&uB9GecPGj_]JBQ4L' );


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
