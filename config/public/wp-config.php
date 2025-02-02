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


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define("DB_NAME", trim($url["path"], "/"));
// define("DB_NAME", "heroku_4eed1f5663e035f");

/** MySQL database username */
define("DB_USER", trim($url["user"]));
// define("DB_USER", "b7cfc877a785ae");

/** MySQL database password */
define("DB_PASSWORD", trim($url["pass"]));
// define("DB_PASSWORD", "db3717c2");

/** MySQL hostname */
define("DB_HOST", trim($url["host"]));
// define("DB_HOST", "us-cdbr-east-03.cleardb.com");

/** MySQL database port  */
// define("DB_PORT", trim($url["port"]));

/** Database Charset to use in creating database tables. */
define("DB_CHARSET", "utf8");

/** Allows both foobar.com and foobar.herokuapp.com to load media assets correctly. */
define("WP_SITEURL", "http://" . $_SERVER["HTTP_HOST"]);

// define("WP_CONTENT_DIR", $_SERVER["DOCUMENT_ROOT"] . "/wp-content");
// define("WP_CONTENT_URL", "http://" . $_SERVER["HTTP_HOST"] . "/wp-content");
// define("WP_SITEURL", "http://" . $_SERVER["HTTP_HOST"] . "/wp-local");

/** WP_HOME is your Blog Address (URL). */
// define('WP_HOME', "http://" . $_SERVER["HTTP_HOST"]);

define("FORCE_SSL_LOGIN", getenv("FORCE_SSL_LOGIN") == "true");
define("FORCE_SSL_ADMIN", getenv("FORCE_SSL_ADMIN") == "true");
if ($_SERVER["HTTP_X_FORWARDED_PROTO"] == "https")
  $_SERVER["HTTPS"] = "on";

/** The Database Collate type. Don't change this if in doubt. */
define("DB_COLLATE", "");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U%%:x2:gJKSq44X.1vE:M?_Ml:t4|aU,Y[C,sDhh^*0 ,Eow?($jZ|w7_leW1]R1');
define('SECURE_AUTH_KEY',  ' 4+#)Q[mdGfjE<y1`3jp/*e_g1itWP!hvA+1Wx?ut(XLI/s(_V=-w-y4`{eP ~fG');
define('LOGGED_IN_KEY',    '<h.K)i-u<lzt;(UluutY+w@xp=#,R?>+@q(ur_vlRWETerHC?so 5<~0~qD?v3H8');
define('NONCE_KEY',        'N<ht,Owa2s+*%&T+S,C/~2nz;EDYE/j*MK:],h>87TXSX]GO@1zx`~>k+Ve<o+gd');
define('AUTH_SALT',        '?n@r_t6QvY8I}CQZ:>j<>D-5;i!_ 8~1L~j6OQ|bhA,) e @NHjT5&:nbSu{JCLH');
define('SECURE_AUTH_SALT', '>QO[,je|m85`ytM+ b/.XGO_#0m#Q>;P>&Vn:+=c6_R6SD|!)$(9&xuqo-K6imH4');
define('LOGGED_IN_SALT',   'uA^;?mCgJ3!RcJK!O?(Dzec1YL-Ie~}.{`.Q|3!x>G `A`=bgVXDOtk2=SnZF/3i');
define('NONCE_SALT',       's63*Np`@+v:SN<Ag`IMb30sFTq/SD7|BMG4X@L,Yu$/tN+CE@;zFDNVleBq0Bs}o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = "wp_";

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to "de_DE" to enable German
 * language support.
 */
define("WPLANG", "de_DE");

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define("WP_DEBUG", false);

/**
 * Enable the WordPress Object Cache
 */
define("WP_CACHE", getenv("WP_CACHE") == "true");

/**
 * Disable the built-in cron job
 */
define("DISABLE_WP_CRON", getenv("DISABLE_WP_CRON") == "true");

/**
 * Disable automatic updates, they won't survive restarting and scaling dynos
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/* That"s all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined("ABSPATH") )
  define("ABSPATH", dirname(__FILE__) . "/");

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . "wp-settings.php");
