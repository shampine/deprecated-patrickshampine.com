<?php

define( 'DISALLOW_FILE_EDIT', true );

define( 'BWPS_FILECHECK', true );

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

$default = array(
'name'     => 'default',
'hostname' => 'http://patrickshampine.com',
'debug'    => false,
'db_name'  => 'patrickshampine_com',
'db_user'  => 'patrickshampine',
'db_pass'  => 'wfVazNvJFV6KLM3S',
'db_host'  => 'localhost',
'password_protect' => false
);

$local = array_merge($default, array(
'name'     => 'local',
'hostname' => 'http://patrickshampine.dev',
'debug'    => true,
'db_name'  => 'patrickshampine_dev',
'db_user'  => 'root',
'db_pass'  => ''
));

$staging = array_merge($default, array(
'name'     => 'staging',
'hostname' => 'http://dev.patrickshampine.com',
'debug'    => true,
'db_name'  => 'dev_patrickshampine_com',
'password_protect'  => true

));

$production = array_merge($default, array(
'name'     => 'production',
));

if ( file_exists( dirname( __FILE__ ) . '/env_local' ) ) {

// Local Environment
$environment = $local;
define('FS_METHOD', 'direct');

} elseif ( file_exists( dirname( __FILE__ ) . '/env_staging' ) ) {

// Staging Environment
$environment = $staging;

define('FS_METHOD', 'direct');

} else {

// Production Environment
$environment = $production;

define('FS_METHOD', 'direct');
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/patrickshampine.com/public/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

}

define('WP_ENV',   $environment['name']);
define('WP_DEBUG', $environment['debug']);
define('WP_PASSWORD_PROTECT', $environment['password_protect']);

define('WP_HOME',    $environment['hostname']);
define('WP_SITEURL', $environment['hostname']);

define('DB_NAME',  $environment['db_name']);
define('DB_USER',  $environment['db_user']);
define('DB_HOST',  $environment['db_host']);
define('DB_PASSWORD', $environment['db_pass']);

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
define('AUTH_KEY',         '9.+-rM&}Zp*R6b:>;4X-=]@o$WbMj!Gp.Iirq|*j][UWY#qh:L|-D8eq89GI[}df');
define('SECURE_AUTH_KEY',  'MGnI]OR-1O &f3y+An:JC;Uu/]Xf&DpBZGL`hRX:90+T^..&x:e%HE]U? e_<unJ');
define('LOGGED_IN_KEY',    '0&]4TNv8%pSGaV_D~B0|kBBJGfedY2%U9HX%dOa-51@znLYOjuoL+~biUm4[tZnp');
define('NONCE_KEY',        '6fMBg2Uw@|It|u=sz ,Lh}6IsE>@p]u-I2pJX`{+Th+Qm]Wowc~*lPz)3IFy6vQZ');
define('AUTH_SALT',        'h(oy/d3]t?)j@d9M=dz;)^7lS-d(%8Bqth:M(b-|d#$E<%zH)SBB}R^dQm;lW:k/');
define('SECURE_AUTH_SALT', 'G1vw4*,;[3zKJ5SC^J|yhUi&^M(y~|mWKQwy5|.-jedQr8y{py;Yc|sb4USUS+k0');
define('LOGGED_IN_SALT',   'YTyrhN}z1w!:n<D1F.lo|QdV^A_V*WqHy%*O1LeH,|,PC-$hj=R78%8+p~kPK#Ia');
define('NONCE_SALT',       'VINdnwdt-/y=Zy8-HxU3C.n`Ay}b=cc->I`qbH;UC~-w)h+!IK9lS*aO@)uV$#^/');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'vpjas_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
