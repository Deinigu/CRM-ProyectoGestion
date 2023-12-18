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
define( 'DB_NAME', 'crmdb' );

/** Database username */
define( 'DB_USER', 'softix' );

/** Database password */
define( 'DB_PASSWORD', 'softix' );

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
define( 'AUTH_KEY',         'JLE]Wf4[R@ru+Eb q8<LaG5XBW[-s@E^1 Z;9YZ&}utjm=.)rLyJz;:9AUvRPaa7' );
define( 'SECURE_AUTH_KEY',  'xR,S.r^Uov<YXnQ82lhTg]$Uy8RmfhyZ ;0fq_;sFt]&zLm_lQ67}<a2){Vx&/#d' );
define( 'LOGGED_IN_KEY',    '6|i?,ad_C2.1$0d>%?m:FT*i=|&nY|z*1y}4ix*rKiEwqm:.;G3;BWg=qTo+,WU1' );
define( 'NONCE_KEY',        'B]Z|>yNO_zoHr#[h33+ jb&ks0g)xMV=AJics4D[mh4qr/+LCC<P(CUZ:Wwv~a._' );
define( 'AUTH_SALT',        'u]G3k4#*S88YgJLMyMum[%Gkc7PNI^r]~bxY`eKJV#qjI.zS46W3G^1x-A%YQp9{' );
define( 'SECURE_AUTH_SALT', 'a/K4#@{@&#Gua=$0,q!B,)o--`#/eY7J~3:]?E5!S:I<LSH /WB`e3[ZsLTP_=.x' );
define( 'LOGGED_IN_SALT',   '0oYTqq}r*WA7@Nv;PrV94pP1jAyxuQV5>a5+.To66OD|l@B$]Xf7{/vz)]Z?R|-$' );
define( 'NONCE_SALT',       ';}1Z`fV&d .ggz[P9B08TS arMN *GA;d0zMQ?cpR9F{a[Bbl/LGwfFh]$9=N*Gq' );

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
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));
