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
define( 'AUTH_KEY',         'Ja/MF#HKXmsx!rAL+EG|6s5.Z&Q*BiAU3Q-~]lI[+!@fS*xRwr]3vqS<&7d.e#in' );
define( 'SECURE_AUTH_KEY',  '[?Y.uf_ (g`H1W`1Hoo7f(oF+=+ |i~:5OM^{jo}0.j0(0x Zg4ePRNwQMEectI@' );
define( 'LOGGED_IN_KEY',    'fxvs5qgiFMi~d UjQvz|}M:G>dy~7e%&;6~Vjep)i1`<[ge^n.dCmKst0pc2Ia{*' );
define( 'NONCE_KEY',        'nt%46%+pSEf96laILkDOsJ-X0l}iZfy>Y17uM:`*/}g|pzytB{oTn#y,MJmJL{mN' );
define( 'AUTH_SALT',        'ZZHQS#ikP;U]r@F9y:B9t{:d`{&K(UH: M#yXI2{44@r/mkB]V`s]z7N_{~u(ZyT' );
define( 'SECURE_AUTH_SALT', 'G~t$Ija;SEa/UL=:!itf)f-6,7$mW$uF/[ndRNTTm_|f?%O5%sGs}sm[5Se;Ks{S' );
define( 'LOGGED_IN_SALT',   'iY]2Ep-}lz~M`.MLf{(AO.f6>e(uR(Eq08ll3n)R_@KmIci7T$EpX1H~>6amLJn?' );
define( 'NONCE_SALT',       'xsr~uz;TKK%D?(8b_rkIU78Ez^3pKV>gIm9>&)+[$?I]*B`9v1NK#BM6>nna-cO$' );

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
