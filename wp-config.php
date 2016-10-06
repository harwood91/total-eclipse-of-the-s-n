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
define('DB_NAME', 'teots');

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
define('AUTH_KEY',         '[_,:<-E3<Ors71FJdozp=}~1u.`p?$ON1 e7U]VZ_3QUg[isuobeJMzK +K9)jrf');
define('SECURE_AUTH_KEY',  '>t5H<OnsysfXMaUi;4>2IjVDRy%%C&o CmAP;+@l=C]bR[djQ,9nGmP,i,GLT{bF');
define('LOGGED_IN_KEY',    'L:bgh}W,CpwI%B+0u5S+:E14[0GvMqf`W%sZsnK,X89%9I3y;$=p]R?|IKlh.,;/');
define('NONCE_KEY',        'H,@!6jc:g*hHZOF_P4qnJaLAPNgY@Z!spTABqJ:uezqADMS52a]e51wSB`x8aH<-');
define('AUTH_SALT',        'x~{:H@[*Xyb5M(Nz|XSKCYVyhe?o8>Y?aEzTz|`~yFY$#43=0BW{Qp^Ex(OKd%e0');
define('SECURE_AUTH_SALT', ']iBH-uQd+?~dkf?`*Yy?xZpD(q#Y46sX%ylPkV`7#FlLZOt{N% /6V._cG~VHkU0');
define('LOGGED_IN_SALT',   'pi 7*soZghjE|shrwS;=Cz*`Uu>}_/+;VdN~hm/u,}g+-26CwM)5Q6%52#vKE0ek');
define('NONCE_SALT',       '|ZC@b~G[8[.9s9yAo|9SQG!K6AXzj^5V_mN!@af: Z0fQ`AV7!gQB[5B#sTkTM3n');

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
