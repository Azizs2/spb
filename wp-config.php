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
define( 'DB_NAME', 'db_spb' );

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
define( 'AUTH_KEY',         'rc/]W^9~AxuzLltfk.z@ pf+Bm5$jg8`;I<d[<vBu[~8e:b:%uCFAt}VN<is]1(n' );
define( 'SECURE_AUTH_KEY',  'H|+Odb]@s9#4{DH7ga]u*dJ;UzMYLRmgb&58aPWwN~O[l)>N}lO>?n?k&CM0cvvR' );
define( 'LOGGED_IN_KEY',    ';|iZ/f_@3gn^{{p(wop+LF&O3<8/Mobw9`R-Mkff`>lihn;<<aNtBT/X4lyBENN&' );
define( 'NONCE_KEY',        ' avhO8+3?/D>1.UR0SAt:RfEt?5YG%:VI|8ekRI6{VsoR^6]ySQDPswh<  kWQhb' );
define( 'AUTH_SALT',        'qwh^5(/WN^Sa;,/+i2ON?#)1T;^B4$:BmX%ld12?A[/qo=s}P65dFs(gVAA9cZ(,' );
define( 'SECURE_AUTH_SALT', '123s;%8/3rt7F1YYNKo/@KEA!~3KLyR)6A3_9pZ(3nf>[u$hCtK@v:j%q ,UgX1G' );
define( 'LOGGED_IN_SALT',   '+&zH7pKB6.Q#yl3K&r=e,uK(AI,~2rrPUlU#=|lMGJ;HTxwX5!kqse!d9(w7_Xz~' );
define( 'NONCE_SALT',       'Kn0Vz&eOY.ri7PrL23T48i*PX&Dj|9% bXZ+CyI(8}O0HGJYq)>D>wXI,TuBma<~' );

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
