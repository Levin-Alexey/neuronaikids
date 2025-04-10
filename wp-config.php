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
define( 'DB_NAME', 'businebg_neuron' );

/** Database username */
define( 'DB_USER', 'businebg_neuron' );

/** Database password */
define( 'DB_PASSWORD', 'Levinalex88.' );

/** Database hostname */
define( 'DB_HOST', 'businebg.beget.tech' );

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
define( 'AUTH_KEY',         'w2=hVWYp-,&GN+/0^P4;b-$g+LemgFadYWf#=MnQ4&X`$UF@?xgSMdbz1l|/5Gnr' );
define( 'SECURE_AUTH_KEY',  '~a&P2#<^h#|OY^qd:jm~`o4Duow!bAE7(7^[`e+!Of,0 0)a9ges)7&RopKI;/u~' );
define( 'LOGGED_IN_KEY',    '=aq^fP_G*e5^><y{a`JPeg4X~#_v`ho&HI%4(91ND`yOE=HP[=,u*4/hQ$6EgA>2' );
define( 'NONCE_KEY',        'v[X].n#.!W&&V9w`>V2E?-B{yac dxxTwU(bTn^yQ_nAw`{n42~&xB)ang#YNk,w' );
define( 'AUTH_SALT',        'EC<geBVX-hSp` gGx]${d.!,5eA5Y%HwjTXwYa+`b31?6d6U{zH~2QtGQ&{GWeiN' );
define( 'SECURE_AUTH_SALT', '`#~2Ep-*gp,g{vkV4/p`MP0:fL469FS)RQ@l>MPU&Lt5kYJt*0:Wq*~5vfP;+`C)' );
define( 'LOGGED_IN_SALT',   'V+<H{*CwdV)qh>tvHX+y$N6CBx+[/qa(APO@RBv=)#&:hvH;+{@k8<3$~huK,@Uc' );
define( 'NONCE_SALT',       '#TEr/Turvj)&,188WZplDFn0ogxAZ&qZi6TN,Tf.i3pUb)t4=MXXs~ [;R)a;L,!' );

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


define('WP_HOME', 'http://neuronaikids');
define('WP_SITEURL', 'http://neuronaikids');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
