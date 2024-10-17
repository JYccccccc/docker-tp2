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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'wordpresspassword' );

/** Database hostname */
define( 'DB_HOST', 'etape4-data-1' );

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
define( 'AUTH_KEY',         '|P;zpmB_wV4MoeO@/)#>xtn[^VH4JCy9c1S9NEv8-{QCF.&X`utbgv6xeeQor1PG' );
define( 'SECURE_AUTH_KEY',  ',+rZ?Nx%XnS>zwvf<ah&#C&MwcU(PU)Vf6/vr+ s#u@zHkhN4.@uRKJ$r8N(L9+^' );
define( 'LOGGED_IN_KEY',    '+ <#7I.h#*mQ}~)|lLG$UeJX*)1{):!M>jRk!9C58Yi9S0qVL5S_N_Gn&eK)i$c!' );
define( 'NONCE_KEY',        '(-LsemXpp{bT,pVJzF7,BTnk+Q8JHn9Oa5I^OVa3Zvgk>D314UP4GmZp7p3NmfTq' );
define( 'AUTH_SALT',        'UuL-A3$m><i2M02Ad2P&Wa[TnUA-H1rxbrX[A(z++{W)?}A08z0]l}P/c|hrzUu@' );
define( 'SECURE_AUTH_SALT', 'v/+E,K>U$f5iP1UEO>vCH: ^C<^nI#ip3lHn4VRH|[2* z+.<#rq&MQg!eRtA#c/' );
define( 'LOGGED_IN_SALT',   'ZrFcB*ajR44(-G@xsA9|gHzjPmKAa>4q$41uFhIyK4ud>--t$<{3 ny3Io?38Vw~' );
define( 'NONCE_SALT',       'q_u(b1iuRo3JNW$pX?L>Ip }S3QT[iei~9ekl*/,/?p02dp_K|8.YUlq9oMkg/.%' );

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
