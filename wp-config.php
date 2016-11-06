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
define('AUTH_KEY',         'fo~*=e|Etl!Vs79m8/LDXF^a1(Yi6$#(Al$+Zs5xuY/v0/VEJ{X]ZO(R2k{gF~%=');
define('SECURE_AUTH_KEY',  'z:z;!~]xKs@]cnYD;]*973Nt?1uc%hCt|nz8l23<Bm1UQUHH~r Nojs`,lE|1|F)');
define('LOGGED_IN_KEY',    ':jJR5pEhENUl.`g)TASqa6Z|tlt}M-O<{KO2KBKO 3Uqv~{yJt%Z+ps,y7{bq6sm');
define('NONCE_KEY',        '$E^:p:~m$u=Fx2H:5nH`QFNs9Pz<|HP0(9JOg:_%Z6]2cm|!){=8L=B/J;t^h(GC');
define('AUTH_SALT',        '(6U~UWa$X4iwz+H,)xQzn]vJ];#m=e?F0vzC~K+ecg,EIowI5e0)AbD[hws4PQd*');
define('SECURE_AUTH_SALT', 'J_2b8tbee7PUoKh3N2}:vsP@*Qb%,k?):dgsz0;D#p)WMcv*ni+Hh6P<[ _ai9m3');
define('LOGGED_IN_SALT',   '&xLQ7,Z.[Fmt;haKe_~E.wrQH0sBrrd7}?}:tCh6<Kn u.YzkpSxUK`}e%23$pDb');
define('NONCE_SALT',       'aiv>@Fw9_2Dq`HlNdLws>:p#7]6yg/QpPa1bCf.OV)yw}T>]a&ip[tFWWsx6>al!');

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
