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
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         'zQWEwNA7Jq,z!wHd6snFDHBG-=eg]2@@w_L>Y(@*tA8x@!N yK6?})$&kjgxv/5O' );
define( 'SECURE_AUTH_KEY',  '1Q3*t7vh:A=rq]Mv9Tp3]lDffdVw?VZ>XO7 !@/I,-QF1Eia;5]hhkvob,C>r-TU' );
define( 'LOGGED_IN_KEY',    'e*L`etXuOWfE37hDZ(i>/`e8Bm=DB,6e$SeUD<wmXs~6S;lxM|tuK_OqT3Aq7XOk' );
define( 'NONCE_KEY',        '>:Nep2ck3MfQq.l/|to:HvwK!JxY/VrR>RA@9jfkQ[Zz%CyF)Qd6KTT2r_GwhFew' );
define( 'AUTH_SALT',        '(]~v2;w_9> =/yW7R%H__Q=Ar:6k!>r;EL.iH]@HQ#!fU>/xYmc;}O6`<a|,f]{n' );
define( 'SECURE_AUTH_SALT', 'IhHi RG/R;7n?Q5~LI_$jLPOYX]VSS*9!I]Qu/$OC.8*3ST*$bRMp.vu)<;}pn|A' );
define( 'LOGGED_IN_SALT',   'drg[S3.:!!!FC3iQz?5PYk)@A&K|iYQE[tl?N=`fDAzN5jJ^~ FEN}R_/2,d4B[t' );
define( 'NONCE_SALT',       '2;$O~=y_kb,C|~d3?4,S0M)CVhR0=;kZ]]+7sC:3zTLktz`YNGr/ox/n7KH92w&P' );

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
