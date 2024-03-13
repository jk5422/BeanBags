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
define( 'DB_NAME', 'mybeanbag' );

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
define( 'AUTH_KEY',         'f9x!8VAiuOpsNz~y:rY7&xhj/DM@afvrn8rqLV,Fv?cDiv [C_73#!FLLEsaJCnO' );
define( 'SECURE_AUTH_KEY',  '2 5=ljZ)a>o`6l/%j?l O3E_27[E|&7!Kr9K)z*wfWhXNsJNgdPkyLvtR!k (ncC' );
define( 'LOGGED_IN_KEY',    'oxrXy_Ig$niO*I(FYaX1XVm`Z. ~PkhQ:g5%sF18J+I?}}*bHUi;L}a*:4MJyUfg' );
define( 'NONCE_KEY',        ';c=I7;.eN*onQJ]GGJxfs+Z5Yv$ew1}b<Mh5sL~.SAQ?@UA3u49.UO{_D><EXea`' );
define( 'AUTH_SALT',        '_?O+6<l*66%yc?qq?j@bE|tMw<KTWjyP{JT :}_#l~VFuZO;+)1icpG)gQf$[~2e' );
define( 'SECURE_AUTH_SALT', 'uyxHR?IHv=|C45-U$xz9o$Al16/)MH9?ZtlK.BxMQx|HOj7}N2{>aknttGNW5*)@' );
define( 'LOGGED_IN_SALT',   'd:Z#I@ME*}$xII.1BJ=SRVVC2mK 4a)-P/b1?5%TUu!P`hE4Khh?d%)PukMx;GwW' );
define( 'NONCE_SALT',       '6FGD3Fo-t2DD#-gf]j.DPQBywt^R.;wk/oDVWe%!v$qAFk>Xcw*z3898srB} #!H' );

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
