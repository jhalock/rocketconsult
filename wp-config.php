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
define( 'DB_NAME', 'jbd' );

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
define( 'AUTH_KEY',         'p%/-Cu88y:MU)0}kzsOd.t&KT` B6T+*=ib6(2vMoi4K]TRS:RQm3@L,dI}^oas>' );
define( 'SECURE_AUTH_KEY',  ')l:EK/jJw h^;m/ausvi+-yFm0,u9!W6D0Oa!+j =-o/Fn .E=8q>+kvy 75fhWu' );
define( 'LOGGED_IN_KEY',    'j0#~KS*>EKw61(9,khG`YrHS#WRFKTzpO#B~C%ue-aA~LP|wMWqv`qYO/>0Sj~1`' );
define( 'NONCE_KEY',        'n~%Em!tIx>S8<o /$?r`&<UzMYE4YBhz{{7wr6)!$l(Rd7%5F>GpvEG6?;HFnS8U' );
define( 'AUTH_SALT',        'GsLf6<fN5YRb)xebfygZ7Iq)T` 6@c1:IhWXa78%=U}Y2*Z&Ce@@Nc=_V8:_?cLj' );
define( 'SECURE_AUTH_SALT', 'kL`e(XRvYi%ErY||v~2tj#fBaa.Gw Z.DQxH_>Uj6phla<r[MyZSDc^xT=!Fj;Y!' );
define( 'LOGGED_IN_SALT',   'NzPHL>v)PJ~?B<J_s{],-N+U;^Q.njiwUD;uTQ>gOxV|XPq!M;oD.*kMNc U=_zh' );
define( 'NONCE_SALT',       'r}^*+B6-EF*%f[TNqX?:Q3iM1:oH`be(fiSk#Yag0pWrH_D^y(g.CkJ4~2ke]K@M' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
