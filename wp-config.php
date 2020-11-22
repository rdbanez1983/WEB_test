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
define( 'DB_NAME', 'myPHP_db' );

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
define( 'AUTH_KEY',         'AHrXE{wmkYWckoY^W)?JkR9:9kB9_a4D5k4)QozTIQ!h3R#j~@Mf$T=L/{eh&4Z6' );
define( 'SECURE_AUTH_KEY',  'ZJkERla}2|_n>ds/1<U3``(ll@w[j6EjyFTI955Kt6f!%#^y)FO*7R0VxO&wJEkG' );
define( 'LOGGED_IN_KEY',    '6QyaaPrkW/)1~>1%3u0+/8~DVl6M!PRy*=e;t].>:nKj.yIUX#$T#3hDxlS5t]9/' );
define( 'NONCE_KEY',        '/BIo5^-zAZ6Au[(ad`j?w>UHD-e}P-9M/fqtI$P&M:JQeXxr*r6]~HvRYAA8jg&M' );
define( 'AUTH_SALT',        '4D7D``0#6O,l2|{Lxi~S&,$A8Uw<Fne]*={?;z1?qOHD~XZK#VluX~_#Mt>3nl$4' );
define( 'SECURE_AUTH_SALT', 'Q~ d;?,S-*^/=rMqyyJVP-]>;gpZO$_9qp^v<Q5W*|R{- OkJl.R|r251^9HHtlp' );
define( 'LOGGED_IN_SALT',   '$Tw s6`R*A4r=f@:J563I5NMK;cmnF/-F$6:wTD2+vI-zhw:;HiXQJt@xO.L@@Tc' );
define( 'NONCE_SALT',       ' 0B9GN-xW}m6|PH?73X$_@^=U^NYL;( X+!5j3?##sowuNvn|F67WJvZaiz^C?$b' );

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
