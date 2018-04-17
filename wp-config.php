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
define('DB_NAME', 'nikis');

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
define('AUTH_KEY',         '=$r[g4#8r$_8@m~J|Ym6e$1^L)UEexRdEDnd%_&!q7c;BeHL9J[WwH!lnRrtP/|S');
define('SECURE_AUTH_KEY',  '{6lq?}*NWHo )ucS]^XQE7>S0TS0n^[h%`6-,f9wEDM37ND1.sMHRWovXu_BI7mF');
define('LOGGED_IN_KEY',    'KkNCjQm3,4B@B6;3ZyixPaR!I<o%H-lkZFKYNk`Z}_fH>>MEqz*)Yl?}BJ((:ts2');
define('NONCE_KEY',        '.7sAp[T/{.#R6Ibi#Sm>F&w+I2X(1ry?eql2*iz RUncNFy8Agx*?k6Eto<MHnT5');
define('AUTH_SALT',        '^R$Vqjk&u(Xe(w^6ir3`w!}d7ko%Q.O0@3S^ccDPyP)Eh0A}hWMH!-&>Y2Hw(89^');
define('SECURE_AUTH_SALT', '/v7w>YAJi=zyki`JV@TV-S7gS>+P5};|.D(.yItL6i11PBiYW2s.YT{fp@(!=1WT');
define('LOGGED_IN_SALT',   '^%<wMNVL<W!;]bNBayorPRy 4{7}WhESxFO3T&KyXF[Z@D#nR}WP^]u`#H4r#x[:');
define('NONCE_SALT',       'FLd?p~MH(UDjb+Q]g_>!Vcz.;)??fi`)1.U#>)k<l)o7fOp{0YSj/Ylelz$FZVFz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nik_';

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
