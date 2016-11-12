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
$db = parse_url($_ENV["postgres://dbrjxaklqpfyvu:QP8gCX_YXyyLknf018ylraRTz7@ec2-54-243-231-255.compute-1.amazonaws.com:5432/dddmgdv576p4o3"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["dddmgdv576p4o3"],"/"));

/** MySQL database username */
define('DB_USER', $db["dbrjxaklqpfyvu"]);

/** MySQL database password */
define('DB_PASSWORD', $db["QP8gCX_YXyyLknf018ylraRTz7"]);

/** MySQL hostname */
define('DB_HOST', $db["ec2-54-243-231-255.compute-1.amazonaws.com"]);

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
define('AUTH_KEY',         'PR/#Z_]]%))Inf=6,y!D=3:*)mQf=!0YoLot|&k;-1Zgn3+Q,c^(N|4!vAV)FK`4');
define('SECURE_AUTH_KEY',  '-njj.JnA6t.HBs%U;A>R= v8% ;wh($,xm+_1EGS3BjaPhj=a8Y{i>}Qz)Ho[[ny');
define('LOGGED_IN_KEY',    'KY!%!@z4+XzOjxW_-CR&ae)Dx:4*>O/^9{-q}t,&MNd QY~v},>`ktWd/MU:,|k^');
define('NONCE_KEY',        'ma|[<|sROuCB+8_TT$z#Ni?$]8~ s>a|]mvhX}mm2uE7}cID-L%(0w|u&A*D>DLG');
define('AUTH_SALT',        'X4aZ3|V_45y)}q^koD:b`A5||u0Q}d]BI|xBo;vUy]#!HHi93[c$P1U)!V}q_n-R');
define('SECURE_AUTH_SALT', '-CH)7+vR+_lR7K|X]ZMMcY;n2xqerig@+qscI8DG=?x&K!+7K])ugT4w+ip##hxV');
define('LOGGED_IN_SALT',   '{|&q5Ib=SA}95$RwIxQj#9>Ia($%D[LNj-Ecd34./s(>wxI~ NV}yw7u6Yh]EN<!');
define('NONCE_SALT',       '$N!}>v9B*>0eI[lI2i2M+NPy)#+O{{jZJVHd:|2[pCgvMDueF+Y~;%n71GDb=:*|');
define('AWS_ACCESS_KEY_ID',     getenv('AWS_ACCESS_KEY_ID'));
define('AWS_SECRET_ACCESS_KEY', getenv('AWS_SECRET_ACCESS_KEY'));

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
define('WP_DEBUG', true);

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
