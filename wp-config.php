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
define( 'DB_NAME', 'test_wordpress' );

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
define( 'AUTH_KEY',         '5`]3D8i;Hr.^GRG%0G70U-H` c)&wx=j06^J|BE[$|m5i=Ss>5(CT>|%Fu]HCP@S' );
define( 'SECURE_AUTH_KEY',  '*%-`&nilhfPS]y{J^xw:w 9W3w<)@=9rvGnQMfnk6mY7W !v/Y~5D&AZ[6B% lI6' );
define( 'LOGGED_IN_KEY',    'JhhTgV8&}oY*T{L?v4VGO+/y[P_4+&T-p5UYI=.s8g0]=FGa0+gSpoP)*bv_*pJM' );
define( 'NONCE_KEY',        'w88na}FL+_[Bwufnc#[y$&xF75zhVi$7s/4J9(=,afP?Aux6V8Hz!A_R4K7aDyb^' );
define( 'AUTH_SALT',        'je&7wNWI[ChB|E |OO%A(NtQ>h2yjB&[hse;t)z-]co{{4fruQm5$`H0i +Sxz9`' );
define( 'SECURE_AUTH_SALT', '9n]5d{vfU/ot{J.b2=lu(2CbZM~n,zWQ,>T1`XA)q{]SCQ]=3%/WQr2{bcT0qi:+' );
define( 'LOGGED_IN_SALT',   'r)Y2$0g[|yg!?_wHp]O2;Gkd%6&2;/WryWg2Cb;{KEmpZc9ZRky6@XrpH5yi)`7G' );
define( 'NONCE_SALT',       'e!2,<kSMbtUs[_.uXO1]V{;[ACRdZt*&1nMoFlYQM(_v#upW+ D.AZ!sEe:v)@tt' );

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
