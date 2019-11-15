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
define( 'AUTH_KEY',         'xwpej4qP8<LLEklYUjZ`4(7LbB`E]@]8**Yois)5uwdC@8,p1Tx4#0,*T~5yCms~' );
define( 'SECURE_AUTH_KEY',  'aY?~WjY5U.-ULKErb*W?9PgH`/$5,Nf58MBUJ7G6J`>n|E3suySz?]nn%0FJ~^y]' );
define( 'LOGGED_IN_KEY',    '|MPkO7pu*u9Hc.Q@V/O<p-C?*w0CN P ./be)[E0^|NZ7v#f}VY6X2sA?C(:JI=G' );
define( 'NONCE_KEY',        ';1*Y=evC@wiAY|M-@S3n581@49qk*d9vR]y%Y%J{*hu%WzM3H!mGz+W/Eps1q|>{' );
define( 'AUTH_SALT',        '41Pyi9rd1nHUV+00}j02t@7@G0l0AwS#-=?*G8mFMj@ZK{j`M1!2W>:)K-w#%0E:' );
define( 'SECURE_AUTH_SALT', 'T#N+7fL+(?2`xD[E=TnA0i@Xa66U`uF UDYAR<a*oh@7]0YVc&O9an=q<3]]Zd%)' );
define( 'LOGGED_IN_SALT',   'W#G,QwE&h@GXNUr)M7T$tK<HqMt7US-C#y-S2;;#3ap&;YI:Qhvf4dt4[w#=7_W[' );
define( 'NONCE_SALT',       '{?B2BJf!0W-~]Mm[+Dwje:stNZ%o!Ymh;E.1*yow|^KG4:5t}9pQ7v(6V|;m)C*,' );

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
