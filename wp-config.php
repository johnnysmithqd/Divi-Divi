<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'divi99_wpnew');

/** MySQL database username */
define('DB_USER', 'divi99');

/** MySQL database password */
define('DB_PASSWORD', 'fuh29f8h9234fh3o48fh');

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
define('AUTH_KEY',         ':U|>z}d/uu0qqtV{NdCS+C(Y]vl$Mz8|Vh`Q>7.=rpzAwARDS+?,}(m5L;jUU)1w');
define('SECURE_AUTH_KEY',  '^13eA&HTpS/E5ge-bu!z-&o-^>`=:k|MphY!pY)02=WPfTCDkE7blHZ>oBzajmQj');
define('LOGGED_IN_KEY',    ']Cq%jr-O5q7|=|p@de~GUEB4xuFQHU`-)&g|}+:`r3u?|v]`)_h6b,>imxnF5$FP');
define('NONCE_KEY',        'T@ 7+{.7-y$NX-y]vPn`XGVvje6S8 PHE;]f1Ou?v.XCg|D;XE11NydR5^twANJF');
define('AUTH_SALT',        '_~hyp~Jb.YlmU4Y?W=w@#|-co4[Xcy_qw|:IGO}t4e}3Opb+aOWXdEEyHh#ef|M!');
define('SECURE_AUTH_SALT', '.tv?hS<|k|!i3@@cULhU[3Do!|J]YrO.Q;B%b&<b~`5kDiYph!|/}-4w,L4FK20;');
define('LOGGED_IN_SALT',   'S/p|fO4aN4u-g/p~Q}},uL6d?Cb+; /j](wfrq|<gP+$kKweo-;I|$adf,fmuZLW');
define('NONCE_SALT',       'jdT<r^70D8(e.agiE{Y]Yh2%8>( )VANBtv#?4~+F+``,xgfb;:?,]o9xgJ;]/||');

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
