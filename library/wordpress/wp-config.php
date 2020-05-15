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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootroot' );

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
define( 'AUTH_KEY',         's789xpDr[6aWE9Tn :z]7@&`Lry@;1{P(-..]<s*slye|e=%}g4]y&QuTexhj]Pr' );
define( 'SECURE_AUTH_KEY',  '/~8aI*HsU=JnSmZ*1xaUnV#Z<+Oa-RaBk|P:O_%{v!)lMMB]IkS~6&0N1&j=x2{4' );
define( 'LOGGED_IN_KEY',    '_jpwk!;6T]b.h0EhwZ,_dRGWt1)}EQ8Rldah?{k^V`4GkIroo.[nnOcw(29Yi-N@' );
define( 'NONCE_KEY',        'kt:~KC*IWPyeQCf4.=SH%>D9L;n;Ev=m=Rn~vj?`*h&YL,:yLGh(p#+&h7CR,X|Z' );
define( 'AUTH_SALT',        'tGs0L%Il8xKlvZP<$oldS)6 9Js/Z!>Wxaf).D_1T.W*^yV2+O4(8R<spB.|4`UD' );
define( 'SECURE_AUTH_SALT', '6>QX.Cbn~AmZ$A~*,LG5EFa*c-|T<B:IX`Xfx|%QG>^x,?,2Wgg)9vO6Y;=HKtyJ' );
define( 'LOGGED_IN_SALT',   '=B~:8#x[jaimk>yg<m7qpq3Lt.<|l>=+`^i/g^W6NY?eLKA6+0zO7ooxNxRTKxI,' );
define( 'NONCE_SALT',       'X{?r_OsYhA7xgSd5}vgJfMM$}-H}_7c9V@Bf2TW::19fGp8-I>GAMi!u[:255%K$' );

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
