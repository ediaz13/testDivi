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
define( 'DB_NAME', 'testSite' );

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
define( 'AUTH_KEY',         ']aWy!E2Y^Y#1To%>*ql4Vf!}E0dgV&>WqJlG~j!=3.Fp5h^Ra]2lBUbu=k(&LNx#' );
define( 'SECURE_AUTH_KEY',  'Vj!l_nbu)<T~(oE S8^DR*4q>L%|6sD@&@,a`91 aY)1@Qjz,_nRG(:EQW!XQ4*@' );
define( 'LOGGED_IN_KEY',    'r@?;D;=fo{2x%I^=Y&g/k,QCEuLTicnabWT*!-h)J1}iDGZt}~PhA>R%%r6=bQfk' );
define( 'NONCE_KEY',        '}aXn~ZkpfAINvgp)0RM1r#azq&VW0JsH7ie1mym2020!~7cPZ-%Z09:MPS/+9y{@' );
define( 'AUTH_SALT',        '!uPa49kZ%;D*r#<ZXkGZsJGkLOKBX;.wv{l4Z_#p_|4XwfFA0+=<`enM /j./[DC' );
define( 'SECURE_AUTH_SALT', 'r.O*P5 ygbqfP`|YMQ:n} 45t|!s`|02+%gVhn!!YuQ~lK3jTQon7N}Zdn$d:38I' );
define( 'LOGGED_IN_SALT',   '/+]Wzpt1NbK6oXgt[.qVQR&DEC#J4A+hS;P%2$~G%iu{^Zq~I(&+Ef,A3~DLD;7q' );
define( 'NONCE_SALT',       '_iE]0yGq`;ytV-[xq{S(9fBhB0+yekAmQIid|jC[yf:eoVnLbZP@&}Q{LaopgBlp' );

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
