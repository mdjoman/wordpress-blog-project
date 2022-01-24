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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\Education\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'education' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'zo+7[+~w52)&G9=u{;&Ybv<[0+t&>qSCj9T.)=y@]m0ia@~sO(M#$ /jT1d))O)F' );
define( 'SECURE_AUTH_KEY',  'fEJj,xB_WvC#s{Wzk-X`!@c9%@n~d:Vhro{v^1e[*}Mc/3F8w(<kD^}f[1^S7kog' );
define( 'LOGGED_IN_KEY',    'x&$v_4~BG)#9(/u9GJmt-|i A~<s~/G0Y_-Nb$sL&1Z:0Z3hf!G5}^PVq71j1a|.' );
define( 'NONCE_KEY',        'e!o&O=Sk788<I(ltQveM$a<,#|?WsYrv8TJ*hbYi4j%$o3,h`<iKiWgLY4S3pMNu' );
define( 'AUTH_SALT',        '7quNOV}#r^$UZ.,]lJx5%67gz-<dc5w&rX?0rufKh@nKl= Pn.Wh}aENW/RAp%sY' );
define( 'SECURE_AUTH_SALT', 's)/%Am7+Ec#6$[!Xi*tfX+M5{oHz@reV]eW$WO~6@{<)pDV:Kvqc?9::<p|^E`PM' );
define( 'LOGGED_IN_SALT',   'B8x -3o|CQ<g3HptuFUT[,FR66f;b}>H/9`8u><}<y)KW,6E-$oEBIypz-hml/%X' );
define( 'NONCE_SALT',       'XL*Feo~i!7L42TAJrapNYM#w2{tlisRwoHrY?a3?fMA;5Sf~|udb2Kq_erL_ITt^' );

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
