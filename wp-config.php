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
define( 'DB_NAME', 'word_2' );

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
define( 'AUTH_KEY',         '.sU_u,,w=ZH|k|b~q~;ke@,v#~V4W-)$$FKbx2>t)RtlT{wd2pRrPUj]W[OPeozb' );
define( 'SECURE_AUTH_KEY',  'a+,Z*tT;*)nsTGDn1r>+63HW.rQ]Y0)~t!3_G?Cf&$webU~.G$jnu5{>Ea-?+sF@' );
define( 'LOGGED_IN_KEY',    'Q*l&]y*Im)s:a<fatlY-d+cN|{~exJw$0=5q(hoe1}ifiM,[Llk15Z7Sb5;);E<,' );
define( 'NONCE_KEY',        'Zlda$gvq]&yoCB#|_T5,a````o{<3eFwM6o# &I24#y!/OTAI~Hq|%i|6Al/_noG' );
define( 'AUTH_SALT',        'mYwV/3lUfZRc9AmU`/XFmpYJ{RCr$RwmWTK>;b8Eq,w}E%hiwkv8rMIkM}):oiyh' );
define( 'SECURE_AUTH_SALT', '(br^.Csv&@E`SZen>xR2zy3Qk2;(-iO#vodlGbX^K))YUidWc9*(Vl!3dCBbl1,>' );
define( 'LOGGED_IN_SALT',   'fwCBgn1 kr<m2~iD1?{AiF[iKR~w:hq,!t^*PMtYBkq}u=xwx_C]M]F4gWTIsHjW' );
define( 'NONCE_SALT',       '}{7%VgWr,$JHhk+k}}O(*sfm+Lu2UI[=>kY2(se.<^+()5 ZYe8!mpP2hEha:+*G' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
