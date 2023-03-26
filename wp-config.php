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
define( 'DB_NAME', 'smkit-binaadzkia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`,.(;C%>6*,3[=u>>a7`c.h/SSo8d~yS,J8+RDzONg3>$VTUTf6w21U^TYD_g6yb' );
define( 'SECURE_AUTH_KEY',  'Y=BsO+JP$B:~T7q(=`@a)22k_YHr7f8a~}%;DVDopB~jEu)oS(^0@.Kh3(L W>v]' );
define( 'LOGGED_IN_KEY',    '{4xRO;G:<8H`BcXxMhW$|sn,3`(MuKU_KJ0`|Q^sjm?6$C&RXDkl)gut!{A@xOqs' );
define( 'NONCE_KEY',        'yL.z:U(S=bMf<iFy^%]N:3>]Ed-6(VIBFO!IsSPl>|O +Bh7S6U3$S0-MKx~/ -)' );
define( 'AUTH_SALT',        'C!#?Tvem,ix,P:*$Fb:C|WOBJpF$@$qw+=-mr@FDD~d:9n~CL@iBUhPYCYsOuaX|' );
define( 'SECURE_AUTH_SALT', 'QB!1;Y:/((}5z^L2AZ{FQGCJbqx,0]2y dQ#-,/];Hz+yg.-1:-aa_(XyeIXywmY' );
define( 'LOGGED_IN_SALT',   'fOOjJ?,KC`=/z7wZ*`2LRA1`jY9?3fMV]<MN:7}novi%v@Xf[.,f_X)GS~kN~aDS' );
define( 'NONCE_SALT',       'Z54#s-?|KnH5{ShUj8f7s.WRYk2}F:ql&CPbp$:UN>i_yi5ARgv*si{[}P~1B=l)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsmk_';

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
