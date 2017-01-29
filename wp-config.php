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
define('DB_NAME', 'demo');

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
define('AUTH_KEY',         'MKV~RhU?]?lFu!CiP1ro2doAdM`;kYys $A~UqkR_J/!NV^xjQ)64a3SmA(=u,(X');
define('SECURE_AUTH_KEY',  '65; Wo6<L5i&E:J}TD~Izu}yAJ9l1qf7 7$N4h6]eh3o$KGhf=d`t#5$lk4]=yBX');
define('LOGGED_IN_KEY',    'g!6O2!mi=kg]7Y}On^KWlR8D=H^Vp0]YqeB/6[k8;=k4q]*8aK6[E+cH&KdGqM]V');
define('NONCE_KEY',        'v}k?Dj(R.zdHjxO/Kf|YgrbBiP(Tnu>:(-QpRQ0X=*Rz;pac,L^|-;$.dXS2bqAP');
define('AUTH_SALT',        'nQ.y#}x8:N:Uu#g KMyARB(wYn oEt#@DPNzyJUp bEX[HD^LAhGd:cPh{Yi~tB.');
define('SECURE_AUTH_SALT', 'ySG%PN2H}1^0)#Gz86Qjoa7I3v>YBJ Vq@{(v@cr{PD 3m$QX#PMeMH++.8w~,c@');
define('LOGGED_IN_SALT',   '%;HX_LS7snz6UO;uBg.o2(02hmh6Pop3[mlAAuX`.W&&|RTB#@M*(_)j?UfnCu0(');
define('NONCE_SALT',       '383?}[&.y_3D>&*:OGSu>G4D1Nh!0g!KVw/u?[f0@,{Oz]i{SZR$?> p)eC4nBJY');

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

