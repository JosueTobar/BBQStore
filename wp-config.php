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
define( 'DB_NAME', 'BBQStore' );

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
define( 'AUTH_KEY',         'd.87*C~lN=><D,Wg+`ypI|O>bD9b#J~d^E%*[k.)FdUO@Y,aEtHAZ;<d{g3AOE;R' );
define( 'SECURE_AUTH_KEY',  'F5q:A)~O0vhmTA#oPOsjt-x{P$|3~R_wwwt.wIDM,G!Gh(uS.a4|]%v7cb+*$E@_' );
define( 'LOGGED_IN_KEY',    ']DzaZV](L6z/X{H}tw<jy+RQ,Aii@GoaOA m2P/{]?cm.&5`HbO?T!0fbzpDsJ:T' );
define( 'NONCE_KEY',        'y `0r!-MkEEhhSo]b<i)U0d6uO(pGb8N&(uQ5[&o(*S1AH`C[p|;<HOC~kju=r  ' );
define( 'AUTH_SALT',        'Z^MXFJPi$v7s:.Cr[M)eREq|Lrr34nU#)=Y[NJFbF^D3I#E-mMqZ<S$A0<%U] zq' );
define( 'SECURE_AUTH_SALT', 'Hr`f0Ww7Y(Q1o41#-G9`/{BWTnw^p]|ht{_XI0$r5{7xO|`!V>24Y7u=S)Z?9~T$' );
define( 'LOGGED_IN_SALT',   '`<ilBw^Gb}|)xa-<98V|/;a[$k$NigOf!g>anhFzb,pc)AsoFL8SCMCI|pY_iwEq' );
define( 'NONCE_SALT',       ';VYP?5kGe@1$91Y^).N;sLAeI_x4Vk_}:+a$4wzHyk?Q`n$ecw%=pA?])lxq7Fh?' );

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
