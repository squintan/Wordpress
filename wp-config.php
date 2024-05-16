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
define( 'DB_NAME', 'Rubiks' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'l3Os38Sh8m2MAr27RQNcZXUSehB8phb2tGQmgTtGbf8Fv4OQqGl95eUE7gIOD9cK' );
define( 'SECURE_AUTH_KEY',  'mSjdl4Kq6n1e8tlSNYJ2OHLCCRtOXHGsYqtXPjHJJhMCQn5GsXCxis0158uOo5Kt' );
define( 'LOGGED_IN_KEY',    'ySwkEeOBjGXFwAPMZ8qHmNzDP8epM8wwxB89nqUoi75rhwI8as9k6uQ0g9mLADem' );
define( 'NONCE_KEY',        'AI25YaFKhHW85C0yVemwaxqncH78kx2X4lKKXP0rQ9KpCQZYcJoKkI6weZ9MlzN6' );
define( 'AUTH_SALT',        '0Fk257RsaSBHHmrVxgHDt8iFqBeFAoSIzkQ8fdFxrfg54a0QarHe573UncrdMOUv' );
define( 'SECURE_AUTH_SALT', 'Lhk8XkJB0n4tSycy379u5slFYMVmKF4VVilwktzT35QTj24X1QhFCdn12gZeAuOb' );
define( 'LOGGED_IN_SALT',   'Ew4M3Klqz8D2duPb9c1iQM6wR4RHxyzWz0t4zf2cEKAhUZY3l35UtedWCNuzSWNS' );
define( 'NONCE_SALT',       'RTxcvgfyz5x73P2FcLXaeJjNzOopjFrVLlQgamAPhn4W6nxr1AYnmeCLU6NBIm3u' );

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
