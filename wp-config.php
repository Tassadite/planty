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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '(>|A)dO?s4ZlXgivpL#7nu@y|Q5EwE:k(Arwu+l]<N-{jK/y*HYCROlqb;}2L;Bq' );
define( 'SECURE_AUTH_KEY',  'W-q@Pu242NmRWl9m3sev36E#cxCHvCAO8d^ismv)<G=F43|X&$r0Q?~2+;:@M0<%' );
define( 'LOGGED_IN_KEY',    '+JZ4n{:N*a{W0|xkGl)mGN;j8Ho pUb@t|@c9qKDbBHC[6k1a:T*r V8lpIO,bc3' );
define( 'NONCE_KEY',        '0Cz9}<*!sd7IpJ|AF[1Zhk}U@6z2CAtT:>+)R~bVJ^|)?`.08Vd~|x3DV5 s2>B%' );
define( 'AUTH_SALT',        'itbc[G,YQ`a_pLB}wv%4NFI(%_Ho]XMpQy!pV;}/~Vnf5^p.r<7vvwqk`&<oB75C' );
define( 'SECURE_AUTH_SALT', '5Vn`d>)y5[EKI49O9,PdVjt={|5ncw5A@s0gy0$BiUz(f2UYmPGCg|[EY[5@w`^M' );
define( 'LOGGED_IN_SALT',   'a9k(>Pk69~WQ.%p[4n)6y8>qO{Ut_;GWh?.Y(m+/ls|hm-ilSOxRIn-+nGrO,;#S' );
define( 'NONCE_SALT',       'F+^DA0;w,g0LMFkSG=T`w$CP%u^}#|f-@9[Tzw*@9o>J]GUT#Ho|VN%+j!n.HRl2' );

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
