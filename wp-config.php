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
define('DB_NAME', 'dhanaja_gem');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kang1234@#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KNlcr %SyuKd{P>7Q<rL_nzOPhzW8(_9vL?M_MN(p?[;7agc-x $,skvtI{D>Wy2');
define('SECURE_AUTH_KEY',  'fahPC:k&gQ<&a#}@zQQk7n9?-@.B)jvd!PLkYS/~_$QXmSS9csEvdaYh$_1I.+?G');
define('LOGGED_IN_KEY',    'xnI/fe^|*phCipmEUwF;|@^vv$Ca9lfl%/bGO9~=F;Rx99>FWhDlRBLPU;W6S6BH');
define('NONCE_KEY',        ' ^rb7x~h3CF=K+hb]2hc84&VHI`yVmqSny!TslJ;FKK4;hl_Pf`M}nWYR}6qI$Ut');
define('AUTH_SALT',        'G.=>rNtz5yZ{/9w6r}Y]fH+kq!Sxc>y6KG=UUs6BX?7%#i79H/8pta&<>r^U<i_3');
define('SECURE_AUTH_SALT', ')~Vs.10tCdP4;lT)P8Oy~2d]i[Psxt/ZKd+,2N,P:-9%d|`ONECz+lBNc$k9,Wla');
define('LOGGED_IN_SALT',   '~X>9E>JzB.pa:U.i,qUkNFXR%%(zd5 LS$q]0(2Boh(Uuy7lM`!_Q (MGDMeM~DC');
define('NONCE_SALT',       '6e~rKK:o!U{M6.NWn8-@^|RO4r$WK)l;|;h0:r6y3pUnRSVOdMXM/j6jeu}ZeUYC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xczk_';

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
