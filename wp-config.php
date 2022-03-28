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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '&IPL$gL@b^wmr(CA/G^~{&{b-V$ihtyI@>Q?IuHAzd>+3(UszjC]tW(3cGrJSy[{' );
define( 'SECURE_AUTH_KEY',  '*y_?zdchHpS;gQw49]95>1H@,nbmcc6P38qDE.j!|o<*~I};iCymp(i.Wo>fl4P/' );
define( 'LOGGED_IN_KEY',    '$cCLmc6o%*xRp ,Pleb<(;?[5hSy4jrXODTki[C9R,W&m]|gj~n`x<NMf$lY)W2S' );
define( 'NONCE_KEY',        'oARG_klGOM](|B^l8OaK/SUa(ql?&i;v.,NP!_O,oUyA_7=tPBki=`ydSJA_!`ZT' );
define( 'AUTH_SALT',        'F1g|c;KfGFoCS~XZb7G)@*ZNn~wv@xVhG{Mc^%pkh+l&YK*F37Fb|FnppnaE$CG^' );
define( 'SECURE_AUTH_SALT', 'qX{rs&*jo 2/r0A)de.j1&=OVoo&Z&O_UBpGs5zeXf6<`.er$>]m,ZmGZ(((`VwG' );
define( 'LOGGED_IN_SALT',   'Sc=>giEblM-~k+?/?Hs*({H)[|`k-%@TGWtZxLCVin)*`W>X>!-6{dO<lHO.h( *' );
define( 'NONCE_SALT',       '5BP2TH)F>/Y$*M%?HWXJIk,t:x<aB.W,buFtDk6:;o6ms6`q->q>2QSW?B#E6g*|' );

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
