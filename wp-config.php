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
define( 'DB_NAME', 'networkingsad_db' );

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
define( 'AUTH_KEY',         'Y=(G*iEWHr=1sp4$?k vQ/TiGvvEY$6y2X(=.ap|s+OP#e h}<^I|O8oEf8B7_5?' );
define( 'SECURE_AUTH_KEY',  '0D7;D9%U^(ef`gc>8cpA>cZhl_AC[UA~_m-*uA1<nGNh~{-Iuf|vKy[`f=&NFY_A' );
define( 'LOGGED_IN_KEY',    'tYCvDu,:SWPvB~PTambDVyfzodZeLPzF>QR~ZH)X8<;hLK6M5MLy1/%|vaVB9<%f' );
define( 'NONCE_KEY',        'c{&[MD_4Nyz4G T&;Y.8yqw$%a|1mw7[yT;7lN?V>(_7K5P*#L,*;M;x@q`^AA@2' );
define( 'AUTH_SALT',        'R/. 6}PC*aT1tb>?}H)Z;mh|jC6ReXMEeW5k5Pi}%C_khr1@wCz+7vS Z$ia-9e7' );
define( 'SECURE_AUTH_SALT', 'X7Ph=8H$dX,SXvrPMdX{QzXS/$~R38UDRU;XT},X/,q%jM=iu*]/x<]&&htgPd]k' );
define( 'LOGGED_IN_SALT',   '0Ym+>b*g^=Si-AGcAt03HtI,o`JR(U&kUO@A9$#F3dTYQ?Hfc.lffNPtb!r8Hy^5' );
define( 'NONCE_SALT',       'b{piWYKjf*.F+tu*33=eG3tSr@o^uibbkqfuC6 ?,J&+#JsI,yx[d^zKSQ?/(4Wn' );

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
