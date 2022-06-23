<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';
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
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'pass1234' );

/** Database hostname */
define( 'DB_HOST', 'database-1.ck7xv7ynp4og.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '07Ff?p`2zLO!|?0|ULK+dhSK;[pB*LUHjv_L.^A)Wm9arf5+h/&BduGX0-@qTF`L' );
define( 'SECURE_AUTH_KEY',  '4_ShfiE.OVzY%Xw=t[4]^&^6f!46Q{:lRod&pIs--|Xw%I7s!Q>s3X*/YMiSXXL9' );
define( 'LOGGED_IN_KEY',    '+oM6CG||m*G?+63.0}MH<]_[-ZyR|V#Do}y<#-bi6/yY[MmntqiY2EhxZ3%*YptT' );
define( 'NONCE_KEY',        'c7_oCYHaXM#?Z#y[h-!@CaDju$W2tlfI KhO%^di;WSTvF=Zb27*kC3@{Q/-qmb*' );
define( 'AUTH_SALT',        'Z3<LjlA~pyViQhP?gb|r]>oP/$EF`}+^-XmCprca<fuIO{%2#&TqC1y4_^G7hs)X' );
define( 'SECURE_AUTH_SALT', 'UU<#^5L~zB:Iyv[WWj`%{uR-09 |xXan`2t%&vcVwvK`1.LO#v:10Q]xr:KU!.y0' );
define( 'LOGGED_IN_SALT',   '+n$iF*+/(qW8&u@I=sdU|FxU|ax)U|?X]|oxVQD0RpQi1CclI$lcB^GdAjpwe}&O' );
define( 'NONCE_SALT',       'M-Qyq)z*B) Lc0l`4?_~e2j6p|m~k?-t;+AP*1~:E1,E+Ale30S3S:7L/n1iG3In' );

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
