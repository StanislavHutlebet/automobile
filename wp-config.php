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
define( 'DB_NAME', 'car' );

/** Database username */
define( 'DB_USER', 'car' );

/** Database password */
define( 'DB_PASSWORD', 'car' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '$z%Nl~iOrs_f:}x=#U+<A17ag?AZf9@h]I)*L;`kP6+!)tzhkOU+T4O=F]oWi~u-' );
define( 'SECURE_AUTH_KEY',  'y`fdYxQ75zyh@[M/F0EuRqYki5wA GYJ3>6%_h[Kz=_H_t9u,:&`R@)jGTz*>sA7' );
define( 'LOGGED_IN_KEY',    '5M %`o^8ZUJy8O<:_D=Mk<1NV<7vs:8!|Yc)e?X:wR}Q08wttZT+:YN5tuy.5vVO' );
define( 'NONCE_KEY',        'DN(=;4I{}HD_Dk/pN$M1){=C{b9JY;[~TRz_y0i[Ue-6EC9x!~Cf{FI6r;IZ5APv' );
define( 'AUTH_SALT',        'pC:JKv--u/J6lt)aO]s{A8D2ocNR+2XDHM{A2SE8ob.YTUaf6}G{8MTUWKgAx8N?' );
define( 'SECURE_AUTH_SALT', 'oG#d2|.pN{ngQQ*+Bb3k*UFqz-e[sgdv? |kr17T/nb~/*IYrH}/6b:P>g6$!Tr]' );
define( 'LOGGED_IN_SALT',   '/IccC(Zvm|Odjmm+lZU]#HkFKr:H|8-DM$yro_w$5mwXT5sYIuJl0XLoK7LRLz9Z' );
define( 'NONCE_SALT',       'B8u]gVUOSnM$3S>Q-3?toUs%CjmA!Yi,q<aCIqAj|/;kd OvYhj7qJmyXQD c6P/' );

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
