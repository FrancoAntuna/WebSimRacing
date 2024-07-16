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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qF8z{oZc([i~wO5p`_t9=$e!7@)R3aNQ/aZ!1/wBD~x5a%9(b;a=q;8vIE`znu9U' );
define( 'SECURE_AUTH_KEY',   'UIGJwu!]=%_;Nn|{M@^w*x>T2:1;<3yQ:scu=FALVdUvE5_[tJKrdHtKHUk:W|I/' );
define( 'LOGGED_IN_KEY',     'ORQOjm0Ry*.iupHub&G=TX[S1^uYMVGjVHDY>v5q^04Vc=96Jd(T?[B3#ADp)IyN' );
define( 'NONCE_KEY',         'A[Nnc2Rh5h#+)(-S<s7q@(Re0@h?R!d)}U= Li&y}guq!Y$wT*)s}qRLAJ|f4v_:' );
define( 'AUTH_SALT',         '~`Tm^6mQ3jXpSqZk%n+GW#.e@KqLeR~wG>9<xNjEJ({RLnqDCeK^mtlf7Er^vMy2' );
define( 'SECURE_AUTH_SALT',  '67sdJ!GrG_~)3E(*cfIJzCo~i^2.XoH*jx}X!U$m}YFQ&jmY+S6ogUuz/r)ou(wV' );
define( 'LOGGED_IN_SALT',    'MKB)M(Z]z!|Ju`L-z*xMy0auHDd73,f55t+e0iJVB}3ip|E(51WYCgF*~j]_mA+{' );
define( 'NONCE_SALT',        'M&l:*j72PeaLMc=g_Y}C#r!r`GC{sv?qj,g*af0Ks[`9IEON|eB=v#I_m{m%Z|;3' );
define( 'WP_CACHE_KEY_SALT', 'l!8?nmwJ`Zp0*R5ku@wjE@ya6!}![>e`jU}oJTP0i{A&ZP29lwS`@rj79(M_9G~&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
