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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Project' );

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
define( 'AUTH_KEY',         '-=E1,Od4(IUS8$2ks16qh,=[pLG9<}j%1}Kvp1$e`bbA!:NutZQiMfVa3espT2WA' );
define( 'SECURE_AUTH_KEY',  'A2w0t}d{]m?-Car~m=`g`8~ 9Me)HRB_3&#cIRul]DV8}BdT3[C~g~F*R7oCGtT4' );
define( 'LOGGED_IN_KEY',    'l&B:}j|P/MmTpBEcwMjOZFK=}]4cxYg|s%WC}Cs0Ghm^Y0H9~m.6<)# Hf._#N[a' );
define( 'NONCE_KEY',        'Uo^NHk33|%lGsKVEY)p2M0{[Jml/?@nNN|8&U%7sqq>:iEM5xQx4NZ.%q%LsJi/N' );
define( 'AUTH_SALT',        'm;g#LBTA,{Pa:k};9;=0e]Y@QpsUFOS/gxdG8)xeW08aKk<dGy!)yTzEC2[BT$Xc' );
define( 'SECURE_AUTH_SALT', 'c2tK(pA:UUH<oe|fO]s 5ybb=jkB!_Tr3ShF5t|]x/,3_<(..+(1y;r9[a-q@CPe' );
define( 'LOGGED_IN_SALT',   'vHmDmB&$XiLZl#r]CuEKOOORaE4SAZS,pa04i0nz]$$c).L0Wx?lf_M${r7Z4UwL' );
define( 'NONCE_SALT',       'M1cYIS_n&B0wXiOadHjjC%gCFpPq.9>:d[kn>r%?K.5DX4M9)brdc)[5G@]DoVq8' );

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
