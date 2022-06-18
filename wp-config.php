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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'He6dzXoKZ>-TA%#ozye28eGmCcZfXp^+zO=&kSo[.lkm:%-9!]?oF-sS^<G]e#f]' );
define( 'SECURE_AUTH_KEY',  '#S  zR0Y}<TvPfhRpsZ#+t=wPNTUO{9%Xk-$Ac,|HRL4ZYFxdQhnEQFr{|;wvt`4' );
define( 'LOGGED_IN_KEY',    'Qy~an3`,#ps;5iK3PLWNUTicQ}!;f,,k(-7<ZAs+CqV=0C`y{IeAkw^i,ZDRQ@C2' );
define( 'NONCE_KEY',        'Vqnt^GsrfwO7<vuJK!SEAHDio1nnTBx@%PsDqg,{I FbT|.,Gc$vNKxH|-< ?GmP' );
define( 'AUTH_SALT',        'kmBNza^ R^|WBoJcee=!7[zQnk0&`P,hb~gnW_%h,Ck1&*:ZdX!4MON}oa^0a2?T' );
define( 'SECURE_AUTH_SALT', '5OfYxg`GK5D#w&|A Ten6Ve9l}b= <7vgQAep|(V2z6!favqU2%+u<b@&6T{r 7`' );
define( 'LOGGED_IN_SALT',   'rZDv^3lFtm?$D2hlF_K#4p-2f-]w]Xp1hUJv:MVF~tWU7N@q~%s@Iu[$QHvj78!/' );
define( 'NONCE_SALT',       'tHa4dk6iI8AS$Ds M&Z$O#t_QC!8`liJ`D:D Zg30ie?0Xp8Uqp+qz.EkXDd=dCN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
