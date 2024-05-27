<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'moody2' );

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
define( 'AUTH_KEY',         'm4kRC~-NAwZ9 xJ1U:|DfT%P!CA|{,Z,B,5!XOQie]er-P{wAO5bGd RrEfs,v|a' );
define( 'SECURE_AUTH_KEY',  '@WOp{?7+4UuqC|RdUF?NO&@|5t_sl=LO:Jo}b!y{NyxF}# /N`#oafG)[0#rD)Wk' );
define( 'LOGGED_IN_KEY',    'b#F l /md (QRQI|tWPC4w9.;-,si5} >4[M#r3ms+,nZjlpWOPf4F|hEN,6#jb>' );
define( 'NONCE_KEY',        'Z*Ocp0$}opqQ^; F~$:z,%@sg9cjZ9n>NvhEP&:!6?xr`fsCu9/]kg6yb*q)[$+G' );
define( 'AUTH_SALT',        ')6V{Jih.=/vKX<ST>pJ@^]4nRSh3qk^+Jg!QA9@$.?i0Ep^TQ#CHbQ oR|<kKiev' );
define( 'SECURE_AUTH_SALT', ')t~cw$$auRkS5R7Z-Q;3Z:/&F~=$Rc]}sW8s2WkU,Y0@!#lcnEnp~+4}8G~V4e?(' );
define( 'LOGGED_IN_SALT',   'jvGTU8j?hxw@XJY}#UkNr-OuZO:`Y}b=uD8uRXQaUGKqDeAD>/-5A/J:Oq8S8@@-' );
define( 'NONCE_SALT',       'ZD[#5RR%#$*(<%I3@3%lbn#kzd;q.-j|v.%6Wrz{!MSxXW`=XieAjbT<>@y!Pb4&' );

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
