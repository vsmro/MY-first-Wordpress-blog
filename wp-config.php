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
define('DB_NAME', 'wordpress_test');

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
define('AUTH_KEY',         'I@jdq{.q8B%@VJfy9CFH-uH}5~;@m}a.R/5D>EWn)ucW}PQe&0o4>i]10i{D<!Ox');
define('SECURE_AUTH_KEY',  'a*>Fc?0y[Ab!w4O,&vIc7,vbg9H>hVIztjoA8.4_v$gp}aB<J9<XH[j=b+jzOs}F');
define('LOGGED_IN_KEY',    'GZe(Pt u3aF/_KG9Nw4Hg_&$toJoWWv>FD2Td)/FfI m=$Zj3$641p$]YpU1S(|z');
define('NONCE_KEY',        'TdbS@Y@uCU,^Od*8H#;^|j~56d`l6xTf$?9HRs?x@;xEx[Ej~.nYgru>8=vC!iXj');
define('AUTH_SALT',        'Nn!xi]Z05e_}4x{)TY@Ue=KQ o.Pgriau_hna#XpiztSQm01Boc0$F )!f=ymFoy');
define('SECURE_AUTH_SALT', '4 ml@I[#A!^1Km+<}dlJmLk8~{^jY cCiNLSXJCjvma~BwfSdKZZmu!tMS{1Z.kG');
define('LOGGED_IN_SALT',   'oxzX@57kmsab$0<d+Eb<$b?O~44<ZZ$66OZlU#y#|B9vS3?[Dy^Dl)knoX?&uxa>');
define('NONCE_SALT',       'w_&i/?qLiL^S>-MXnCR*HgO0*RW+b7oUWZ&]~6N41Rq2yH$Ap@6F/JY?2u1YW#;S');

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
