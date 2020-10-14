<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbjongkoding' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',#lC4qE@0LpK<p_}qKq~by67iF:&NgL}7s`loG>D411Q,TRa!^oAjLBm(L;N$3Hn' );
define( 'SECURE_AUTH_KEY',  '5og?^?{*0]y6zIPX<+I&yOo9z^Sx0DJ;pEmb3&TA*41aT|8Qy<s?@Cw]YERnsP E' );
define( 'LOGGED_IN_KEY',    'z)13XJmhRtY<*yc}(B.s+^JSCTh8vj4$@3]o8x9g.(Z9A)GWNPmhI**xOZk$<pb[' );
define( 'NONCE_KEY',        '[oV5wLb;vEMqp#DuI1!JRZtz&4)4% CTzl[#o80vZ.GbqU6W-FD;nRT~Gmwz>dc*' );
define( 'AUTH_SALT',        '+StK}YRAjP`jE> Ti[VBJF:6 9~}7Q/in5>wA}pXT!:xSAe618s#-vQY(Xeg<$<g' );
define( 'SECURE_AUTH_SALT', 'UqOmDNV,g8kma3Liy`)9TZ-sO58b|;P|_rs}o5schqVT{379%tO:=6?jkfer4.0S' );
define( 'LOGGED_IN_SALT',   '#LMO]} +k4arB2!d:{K@._jj}^C;U%%*ZwY7M3Fj@;L7kjI5i*!8iP!T~0T!uXBW' );
define( 'NONCE_SALT',       'wr;^6>5W++xG/m?_nD[@30NL9,+Mmv`MpoodD0 htzL=RLttbl_-9<8I$&+z(bNi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
