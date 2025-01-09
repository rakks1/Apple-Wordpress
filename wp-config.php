<?php
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
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         '1uI%MFloM;[Z!I|X{{eP#gXIjXn(=VX*jxV!)qNZh>ZsK(i4%<(GK*T/TBE`FRi]' );
define( 'SECURE_AUTH_KEY',  '<w+e?p`dW&H0N|7!G>^LVhRuYw/z.2o0vA@g],Iuqu>Zem<01-{(z~%M]qvV6nmv' );
define( 'LOGGED_IN_KEY',    'o{N;6!=%e5FOa_UA:MU&WtJWKi*e-mQqK:@S]T?VqrhrP5)BWtfDipjFMQSzd}4%' );
define( 'NONCE_KEY',        '~b_m?x/d&LizllFK[Ak0BkJn,^yzrxVIPQC0RXPg3xBt`3bNLv3QkbElfZanQIPw' );
define( 'AUTH_SALT',        'LmB[lqw]*`v@(Fqu0)=3<Aa-V8ap8Lz*!i/ERm.e~V/Up/m:MFW(pJr^9GPluakU' );
define( 'SECURE_AUTH_SALT', '28w &;1smC2Rn~2r@+H.q}X/@34-t+bU [-oOB|1[pA#Y.IMj&lpq-t<> yJm.Af' );
define( 'LOGGED_IN_SALT',   'YX=sAY|onpoMNpuBFr^uYT+VsxFc:mr:c_sLb(at<agH6#i14R+1!~f6S:$o>)er' );
define( 'NONCE_SALT',       '8as74(|wt_v!?:ZCE_Pyo_U>G9kA~Z^ 0J*j.nLRkcNev8D%NkwhvJg1oU?4Sj/>' );

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
