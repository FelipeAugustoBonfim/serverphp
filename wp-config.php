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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',          '0M0e%&WI$.}ma)[8Pm{y8kD@b%n+`nYijK(lBTr[a@(EZ3_`^hv^}3V9&9N;Q(&%' );
define( 'SECURE_AUTH_KEY',   ' d7ex=t418$0+3! {Oo@cdo U_VpWdQ=r*vC|LK(X[#v%uSF{o [#[Z-j1zeu YT' );
define( 'LOGGED_IN_KEY',     '];QK<;qJoG3/e[?Z 2^G:>fDa&[)R~;/hECg0nyd/t(w0&tU2aa[DrGfq^vq>>_>' );
define( 'NONCE_KEY',         'roY[var%E)b#gS`G&Wpy-%v8xo8_*s-M|D0y0Wp[?%;jo]>6m)olUCIR>|TuruHM' );
define( 'AUTH_SALT',         'DbQT3%lJ/3n-?s}o~.-_v/.,(D%)00a{hK7#2hPq=qiSPJ-Q%XVBH1J4vwt2&f.9' );
define( 'SECURE_AUTH_SALT',  'st6BULu]Eq<QB/nMNu4ING#_i4QgfT2uRzHP1NZFy;#dhP]M J?EZ/#[Hn79m3Tg' );
define( 'LOGGED_IN_SALT',    'q$Mb(K54LDupzl&Fx`A!dgN>|v-~8Z<)DzB0`3D|:0}k%%5V9iyG1j5_q?rm]?xo' );
define( 'NONCE_SALT',        '+e_^` |O:>w)%h&k-iBy&C:A47H.ij(TSZAa-3fF|y|aK,i-154{6V2n=-pZE>X1' );
define( 'WP_CACHE_KEY_SALT', '6UGA~qtR+>daLo{~R9&`O<%a jFH_7zd)!S:gP0r`r?87H?.>HS{U]Nt jdi<{&p' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://banana-dura.FelipeAugustoBo.repl.co' );
define( 'WP_SITEURL', 'https://banana-dura.FelipeAugustoBo.repl.co' );
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
