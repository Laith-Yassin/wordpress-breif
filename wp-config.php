<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'qqf*+kYsPldsXX>*YGo`+nQKrDmq&v(Al-@6=/mIJ;m`Z0Z7F$I*8i[Yk/u;VuVO' );
define( 'SECURE_AUTH_KEY',  'c FSkul5{CGH9SIVpw;_)=rePBL%]y<Nujjz9d8Xi>Bb1q@9_u6j$@+*65|?IUqv' );
define( 'LOGGED_IN_KEY',    '||8bd^H,},Kd|*JY-oO1.ph.LuS<< Y(k#}lB+`%89fA|`oCu8@F5Bz@xNB`I]Rf' );
define( 'NONCE_KEY',        'eP|hkjBbNRk?tkGEO@y6;HsLn#Zz,X.65xi#iT7==[&rb;59[,>zQK,/OFYzHLi_' );
define( 'AUTH_SALT',        '/C;3c14${}uckbE5LTLw]-oyf29_]l=@MPVcv+7L%4CScB%a-fe11taM)Eo.Bpvv' );
define( 'SECURE_AUTH_SALT', 'Re;x1?Q6Z}0@]B3>cZF=c(~biE,Liy,5Le<)%F09dx<1jkIr(,GQ]B^qXJO>QJ9O' );
define( 'LOGGED_IN_SALT',   ';7m?*U_cN6kO{9+iB}^]QOA`n6KoSrM.g72<HcFM_4VV__Gg]H YTIaX(>-gYo@g' );
define( 'NONCE_SALT',       'QZYpuQC/7A6E^ffD{y8IsL>b0M,j]b?1VcvJ8fZkBrh}%qFSq^j`V[[.})`#BX;&' );

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
