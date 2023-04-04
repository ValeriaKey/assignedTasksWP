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
define( 'DB_NAME', 'assignedTasksWP' );

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
define( 'AUTH_KEY',         '#WpRwFQ27A_](.8[1-g1$ncvp?AEP4>k-tWcVd?Y;?{nOK8a/_^%yl$RPtK?Kqx4' );
define( 'SECURE_AUTH_KEY',  '6s{;asmcH**{=D_mICu7&q9$j.^8aw*X#Y1z)K4]rMsq8drOeG5{=aVg+:l939JN' );
define( 'LOGGED_IN_KEY',    'V*aqEaa2,MDo!Q.UX:3D)[tp0498v!?+](5{NKqCgS/cCFqI=2Sf]}Bbo5{oNfT^' );
define( 'NONCE_KEY',        'dgV!oB[Xk:*gAf24oVZ*<`]N|t2(7rLvQ1@FH0T2X<j[2,+am`R8[<D&&2wB@@yL' );
define( 'AUTH_SALT',        'a%yCc;>J*[T9&uDwD_VCn7M*L3yhY8Y9X9NDCComKnv@DQrI,sPRTpGT-N(<AkS/' );
define( 'SECURE_AUTH_SALT', '5,A)Isv>Y4}I()Y_ic mK?)}bpK0-HKD3ewD#We)R-0+Cnk?fox0*Gs$v!`7RBV~' );
define( 'LOGGED_IN_SALT',   'UNF[SWGx}Od{=:ilYuo`T|J(DVI{4G#Nazrb>ts?G:$;,2gxhinsx[i;p$,(aO+$' );
define( 'NONCE_SALT',       '6(3w3kC5U/Ot)I]4^vipw`eT$D-K_7|OwrN=.85Q{,-}lM{oZLgnw#Y,na$]] >H' );

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
