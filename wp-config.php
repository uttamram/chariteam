<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chariteam' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r^I{g.SpRE~L,~I##Wig0:-L*$4I`i&eT2MU5m+ptB/%}`HInD8PdXrx2U2UWQkw' );
define( 'SECURE_AUTH_KEY',  '%+.eEV0;{d<h]D~ey3:-pcl7m??GjYdh|mhDc H^h8MM|K$g::~9otzMxEXCmr6J' );
define( 'LOGGED_IN_KEY',    '=*(T?V{CFp]yoQ!<a5W 5~Bg5=q`:o vjZ|4vcp4}X_Ba>_n]}|i+3~/2G2XrO%Z' );
define( 'NONCE_KEY',        'L=$J[}^mk2g~wTip+>C/qUplV*I7?J.@S@Q;O8;CJ!!EF.cLv-|;)bq&vvA{tM-+' );
define( 'AUTH_SALT',        '])9wldw=evWwaz#Pa?-oq<3f6$|D%.]/:h@(uASdjJ,uzIgS7(nJyA`-TPp3[?2e' );
define( 'SECURE_AUTH_SALT', 'P)Ty>]1KAqNm3-Q8`IW~=O[Gcv2qpiE2WjY*g!v8 X?-]>.1,QP )`v$JdA=%;Vy' );
define( 'LOGGED_IN_SALT',   'Ux>x2i.B:bw.AvO7:@X&*0_~fo(>=P*9?Z,b_h`)OmUzeb.rbL*W^E#bRu[-mv`c' );
define( 'NONCE_SALT',       '$C32Yq ,{K&psazQ.]0>1c$5,E%*Ir}F91=CQGc;9k1Kr9OHe,-L-TjiyioN]|jC' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
