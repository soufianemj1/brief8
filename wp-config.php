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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '{4L==<8D-|j`J|7{3r,7JpN83?I>OQwRk.S.<D4h{v+^Uq>[-lvO(U~ N4#ilfsh' );
define( 'SECURE_AUTH_KEY',  '0YY+,ocTK:>8_-^I)kr.Hnjde(,KMG 9+QX<IdRK$718Fw~4V4;-NY?#shhvLaai' );
define( 'LOGGED_IN_KEY',    '>%z5jR!Yt6SHPwVMUW}m`miUhErjqDL!8|^t+,nt0CLJ[:T87*4[k.JL(o20`jUj' );
define( 'NONCE_KEY',        'SY,V/v-,1l:v=i,5CdcSH^-hlXqJrfN]YEDa|5KVV~.PQ*JY#$Ip#_7BZ10|p4$#' );
define( 'AUTH_SALT',        'ja=5O5xa}?,W1XF0mc&D| YZ1vRffgfX{O@%D?l?<qJTWDPv$?k23MGe~?r18R47' );
define( 'SECURE_AUTH_SALT', '[I3T7$2]RTE@5]IoV{$y0X{uK`/l*(F>DNUADb%O6K/L[`3jx?c_61U-vohzO5@Z' );
define( 'LOGGED_IN_SALT',   'jit/Zxc],AKOyq3i4lb-1DAI-GQu<mA8%p+K3*W4B+{-3;Io;!2Dq?(ia[D(d}[T' );
define( 'NONCE_SALT',       'nt<@|uEv8a)8*UfYt<_J#MeJC>tMIp :*{s!;gU|VSu!--8MfoHvE4x?{5%bocfM' );

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
