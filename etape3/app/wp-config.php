<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testdb' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'DATA' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_y-!8/u^T7Wa=~@W4/cc*ET48c^,!pxO-e;jMpzle]l>>VlZAYbD[Pa{fgMe6R9D' );
define( 'SECURE_AUTH_KEY',  '={$)q3cL(,L;H2z7gaa=ue 7&&`-xZ]6$NoL(D 2v=Qc2sX>2Nj.vY91%g@fW:/Z' );
define( 'LOGGED_IN_KEY',    'D=p2Lw@YGM!@9tuI4#PJdap?]0}m_qUW8Bf](R(Iup2nqGVGWJK0>sW@I=os#O|_' );
define( 'NONCE_KEY',        '|v|}cl375.SZ2}1E%6_=[~NR_X }b6PM)!AgqHRB~M4)q^mt+?LNyV{,|%ad[hoQ' );
define( 'AUTH_SALT',        '<(C}<NQ<NWMyiXS]rFo}Rh[=N#bdUF?1H;`!nQai{=Ndzp`3/UN{PP6,Uu y8!W7' );
define( 'SECURE_AUTH_SALT', 'I_vo#*u|@P4te]3&s?roCkbFL3E:!]sRly%U*ScDFqm_3nU3y YSSI%K^#a!PNo(' );
define( 'LOGGED_IN_SALT',   'vL~l< G;L=s[u2L.L l0$<?q?;~;WFpj1)_ jD};e{KJ2MPh]B:H>,PEJI!b|Xz<' );
define( 'NONCE_SALT',       '?w3m{p3lPQkdPgddjJ]x^oF+ZC%-1`lh:D$]{pXm-I]>8htPvNQ0!*$YEQSFRBJj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
