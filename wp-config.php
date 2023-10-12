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
define( 'DB_NAME', 'wp_portfolio' );

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
define( 'AUTH_KEY',         '0y==[m$q,^L=*-.J|`2d*>7a+En_0C74sHBSJxg~<gAme9 X^?`h`njWV}|64#C)' );
define( 'SECURE_AUTH_KEY',  ':n&L0J84RcS >kumGcP.rgBG]enkw#EC~zFR2Kz.m<1z:&iTC]Vup^+_3n*-^`Ex' );
define( 'LOGGED_IN_KEY',    'x@U4B!>KnWR ~:@JcOos3Fp,IAcT&;o0@e(#OV;SDYVyGGZ+%aO/Tu(&7I|(I*OF' );
define( 'NONCE_KEY',        'wxbiz!/QRRO^P8foS}jZ/lytk:9APAqDzQLF#x]N_u -QS&)ew;E.Qz>/`G=O[^l' );
define( 'AUTH_SALT',        '+#,OtckXJ/~5PS:m%SC-x@~XBmfh$|/(HB-)yfa||:)/J,9A&y.Y`WXJKl&5Q3z%' );
define( 'SECURE_AUTH_SALT', '&ne/r]I|Ii_y]6.|XYC;Es<rOIp=l.L3Wb3i&jt.7Sc|b6#w;y>1: 6jp9zHM_V7' );
define( 'LOGGED_IN_SALT',   '5kHpoa,94QU?>,:Jbv:&|AYokfr!oG5.MNG)EI}@|t$^_l9htxTb3 |zgLiOtMKn' );
define( 'NONCE_SALT',       '|f~,camK5QDg+j8h6kJ#B~7zSOIA{.]U]V~ScHOe7df5tu9^P2I{Y>j-vYUOQ2|}' );

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
