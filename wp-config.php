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
define( 'DB_NAME', 'wp_dutchnews' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          '[h,&}te&MBr65%l|&Srg2f.u_H#w_KfniU~nFG_nzo-p]L=d&^MA&g&4OdxSza6N' );
define( 'SECURE_AUTH_KEY',   'jojB@,df4|/);Hi[?K9#euR$|,6HL_!>TGGN~0$+@vaYvXP3c:NL,$8dv6O^_lM ' );
define( 'LOGGED_IN_KEY',     '|Jee7(iAte`X6|Rm+jZX%A:7EKB`TK$gD[m;2P;TPt-v^%:I!(G]wr@bZx?!1G5W' );
define( 'NONCE_KEY',         'HvLuzW@{`-zf(]/Y-0V1#!@f@2Bno8lS#V3AE>H{?J/dP*+EHP^u{J>JC<n@L$t.' );
define( 'AUTH_SALT',         'yySf vv zSEnym|;L_W$*I%l0i;r`;p+u=_vEjg{lLDy|V?e)w?mu^$~-7t=b-*N' );
define( 'SECURE_AUTH_SALT',  '(2~pNihud;<Y_07>86gpD%!4.n<EoeD3cTos=5S{bdX~oVp!Imt?%St$BE5,%my9' );
define( 'LOGGED_IN_SALT',    'Qm4nc5v.Az_DXu.nEy,xBn}bTE0J 1^%A!Mmm>oCe|T%SV}GHtKDRTv)rvYeVcmi' );
define( 'NONCE_SALT',        '#X9[]R<RgJlHg ],awCRMM#|/Swx.BHi0{<>6~NUpC9Vqa72K<KGB4_c_,W!iG/,' );
define( 'WP_CACHE_KEY_SALT', 'KhWSO*fuF_Kqm}l.sG<vS@/{g8^$1H1TwLE~kE~E*:%Wme1O 0)2X5?768:%)a[w' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
