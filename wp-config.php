<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'customPostTest');

/** MySQL database username */
define('DB_USER', 'customPostTest');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Wen)8TfbVT<,N8eH|TV-.5nu<>Uu$K-@b2QykVi6#tphXSzslGgg||f*7QP|<. S');
define('SECURE_AUTH_KEY',  '@-hBFW9%*#yal/g:h`6BW3T9-{Fx|eR+06R4.vdnd8:%-i6kO(E#a:9^3|s%i_tY');
define('LOGGED_IN_KEY',    '&XS,|v&kn&%&^zFsZ}grf:gUF)wjt#-Zj3]}.MmK/<3hsiG7zXIe5|zOhWmJh[<2');
define('NONCE_KEY',        '>~H7nO>?G+G-@)_3QT7yLj_5no-;%yYD|W3)/{_G-MsA&L-}vDGRB,k%B?;9JY^A');
define('AUTH_SALT',        '?s.0un1$rS|`yoKo#0=eYN{<?xo 9DM2j]>68A,vu)7#+_X|*pq0tNs={;S|Chvh');
define('SECURE_AUTH_SALT', 'D#v/]VmK:$Gmk4Xx15eJ9T*<b,tcP;OWov r+|,?@gwolV):{E]<!{Rle5+D~.4k');
define('LOGGED_IN_SALT',   'GX.48waIHP)/hsH)0n^{HSeSu3;x$RF,Wh[!Yf__:A7De$:]LTvyxp`dSJjGgGMi');
define('NONCE_SALT',       'Et!Y8[2+|sAhLO }_Bw_,aR^qt[ue](u%&Y2 bRTtTM`w|fO({U%M~TE[@N94l7E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
