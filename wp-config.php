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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '.x8(>>Lz2ydc!$Ay:5=T)f%Gv}:f=U9ItDGv$^-$0uT^f{yv,J0e#yNxXwVD%mIx' );
define( 'SECURE_AUTH_KEY',  '^3cd=#ueRjV*FuSF.P[h,?CzEVeaGxCB1U{b?yIzb&T9e)5g KpJe}NQ%Dkj5YDR' );
define( 'LOGGED_IN_KEY',    'W7~HCNWoycVSn!dfZPX|KUY3g/PO`vhu~+#.sNIxn:rK{%8ZCH[]aOFk18VT<c@R' );
define( 'NONCE_KEY',        'AFxJ.is!gywL@X^-aMs[vagXJ`wnfSg=e6bY?^0<cC1Ve[B|chtnghs2^((n|w3:' );
define( 'AUTH_SALT',        'H[bFer3KN-|hfxT1W&[txXRDFq=:QF=oL(!l% RlrS(qdC4~) ,!7#-]dbgm#5,A' );
define( 'SECURE_AUTH_SALT', ':|T`UN{Gxa;1fTI~kg+RJ(1dhT;X[yf`Y>Cr-2#=992o^zPq+_teEQh+Wl6)Xe6>' );
define( 'LOGGED_IN_SALT',   '<4sG{=@KB B^N_&/W)_`9OA?:*`!4GqH)unI?2R]go=Dz<<Xeo<^#g/L cc]p*AA' );
define( 'NONCE_SALT',       'yH[F)C&IG`d` WGk}5i2HP_ X-u7b{}Y_q~_($Zl7kdPPzDl4B|K7~`k r  p4{v' );

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
