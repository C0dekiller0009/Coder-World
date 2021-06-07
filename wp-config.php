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
define( 'DB_NAME', 'CODER WORLD' );

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
define( 'AUTH_KEY',         ']gQQE|_EJ}lf8N:NOLb_&7p2E(;bjr%dha<7wnRY4&kWT?HLCj14_n)4i,429W?>' );
define( 'SECURE_AUTH_KEY',  '&hVU,pr )gPj]g(X@#We[L(mkq(|s.o(7R^cl1tx[;jpE=;o5(?+2]xkHii!OE$W' );
define( 'LOGGED_IN_KEY',    'od,_DI=@/8~h$l,kVvsyHMi[EhuocGd&&p=K)pFv!NF([S<Wr(It(O!3#z e.N,S' );
define( 'NONCE_KEY',        '9%0Sf1;KZ>job&9Ullm?;}[0u]TdC51+{TjJr${NoJBGvWc&EfezV-os2/&jW1sh' );
define( 'AUTH_SALT',        'IWaFab*2R][5:M_Z_@4,CJ$(y@TW rFa<0dVbuO;;ij<G{WOKjL+ *oog(ht;J;R' );
define( 'SECURE_AUTH_SALT', 'f6d{)[|u59s~ev%Wk;I8mqE^x70;hY_v<C3As2HeCHcw1>aK 2]HTfs=4(/?d(Cy' );
define( 'LOGGED_IN_SALT',   'N{3}*eiDO*>bnHdC!jN1 VdYBz/+fG>U|0t?=+lBTe>,Bt;6X8zfr5=-toY0R3pS' );
define( 'NONCE_SALT',       'fq65{miVbgDU/Cbvt6^/rUrU>fwjvp0ZQ!8Ex3En>Jga`T`9-DAJ]j+je3`~d_&e' );

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
