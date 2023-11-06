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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         'x =+>7{B;(vY$f%sFT*H7e@04U!c0fB:sl3P%R(+;E^1A<S_`SN/tn%2{>S|@P=2');
define('SECURE_AUTH_KEY',  'KoR-re^&X2C90 +j4c)DgzZE>Oyr_M;7`qTKSr3sN6W.T<9XyuWsT$g0_|`8;vw4');
define('LOGGED_IN_KEY',    'B%iK|{(XOSeS:JjmNiqS{2Df]l(+>hH/!M^}p-rN(l`@Pq+9|q6EEM)HFmF>ojfH');
define('NONCE_KEY',        ',~Iz88g4$EM,KddU[_^wTejsQ)hC^ 3AO:2JK- kzjfE;3y4&yRCjn]W-GZ(64)q');
define('AUTH_SALT',        'C6cdYs)8VxkJ.*u{.yPYjJ}OE{d+((;z`z9V|w#Dg/+I7$vbR#c=UK{.Op)H52tE');
define('SECURE_AUTH_SALT', '-41DjtCQPYD=$[@;5]yC^SamZU[GYv,-hN7``neip0Q|r-9Jg=v]#&?ySNZa^q86');
define('LOGGED_IN_SALT',   'BU|>1f,_;rt3W.X!6c<)ZM.VKY-&/WXzC[gXiJttg|_-%%Ms}?;S/ifl[xc%%QPt');
define('NONCE_SALT',       'Z%o/-[NKP|-Yb4G`e}P8it-z|6t(|#IB-JehR- k5D>nWH{&D95~dky5mhQi?v++');

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
