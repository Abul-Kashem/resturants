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
define('DB_NAME', 'db_resturants');

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
define('AUTH_KEY',         'EXzDt=<QI:O9_7pAhsDP0++V5ShB=xSE=c~cM7F~*<b#Lvdk(_/qQ5a1[nY,^}%Q');
define('SECURE_AUTH_KEY',  'hC>G$DFXa5TewlWqi+?&8_.cIsaqw)hDE$S+tO^i5snsOQQ<J|Bu5 &@Zo/DG<Ct');
define('LOGGED_IN_KEY',    '^sG^)ceW1N@D(=DU[)MEzvQ~{bCK&Ym_u=$=?[G[,cpGyg#w*cq2Wy)ZUVgg04=8');
define('NONCE_KEY',        '_}CFX#2<Ip6{NXVFEbYu!AW}|2.fNyeNpJ{?3?,n4TOr@{v#I,Z<U:8hXdn.SFQl');
define('AUTH_SALT',        'm=b;K2zn;D@DlDuebghRt9GXi/cQ?Mpiu^>@o[o@(a62DmTbe==>RMC-s!yTIo=i');
define('SECURE_AUTH_SALT', 'KmpFSth]o,DfO1|*:)!%]cUTx$fMG|k)F2]KxQJ~4K4pbrv4!juq`&@IA3uZo%mC');
define('LOGGED_IN_SALT',   'kh+yWW6A{oCnH9+oMj.<0^2|0|Y|A5uj(j.? 2Of)yboJ+j6nL(8Ujlo;ttB._2J');
define('NONCE_SALT',       'XHg?L*kv~DT flV1Bn_Oj<#]qn/}VT!`C[@@;jQiUlhIK-6KMU9_wC^qT_t|Ju8r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'restu_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
