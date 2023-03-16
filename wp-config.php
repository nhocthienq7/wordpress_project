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
define( 'DB_NAME', 'DoAnWP' );

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
define( 'AUTH_KEY',         'FV#p)_LbF5#ef$fb ?L&oF#w2k1am+2>{%ML/fwO<9*&W@:kf:_<0*&Zcvh_>#}9' );
define( 'SECURE_AUTH_KEY',  '~m4d.LN)k4Itp;]/`VhI0)#ZB@kOj*nWlj )YaZnoxXTUJ|IXKSl3}~RV0{GqH5(' );
define( 'LOGGED_IN_KEY',    '~5$.yEvC?D7nC|<j%ujrq}K}^FW>!{)-7#k${H:{LH&3yp0]h2HiexwL$J`#I!7c' );
define( 'NONCE_KEY',        '6fU/rleP6.#P~7:CzS23T,Ut&<4,]@gNI Xl=]d37D7_L1lKe4)zE+4^pN9p`_(`' );
define( 'AUTH_SALT',        '%csO;aKy.&$O*04S.u-i -e9cg6xQy7=8~I)k/%ia1B5fpECR^&vlpJcoAO672$%' );
define( 'SECURE_AUTH_SALT', 'F:dun:!|Q4&/XR+/6&/s~t^m3MrsDAAF^#Z4RcH1m{fkQ<{^F#N-02v-A8eO8RA<' );
define( 'LOGGED_IN_SALT',   '@p3l}O&|NsO zNC.P[yU1hxJqUa~b1h#[t0b2 :}CCe]zB!,gCW]0g5XVC2:M,WZ' );
define( 'NONCE_SALT',       '3U7^y-UjcIXQ8p!lpA|B[!o?;O_+.P+-3B,.U:38UYIzKNj_+n#hJeesT.c^D{?m' );

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
