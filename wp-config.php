<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define( 'WP_DEBUG', true ); 
if ( WP_DEBUG ) {
    //define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', false );
    @ini_set( 'display_errors', 0 );
}


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'rajuvas_new');


/** MySQL database username */ 
define('DB_USER', 'rajuvas');


/** MySQL database password */
define('DB_PASSWORD', 'qbwnuxet3e7pfgm8');


/** MySQL hostname */
define('DB_HOST', 'db-mysql-blr1-69666-do-user-7529447-0.b.db.ondigitalocean.com:25060');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
define('FS_METHOD', 'direct');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WP_ALLOW_MULTISITE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`[Pw>a2W]%5A<r{(?gR4eR4yL2sl*jtEx%C^Gf<v3,;-)((ci?+Yn&`=bOf]R^MU');
define('SECURE_AUTH_KEY',  'MS!sS<r#-gYkKni9gZ<6TPp!}OSS{*R7@,v16TI|1J~Se6D0LIYdSKm(_-Z|2]%n');
define('LOGGED_IN_KEY',    '%7dVCq&rnTv>`Ssg.Ez-Bi-kgJqYteM!H`Tlc<JZL2m)>w7KqA.-wO-,#i@ebb<z');
define('NONCE_KEY',        '69x)9J34HGJpV<Bq-+v4}8(E5+R7F!-&pbBdfgEJP-u{}QV&umZ+&SFDT,o(g8$U');
define('AUTH_SALT',        'ZG(UxLxP~a)5[+eQ|XH6,ahA|?~Bx 6olVYrkY^(gVgD;?Q-r!&L+!*l+:IEF*kz');
define('SECURE_AUTH_SALT', 'ohtK.MbJ8~+BXzk7<VF{gl(mY5.@joW|TX6n-G.< g%z2kEDVExLG2qLh=,T6NnH');
define('LOGGED_IN_SALT',   'EKh1YQ7k.&DU(KGtcz7EM-+.0&0#/$iKy1hK`%Ca[i5${_zSz,=VVncojC_za24s');
define('NONCE_SALT',       ' ><wCdF.2pM+V>gB3+k[YD^(_rd.fp|V(]d)e-_,$DW<pu+$oBKpyuU#.btrn%Ov');

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
 define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
 define('DOMAIN_CURRENT_SITE', 'rajuvas.org');
define('PATH_CURRENT_SITE', '/'); 
 define('SITE_ID_CURRENT_SITE', 1);
 define('BLOG_ID_CURRENT_SITE', 1); 
  
/* That's all, stop editing! Happy blogging. */
//define('WP_MEMORY_LIMIT', '3000M');

define( 'WP_MEMORY_LIMIT', '512M' );


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
#define('WP_ALLOW_REPAIR', true);
