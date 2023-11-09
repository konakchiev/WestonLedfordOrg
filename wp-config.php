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
define( 'DB_NAME', 'weston' );

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
define( 'AUTH_KEY',         '{KgF]?]8D{9=,pZ_g-DQ~32;A4TUYkfsjOAP`BrW3@Ozf9OA|P1-=P&!zN1|:BWM' );
define( 'SECURE_AUTH_KEY',  'Id*b9IBAWS&$q%`#>;OiWeYSv,:btwWRLkwMzCH*ZoyOF{cDQ$XJN8Xo#[(a$|%~' );
define( 'LOGGED_IN_KEY',    'IKlNL!m5wgILFfp0eT`qR`dU6sVr9UFA2-r&n m/ZYRxQ>3tM4P@k%t1ErxDMYH^' );
define( 'NONCE_KEY',        '>6(,r<}kp:9<[j zrb.aol/Pcir)D7BJA6%66*BVdJwH|6Iv|j.Z,#{(g4_Wql#Y' );
define( 'AUTH_SALT',        'l8u~/km71D)DkBgJqU.|1Ry-#lVDa^RPlYkJ+MR2N1pb!^ecQPupW-Nyg07u0WHw' );
define( 'SECURE_AUTH_SALT', ':v$8(]$G!}P]V|L@$z$}Z2~7C.]sA]vqvXy,:^]V?MY S8>l?wUSks!f(=~~5Wq<' );
define( 'LOGGED_IN_SALT',   ')F<Y42eTC6A 4{%,PU:e;Dsei7iPcIl5,#NL-2pKJHLY=u7lbY+tN~0yID}1)kp+' );
define( 'NONCE_SALT',       'k6@_zMSK7S6].&r/B}b_!LqCv|; {}kD3|R9+>?CrV<oM2T%&}2t{AU3;5fr/Od_' );
define( 'FS_METHOD', 'direct' );

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
