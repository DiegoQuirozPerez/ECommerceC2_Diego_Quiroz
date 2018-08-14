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

define('DB_NAME', 'nextflight');

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
define('AUTH_KEY',         '5PVl^9UPuZ@%we>Ueye`j1knQqn*[hT!2Hr`MUU(B`ST?w{e1Of& A{jN-yju)?:');
define('SECURE_AUTH_KEY',  '_S]ymFe.WD[Ez0v6dV3M*#3P&pMcha5gMxX?a;Fq>UTY%6G9vpFK7w*kKrhFs8c>');
define('LOGGED_IN_KEY',    '`+W5E|A2Jxk}LI~9rM5u,wt;|5F0CD*K<^-Azck5NI^EOg%;dC3!hGy``lLB9#%R');
define('NONCE_KEY',        'vQaQamARJh=qYwfrK$G0|)~t1z=)#L8Q!mjPS(ZSj:mA[S;;bo~xyHsDpMyQk3#B');
define('AUTH_SALT',        'qG3 :|!BY}i|$nHgv]Gp-9^U6i%KF]vq;$fBmoq9f@[}6Q%->LGWb&eCFtBu>0m.');
define('SECURE_AUTH_SALT', 'gs8Rxw>#f+Wx1fZ)xCeI]Xv~5wCmp%iq*ir^Hy|f?-m-%86oD`bvVZaQ$ ~)3e0f');
define('LOGGED_IN_SALT',   'ABXw/B>4cPC9V=2)&QbZz8z]GO.:`_ufGA1%Q K;O!A?qCoEv-ppQ},dT3cR9].5');
define('NONCE_SALT',       'y(v(l _Pi~@bLZRD5OC;#2Cy6<?InCstnI!)7Qn5_&EGa+[)V3}Zi_VzEz>?$K$>');

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
define('WP_ALLOW_REPAIR', true);