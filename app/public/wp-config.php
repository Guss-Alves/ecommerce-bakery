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
define( 'AUTH_KEY',          'L?o/GxH= VjKe/P;DA-6infM j7Ud;eliFCvm6$;wmQ.cZ]@J_l8kkvS/O)eTlD:' );
define( 'SECURE_AUTH_KEY',   '3~^G<W!k:F@Syl=h6~yZzJx5}Wh/.zuI@@<Q@YqA,eK-]k3pJStIqvvZtSaVkgbW' );
define( 'LOGGED_IN_KEY',     'BUt?*mc`7)dHPu/8fNsC*a%xhR~E%L?CpdDDA6cSC?JzJ?C#2TXJtz]8O}>NgJy=' );
define( 'NONCE_KEY',         '.k;/Sz&8Be*&@*R!=S=H4cv;$7U&nC7CUQ6wJEp;^|u#{QMzZ;cX>_}YE|*w,pl@' );
define( 'AUTH_SALT',         '? WUuT=<JR[k.&m=L[$4YkA^05?A7[[=Wb25mMkM,e0g_^iy|dOZHfnhWVixQYT6' );
define( 'SECURE_AUTH_SALT',  'sl*ybv5yO?n)&ArM+:/;czN79~=b~BuB~~hvL)LFQnKU4lfOZqj-sh;7n=|z[gU?' );
define( 'LOGGED_IN_SALT',    '&/;WwA7j` ?3)F.#K1mXA8 xleTd@/o%WHQ:z$Oft<8D0Y [=cUlhF5I}+DSsJIz' );
define( 'NONCE_SALT',        'H)3|on(I5a[hI:pX97*;i~?XvKp] a(c_3xOrDI9iP%B5mmP61v7GdJ#lP5`<k:x' );
define( 'WP_CACHE_KEY_SALT', 'pB!mvA|h{.ghOxUgYK.,=v%3g>E!*!47EI4mPjv).[9r+tv^9L3OQ>)~Y|6rgx@S' );


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
