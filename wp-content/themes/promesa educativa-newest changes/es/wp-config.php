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
define('DB_NAME', 'db172894_promesa');

/** MySQL database username */
define('DB_USER', 'db172894_mixen');

/** MySQL database password */
define('DB_PASSWORD', 'Now.9537@@');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s172894.gridserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '.Z90%vS6azh)nK^P48u`PNzj[GXMUfN|iTCqgXj{nY<8]6[hE1 5b+Tc?[c;Y9}c');
define('SECURE_AUTH_KEY',  'F!UUw54Jpa.2ZDj!HjQAE1WjrDDrTwa2CS?3-]L`A==F|NAT[@M=2n5Fouf+DHNH');
define('LOGGED_IN_KEY',    'M=AkGwkSxh%]AxzrAkAgO;?g/3DmR,)rVL<;5kd_viW=sB/fCc{|TYB#K*+^>fY5');
define('NONCE_KEY',        'B*|73AT}!]3Oy%(9z4S7y+rc!O{|sg*l1lNptg|+}4@5F<CU(YB}lbS+Zhdhoi&B');
define('AUTH_SALT',        'tbL3DS]qk/P5kJ[j=iRpa`@{^G!`rdX;=@J>wOkxr#w0Q o0bw4#3U:/u#k4h?je');
define('SECURE_AUTH_SALT', 'b_Hz{0g%><Y`Is<beEbO|-rSq?7U4 6|/X0LDba} 4^(8Ij%Y_Nw|ZR8*XM|fckq');
define('LOGGED_IN_SALT',   '>,h/d93k4D[I3PuFu?8mH,vhO:s_)`<:&J ~G6_wp+t@y!iHd;|{Cu=/{}~1KWj^');
define('NONCE_SALT',       '}]qaDh[Q9!+ih~!k2EjzYNk7?bp8*<h.mOm0xKK4[1~AE24,fr7Uw34;I{<8mh{X');

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
