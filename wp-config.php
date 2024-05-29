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
define( 'DB_NAME', 'decortinas' );

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
define( 'AUTH_KEY',         '{%K-n^5xnOs]C+j[/(?DKu8uV@Y2I3a}R 1&E;3EH[$$@-+lj;+BS=(/M/_|ZR~E' );
define( 'SECURE_AUTH_KEY',  'c&h_Q)D],H@_l^->{3VMaQ7%BO;znybLkt@S<n@O4=@7RYlx{[)i7Ze?W)GiUDXT' );
define( 'LOGGED_IN_KEY',    'LcT8=rF}oW;]~97s Hss2R(lSp~BFD.#&q(y550p$$[ol]YO54|y)B)x>!%#fjzd' );
define( 'NONCE_KEY',        'Em k>*F9R:&Q&e+4zjf[|5d{DG4ph#[2=B rBTE`5%Fl=:4(^#-eT{j4v(Kgl5SR' );
define( 'AUTH_SALT',        'M|s4iGIw[xfrA9n18ja03C/nJN*cy+PMr.9Sh`n&5/Ufv3u&l|fTZ,?=Gd%7^blt' );
define( 'SECURE_AUTH_SALT', 'jpBB/-B[I=%p[M_Ce,b!HCxR|Iey&NVMjcTp!Ba^,%+h`nB 0n+fvZlsMh%jnRc`' );
define( 'LOGGED_IN_SALT',   'HEo0gwl_xIa1$K_$K#*1n9@xyy/0}^UJc^SGtN#imIr>sXMT(hJi#qE#>Q4XnpDt' );
define( 'NONCE_SALT',       'c<*WI>`yR^#la$As$!B+AymdoY}?XbzmPkRh,7PvgE;.qkl,4~Pz$f10C5BhLsf}' );

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
