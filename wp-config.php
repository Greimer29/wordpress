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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'v?tgYXLzCT2K+oqERsz.i#;ej2oS6&|h&)[*mhJl%qwxBco5,<??CW}A&UO{{6y-' );
define( 'SECURE_AUTH_KEY',  'B=TF6Bq}OQp23Tg/]U~[yh14Q<m4:<~zPkUgBOZh4c`d68s9W6}-L-veL3S!NG1|' );
define( 'LOGGED_IN_KEY',    'j(-]6GE|<RfmmS>ag}Yyo;ZAFy}c95O1-fTjUjzma;BC=y}V18gsN;4jPfXp,w{3' );
define( 'NONCE_KEY',        'tP|m8.)+uLvcPOVq.R3}v(!2*MdoXXlH-Le6W58&[4;Jv+Nr]J})(AS:z[U5qYJd' );
define( 'AUTH_SALT',        'Jc,{w?GY@fTV3]?#gq=hh`h21f/,>bGVcHqM`b[0BVYE6&DMk!NqhYe:b[~S=:O*' );
define( 'SECURE_AUTH_SALT', 'j}wa; nenGO=/!G//,8xf3c;AR9(,r!NO>bP&7&uvH8WcjVDtjF4NN_M57KHoGlH' );
define( 'LOGGED_IN_SALT',   '7-`i*9vjNaI>ph@}8s-xM2_EGq7k}Rb&lBXFCddo]b`m]BfP/U2&8&k()8zzsrG%' );
define( 'NONCE_SALT',       'pzMe@YkxIAEv{-e!TrIn.xs[Q5_n_E~$p.[<2T_-V5HgNX}Ao]t=Q>YU<O 7!4il' );

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
