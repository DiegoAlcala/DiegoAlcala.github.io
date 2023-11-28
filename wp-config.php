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
define( 'AUTH_KEY',         'x[g@&$U]]CbMpB*_|M-}B^.Z<Z.R}Qw7L,E&Z`r_ddkDqq`+Id}ZLba5R9B;E#ne' );
define( 'SECURE_AUTH_KEY',  'IbKA2q1#nqh,_moT%@%9 D( Oz#s;=fHnPV_TBOc{mkCKr8w`RWKtoV}KfE1CVI~' );
define( 'LOGGED_IN_KEY',    'C3sS+}mw`)eGTV,6zL^jU)c6X]:pAj6#uO%kmUvr|3s-t+&-#>t^X>6yOCY9Hneg' );
define( 'NONCE_KEY',        '^N1g2 m+_M|^A3ZH3mBL{,kXf:+.hv7@fYp>fyE%r[${7,SQX}f!~+H*Ta1Omm.z' );
define( 'AUTH_SALT',        '~JGQh}YC=0LX,gXYOY[9yC=[F6R|.JIPy<ZJ*_K]^9r-51Lf4#)s!uhGhJ)W<g<=' );
define( 'SECURE_AUTH_SALT', '|R>tLCaE#VvWM#eE>w#u8`8it.ueG],:e#g +HR%eh:|D,Y&eeQ`P#%H[xSX~gm3' );
define( 'LOGGED_IN_SALT',   'D*Ggt~6G_|tyUFM>A+7~ba1IH1^IH>];Kxu4H&ccJZ)/K}9UOF,E==R/{;)m}f,#' );
define( 'NONCE_SALT',       ' xlDF#/JtLl+hfA6o5}vRL)K=^ll)UU9{=P^`q2La|OXYQo2.b!t%#*Ljv*CHY!~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ATmlnwp_';

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
