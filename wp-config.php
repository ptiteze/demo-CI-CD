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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'ockPGgqM<]0FRmC(qKbw$-D=}0?}O;/Zd~W)BW7q@d|Uof(F ^K09wPEZp#*~mf/' );
define( 'SECURE_AUTH_KEY',  '>^h_vX`.A9M)HbvwAzta!{7jjHK%^V^Djq8>}3h&PstJZJ:$$i#bhu6qWQ7wCWrB' );
define( 'LOGGED_IN_KEY',    '{3S$63c(uOa){Y20mjqGqZ]3#1+jFJV6&JATn-WRD:%4Y6uhR/o?{bhLO=Z/uf2o' );
define( 'NONCE_KEY',        '3E.z0z(oNU![+1/%]zt+],yZL^Z&%mp@L2$}U}s6%6UM?mNty{i#*h-nR`&=%1%0' );
define( 'AUTH_SALT',        'Bpb.([+pgv;KgG$ab!E2@]}bCu}xU(yclD+p($oqfbBP^o4P$[J ;{UQMjxP$RZG' );
define( 'SECURE_AUTH_SALT', 'bube|8}:&,33VUr${w^@nLACIv2tfZJ]^9fIuBR&]A8:]dBS@|2]b_O8mNB4G5XR' );
define( 'LOGGED_IN_SALT',   '?|fw>$%T+#DQ2:{UplC=C^O<@yu](jH}K3y3dtjMWf17y3E=O](B`O|WC6 _@+KC' );
define( 'NONCE_SALT',       'DrL<:S~xJ`Pd3:N`c)p!#x5bm]DGxo}?ATX71TAbBvS7d]Fh{Q|1K=[Nx>(6~v02' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
