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
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         'h`z56E;9V,MfSTK&NGeLtR@HmZxGxLf]+-y({TmRy!4J?j2b=(>:oae||zrOV,^X' );
define( 'SECURE_AUTH_KEY',  'R)bSOQ^RIfQ0NTOI[G4zHU7_JgCr(b4%w8Z@mW__,kA PO%da;Hy6`+Wi{k>g 1o' );
define( 'LOGGED_IN_KEY',    'av:nnVWZ(_KWW!r?0tN6/2Z^>T}z48tY~2lOb0Ud71mKB[o@Q2Q$2Sl qavXhAi3' );
define( 'NONCE_KEY',        ' lp2}&qcz[*T)[cJNbS50VZNwd/>`j08xtc<AW5d[fI*WSUDP7/KF`?k:O~o!]K?' );
define( 'AUTH_SALT',        '~%n?PyLJ%m8.FWC_lH?NMy^bx&.K/],[Owt37c~Lnifn{,FS!_rO-6Hojr#BPX!P' );
define( 'SECURE_AUTH_SALT', '%A)H{G&OR{cyqJ/$e`lBT$q7!1@h.IDs:o<4L>r&BR*gYqeE]XN.M}`+9taB_|vH' );
define( 'LOGGED_IN_SALT',   'Iu-(?C<Nx7@LO/bnv Z]J qo/ha]5jhh?vy|%t;+h}A3JKWxVu8Lfk,V.*,P.%=P' );
define( 'NONCE_SALT',       'ui^[~Io6ivXu(i Nsl^_?()x2nIgO?Dienu=tJ|`;RCqY<H dft@6*MKj~k:MKg[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
