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
define('AUTH_KEY',         'sPW0Iv+<` D^=#rEezIxYCrx`Im2sS--|pWNr{P2SlTwB~-}i~?Y=mB.%h@S5_dd');
define('SECURE_AUTH_KEY',  'z<mg/tQ5xV[:}0LF;B%|({u[jU.)J1kZ|6cPue&z.l9nZfwKS_mYXeLPe2W8be<s');
define('LOGGED_IN_KEY',    'er{O[XDa{)V3`lkit#HM|t:1hG9?%s+tU!i(8{aT3_5nqLD+{]tS-&T|)Fg[G;^f');
define('NONCE_KEY',        '~|ITgsKOYC,1WE|`?Ji&hy9RL]jNw)T S|/BzJfTW1gj2N/opQ#wj<TEY7uQ]uWm');
define('AUTH_SALT',        'z@&vM4:3QBS~:2I,2a[xF@4@A6Oibr=.M0eI|$_l(P`TnQ4h2~nj:7_W!{T2{ -J');
define('SECURE_AUTH_SALT', 'j]us6Lk~s@CX.m+6{W?!jMH>/`cR4shR[i cJqy`M&7r YL4veN&?VXY#RcvnqHR');
define('LOGGED_IN_SALT',   ',+ZF$1H,G8!VV<sP/oNTDA8];{Rhv{ gddJ :K(G[}Uyr1ZvXpZn1t&?LsOvU5,O');
define('NONCE_SALT',       'e9p[J>M. U6NHX-RVA+=!=-,S`6z-1% !s!_8JPc+ih$*LT8gl]w$bSF?~~Q::|n');

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

