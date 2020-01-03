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
define( 'DB_NAME', 'verticle_screen_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'binFw7|[ftR|J}O(2!%0-:%Q.E<Jf*<-FOH+s9yh+%xn)M k<]#es0YlV+*MC>+t');
define('SECURE_AUTH_KEY',  'XI?mGfv+@+PGS#pi-2IFyE@G$>NID*w+ n#5 3pFG$`-m~lSE6uITV96i#-$mKP#');
define('LOGGED_IN_KEY',    'c;`7vav3k]W0bT]%9h# %arMhmOg{.0uc{(^_v$|EPe`qA!*6Z1<(E`_kUt^eV]Z');
define('NONCE_KEY',        'lW$N@p`(?-Y#}OR7-!%!mqQ*y0oP*Wa|)g)Qn.B/{6d0b~g5R|f]{D1H>70ROO^q');
define('AUTH_SALT',        'B!7u==5ydoR*0~XP!7E2lriY!H5-v#O_a{@eC?UNP]kI]Q}Of3HzK|$,xK-oh]!f');
define('SECURE_AUTH_SALT', 'z?qa?ZRe#4r^+Ea*JQnb?l$:Y+tr:E-R8/9i|5B:@6J)/e]x]n+.orw[E~ _KV[C');
define('LOGGED_IN_SALT',   '?J}LYYex:UcE++JmAg1yO?6E-TI:c<zTP;MqX<i/[>I&TB_{M.*B+`l_7O[<Z Rg');
define('NONCE_SALT',       '-7(V]a-1{.2|/ujFiN`>>8 *#Nvy|=Km6t193q*{e%t!A9=Zor-G`NtS.|x-!w:)');

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
