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
define('DB_NAME', 'wp_promesa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'AkbU~`-y)7_;hu bF;|<zKqk8BUKVXQ1:bueHPS(oO8!2Evmb|*<@1-P!_1j-@Zo');
define('SECURE_AUTH_KEY',  ';b; a_3T*{1(hQW=z7R1`/6yNZ#&)9{2$=|BzpWuBK+0r,FS?tIg7OA[-Uh5_.Pv');
define('LOGGED_IN_KEY',    ']!q|@(n=d+nz}AKm^ Hj{wD9H~V&5oD}[u~Q~IE;D&j#+HuGQIDbh /k]})jlqOD');
define('NONCE_KEY',        '~BX&||@zs9~= -NRx(DBu^>~|f$_A1>#~2)s[V<:q=Z[P+F#B6A)(> &7U%Tz%:`');
define('AUTH_SALT',        '#}}mX_Dc`0BvJIMR)b =-Gu-;pn|Uid5++}a1h3O%9HPpD(0bddxk8qm~=<YO`^t');
define('SECURE_AUTH_SALT', 'lj;`Ke%VP>-N5|w>-!6lLY8f|$@:D<a1*-_WQ-VFMRl}F35JzU@q/iBIHCy4E`wV');
define('LOGGED_IN_SALT',   'u*GHseG34lZLu-zdddMrf_+GfS50!|pUpdMuIC[1nIB=r@4Ct3&={;O* 11N|5Ub');
define('NONCE_SALT',       '=K3.` !u4.O3&)O;Y]yAq|jG%Mj1rmGu2qQ%r,F7W+ghFoh?<{mP&K0]EgR$L!U*');

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
