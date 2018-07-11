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
define('DB_NAME', 'ACT01_seo-deploy-seguridad_WP');

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
define('AUTH_KEY',         '5TRRvc+7{?nM=zDTe@ssL~0enUVX?G?X0S~D3*(+V&{E5F&e&#fO5/]I~^O5qdmU');
define('SECURE_AUTH_KEY',  'DdOGAvoNlKmJ,N6_#pp?;fsD!:W-`DAe4Y}y%b.&xS2pbxdsW]E!_vK[s(O_:JG2');
define('LOGGED_IN_KEY',    'bV}:]=3sBL[`3SWtr4JWH{o^(LC[hJrlix)bx(AjD3j!Y#L~[NB#HL,JK#<mQ0,^');
define('NONCE_KEY',        '3,[ucIf(vDCS5ME m7I*4>@f,[X7ouxXDTXSvu 04+@.lPt@fm5*O(1epPL~Xv1:');
define('AUTH_SALT',        '[{YR:A(S>@In|:;~xBjFQ14pgwSvGNT>),;ymXtZ};nv6dz8_(kgy:B^odR?Z,[g');
define('SECURE_AUTH_SALT', 'S)4QBzVg%atg!Ng`<Ofm8g7G5AP2Cl]5lOikrbz4Kd/{s*w0zf)d=a}u/,}V`3>W');
define('LOGGED_IN_SALT',   '&8`,>VN/U7#mlw;xPJQIjy|X[Sq;Br{l4?4uNq<w`ARlXuj0c160A0anS=_a}A?s');
define('NONCE_SALT',       '<]!sb]lD3]Ik1w13&/[nkj]&[9m>]zD5Yw](K0NXsdzuC<)R$}-HdW_j*-deS+lZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'seo_';

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
