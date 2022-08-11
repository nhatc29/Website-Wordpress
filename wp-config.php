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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '/97x, 3OC(<vsy{!ha4d>sA&]C^4gA];g681>D;U*x|d)@^*7v{r$8`tQUyu>fr,' );
define( 'SECURE_AUTH_KEY',  'I$4m=.cHd#n|/`SCEUrH ;0qr9AP!H^yhMnM#;|D:~q)V{?>zP}Z7qMvC[ buF!_' );
define( 'LOGGED_IN_KEY',    'Hr}Z&k0rs@>5bx{dqL3Tfod!wU`tR`V&m]MF-K?Zw2Lw_w/L-9pQy!y]b]-+MKA`' );
define( 'NONCE_KEY',        'Hsell*sUu/<>T.dBBCqOJDIUZ]NQL1mUP+>VH<:TlE<bQMLre*wdOrZ<5EPR6w28' );
define( 'AUTH_SALT',        '1n3%#aH<ivmOW5=*VM.oj>EybyHv9vM8R1KmZFciG_UKoje8|syL=&ZliLlZv4sV' );
define( 'SECURE_AUTH_SALT', 'N*J2nvx6pc4bM7Ig-YQZRz;eP7*nTTHx5j1;}:!gPVz](Z11/,YJeTqGr 0eXJm[' );
define( 'LOGGED_IN_SALT',   '8.|ookYVU)?%ZjO[-q28tZ/-%L8R,:.h=DQ:&3#[oo`;a?rZtoEIv>f2r`2qz@hQ' );
define( 'NONCE_SALT',       'smd1_/rm/nF+_j#v3.r,SSf?ekarEPR#R@{l@SG5SJG)kp&5>dk`em:6S$x!<PDq' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
