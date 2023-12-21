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
define( 'DB_NAME', 'jewellery' );

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
define( 'AUTH_KEY',         '9<l`<&Iq+rMBe?I.WYhp_:vgFKV?[Oyfi`)p2r*[RB_3mvY?BK^o#S8j:][wabA+' );
define( 'SECURE_AUTH_KEY',  '2*MMq?8+B@o`xJ7[ZsYhuL;BzX:<vnIS04Qh]TL`S[d$9l7@OCQlg9f{u5bbbv6e' );
define( 'LOGGED_IN_KEY',    'Uc&@k#eK(7*.Ps`,HxQQ7EBE-pr2ELO*_W5sLCRfYhy_gBeHqFJr=G gyD;`{N C' );
define( 'NONCE_KEY',        '{8u}+QBq>xjzIfYJ!}zJGX _GU;&Cg@.]M#vTi)K2R<OB;?1y_Ebz!p7Nu,f*XEc' );
define( 'AUTH_SALT',        '$yp!aIJpc`:K3p`3z{Ovrco_|jlY}F?X*pn&_xW0Qok<5YH-V),tIFEDQ1A{<4-x' );
define( 'SECURE_AUTH_SALT', '}aa{5Eb}&C5+M-/tb#;%MCIYEu8Bu|@g`X.P/okPHPMB>P66hza{6y4HV>lY0DTC' );
define( 'LOGGED_IN_SALT',   ' [Zx%^~*AOu2WdT5jzd_q!Tm F>Vke~ws/lU9)g%QT<*%EGt +a>!_C9@~SFFg:$' );
define( 'NONCE_SALT',       'W_tddqm=f#}$BwIBhK7uJIFU@MV.I*^OBb(!r,d?`NPF1(4f7VHj0MyQM2 K2*aH' );

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
