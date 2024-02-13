<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'hamzaamir' );

/** Database password */
define( 'DB_PASSWORD', 'hac2739718hamza' );

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
define( 'AUTH_KEY',         '+I6T=Zpv92Qe3)LC%z+yWtW,z$4dCHgt}~6wwra-J+lJ{><S!D}=Z!%O0-reh:2!' );
define( 'SECURE_AUTH_KEY',  'a|3QuXyXF,TzbBP,Vz>>~T_1<Se8;de+|s.OLR(9:wYJK9o#TA)PJz?5mL]m1/Wd' );
define( 'LOGGED_IN_KEY',    '3;c:tnY429Q&{lznVowsP.7Ak~ sK>~-btAAcrL0sBoy)Do:;VP9`A{+`*j$T#<k' );
define( 'NONCE_KEY',        'NKs:]OeluX&P,R=}XRKe1{)BbGME#qPv& @dW5.ba4A2szVK1@m3)ILqG/d)/xKK' );
define( 'AUTH_SALT',        'i=+aIzz~<G9Wt]9t(DM>$i6Vv5ljAx7=?Cj(40ebq<H+9^jqS7tH=xVICh+m@I(E' );
define( 'SECURE_AUTH_SALT', 'Ki!H.!cOF7B<hhg~i.,kxfvdb,Lp=m1ta:]a)  %f:_*9 .#jTP2&uj@V79ZX0ou' );
define( 'LOGGED_IN_SALT',   '2&yqCVh{GaDg$s0WXl-<s961>|,U.>t!PWNXMYWv07u[qu;YWuWZPt}4lK1mM{Jz' );
define( 'NONCE_SALT',       'dC7tX9cw1lBZ*+Q?_,0~C<NvR-.V-birs@HSl{?j-W,4Odaydg|Td?}74pV#t[pQ' );

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
