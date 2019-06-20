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
define( 'DB_NAME', 'acadexchange' );

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
define( 'AUTH_KEY',         'c@{ Ao4ob7ZcLT~6WNn7sr]ryBq{m@mv`gpNj~p3ZG<5WsEAtj0%r 0*xZlZ-4p|' );
define( 'SECURE_AUTH_KEY',  '6e}h8i$e]=cE+;;m)IgwlMl8p7h4lCVxe+O>,NAig[+mkWFR.wo,Yd?Bpu!El+hs' );
define( 'LOGGED_IN_KEY',    ',}pq)T7_2s.]Uq8ovRo<bP&Y~:s4)pO)5o{nw$nvRoQsR;}=^im[V#G^U4db-RB:' );
define( 'NONCE_KEY',        '_k9n~;P%wJ^M90qO,R*l)=2N:+p^j6sM*5AE^RwPy+X*$-Ip/&WK[}@rj|F4!H;E' );
define( 'AUTH_SALT',        'k9s#uclqulI.?W+ou*#ou,1{oJzMt&g+_3>D@M[[LHe&Oi}@L+fBBbpK$Y26-Z+>' );
define( 'SECURE_AUTH_SALT', '.[RX3nUM&6aXcwK&@CH IOX3ek*sG$9uN`O+9$t$>D*j4cctl8g?E>#j.m.8::9.' );
define( 'LOGGED_IN_SALT',   '9#>K4*GsVi95Q s !*8ka5x<uDnPvAS`ClH<d7Y@@*p!QPq6qm>rui:Zid]x[>GC' );
define( 'NONCE_SALT',       'V{%o( [VDeB(FNzujit^Um2Gm7$IqX|g{lAz:$d0dVk181jWtWm=wtdA=*NJe%ab' );

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
