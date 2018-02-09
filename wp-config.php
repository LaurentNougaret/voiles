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
define('DB_NAME', 'voiles');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'W!C%y)15GeNgzS$(t8g@YBbx,A5Jv|aWT04)Rw%zQd6Nva1CvEhoG^n~~.{lRjS`');
define('SECURE_AUTH_KEY',  'Uj]iGCaBL;imF~xMkHTLjUcuc0|]2uc&R=5[k3bO)C.De&..P@Bqs%J8 {cx(]?Z');
define('LOGGED_IN_KEY',    ':VYKKl_90:gEST1RfPsZ}Ma#swhMT|:Q=KBlrD~7To|ydZfswxL%=^nH!ziim(aF');
define('NONCE_KEY',        '(Urt*|+$<0SSbnAqf]Ci0#`bA2$@qLj!y%&{!MrMG9NTFB>&Ma$--=UFx[S<*z[w');
define('AUTH_SALT',        '|=:fcm/c4Wy<Om%f#UTc>+yjziby9Tl%`0O&:wZXO(@wu0Z]1:VxHcz=(.LGPQd3');
define('SECURE_AUTH_SALT', 'YOQa2SYk[n=SNKzw/5Hy_,5tPMI[C$fP&K4v9eI8MqC3S,{UtasetaL?LXMLyGMD');
define('LOGGED_IN_SALT',   'Y0d7j}+,ZFV4$km]9VA.iIp6m<Jj}Ca.gbN.=~q]@W @@cv@d3*Ew5B~nq_Kx~hq');
define('NONCE_SALT',       'XZe}%H5eUSrOx1u?IHYrPiVM_ fgT{;rZNZ]x[Dn2*t/H^cK`xm#6jZ1[7/l$1pA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vl_';

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
