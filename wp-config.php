<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fitrah_5' );

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
define( 'AUTH_KEY',         'KIhU;7RItZ{{|K:7u:MMtu} w>Y,qGUz-K-M*)#&{NPu;J=;X960P|wI .,_gaD)' );
define( 'SECURE_AUTH_KEY',  '4XFpH0]VMi>m.V26#Z&7VP@7+GL*TZI]KRe{XKEx=LQ02i%h^GnrbS!]cVehtkoh' );
define( 'LOGGED_IN_KEY',    '0[,(]R^s6@c qj%fW4_}DY_G[:H1;727SP%]s1d}+|fw=05.&v3cz@VJ]64QtJOe' );
define( 'NONCE_KEY',        '0}j&dfD[k}Z_`s,AYSi&iPfB_n-lT!CEds&_AqBC{<h|3L}:sefv4hSEW205p$.}' );
define( 'AUTH_SALT',        't,=zG4sR5N-`i/Q$aK}FiH?0Y:I=$!N~bUtADFmU@Z>vsV@+t|GYDP4flHGB/3o>' );
define( 'SECURE_AUTH_SALT', '>m#r;:Vwj:lT-Q|(ESleIh@PjXyX{4SRme%hecLD39jbCN1|ElsM#wcADx?mSD;S' );
define( 'LOGGED_IN_SALT',   'U=0WntYpJH37k?},^Ca>f1}n h`Vs[aTkHfzR$o+?:A+?%X[-W!1;Op:H#N,QyG`' );
define( 'NONCE_SALT',       '/mFM:]JV!U00_zUG!DZyoa!o1*xavj}MkZ:B0L?iNV2yosk{2YHqed><9?sNT[1^' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
