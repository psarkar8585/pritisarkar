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
define( 'DB_NAME', 'pritisarkar' );

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
define( 'AUTH_KEY',         'kRx;,3q{Obu2.S!s|)NNZP4F?4#>pd6{.zqB eu dCRhV.BLSI)r1lYAq<)/jXBV' );
define( 'SECURE_AUTH_KEY',  'gi-//h1#|ttW#|3&8![-F(6]fmw/%.}WM7FbgOLX({3<s_eTwez=<tRbj$@ZG>DT' );
define( 'LOGGED_IN_KEY',    '--Bjsii;RWK{J%:(<0^Z^TdWq4ayThkM=(lC ,uWaR^U}494(b5T@aEd%;E,z5mS' );
define( 'NONCE_KEY',        'Nt&YF2?t,|`-rC&POJ~8K1qm(H81{K4`goI<A13t<K$DzSg{FDhv5au&-l>fi=]0' );
define( 'AUTH_SALT',        'f=e:o`?0L`$aN<Dz5  R0Eu`Blb&_a6kW,Hb):Bj4$/vT7QL?:{t-otknCFY}de/' );
define( 'SECURE_AUTH_SALT', 'PmzEDM}YKPZ#VG)*LjnW+5|^. bYVE0[yVx8BX]t4LU[y@$cnxxB0yWNTj7eg_,:' );
define( 'LOGGED_IN_SALT',   'k&cs]xsAKAKede9e)F%a!Agzp)89rp,Ayj*Rk<^bnW`+iedV D.T~s)1)eIg6$+`' );
define( 'NONCE_SALT',       'H@~$darId07!<^V,h|y3z<z1}t+`2.j$rJ}LIzT-D60D3=H7QJ$}i z m~W3(@7)' );

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
