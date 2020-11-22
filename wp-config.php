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
define( 'AUTH_KEY',         'k T(/nq4;/VHVgQMNVZ32x4D{ (U:kPmO$}/8~VJ_+rZs+vB{Y|cbnAoHcWi@8*7' );
define( 'SECURE_AUTH_KEY',  'ml`[i@qLI,#]^0IYyL_yweWh;IOoKvSdRma*e]/<9y)l%K#~9j3K(1w7!]M;S)b9' );
define( 'LOGGED_IN_KEY',    '&hqlz0lq@z5[o&W9s$Qa>K X,f!6T#Pk++]84Bk>S<J|@Gsd`5p^v33*RF,B-nXb' );
define( 'NONCE_KEY',        'k(9,SxmLqtI)?TIT})L38C(k&3^XlQk5|O`DXfo2{3cXCa9@cZv^25_qF7{ym%Wi' );
define( 'AUTH_SALT',        '2Ks.85/-6k/G)^?[?+Oa~N[mY %Oz`EDcN44ujZBl;,ZM!D|U:v}R)M2MOAuln$d' );
define( 'SECURE_AUTH_SALT', 'wS_dF8j=I>]Sp_ 9J2;9`71}#t{Ctu_%O Nk5g=D~Fq.p{V=eH]coV#A+[ @/1$~' );
define( 'LOGGED_IN_SALT',   '&IU<kMyKin}T5`O/h7t+]Acha}S*}f<(]>mRfW%MwJMS0bC8AnYC)Ds(iK3tb-*9' );
define( 'NONCE_SALT',       '?Jhq!x*3/_h^/G`eGlwd I[#]8$2LLB5}qU|*S}ULylUM6]E6SLoHCYV}_v&wlti' );

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
