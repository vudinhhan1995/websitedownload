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
define( 'DB_NAME', 'websitedownload' );

/** Database username */
define( 'DB_USER', 'websitedownload' );

/** Database password */
define( 'DB_PASSWORD', 'websitedownload' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'F(kaOtR$H/LLvdCfd~O-(t*5^EDLs8+d[21pLT4h:uY:)N=h$*n9hgS%=$;(WC/k' );
define( 'SECURE_AUTH_KEY',  '<(Vlp=/5A[Kht%,gT`kuif*XQ#:3+yg78zD;(:[In>M_L]{!ekJHn_M8>{uA==u4' );
define( 'LOGGED_IN_KEY',    '!*=H|G(I].ZR^S%|I@!GLHe]S;s2w|rf ^awIG8Vw97x%kU:t;]_J88+$vwDoS:@' );
define( 'NONCE_KEY',        'T:1]Aw:`*^c=]tm1tPN;G2~*MqE@]<WSwPd>X#uJh^Z)=XbU7!*3Jmr!<!wSH4A$' );
define( 'AUTH_SALT',        ']K64J~FQTWYqx1Cgs+mx|frIdtLO 6ZGv2[3Ql7UW)A].V;RV%qR)Y{mq-T,SN~.' );
define( 'SECURE_AUTH_SALT', 'C73lx+j}O2s4K6EM]$6U0Nrs#O|{xvSSaX_j2;fweNQhA4YD<Of[I4@BX:qCs{%Q' );
define( 'LOGGED_IN_SALT',   '%:~A-)6IYI8M[HRmd%6n_apK^A[kK7:%}.ZH<aRQvVL=k+>7<jd#ha#+u+|^zddC' );
define( 'NONCE_SALT',       'uXhO[?Xr_D)r/KJycr^4T0UV_b:#`fpg?irk!VSRdCn*oyhhV-Oa50/nDTjW|eE?' );

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
