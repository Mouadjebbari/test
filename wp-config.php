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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         'CD7g>}`S//7|a^fZI<*keLZ]0Z&p-&.ym(SrlS ;}Pa}Rl6Y-`A>5(!0ogA_>}WB' );
define( 'SECURE_AUTH_KEY',  '-X@enW+p=K|;xgI,.H[wvJC`5|NVM.}taqhtT%XA!1/Ps&PaT>i,N9F2D(6I&^!O' );
define( 'LOGGED_IN_KEY',    '2.&.5Ph=BcspJ=ZfO/HVdqwg3h5?g3+-+lzeR`=40C06AM I;@=[%Zhu~_tRts~d' );
define( 'NONCE_KEY',        'R%,G49.!|nUi|!VQhpr&kn*wyVhfN8(0v:HInBn< j_(2 kf6:*Y>V7PLJ$[t,i5' );
define( 'AUTH_SALT',        '8[n{pwG9J Ia[6cMD3.u2xx-shuA78w|{+c,ApwOJ#=jmy:4(z{oQj$3PH`xVgoN' );
define( 'SECURE_AUTH_SALT', '|4)UIMI4N*Bb0s&tF!#3P/1Ti4H5 ^AG|fVbD ]HC2V4T[zKy:b^^(~w3wLJ+dY[' );
define( 'LOGGED_IN_SALT',   'Eo$K~KeyQrI2Coa~uV7Yc{xag8MvVPLOLV2g5,HU d%?V/$WUrwJ|!~?>2L4xSt~' );
define( 'NONCE_SALT',       'TI(` G]rqu.uB`ma2O^5tUBmLk@%>UHx@wGDTU):t)$|L{otMw72Q.&e3^(KpR4l' );

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
