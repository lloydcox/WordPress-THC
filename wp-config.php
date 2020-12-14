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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'c0k:{Pv7)(C6oJ,ii6RFji=|.A(}3tsVGnB[}g@EYn#)NErV.hAop`X65./yT:@c' );
define( 'SECURE_AUTH_KEY',  ',Y#nxqjkG~Qr.nK6`/Z+AE}uOlByf%5x+71{xP9,?hMI5G3z5)30r|^dSt5(Xqi0' );
define( 'LOGGED_IN_KEY',    'p[AF6_(,ow{2W4!|Hd}$ }WtB3{)&B<9qq_jO],BM!O9BB[VZNwE{x,EErEk1+{$' );
define( 'NONCE_KEY',        'k,U2x%=P#@6Irt  P_]1}KrfH#y$QXW-` :M;Y>tG|qeiSl=kx$O#7Ltol4)ALnE' );
define( 'AUTH_SALT',        'Ae{) |%qvQn[07j}9K!okx-cDU.8HN~yxN={{&osZ=Eku5*3:z$TfU`8P)ZL6ET4' );
define( 'SECURE_AUTH_SALT', '3wYU8;ZpT,Fk(lEUkv^psfYA&U.Jv7}w>rcde+hI%_if+rG1qp.7Aw use#VG>=/' );
define( 'LOGGED_IN_SALT',   '>nCbzWsx`kaC <C5M|J=Xxu#gK7mZIWYah.P`mH[(/x#YNOu%R9,G;ZPw^W%0,]/' );
define( 'NONCE_SALT',       '.6Nq:}aizy*,+z Y{Gt#7vor9iFY>NiWMpZKy/-<lM;qzp/)`Sw8%O<FzPjIuH.g' );

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
