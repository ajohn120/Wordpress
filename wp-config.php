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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'fulsail1');

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
define('AUTH_KEY',         '8-Zu$9@TjDYa1l,)mIW`d|0z<VxNF%~&u-r1htd;k5T0?;|T<Ivs3ex(<+$cXL/G');
define('SECURE_AUTH_KEY',  '~X Mj2;B{.n{{&yI%W1~0o!ANY+_>OPT5nG8DT:_.Qgm,6p|LCXR+f6h<k+81TK+');
define('LOGGED_IN_KEY',    'B!0}n.}bqGXaC$HTGm?xQJLIbMZ?/tY.KfKy 71vPjzdvB;ck;ni%Mc.qyP<sEZN');
define('NONCE_KEY',        '|v+G2Quly7P9Y KZ3A(XlTPbT[Bo/Zn6np|:He-bTk]a3+%8FPsKjVvebso@Sg4B');
define('AUTH_SALT',        'TA mZNa<RrVIZ90&|is?-xB-,Bk=eYp)8>i~QWt|Yxal,W4m*<N&ewm{K4]| W-N');
define('SECURE_AUTH_SALT', '|+;!uiOCoR.j6i&xL&T$~}Z|U:wpp!VRe!nTO||:Ii&s@LF/W nbM9k{OOM+cun[');
define('LOGGED_IN_SALT',   '!UJy$x[0Y?Pkm`Y~D7]{xT;{<ZW3^/-w#Jyjcho+n*0P7a*55rWJn8bB`-^&kv /');
define('NONCE_SALT',       'X4|gW+50w+/G^r;r&*+;,&4Fgd+d*Hy!K+IV(F^yzy$sV[3p0zHCd8(S3:a:UUY(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

