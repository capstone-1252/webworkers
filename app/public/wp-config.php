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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+~lU}6dJ!Binx2oToR57+o<*X%Q1Z9NGd*AR??Uh]tP]t{us/u$1.<oW#Bh|uh_@' );
define( 'SECURE_AUTH_KEY',   'rxgw&hcl`ofdc;q[.2;?6E Y>2qf)LB$C,cB15mxWVc.RB6y&LMx`g| H_/BPK7c' );
define( 'LOGGED_IN_KEY',     'hKgi~^aR.2_F]co3S)ds/DS{C+7WGCMmri8wGjva@46~.EyjH0pgs}W9G[nR<P:2' );
define( 'NONCE_KEY',         'n^t=/?FaDih7/m^~N56JJIp#jbvRDMG0MCc%s!T&z1%VL]z{Q}*);]o6pcCyo4fi' );
define( 'AUTH_SALT',         '&pmyfNPI)1,VRy(/pyWbNYQ}TR;llx#kHFQZRK>6TJmkRJBNl9!CMx:&&uX]],r<' );
define( 'SECURE_AUTH_SALT',  'FRQKz%f{JZ`+i#6 7B0[3x?<M=~iqA< #,#ne2bgq_l=pFi!gR2awFw2nXs`?Y{!' );
define( 'LOGGED_IN_SALT',    '$HX)1WxI>crW_hrz.pI={B I(K8c-7ZTwbd~2ZV%>j%*AU$*9u0G:84,H({6B,#X' );
define( 'NONCE_SALT',        ')h)_$^I6FP12az`hr3Gl>%]k5_i9/fW,m]EJ-0ko*{;]C/yK=#j9NpJHx:~re0=s' );
define( 'WP_CACHE_KEY_SALT', '}Mv+@d6Ow-9L6SV09RMY w5op=TYH/@H]=Yfw!T_:|wb(HbZ&U~MGXN3c@]C{i4q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
