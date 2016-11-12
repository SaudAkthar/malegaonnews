<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["postgres://slswwdrxnkgorm:D5a6mSKls3wjgNofE7y8F2CVdD@ec2-54-243-200-37.compute-1.amazonaws.com:5432/dacea8l2orn05v"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('dacea8l2orn05v', trim($db["path"],"/"));

/** MySQL database username */
define('slswwdrxnkgorm', $db["user"]);

/** MySQL database password */
define('D5a6mSKls3wjgNofE7y8F2CVdD', $db["pass"]);

/** MySQL hostname */
define('ec2-54-243-200-37.compute-1.amazonaws.com', $db["host"]);

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
define('AUTH_KEY',         'Z}^%rWFkNPV6Ng4]C;yf9BFZA5yM3?)(K-:8/0mQ+K4)RM]!$q9&><)?Xk{ k_Is');
define('SECURE_AUTH_KEY',  '{E5Hn%Be$/5dg[U26%)S2-S>m[_)K|<t`qlI[2+6X@hGh1](Ot[-#~]J5[:d=mN9');
define('LOGGED_IN_KEY',    'd%PuF8GnQ6Hu7 /i@GD.v8;~6iyKJ^76}{pmJ=8<ZXY/WQEY8W=<2_+`kLyff]V,');
define('NONCE_KEY',        'dwLf1g+e=[+CVzw7EGmA+Uq.}-(DVp@A6[_+B+BXBPohQm6)Y#HE+Z$!1(L+x|4|');
define('AUTH_SALT',        '`-Z!2~hE&y9o=[RD9T3:27S/z-}&CC=0u#P_J/T0Q[Z{!eQ%k_:.tD#tU0Ah|ZS5');
define('SECURE_AUTH_SALT', 'UrSYPK*~]ED=%x|+1>8~a[8YeM5U&[SmQh+1c?XHZD^]5[#2-$;M~$dw]QTK!N_|');
define('LOGGED_IN_SALT',   '[}X?GH1}(`L%O[qms6!voSe=>0i-BL0Uf2jISxT`WxgJynR:///@<*!:qICQkb3&');
define('NONCE_SALT',       '(X?)F$B>-*ZX8[#y,eVi}]ct[<v.90c!lW+Fg!d<>N5rpG-`~8QRhx^cst  f9/4');
/**
*define('AWS_ACCESS_KEY_ID',     getenv('AWS_ACCESS_KEY_ID'));
*define('AWS_SECRET_ACCESS_KEY', getenv('AWS_SECRET_ACCESS_KEY'));
*/
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
