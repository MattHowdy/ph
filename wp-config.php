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
define( 'DB_NAME', 'photography' );

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
define( 'AUTH_KEY',         '=u.PMID>H*7|hRX68C|i GoLj1bqh]T v}az(=Cw/(ad%kv|uLFxAKq=}v;|Z}vE' );
define( 'SECURE_AUTH_KEY',  '2Q-ui$?V-BiTW^dcm7kqc?8L(LAWWs^<YNdoUz1N<cV!q)SpxLb?ly|J&j%pa]wT' );
define( 'LOGGED_IN_KEY',    '_?oX;CtMccj>j/hYAu/`ljQ^x4>j2tu&QlY>MW;z,s[cZ8LL.9a=A>Dv*^4M.WN7' );
define( 'NONCE_KEY',        '0K9QAd3+U9vRkDrH4E1Q9#Nu|QR<|.g1!8iW%xJ:CFQr4}@wXy>vb=K c`r>+O!{' );
define( 'AUTH_SALT',        'rhgLNH<*0yz*mL/]#si`ux<2*dq<_]?+$@4->[q|A%v)P/Tzw(^&2Z8dxyB7t(,4' );
define( 'SECURE_AUTH_SALT', 'i5H.*@.@rFz>;A{,Zh,FN1x1^m`W]TTx2]Et~Es]xX|5]58evl)O!|;!xqJ{#u4B' );
define( 'LOGGED_IN_SALT',   '$Ad]P9eUdQRjY 8j$gROFDNxs{=xWd})r*xb|rIK}[@H,@TLobpI*hb>!i65d{i/' );
define( 'NONCE_SALT',       'P)k5yD?e~6|O#a&IysK2vggT.<%2b,RJ YnqH&`vs% FYj&ZQT6>Y6I`/W_LrQe?' );

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
