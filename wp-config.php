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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'w(=c0PspW6dcRH>-xfCr5pW[Lq>r8>0fa*Mvea9wmsCU!ZB]_.PI>#+b22(c3so/' );
define( 'SECURE_AUTH_KEY',  '{kU;v<zk1iSV1UVwxT,2M0-)weakvdi{9s<y#LdcQDnK3_sByy/B-o.dd!-R0iRo' );
define( 'LOGGED_IN_KEY',    'Bj.#14@b2!&(,>utU`?^uG*.|FN<Bx%&R;!Sfh8G#;l4=JEj^P/g|J-(gKz*a!fU' );
define( 'NONCE_KEY',        'Tc/r oS f8rN 2t7tTm6ysNK VDqb6mUlRb=2^P&] 8vmktYMQkj~+~R{d[#3*L(' );
define( 'AUTH_SALT',        'C^0EfbH@|]N+AcqO$BFSP/@;+t&mSF$BPB[:rDfxaq]a)T3cAIN./,X)a{Ye}CE_' );
define( 'SECURE_AUTH_SALT', 'Re2D6FzE_@66E:q^[$Bkv}qpO9z~jFFT8Q[,7tx %;7a@lleod~ULH7wa*6:S))J' );
define( 'LOGGED_IN_SALT',   '`On+3CKMqxyYUr|KTNbqXsOS85t]S?)8~yw<`Zu[9<1LO`Q;7t&b80!j`,:1)pyS' );
define( 'NONCE_SALT',       'RDyDpNQ;Xr?h 5?,V{8f6;t~Hl9Qz=aW!0Bx~=0Rte4K1jOV{O8;1xc[oBB-^PC{' );

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
