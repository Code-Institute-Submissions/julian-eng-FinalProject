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
define( 'DB_NAME', 'webfeed_history_website' );

/** Database username */
define( 'DB_USER', 'webfeed_history_website' );

/** Database password */
define( 'DB_PASSWORD', 'webfeed_history_website' );

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
define( 'AUTH_KEY',         'g_O(C&F+]p]bmUR%<EjXG:Ho`OoZN5I,dtH>COZo92f_2c(i1SkmLf!Lec~FBK}S' );
define( 'SECURE_AUTH_KEY',  'mZuZ,zQQsg-?[LyFHXFX@:Skva~0Fpr@z)^rc1C6K57Bhrrd1_I;z<5t+*!epH,K' );
define( 'LOGGED_IN_KEY',    'fdLya.82v#w);J3dxyA!Qa9>%)PWbWc_g0j!bSJR4jiXDoi*SW6.ce&NQdRS.j9e' );
define( 'NONCE_KEY',        ',~lCSubHI~%}Pq$ohm*cO*90*6k}`(&3in5l__kuR{q}yBNEi,}Rz%LY4s7rMDc-' );
define( 'AUTH_SALT',        'C@<+!L_CODY`i%-#.]~LfbUx-!?e[!OQp]i5MKq39b3e`N8Em?2=W9[*mMpR#=?d' );
define( 'SECURE_AUTH_SALT', '6f/6t}z>C[!GSUK`c`R$j=,6}yAp.d,#0~AU?!NRt]lO6r @?/aLq~4?i]}Cy2pg' );
define( 'LOGGED_IN_SALT',   'Q0y@m2Gzq^1]1fMvOjhW<z`l:UBStbIFR JToQZ?7$[%d xVj$CtjAf|/ K1?Z|b' );
define( 'NONCE_SALT',       ',)B7S;FG2*Y:1)|+2%eSe3i1Y8)q7o6l/YQmdSjf>P)(C^gjjFS%A^w|,6v_gN~q' );

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
