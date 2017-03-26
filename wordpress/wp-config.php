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
define('DB_NAME', 'coffeereview');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ';v--HZ>fyh^cD|kJi{}q7pc.S@zu!Nc8pDb?6~S|AH6N3Js!YAxv>&J,M+9-(js+');
define('SECURE_AUTH_KEY',  'OPLF#_.;z9_grwZ,d B8gQr#+pUMK`OkK]QI$ClxEK`%#YXSsKOu>-Zj)+y*T].y');
define('LOGGED_IN_KEY',    '?(5^6VR6ES/(xrbUi!R|O!O~y0V*Xa_2R6zNw`o1a;c2K2uWKug0QTt./]iy?Ig)');
define('NONCE_KEY',        'fnP+U|_FQe.*,kA^_fQ(gvG4QSrHK.7dlhCwVi[{:<0xjI//rXvPMS)U0r]%h7H+');
define('AUTH_SALT',        'Uq.U@7DCixUp7jVZ:+c$$CcvL]9>>%qt6+VWO]+MqqOsJ*40$_d|CO[2C<IqD:)3');
define('SECURE_AUTH_SALT', '$Vl:KX,e5|Yye3!kM^=S*V |IqTv~<BhpS:G4k-P?g=I},nS}.KPVQv02rp[L+Wv');
define('LOGGED_IN_SALT',   '=Te7k*FN@S|?+xS%o3@&+Qt_Z-8i]7N>:Oa-B]8v?*5Sz0ECesR-><|-:H`!EhMC');
define('NONCE_SALT',       'KJ*lmLX+Q(pq-gH%g[{P2nAG4K`|n6zk|W!WYI+eP}#L ?K9iP=%dgV|OTCorIGT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '735hjq9da3_';

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
