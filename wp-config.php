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
define( 'DB_NAME', 'client' );

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
define( 'AUTH_KEY',         'wj4Nw^|lw*_SjN3VC`1^9WAYW6:1l-xw<d=}&iyGVfEnfC_R_^8$&cGF#nxUU& U' );
define( 'SECURE_AUTH_KEY',  'l!bZeLqHX!Bh5x&eHW8F5*R.A BX7X.fetFyES6i$w:p$-~gK?Ym0.9Vat1f_Ml,' );
define( 'LOGGED_IN_KEY',    'j_fTQhP_JnC!up_Jp&Yvv4RWd?qC2KpjgnT[@CR:o?,m->;z!iD)>58tu:.Tt-+ ' );
define( 'NONCE_KEY',        '_=m3biP/61su!t]r`]#3D=O+Fy%J/h(sX)<x3 #P,8l*uB9SK;1<C[9O6A%W&z=%' );
define( 'AUTH_SALT',        '_o3yk<FT.<gnvc+YSdDx3Etl=Q9W)dJuauUq=0uJko|vA,8m[0S{KzZmt~rA|d>s' );
define( 'SECURE_AUTH_SALT', 'k2CsQq3_93mG>4${ER>L?P,89?oj>T9/VP*,~=UO@[JN:f=]dvn/V8#!&4lfcUn)' );
define( 'LOGGED_IN_SALT',   '$6g#=RHv$I/yRT]jA(x:dHOZ~G-uAL9_;4ccdxR{&w^bVVjB~])nGUPs6(Sk1QA[' );
define( 'NONCE_SALT',       'Lk0!SJpR$[5BZeOaxk3B=Y5kTF?9c|rx5r9[_sGUDUQ@l! p0OZ1#rr{j(u7kZU+' );

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
