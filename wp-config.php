<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'ziyad' );

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
define( 'AUTH_KEY',         '6>*Q0MfsO/hhAhK&@2/q_QiQOdH-]Si/a54o$]53a,!~&(cx{{hUll=&%},GaVO*' );
define( 'SECURE_AUTH_KEY',  '5cK+3?yxKBJ1IvvB|=OBYKSz-T>Ce7P,6SMz65@v3l2_>R[A9m@i3=>/d$n7w9vD' );
define( 'LOGGED_IN_KEY',    'DC&#p_qvKdUHU8Dz&_i!=yE+Nbq0pndYn~9]328nR_5Dp<>d+tWnrxlM>>[+AY1Y' );
define( 'NONCE_KEY',        '%ScftzSS-ric!MVsXY| G`[PnQZP>NE-_*(N?DjdUn5R+d{50vg].Fn&XLh,l7Y7' );
define( 'AUTH_SALT',        'vRHQSGN:i{Fz^Z4j-bqI?|aE))bgX*dL<|jS.PhXd1=;}m#Dgb=%,b0?m_|J#[MH' );
define( 'SECURE_AUTH_SALT', 'eacB~hFgOp,23x<S0;FC#kOJ5RXTE5I)_O>@y!/!-mX1Xr8$A&20Y`0F5pi>atXy' );
define( 'LOGGED_IN_SALT',   '${hEmT8PZo /.iaFN(Fo6&p{;4fiIboG:  JcI=CYhn<=XzX^RNQlio?e>[Q6et[' );
define( 'NONCE_SALT',       '%&pUG&$wodCo(hnm`pMwgG$jn?&lG]>;8VS+y5of[XBIAxydy6|1J8gT!pHvmCYl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
