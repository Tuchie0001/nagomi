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
define( 'DB_NAME', 'nagomi' );

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
define( 'AUTH_KEY',         '#)UfV#5Ry3:)qVs7-!T9{2Z9!w=WPEYuJK?ix8iQhQ-JRDWlJ0,cpU+#!8>8f}1h' );
define( 'SECURE_AUTH_KEY',  '&zXg #F(o{Q]=/Tl0-,Gx2G_/GRt5P,9dG%M=rPWv?`H2dBm0i^;N2HM#T8&s8Lu' );
define( 'LOGGED_IN_KEY',    '4K&!l@X~UC,}Z8a,|XmXseSaB[6+f/:,0BqVl;heYweR w$dp3+pX9qp}Ol).?!%' );
define( 'NONCE_KEY',        '%@^a^K@LZ5Lc2K1aQ9{2eAK#YA{z_#Yr7^&n(ANqh>O;]f*|qRF;}<uTGiuQE//Z' );
define( 'AUTH_SALT',        'huxk3fAs EMiS!F^)7]NHCEhGyb>l96{:K)JN#YU=4&v~16^eK@c`_5HO2o4QKeX' );
define( 'SECURE_AUTH_SALT', '!6|]L+/T zI:<u6&27Yv!bF_QX5GtPP$VV#GQpc9,_f,-W{di?Fz|E;gJX5##fob' );
define( 'LOGGED_IN_SALT',   'i=]h-C>*m[eD8Vq+<`M9+@q;2M$A(c<bCc5tjRS-791oE/^22d,30(pLs5-p#F?(' );
define( 'NONCE_SALT',       'Y0OTsl=yd,h[xTz1m4GpwC{cE<OnJXZx|p(t&W$DIH!}%)v9Eq7_lxAUZ`L HF%S' );

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



define( 'SURECART_ENCRYPTION_KEY', '4K&!l@X~UC,}Z8a,|XmXseSaB[6+f/:,0BqVl;heYweR w$dp3+pX9qp}Ol).?!%' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
