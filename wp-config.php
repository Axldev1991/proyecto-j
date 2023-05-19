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
define( 'DB_NAME', 'jujito' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'uq4Xwrv3lQlTlP1f' );

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
define( 'AUTH_KEY',         '^ d;~[:k6^Ehf5pb2mqi@SRN`D)(n9h>>Jt&Pbqkl7Nyu4DuZ<G8frJAs$L;r2~5' );
define( 'SECURE_AUTH_KEY',  'c.729bmx2qz>y!1zBkg}_42%S%(*WxY=bTHVw0e_;ep)D}$%>T?W*BS5}((s2d ?' );
define( 'LOGGED_IN_KEY',    '>W`/lJZ[PrJ}-H2pi7tVLxnmB)PAE$+JUFlUm;Wx;}M0|.rS.[&QQo<,AFUydXiG' );
define( 'NONCE_KEY',        '3_!Ka]I+@[z#WhX/LYJv._hxi%iI5f5@5Sg*NTdNJV08;lj>hw$ F+hV6dM8nlTr' );
define( 'AUTH_SALT',        'gMX3R<3MkVc)R9O-D</4(usE0c/@WJh@Tz4E!ZV8OxkFo OdXC:,{SfPVU-.V_?6' );
define( 'SECURE_AUTH_SALT', 'B7I-&:rwzDtHXj*YpR%<^<h[wa^Ee9FAF~qI7S[h2:aQLq=IPv2T*cdC{`h,.5RS' );
define( 'LOGGED_IN_SALT',   '&b}oX?t.-|{x+ZQlNVh6y<udCDti^Qk35FnT35{<`Jcj=}T$fLH8tlx->`DrJ78M' );
define( 'NONCE_SALT',       ' MgU0Unx9SWX8i@|7cuV>nGfYMz6bTJbOO6sqN[1;4kE_q[L$1K$Y[J#*txpN]}4' );

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
