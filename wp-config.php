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
define('DB_NAME', 'devtoolsSummer17');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'BcQvxd`$s9A2V)eYCe64.fi_}Nonm[^eIfyV(0^^vxRmwz;W}ba0k/&=f/iVe&fn');
define('SECURE_AUTH_KEY',  '<yKQ2Y^-WEd-C>]a}5.o<)ajG|zBI-_[d2hI.F{ ;WLP%+qNlHpr|j2q]]077dPL');
define('LOGGED_IN_KEY',    'f|b6 yYt6~J~A/&>.ECDw32;6r}!FUMXQvt*bWlhVLYf4(,<YY]n7*?b5/$:Cw,k');
define('NONCE_KEY',        '?(9avkX1;,pxp%]XX0mO5|=bfh;G&H}i+pm_RvR<)2k452u/dbc(v[>Z>BC@ZFt-');
define('AUTH_SALT',        'Kf#-!IqQ5`PDDb|D}LwvgHR^,Q6lSsLM. mE}$>G^e_$fe(*pk!K;g+T:I*9:8.p');
define('SECURE_AUTH_SALT', '$ %m7$LwkiZ$7`@=`ar}l`={u/n<wxZml5!F9tMGtfK[ >j_L|H9[YVQ(d_vZPw]');
define('LOGGED_IN_SALT',   'EfH*)Hnh4+m]Mm1o,Dez.pK?~K2>u($LX@1R%|: ko)uB!OmHzK/4aGQ5hZ^ZUkt');
define('NONCE_SALT',       'FH->48LdI>Ao1C;N55gmU053-L%xj,40bij?S0FFp$n#~.3dbWS r6.Tt.%F)3Xp');

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
