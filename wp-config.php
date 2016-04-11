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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'l3dUca.');

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
define('AUTH_KEY',         '8spkj*mzD?&AGudRps#&FA/(!6=e m;B-=aa!PCZ$==u-@0:PJbC6ZyLedoAdj%f');
define('SECURE_AUTH_KEY',  'O30O-0W%.EU.d%`H}H+T-0JRn@n([RCl}6+Vd&:d }i%PzD-HQ3>fU_b|td*HFiY');
define('LOGGED_IN_KEY',    '^8?-JKBO{yDj{15%P:aw&fp3%I: anGd)xM!i+arj&ll6};I)@?W,fc^pO_GDfKD');
define('NONCE_KEY',        'Kgdfai M+CKSF7Tngz@C%:0Pjej9qenbCTW=iV8+U+-bOs#?BnzHW|r2i9ZEp&r:');
define('AUTH_SALT',        'm02_q}^dF]7H(TW8^dx9nK%Cz3+S4KO[C#0H}hjS/jBgg~8L{E:L}UdC=._x 9T:');
define('SECURE_AUTH_SALT', '6%d{@n`%h#W=9{Z-I1`zv[D2Wm?s_jw_$^x-ZJ!7n%#epBg5~7 KE&|z@.mSTP9H');
define('LOGGED_IN_SALT',   '#lh2TzNY)_^gss3gA$(*sX<>XZO)M2$GIwh2jOCz4|LC*w=>%6cwNT!GlO n38/G');
define('NONCE_SALT',       'l9o|z;d3g=,{Pagy,0[o|2ZMu,$pzE8AL&=o&LomxAD(&.uD}U}+g/|,X.x+R@Ww');

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
