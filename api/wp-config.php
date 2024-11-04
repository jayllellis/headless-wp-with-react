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
/** @desc this loads the composer autoload file */
require_once dirname(__FILE__) . '/vendor/autoload.php';
/** @desc this instantiates Dotenv and passes in our path to .env */
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__));
$dotenv->load();

defined('APP_ENV') or define('APP_ENV', $_ENV['APP_ENV']);
defined('DB_NAME') or define('DB_NAME', $_ENV['DB_NAME']);
defined('DB_USER') or define('DB_USER', $_ENV['DB_USER']);
defined('DB_PASSWORD') or define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
defined('DB_HOST') or define('DB_HOST', $_ENV['DB_HOST']);

defined('WP_REACT_URL') or define('WP_REACT_URL', $_ENV['WP_REACT_URL']);

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
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rwp_';

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
if (APP_ENV=="local") {
	define( 'WP_DEBUG', true );
	define('WP_DEBUG_DISPLAY', false);// only set this option when you don't want to display it on screen and just log to file (next line)
	define('WP_DEBUG_LOG', true);// stored in wp-content/debug.log
}
else {
	define( 'WP_DEBUG', false );
}

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
