<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'VCYuXl0qSXAjUHtsaHkzeDpxMG83bl9MWipqNl5sKCxvXmsraTBLQUg0TmFsQG4uN1QwIXMlR295eUpUTlJOQw==' );

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'R0b`4)TA)ciP$6gI#EzLTiyw0ESeqJ7&U+O:p.92V8<]{+`N}usP*WMwI4~]%AWB' );
define( 'SECURE_AUTH_KEY',  'sSInc#K`&+][vC(5r?xRj5?`)2@a7D9Y@!Bn[~t4Z=^=9n}K_2C%b1U-#d9-uf*k' );
define( 'LOGGED_IN_KEY',    '*}c`164Um0}0E[$:.#|RlYUPS(m[E@3@1w3}pN Opd&<+=ijuQY3s-Bk2AyUrAw2' );
define( 'NONCE_KEY',        'fGB``clAuI3_Y ZG+Qvh6ocO{CFq3 }PQ0& @o75 R374 vp!|w&50^@dQiVdNm:' );
define( 'AUTH_SALT',        '0$ ]5U@La,5<2:+6FGvkTaG5D+5YsuD(/@,q.qs5| MMoabllIY.dhi :k-x$3h:' );
define( 'SECURE_AUTH_SALT', 'gB{Gt(PMNN^!DA4!E KiypL2p**AptxT|o>kOgG]PcrJ+vr^y}3Qhc]? `zhvGja' );
define( 'LOGGED_IN_SALT',   'T+-& x83w1.n5C`yyzuqJc,6{o=D}$6p4+51LmU:n|S<B4^@%3R,TF`?W/K~_;~a' );
define( 'NONCE_SALT',       '&=!Z=3O]^[m_oQ[8~iA6SFQzyj;pk;NV (v*p0.wzEB{)~Vu19^vV*etLpMz[~- ' );

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
