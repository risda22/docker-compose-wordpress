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
define( 'DB_NAME', 'db-wp' );

/** MySQL database username */
define( 'DB_USER', 'admin-wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin-wp' );

/** MySQL hostname */
define( 'DB_HOST', '172.19.0.2' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i^HD&_>I4S0<PeUbN>j=j1^9loaP0m1Cn>$}K-r@LC?DbcqG!C7Qilngscm0Rx4)' );
define( 'SECURE_AUTH_KEY',  'thX)e$SX]1{Zh`APnp7%,i8}vhAGd GGZ/aJ6)BZ9uzcmV&[#va~^n>Lt?c)ToW3' );
define( 'LOGGED_IN_KEY',    '^jhqrH5#PY=*ezF)!$Y^UuQ|3|j_GBj**^8vxD$Zw8_Sz|4V!!]8>qut+A+eDz~v' );
define( 'NONCE_KEY',        'e;I,1[j`b0/:6PA7!p3>Rg+ sdQH&w@810n[Bur`$8:cu~wlYm>`jw{}k$-lhvNA' );
define( 'AUTH_SALT',        '$b9]o@:FX4F^qbT6ckXYhX+It~/9iQGyp^um4o.I&h96GmLR8=Qh]V+$[u!RGHvf' );
define( 'SECURE_AUTH_SALT', 'ipBsOCpRmb+dTl?:!4w%,JY4&:vW*Kxq)m3m6+#~{8rR rTx!|2O0eReOCHt9`)C' );
define( 'LOGGED_IN_SALT',   '2`RXlC@3ot_`LO++IVZdLZ#)v-]2*vIq-*!w:hMU/WY+|I:?&RS-v;:IOa+rnl8a' );
define( 'NONCE_SALT',       '6R,i#S0>E~)}fB(>y+P%9_wr,V?jOFJ PuEYlUHNQh&$<gAh:KasN[hm<,0GkaCw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
