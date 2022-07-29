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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_odk' );

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
define( 'AUTH_KEY',         'a4{v#DfLJNcm2<+rKHNRu7Tx:o_||r)c#MT[b5Mf^<R%?a)IhXt!h q,@y6vc1$8' );
define( 'SECURE_AUTH_KEY',  'f_=}!uul!Z%1I.?.vxezY{K</zJ8#R@_e+,@i@j_[f~RZ4j(1;=op0$cj[13.m9B' );
define( 'LOGGED_IN_KEY',    '4}K;}~B82.X*v,-,RvR+u#0FbtY~wu1wK4aTL6bOfan|~j|xgfQ3 uca;U@}2YV-' );
define( 'NONCE_KEY',        '3u^s `&&FPVMK=BVPed;iy:CZ.=GxtvKmp1AA{:I>RTIDT;W.<Q$Vt+8&aZe=8|I' );
define( 'AUTH_SALT',        'X0N6b1N)Qw$91_n;u c7}6f,MW/ZwuBmfC:OBNW(Nh x[41|,rB]3OLTRo~Y>d.4' );
define( 'SECURE_AUTH_SALT', '9q! nG;;>w6QElXE~jI&$Q8ViCQbNgi<poae)mh:7LS-l~8yS`7 duB$5>e)hk_y' );
define( 'LOGGED_IN_SALT',   'Xuc3b]xg7vN5A+c)(h#aQT!lwIc.0jSAOUb4^5*B7|a2r>+!9# <3n(aiDx{rUAw' );
define( 'NONCE_SALT',       'd0JYjLPQ@@2/{mbX[%^`agqlb@b[5n)/ uu),k+f,m2tCwA6l`^K7I&eYxDLxu;{' );

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
