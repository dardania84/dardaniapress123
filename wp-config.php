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
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"heroku_dd84bd4ff0cfaf4"));

/** MySQL database username */
define('DB_USER', $db["b87015ddb6302b"]);

/** MySQL database password */
define('DB_PASSWORD', $db["3b84a3c9"]);

/** MySQL hostname */
define('DB_HOST', $db["localhost"]);

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
define('AUTH_KEY',         'R#^{scd2JN$*a+3col)ZEi68klwT}46A7&S--lxAaR4#OP!+Bv$cH9<6OYO1>W|Z');
define('SECURE_AUTH_KEY',  'z-UbFbIC^cynPZ2KF>BDKg*XGW6>[=ao,4p3PYU,rb&;K6Q-v++8UO@01GRSB<Kq');
define('LOGGED_IN_KEY',    'OfAb,D~m|vm>V|FVt;]{XNP+kgEYIGS9-<.ERdXA/iw@f,XMhE7MqqKa4i%,7VDz');
define('NONCE_KEY',        '(hv%yvb/|x7j-phqL-@UyR)Dm<;KJ%iW>]X^jD$!fz7rd{8_=0Tb+!E$I@S*H,CA');
define('AUTH_SALT',        'DRJF|up=<6tb#0qMI2X+o:DYu W93gohqJG-[#n-Oh[NK!p10O{_sk*|?z5!u$+4');
define('SECURE_AUTH_SALT', '[sNfN(o|3ga M?xZvB[.Uj-I+lgH(AzdtZ+ZL]9b>=hyy|1,vKlbM6Pk(W@nOVJ:');
define('LOGGED_IN_SALT',   '-Y*Ym&s9!7{&2veC%rL;~F:6guF2W$V^?r1,*5oT&C``<=)z>a=ti_SQR48LL<OU');
define('NONCE_SALT',       'Ko|_RQS*H{ZTg0AAvg/8RiKW>zsB^-5*5hxpP1>l3<La~|rD&_VD_r+,|-~u^(aN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
