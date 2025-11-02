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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deji-wordpress-db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'bannix101#' );

/** Database hostname */
define( 'DB_HOST', 'wordpressinstance.cwvy4g0e2bay.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'M4NMeulhkAEQJ8JaXwqQ9glQoAlFOk4nLsF8ay4ctuI=' );
define( 'SECURE_AUTH_KEY',  '2WSmp6BpXDlHAJ6YmjnRpnSjLe2XfqFcyu73qcoC2fU=' );
define( 'LOGGED_IN_KEY',    'qfm7NgeRHw9cbUFKR4i3fgEG6g+AKBlSl0Rilqd5gAk=' );
define( 'NONCE_KEY',        'avn77edlmKN7CjU8Ze9PK0mtyarg0pXiTqoLjhRPd7M=' );
define( 'AUTH_SALT',        'gVqsscOzuO+cVoQRXe//MKOkkrtfH/H8dJIp0jM+pTE=' );
define( 'SECURE_AUTH_SALT', 'KnDgjlGk2reGN6SHqGtiVy+5nD69u6KF/oW4GdMGz6w=' );
define( 'LOGGED_IN_SALT',   '+6vX4J6zno7zUbSmt3cRZ8F66z1ebD9orxjg6X9++ns=' );
define( 'NONCE_SALT',       'TLdYqXzhHgMx9vPvYBTt3vTu+onVaXMpLXE/PtAX5H8=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
