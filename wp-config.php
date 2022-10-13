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
define( 'DB_NAME', 'wpd_udaya' );

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
define( 'AUTH_KEY',         '%APmqN_i1ee}q@A8BdOAme+8=[SKiTd/]9@!e?}$2C=a:IR;}lBxeD4GEkeYHor}' );
define( 'SECURE_AUTH_KEY',  '6+^5o:%]cq,uP+?M>5}%>vo4f$VC(j?1u?6nUKB<vm7}FYvO1?1FBeq|Q5dGO68!' );
define( 'LOGGED_IN_KEY',    '[$%%S:#tcHd$#18gmt:7khkX4Q[09`PkUJ]BD2b#c`6a1EDK!O?*e_8b.Or#hX,=' );
define( 'NONCE_KEY',        'WY~zA@OydNxz-A:JomfxCp2kIk*|[U:p:7jsZ@Z1slJZo=9<.;/uMToHN=G (|{x' );
define( 'AUTH_SALT',        '0 G_c=imPBd6WIp{h#~0]BFfPpttLSt<)0alo?<aU/wihao=6lM}#a-/=#DL{%l*' );
define( 'SECURE_AUTH_SALT', 'i.mNbMl[hhXzQWJ99f|-ffhbbAzFDV&d/xMm3MFsB*YbUYc_t978Ub{/wuoo!@wf' );
define( 'LOGGED_IN_SALT',   'aN0;L:595i--^0Pn {+5l$lIuDsUg 38tb~q?:)K2)Mlzu[Kh$`QG#2O-]T}B A,' );
define( 'NONCE_SALT',       '#fq)1@vYdN.wUdAw&3,Z7Lyig%;93e%0;b[<6^nn+x~ITJeAcSjqNTxXq*@n?aBR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpd_';

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
