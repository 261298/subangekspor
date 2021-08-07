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
define( 'DB_NAME', 'subangekspor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ')K?C-wm2l*(wp_I]GY/w,3y4a:hM!7y*bjXU~ie/OE6^roe H{{>j(70FSZX=fq?' );
define( 'SECURE_AUTH_KEY',  'X0ErQq{`SxD6R{0ps.KrjnYL]H/Ahage*u>llq,,}cRE7ks _cmrCiduW+_(tD[x' );
define( 'LOGGED_IN_KEY',    '6W`@9PaASm TeIpNFX9`[V$t5;bx]p+IRocGu3l:(k_R tFtz_c{2BRk!>/mJNtp' );
define( 'NONCE_KEY',        'G&*sE0N.D0Vej^S}FPm6P.KdkawWi]+zm+PbwDZMo+G#<BCruD&4e:>{rJ^m/)ey' );
define( 'AUTH_SALT',        '#;9~4X?[Ar8{^&}yaKYec0tW?<>:8@JJ>H/b8*3k(yIY3JqStB$})=lg}lrHkPA!' );
define( 'SECURE_AUTH_SALT', 'nS7,oeuu<#5D=Jpg>M)474d0hb@?w2P}ozR)=W8DfUrIjT3.)IdC.=.`,b;;/`q2' );
define( 'LOGGED_IN_SALT',   '&r@K;JZscW4vE(MudW=`W4NGDr^B25rxeM!oQ_R3a(B$KR(@r^lNIz{H|=aIr`E|' );
define( 'NONCE_SALT',       'J|`QW7K~5)22;.uV [!B|UBJ&M_bGy8kgfWeH7jHC1Xch DNm7eEV/3Z06#bF;Tc' );

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
