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
define('DB_NAME', 'semarblog');

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
define('AUTH_KEY',         '^%Ci)hq@An7BzhDVVj@Qy9Ur.-PVq^?)EO3804d3da*&YwDLmM@YTA<7|pcnz8X3');
define('SECURE_AUTH_KEY',  '% _Pzm7[{/bVvNvnnR?IDbl4o<g8ibAo%>Fq:GT>0B5R+oR!Ax}bZ]D!.;/BZ<v.');
define('LOGGED_IN_KEY',    'w^x~!},L_kTo%tMZi@hWSE:inr29!@{?lFWgLTF!_3(cTLvPcZe~2L2;XPR([7~@');
define('NONCE_KEY',        '6ZAoeGra5H5Y_UYEoVAe;!9XkXmy< w>aZ6=TrO2mA3Z|FDzV;@Jo8 8fQ)AB}{y');
define('AUTH_SALT',        '-8aPtobtAy=hy(i;.,D,6-`efj<0q4?I8BB^ xO6`{A](?b& O,.YwM]2w%e+ql_');
define('SECURE_AUTH_SALT', 'B6}g.&yteA5+-KJxPu{M:a hk)BR(CF-:oGD}3wB,?0W664uy.RuS^yDyCPYYSKs');
define('LOGGED_IN_SALT',   '|D6r #:iO.o,|2u~/Bo.gTuO=w1Bb3J,BxU.$z8NP.E5nUS_kR//TfrSe7>zV*qh');
define('NONCE_SALT',       'dyvS0hLLsiYo&HR=ThJ87+/cDN00:=q#7//.&GW7O`j`V;{eh=9TunAy%,p%8kxC');

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
