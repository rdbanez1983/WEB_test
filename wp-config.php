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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'C *HC8D FU2jW~VisHw6tdZFDA]%+5Aj@CwM5$Pyg5<XbT*aqF+c ]a9C4Wjxqhc' );
define( 'SECURE_AUTH_KEY',  ')ftv{W:``8ibt$!0-eQT8]L(RY8w>){f:QT~.GM+SYI]O444[JV5^hcCBgd-HY-C' );
define( 'LOGGED_IN_KEY',    '}#=+jGALs/H)sk:5@~)T,rl^/NYQp|>2woh*g59Ta06Gw2h{~SFa=4li[Q3U7+M}' );
define( 'NONCE_KEY',        'W:ok=W,d|0U(rX?d;W2E=NzgHxjNXTB/g*<=n*M2^Z&8Cv23b>Bt!G:BPZHv{ey5' );
define( 'AUTH_SALT',        'vR]HSoo&!KI^&CWRaiMQHI~KN&KMQ_2X$a<(Wp,.1s.~plLZF]Py<0=*I6kvyYms' );
define( 'SECURE_AUTH_SALT', '/m%rVFP.ClZ103EVf+sB&BOEwfWGFBLG=P(EN$9@OZe)_NQFuvTdsv8y~qvJ(Vg ' );
define( 'LOGGED_IN_SALT',   'SkC/Ujxi%p8q2=.h*,Lh5KR$tFuP6KwUI,%=%m[cM?t*3;yE1rz{>&7-2=Gj$oCD' );
define( 'NONCE_SALT',       'v;^B[-^CeBn Y*95@cS9IhlSj?4,Ar[=YhDb|MfeUB;|qE2Q,8/V.;S0gX$Xt-a-' );

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
