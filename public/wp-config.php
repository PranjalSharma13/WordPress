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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@>F,>5OTTisV+ex<rj<><3yn/n5@Crm GK{Frp)t`3otN`1> z#k*r*B-a~ #S0j' );
define( 'SECURE_AUTH_KEY',   'Z>^J95%V}.4IMCZ?agAuJ!nmGp0UJHIs4I2JYKc9#`z&u2ZbWSwB]9X{]KWRU&pa' );
define( 'LOGGED_IN_KEY',     'Aw-{/{GJ)&1CK@n5ir>-9O{vk=;A ,Ml?@#@Ev_4;TJ,#rG$en1[83^wzIynB/u`' );
define( 'NONCE_KEY',         'G3;VxXzohi>(SKY-j.r@n> 4{,=7arf>I,j9[2{.7^&vCt;[45<}8}baM1R4/LIR' );
define( 'AUTH_SALT',         'H.}]NIt)Q2ep0ntyNjg1-.2?y-wVru#|L/;npB~O=F4!~B{2O38f)nIRBz{g~${5' );
define( 'SECURE_AUTH_SALT',  'DAz7IA6(z}!L[v8A,~_#S=EAcYAWFXl{z+1*Xr6WxV_q;[s{{>CeA5gW5T%i@R0(' );
define( 'LOGGED_IN_SALT',    'k>gXYhtRj|[3@k:2r%=_Y]![6/J$;$--oQAf}bnnDP(P#uW4|}Ng+TgL}<bv<fq8' );
define( 'NONCE_SALT',        '%,au8WfgI/5j;bzFOA%sV:4_D7Wm(4>TcRa&fVKAgnQ{(S|v>[cmvB(?`6r$3pqV' );
define( 'WP_CACHE_KEY_SALT', '4uJ]^aBKNTf9~kIH)Lr;,GrzWBHC_(ocbo![2=Td_.)!$;lSL/ij4B$>(r[C_O|T' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
