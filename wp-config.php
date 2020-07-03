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

/**
 * Remove dev-config.php for production server
 */
if ( file_exists( dirname( __FILE__ ) . '/wp-config-dev.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-dev.php' );
} else {
  // ** MySQL settings - You can get this info from your web host ** //
  /** The name of the database for WordPress */
  define( 'DB_NAME', 'database_name_here' );

  /** MySQL database username */
  define( 'DB_USER', 'username_here' );

  /** MySQL database password */
  define( 'DB_PASSWORD', 'password_here' );

  /** MySQL hostname */
  define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',         'K9uK7~.HkvR1SrAddgS=#2y5*VNT49@`X G8E:,cK-+g-P*x3}4Tq3S3KFl>:+(a' );
define( 'SECURE_AUTH_KEY',  'l,*fJ0S$o|Nnx(]t1y-B*yg=CMjLk_<@oY3mid|eagx`hGc~#Z2{=oYq/i!x2v&[' );
define( 'LOGGED_IN_KEY',    'O!8>jaN U[E%/ `3J?pT*6#5uK&$6o+QE0_2a|hk>M8!N-%/mx7imI|$ni0&he$}' );
define( 'NONCE_KEY',        'JU_(m~5b>]0YRmq,h.?<|w,p1-J<{NZ[PKA$er:CfUq|cv`[9i8dBCZ0?le1Td9x' );
define( 'AUTH_SALT',        'n,ppMaCAWxK_F05Tv3mK;x-|q7U@&?b|IKJ!QM?gvV[?mWPp>{qFB|DH@Qc[#t0K' );
define( 'SECURE_AUTH_SALT', '08$Pw[z5q bdJV,(ULJe/+2]CA!N%CF+ls)Tg4z|ua.igPm@IuS@uH f^Az)=>JQ' );
define( 'LOGGED_IN_SALT',   'VV@HE?C,DA9@`O^b>qwle>*!j#ZEV7-DdqxK$=6]0r<=,GPgbk(SHffouDjp_*FA' );
define( 'NONCE_SALT',       'wD$+DnwHUj~ [,jH0|7nAK=ao2a5$;s-RJO7%:;8~:yVqlvs+Io0h+->0qK@5G/C' );

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
if ( ! file_exists( dirname( __FILE__ ) . '/wp-config-dev.php' ) ) {
  if ( isset( $_GET['debug'] ) && 'debug' == $_GET['debug'] ) {
    define( 'WP_DEBUG', true );
  }
}


/**
 * Limit WordPress revisions
 */
if ( ! file_exists( dirname( __FILE__ ) . '/wp-config-dev.php' ) ) {
  define( 'WP_POST_REVISIONS', 5 );
}


// define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
// define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );


/**
 * Contact Form 7 constants
 * @link https://contactform7.com/controlling-behavior-by-setting-constants/
 */
define( 'WPCF7_AUTOP',    false );
define( 'WPCF7_LOAD_CSS', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
