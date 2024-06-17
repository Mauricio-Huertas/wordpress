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
define( 'AUTH_KEY',         '4,~4$H[uu6+<]$9>0pi2W~lfoV($dzgq}xRt P{{@ bf_iOB =32(E$J%8sw/M]9' );
define( 'SECURE_AUTH_KEY',  'ML?k(Wny56vjfaH`JF#us;_TThl_OF3A*Yz-N{%@6>k>_aCZ.*7W;|3CR;Q2P-Q2' );
define( 'LOGGED_IN_KEY',    '0cG(.4zu87S$gUMQ5 icAkjDVlTO}.zxE1H {0G=h||*VDlEc?H2znthgJL%*yKl' );
define( 'NONCE_KEY',        'BX5Agjn%23)SRFYS`Gh;#a?Q:g4}:4:No6^V%tAk6KOI~AO1B0#.{]RE)ibB(fpu' );
define( 'AUTH_SALT',        '<Wwg O_oJ0EZXS6Gg,V|h(s]+iiJTYK:+u%Z#?vh2JT@,c!qWye[T<6TKdIju`iC' );
define( 'SECURE_AUTH_SALT', 'lJ,F+c$@{UHr@f:cg-8aPlq-)25vTQ 4FV8WXb48K;WL8Q*|G}RhH%)H%d86r-y@' );
define( 'LOGGED_IN_SALT',   '>2uV}=y/)DvN1y N3LRK-lkH&+?E-</d4|RLCib0O WK2e@K9Zqpzc*!0dYULK_m' );
define( 'NONCE_SALT',       'D$o*avnS?U/>,k58ce:O@;zUflpy>U>;3JOEN>]m.-LDIcQRIf,s8sBVwDmoJ2uq' );

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
