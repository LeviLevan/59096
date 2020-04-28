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
define( 'DB_NAME', '59096' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'Qw8,ml//*e6W10JyyXva Tc<Jtx*0+X%!%b+pFB4z4tZ]1Zc<nMQ9:p1xMrHWF~/' );
define( 'SECURE_AUTH_KEY',  'iq&pj}U+km,l_b~}/!Byi_ovmrV{U`vKK?yX/x5qOuFG!e}-QQrtm<]UInzMkC;O' );
define( 'LOGGED_IN_KEY',    'X3,Ny#I>HOTC!8G/Sru)e]*V4|={{eRxjM~MJLVv ;5q+bh*.GpbB#w4Uy(2DuH:' );
define( 'NONCE_KEY',        'I^6{!/}o>l(NslZM)4j5&}pGleDI q s6MaxdzW- (.|)gFL0y:WC] vzO(m=65@' );
define( 'AUTH_SALT',        'e?8cu2Uj^*Az!VH;dExhIQ.[rykVtt*$7(UpFqN8})&/A_67:i0M.rS9:R7WX}So' );
define( 'SECURE_AUTH_SALT', 'xNr%02Sh$r;rj;yX|$*UZX7TOT7$%@bU_`Rnw6XPRP GeQNtKLxwSB!]Bhm*lzZ/' );
define( 'LOGGED_IN_SALT',   '7oR-IYEE_]3SRSZ+ii;vABZ4c+-5oYQKKx7>O~X]7lgue{Y7@%f_&G=@wKxDVl(C' );
define( 'NONCE_SALT',       'YG+X-Q4i-NJ+0b/gSUN]:WhQ:6.$xc)S8 fWW g}T_g<MPNumyW8s}zBmz?T-6TQ' );

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
define('WP_DEBUG', true);

define('WP_DEBUG_LOG', true);

define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
