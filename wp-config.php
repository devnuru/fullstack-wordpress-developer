<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'K/*?GL P!5mez7REOCl6gj+`j:+Cyk+FF$gVjKPY*v`!ytDcH&K*ad@1}BRxKd8~' );
define( 'SECURE_AUTH_KEY',   'JtI tPyA,tnystb#1D/krZZHO3S:oB^=)x[nQd22FCN@ Z qPTbys(nOB.)m6X)o' );
define( 'LOGGED_IN_KEY',     'wM!en:O f7S/7Auyo}1/z#{jHg?2So&a|Z2w6uvX0=:d-;Y$jI&XCuSc4?[>oaZi' );
define( 'NONCE_KEY',         '~M[|7X/k96mo6mvu@&.chGW8?owS,MIb)~L d-]wK*Tr-A.H]E1o?fz1v7iN]ov+' );
define( 'AUTH_SALT',         'XNNSqVqu^y55@|(sH[K&gm!Ch$%I;qtkU|9e%,Nerg@P}!NphOy~imD3Obc67u?k' );
define( 'SECURE_AUTH_SALT',  '}TBim^u0zB|))$]}z{-ZR&w5#|bwC=PHSKyrSH&g8JLD=M=3b{81XAH)h|t{vw5Z' );
define( 'LOGGED_IN_SALT',    'hK|{2hzkE}.Rq9[)GIc,.-lz&-1InyI`*TrT7Dfz,]EZfg8sm9)yji~:!T wH3m@' );
define( 'NONCE_SALT',        'FZGY$/cg*ZFS#_{i&,W1;-ASg.|<Q]|IrN)$&yH;VFL)>Zd0aM+z+S^.m&Tr(:s/' );
define( 'WP_CACHE_KEY_SALT', '@{eem$N-MFHV.:GE+y=;uh>DN@ZcIWimC(Mk.5y%-~3Xs1[=DTu<ZI[PKz}UO)| ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
