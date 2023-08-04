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
define( 'DB_NAME', 'sekolah' );

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
define( 'AUTH_KEY',         'Q*f$=9AoO&I>CZo!<u`?uD fn~f7W6S<(Kr2VKf`gco{?LD9k2T&O B++mM.Rv^S' );
define( 'SECURE_AUTH_KEY',  'xbO{+6M32yIt{NbHyn:,B1ecKN,?mv^~f$~XI,|lko;H}YlwQs9]jWcRlX .V&s?' );
define( 'LOGGED_IN_KEY',    '!p3cA`~W 3%CtR2R%;S%sp;X~IiJBZDeY&aV2@Xa5-vmMbo95+?=B<(zW 96-YZ:' );
define( 'NONCE_KEY',        '}Z|i$*!Y2VIpj9$Z%YtI]>=`58VZ&)MD_O;ozGFajGr#2xxFQbv>Eqd=QMJfA<qe' );
define( 'AUTH_SALT',        '6`zZze{-h[^X:w4RCw3vb,B<nqt_#,ol{^L]NU<9yqGmr-NJ67EgT/>_(mjY3.B-' );
define( 'SECURE_AUTH_SALT', ';R=I<ex|h4/%8)SBf@~w!VpbB)3l$8[{.LKwAN6@j*@6UBUf0_igdl9v 06Bu[wS' );
define( 'LOGGED_IN_SALT',   '=ZCNre? 0{CN<@`#`$G&^#C`ou,YOgm& }z&2DqQ2G<`xH@ID]~T{7C7|HCAF{dz' );
define( 'NONCE_SALT',       '.2IYP/72%y_t,g`Tt]r-!oc71%^SbfB=mUVfr]rC|N<OBmC%f(+y0=%:KO,<comU' );

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
