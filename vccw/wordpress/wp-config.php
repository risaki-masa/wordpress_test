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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'j[W[TG.v++dHu@{LU,H,-u%wx4{$mN0q9vB<N<iw6xa1rEXP4+H:R,Y1L-K&)nb&' );
define( 'SECURE_AUTH_KEY',   'XkkmPQbr}b>E1{oiTlD]P<EVGnc*qLx9Og[19tcF@D.! X{(&]:G5pFAW JiAf$k' );
define( 'LOGGED_IN_KEY',     '?0q-;l,F_8C,0T9>MG i{6QLXSWI8x?GJosuN%DDFD(cgd3+-}($gtdz2,lMj`Y ' );
define( 'NONCE_KEY',         '@SAJ,/~l3^:}d@F@pxR#co:;xbBI<q5g<2acB~mhPk03IRLtR3AgJ-W{zZAYy69M' );
define( 'AUTH_SALT',         'v6B`S=<udGTBA8H+A(}XDL=3402/!XyCUiUH`.vG3Z/n3}nl4ZL$w|K{+.OTm=n&' );
define( 'SECURE_AUTH_SALT',  'otuJ[)Ke}]U-K1yk@9RQ&XR#+f_{?%r`.oaZS0j}emM7Yc-DKyla.s0NFu8Xi*Dk' );
define( 'LOGGED_IN_SALT',    'x5|gRrB2!;~,Bn7CA^=1@-i-Ab*zI3WUp9$R2(nG&oKLE;q[V!PNf61:TEpj(9>R' );
define( 'NONCE_SALT',        'n~|PhL=GGwJvfzA2Flc<FJ6MQd~O(m>b9zSP|ItC7{X3R)$=;7cuesBZEeObFy=o' );
define( 'WP_CACHE_KEY_SALT', '#XS:SpUp>6TZKAzNG1I%I}!MMMq!{./13L+5?(WC fexg3}o6q%P:lrcy7Pev-JL' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
