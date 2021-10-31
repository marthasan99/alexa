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
define( 'DB_NAME', 'alexa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JE#jqVw@2[,-F`^dG,vaG_AP.:n/M[pb{y/HtdDoc^paNV/R^?<8{J[~&nS:,Cf@' );
define( 'SECURE_AUTH_KEY',  'Xi{Wccs8&DA*u!!=W]NU[3<dN`C?R]4T+[9gEBP=P6((NIV.^yF]M,b!rl.%?{:&' );
define( 'LOGGED_IN_KEY',    '?Z/Yq<^]xGmcC_j0Gox`^pH>;,cA:|YLK8gJs#!<$U5ctmP4xP(tKKu5A[<-n3;<' );
define( 'NONCE_KEY',        'yG-/Nz-JSnHEO]kBPtn)=i`SsqTW4DGZh5B9{Vy^+HmjQ&-g8%1JZAeu#>k#xQHt' );
define( 'AUTH_SALT',        'KgJAd2nkww`!n Ve(}%/v)0e#zhJnppVXV%& nLA8yw(~pQ;byV*},*gyG0s~1Fh' );
define( 'SECURE_AUTH_SALT', '$qxUVXH%BG5~~lX9gmS1.]dLE]vH!pvdGk=iZLNjoE5pe_V7K$or/s8Z3KV.eoln' );
define( 'LOGGED_IN_SALT',   '5S?V(Z`m64p,aoUBF8jiect!$[(>9|?yL#Px*dm#`-/5p^9<@jEZtgGMF?s1<S~U' );
define( 'NONCE_SALT',       '!~:K.Z@ZHQuu=LYG/BT&sGAFExYMODp<j`o:WYA^h9o RRbkxds^(PND)@9*<R|q' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
