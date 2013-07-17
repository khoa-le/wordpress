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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123qwe');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'X^T#|0-/-<n+W}/*t]-Q@amqB<#H!ozlu+F:yQc{o*t??1bgFj~P-F)m5!;E&K|p');
define('SECURE_AUTH_KEY',  'r8|[tO7}iNlLTG-bN3b3M19?HI[gkGl({/zmK`cpf|%[q-9C9-&K]=5n[Mr)~9{|');
define('LOGGED_IN_KEY',    'N7OQn`Q+I4qL88!Q{k)q)2OQF9ULLFzWY3]^Sify/,i+~BsEe[4xLT$9i:fYiv^n');
define('NONCE_KEY',        '10mr>WM:7R@3dn)F^:2cH`ch:<ruihxlozg?LH}L#p+9[VtIYKud#nW?-.%!3T]o');
define('AUTH_SALT',        '.bRpGQQ>Q#A^VtSm<ROcA6HC>us8_!=pP7AEUI:-Y;g#cluxoGm7#z#|N9Hv,j+N');
define('SECURE_AUTH_SALT', '1;6{6k,O4b{ZUo+VqxRPIO6Q})s2Trz E_ ]4gQ=sh|27X&qiA|y} !f)9+0,`%Q');
define('LOGGED_IN_SALT',   '}-BG5c9 Bv-?s[}`blb=.q03zK`Wmw]&s:+bt.Yf5l[OI6jS93wEa*UVdND6,&+M');
define('NONCE_SALT',       'W1O}W`s{[9+!WF|,!BK46& >+1`F42xt[vCIeQ9-}sd:Mec`Av3)tOnFZgO?A&hc');

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

