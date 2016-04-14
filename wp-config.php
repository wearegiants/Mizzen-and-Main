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
define('DB_NAME', 'mizzenmaDBb228s');

/** MySQL database username */
define('DB_USER', 'mizzenmaDBb228s');

/** MySQL database password */
define('DB_PASSWORD', '5S8HKBbSVe');

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
define('AUTH_KEY',         ']d#:5Dht-_GOWd_[19dpw5CKSw~|:SZhos-![NVdk[4Cgow@CJRZ@|}8ckszCJRv@');
define('SECURE_AUTH_KEY',  'Z1do4GRz|NZk}8Goz|NZ!}8gr@^}Ugr3BNv^}Ug>3Fnz,MY^{7fr$EQy,Xju7Iq$');
define('LOGGED_IN_KEY',    '^X^6fq2EPy.Tfq2Emy.LXe<6EmxALX*]69HS+#Oal;9Lt~HOa_;9ht~HS-#1Zlw');
define('NONCE_KEY',        'ubnAMu^IXj{6fq$EPb.6fq2EPy.;Xi]6Hq+<PXi2Dmx9LW*]6ep29Lt*]Sep2D');
define('AUTH_SALT',        'vRz>4cn07Jr$>QcnBjv^IQc,Bju7EQy,Xfq3EQy.MXj{6Imy.MX*{6fq+IT+<2');
define('SECURE_AUTH_SALT', 'I^{7fq3EQy.Xi{6Imy.LXi2EmxALX*]6eq2ALt*]Teq2Dmx_LWi]5ep+DOa_;Wht');
define('LOGGED_IN_SALT',   '5-:d:Gs_Sh:Gs_R~:ds8N@:ds8NzJZ|8kzFY|4gzFv,Qk0Fr,Qg0Fr^Q$brBQ$Y');
define('NONCE_SALT',       'xa]ap6L+]5Lx#Wl1hwDS_1dwCS~1ds8o~Kd[8k~KZ[8k-Jw|Vk0Jv|Vk4gvFU!4gz');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
