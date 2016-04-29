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
define('DB_NAME', 'cookiemu_ggal');

/** MySQL database username */
define('DB_USER', 'cookiemu_ggal');

/** MySQL database password */
define('DB_PASSWORD', '([;3P-Uo>0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1gOU1,1~Mc(xt:1CW]RBjBGzp39,rJ:@6#6vV-SpeRl>fT~,oeMefJ|hYSU>79eq');
define('SECURE_AUTH_KEY',  '0cEZ_+<<iJ:1O?I}RA7.L<=^l?ma}jLbM3|~Im44m>1(`g5pNDNLmx$Xv>@,#tfc');
define('LOGGED_IN_KEY',    '(R3|k0.>Zp40{1`f~Jw,$90LOXm|!1APG@m`?Q454=m;nyn}xkt Zd>TA?z0vBUc');
define('NONCE_KEY',        '`8?3&&@6L4.$ktuBgODtuxV!~)PMWyKoTsr:`Eno]52:Q`qGW>Bm/m3EtbG+1GOS');
define('AUTH_SALT',        'N23oJIEZ;C91bO}KFSEiH5*/OWa;R5I~@5onHm4:$+4nZJ+><[&=xZ0&I~g}TVKI');
define('SECURE_AUTH_SALT', 's`;cYgXn7&c5)XT`s4K9&doU]8<QR07.:p`owxW2a(Y^C;LbOTKx|$e1vcn*h5#+');
define('LOGGED_IN_SALT',   ' cT+4/:0GSk<Dae/O.++UiXENSs{laNU|uKCqudTzY-r-WX%,?I9nWAHS`uCHcqu');
define('NONCE_SALT',       ')A^Mfax*W1y/^6h0+qd{=P}CKC]`Mw1yp-8(y.j+CT>2u=O]F@-F,c uw%@F!px8');
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
