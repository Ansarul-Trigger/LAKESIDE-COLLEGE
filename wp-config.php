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
define( 'DB_NAME', 'Eduversity' );

/** Database username */
define( 'DB_USER', 'ansarul' );

/** Database password */
define( 'DB_PASSWORD', 'Ie@[KMe8NhxrOG!!' );

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
define( 'AUTH_KEY',         'b8{(TRNr$rle,#K$7;ZL<.w!Drk#-|h8((5}`~snAq)9Fs?ZVw#0vBxHB1CVH>*R' );
define( 'SECURE_AUTH_KEY',  '(=NK,H|Gb#F|%uqMoaJK5!3]/(T{U_%=4KZx;IxPLjCT~,uR>$|!Xb[aVl%7.>w(' );
define( 'LOGGED_IN_KEY',    'GkoA{siDEW()7x}=BYV|ZRQNmnx>.gV|~,EgYMO7z/baOY$Q2x1c#6EVi^?Ry7`{' );
define( 'NONCE_KEY',        'z6kf_hTWphB!y6K#J|=U/jrEobHtsaMFQ!@<6p+zQsQVHHo.@edGK;~_P J7ewV(' );
define( 'AUTH_SALT',        '}/|&9f)vMt54Ua<WWQP62|&gcx{)hvhh)T(K(QtPi!;_/(}_)qhrNnn6p[Z`F;=d' );
define( 'SECURE_AUTH_SALT', '37>guzg0>}HEl*0AD*{o6QQ_]b!C0;Yza#;)VaX=r>Hq~Mt,@DLEviNWrvc/&d7-' );
define( 'LOGGED_IN_SALT',   'rc.W1^Ha&!&R;wT16[OGE8GPX9zn$*atEV6C>n+UBI}pk=_PwNUyAYK9U+(I%1{S' );
define( 'NONCE_SALT',       'dqQr,>E|wY% UHSeV5{fvsaE8/jCg+9b$Um]$gF#|.Jg7;N|2ryCFuxX*nCWI_$B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
