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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ocean_adv_bd' );

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
define( 'AUTH_KEY',         'U;)vK~vl+Tec^6%GxCL<U2yfQL,9XgRPe`Y>Xhfzb472Z9b^/89+jE|dwjvb|L{e' );
define( 'SECURE_AUTH_KEY',  's3YujA6bXQycN]$!G[E>DRLuq6XZixo+<qC(F+Cm5zCo>;{!H2@^_UN[uYS#$YZi' );
define( 'LOGGED_IN_KEY',    '/M){7c406_;o>l/:3Td`hxD1*iW+2et`AiI@WYOQht<Ip^LUrXP~RO.614pB+RB_' );
define( 'NONCE_KEY',        '2P-?bH77/.ptLxJ-o:QQ|9jcR[Ur{&@,C AAG##]M0Dj-hJvVXL:@eA/a/SP(ZaX' );
define( 'AUTH_SALT',        'UNK[5FO--7]o88}^Gu#p]0/`i)k-2k&XGqi] aN2:F6!$v:]Nradg^u<![u p%dI' );
define( 'SECURE_AUTH_SALT', '7|3WWB?NCcv}XV9lSRAg!98%EL&_)7g@PK![ss=1SGWx>y70<XUrkVR,s>fw5O$D' );
define( 'LOGGED_IN_SALT',   'vAhxdAm<W7CWo|2`pJUf`L:(|9Xlb7T6nN^d@F9*.:[~ZQ{^r*2<Zien!XgY8#+e' );
define( 'NONCE_SALT',       '?s/Xkp7Vg~vv`7V>.2ZtE<-TMN?`Xc??0pAQbtRj,j_wuRz9aX,bMdT}I|5XW#U9' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
