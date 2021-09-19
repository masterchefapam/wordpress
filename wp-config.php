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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%|L%wZ>yU(#y~OSTZnKha{`r5csQupl~SV7t[Ucm9%C$nE?se$KR[XHm/#Z6%A.`' );
define( 'SECURE_AUTH_KEY',  '#e`^x6VJ1|.6m8K90J))_C&f[A5& aUPD]4CYy*)t Tyy.CKS~:A[HGHK}nz3<{-' );
define( 'LOGGED_IN_KEY',    '93yxVvis5h$QE?|bd>UMkQ),V=)7(Z[88c+>t9l4&Z*~Ew.%Y^ho,7)iXvJFv5a0' );
define( 'NONCE_KEY',        'L4/v}b*8yscqh:]<h?~{>]zFi:i{r2%,Cj)Cq!{,;>C?(#)!pu(<TdhGCA{?KzkY' );
define( 'AUTH_SALT',        'OsM;.$yA~.DNbgozyn]Ef}rG:KP=xfmLSjc]4J,Q`8%<V|s?6Gb33d^z;/?N6@/K' );
define( 'SECURE_AUTH_SALT', '$-]w<|BA51oJaxfu_rjrLM#&a~`*q5K2jI=B7szKk3Kx%_z%Of#7$s7H/sIPi5CW' );
define( 'LOGGED_IN_SALT',   'VxM4s@tQ!+|$h?tWg& ()2&]XX&&:44xc1;y{R&!3f/S0.<s;Ak,u}u~caz-hI:?' );
define( 'NONCE_SALT',       'd$6.@H$PM^:P04&,yV<SDN/n9wo&4se1>q!zH(t6 }OmXmMb^DcQ)9B4a^*/ yu|' );

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
