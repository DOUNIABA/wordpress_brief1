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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'username' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '/LqK9AD`2nG+^HaU.M[xNnQRvx_dY@HF&l4z>X/#0GRUY?Vwj&Lh%sV$dUi=y@]1' );
define( 'SECURE_AUTH_KEY',  'r V7g|tC#]lXDzGnZl~3@t@<Z]O[;8-E7v|NC+QQKNKFM=g/.-&1R8*OzzqCd>v[' );
define( 'LOGGED_IN_KEY',    'C>c`/NDHCGMGc#6MRxoJY@%8y>0quGD+mcX2ryV)@rV!=+$F|c~R9p;OPlC-!w:@' );
define( 'NONCE_KEY',        'JR[njE}Q)`8EBn@uop^00wDqw7_1,#6AX1JjQ@G%pF?/qc3)Q?bqHX?j?X%d>zbj' );
define( 'AUTH_SALT',        'mI=Qo]Zm%esy9.Fd=t#%grvX|7Xn@WrL1AoX(yF =Zfv3EgC3|7&nBOm;K9T[p3c' );
define( 'SECURE_AUTH_SALT', 'l9=h_:I3vfH&dn@*!wgML~zh{,!CCHAq12VeBB8k$(.M*I.#3.b>KK$rsNZMGF> ' );
define( 'LOGGED_IN_SALT',   'Z4$zs?[Esc8to9(DcB[);zs-=k-iv!|FrP[`Tb1um%)v98FlVO7{SA}WM|8Jr^oN' );
define( 'NONCE_SALT',       '-8m;t6nI>v8>(&]jC|6UOcG-WdT_o,o1sHB)ccfOclectBfBI-}$~ vJ/B`AkGiz' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
