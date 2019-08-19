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
define( 'DB_NAME', 'demosetup_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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

define('AUTH_KEY',         '. 8V;`}RUyF!C7CxV&E !06fyKVlUX&}N+B24g+;1#Q8t<mD$/-PaAIZ8 9o`@|#');
define('SECURE_AUTH_KEY',  'u|P;UsH_N%V`t(iZ~ wMTutd{AjX XJc&8X*A(L/([(Qd= Z@>unFIsj1Il]-^W!');
define('LOGGED_IN_KEY',    ';hE5YT|*-OfXIl>KB7>@%%42<1F.xF<AFYzT.So.c8-*x>H=*Nng,o B_NwB]pS9');
define('NONCE_KEY',        '?pir@EEkOTHP8Vg5++;tT`i+Fzbl|#lm}NMB[tKT-@9Ii]$J-A3oj&^Z@RS$W?=%');
define('AUTH_SALT',        '~+X>gqd6dt2;!cB>zu}-mDdv*a|Qr?Xl.qw1[@q[$vi/-`oPg%g|962ne!`+/cas');
define('SECURE_AUTH_SALT', 'w+Hk/bE+I>alc9(V%h:2Tj: ;D`>hb06V#gxg/(Gae+eSd34l6DB1}cq#D+-30i2');
define('LOGGED_IN_SALT',   '  Ye=U(ZXG%3(<]:3U%-]r;BTi-_MunX<&lHQ0)o<qf$zY,HOy-:P?W;};,n-*<>');
define('NONCE_SALT',       'g{5rD}HKk*#4B(-MIhP3_([bvSO`=|FWTL{WIl4Okw9c8[G.D?(tI)!dQ X,-(Po');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dswp_';

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
