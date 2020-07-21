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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysqldb-password123' );

/** MySQL hostname */
define( 'DB_HOST', 'ysf_mysql' );

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
define( 'AUTH_KEY',         '@U!W8(z~SM$iK=a0]we-yR_xEN]GaM2*5VFK4iXb6;@%)5a!e/|_0!iO*y.}ACf^' );
define( 'SECURE_AUTH_KEY',  'x(fMjts;D57*m/>p+6q:Zn6@QX UohIKadIxQ[((7:8eEg;J(};jE$Yw%?-Ym3T9' );
define( 'LOGGED_IN_KEY',    'inOm+_(Z7SlMydISJvhSky5Cq+Z)|Su(^mp+}jvDv:V.FdOr+m!l_n[o@HYB;c`W' );
define( 'NONCE_KEY',        'qA5Kos1?$c]5r8I HdOY;?I)dS{Q4IuJC~Peimml0_Q09`}m hD7ndpk(e8{):P?' );
define( 'AUTH_SALT',        'V2N)LwgV<8x`F[(Z-oD<PvWpOj>,R5zuyyw_6~j?O;8C>eI;dI1Y)aL:|w98%bJ}' );
define( 'SECURE_AUTH_SALT', 'mm.40dfZy|pj|TA~G Y~UZYe]!WCgO!FC]j^$lFh+]<76y9k; ySDLbqr:/LL]@X' );
define( 'LOGGED_IN_SALT',   '<4b8#ET&k_~j(rh(lyfnSUR5;0~4;/VVdF$eOau;`fTU!YiWNv%t_Z6f){9Fl$4F' );
define( 'NONCE_SALT',       'AZ7huW}NwIm[G`mPf=PXd`tpw /dBK1aQ:8yp+=o$UIN):7@[$dP6fPyR f-XUEt' );

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
