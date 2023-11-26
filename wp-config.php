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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lizard_db' );

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
define( 'AUTH_KEY',         '3ET,+:1+$vcAY?M.{Yp_e<>vh<,0qsnNNpN,u_9hfwrPfXjqCrg3:TOnOc}43=ve' );
define( 'SECURE_AUTH_KEY',  'mrEyboD#OQR C?lVq~G.L?>;9,h5ZKNiE%!Cs|2O|9UzDt+})zKUhpmcp8ae_dM8' );
define( 'LOGGED_IN_KEY',    'eh)BGjzGE60_7[F)G3}o!lBF&-e@ty@<JqJ/qKv_#!3LZ1dgRQ@01bs^^zmXCf3#' );
define( 'NONCE_KEY',        'yu42.o`=ELZc(%MKr,f,$<DW0RCZ@ng_wAd<Qu _qS3+/<.nMw|$vIpL&uk|L:{L' );
define( 'AUTH_SALT',        'Rb=xrrj/gF9[27A}=M2mV.uE5,_CnY&IT}bQS;uP#7q;b0q|ujAW?O}I1AU-FM?w' );
define( 'SECURE_AUTH_SALT', 'hv7gXlF7pEYCXj_q_UzdVg)GQ.{e[@w:pjTijr{w;k.hG&Sz{/N}w?XQicK`%`?q' );
define( 'LOGGED_IN_SALT',   'c=mfo=ppkp7$u,gOM]3%8Q0%Adsj[/G;tl8(qG`]7.>ET3yWUyiG%]D+sC.X#S%*' );
define( 'NONCE_SALT',       'J-5Hs>mGj9 CYSy{7dpq/e#MOOx3+NB3R6tvB#xx@W|Jp{-VTC<Z0@m%y| t?_6W' );

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
