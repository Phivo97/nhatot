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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/storage/ssd2/300/3079300/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'id3079300_arduinovn' );

/** MySQL database username */
define( 'DB_USER', 'id3079300_nhoxphivo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'michael123' );

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
define( 'AUTH_KEY',         '%e+lc|1~)(XA:5WdMJ=fk5R{;Lg(bcXHlKXUDOO+m~i9vWv_&|;z+#J[OZl11;$x' );
define( 'SECURE_AUTH_KEY',  'Y84uTXrvr0d2Hu?y;a~EC5AWP)kuZKkouY{LB`b-p9x18mKHfw?,6:eXt<&v/$zu' );
define( 'LOGGED_IN_KEY',    'ew UgC-HZkMv!H%9.7@uV27x}E+dbcC39,XOCU_c 5Az  w6i%+{[}%%u&OBAQM!' );
define( 'NONCE_KEY',        'oq6$O&4z?iQdJG9~3Lqx*{g&Qjp;L TU%*-=71OHRy,/:<}F,RS|BH/)%kJV7%y9' );
define( 'AUTH_SALT',        '`/5~,&*L:=8[BpCf^-6D^N`0v<V/^{w*46]%mY+C0Jj{J9CSl3HaY}Q31P oExl/' );
define( 'SECURE_AUTH_SALT', '+%2|Zy^FM$z.ydn(>{gJ_g~.y1* d?/)~TUWAPlyd-Hp>#^z4s;4g2!8vZUwhl6|' );
define( 'LOGGED_IN_SALT',   ',k[;]B73;>KomXv+l` xEpW<&u(<v$nH<Un-(6S*^/DqrA&$ve&B,/vh{8{:T3ka' );
define( 'NONCE_SALT',       'br90~W8.ER)L^c78dPqm8X<b_4oXhQ]XUy^bGx3I~ni@]hAezj.Rz7[~9mb0y>|_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
