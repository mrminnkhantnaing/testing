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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'POkMNJd/D9Y8GOOIdfmpFM0TpjoOYP7KEjULb9KZpDGLg0T4RSwDpK35YmG6Hq3OYogwRafyK+/nftLKB+VJ7A==');
define('SECURE_AUTH_KEY',  'XGrIojwXWM7zXVFwLrL3SOK9ShPa/mBmMUuCFOm8SwwMvfSZlDqVwZYk10/sVU0SPWghKeHYC7b6SdrI+6Vw0w==');
define('LOGGED_IN_KEY',    'Pxqu9SbwbG3/1WqX2uSdA9npu4vRlckxVrEee6lZZN16H9E4xKMRxvwBUDBLfOloRF+QvMV5shgcQqQXOgY7HA==');
define('NONCE_KEY',        'dUhNW7mlEpqFc0c4I0GiyW3zaLpvvCBMmANovDYcKLIZDEM+SWECIapEJl8hpK0guElsB/iruWXlZWU3gs8ESQ==');
define('AUTH_SALT',        '7wfne9SN0Z9vwxUUdvLu9O3dU7sOX3dkjNu2v6XVfCqdvk4m8ggYOqa8IdKIJD2tksOLDsZwcHZB8g3dzfC1Tg==');
define('SECURE_AUTH_SALT', 'i3UL1Vz8FTy6tuv3usPCjlB9Aviuf7pr2CGJXM6rq3q9EG/fmftIITz9Y6VWpHwV6o6t60J6iY1OJwkV3IGmiw==');
define('LOGGED_IN_SALT',   'vLMGTS7uEkECXroSCr7SaDyYR+uxvG0P8mqnXml1XH13IUk0m0KhyAxU/K1IFSVHXyuyRqWZkSc60QRaXVjetA==');
define('NONCE_SALT',       'fs4UFbF+2ryKe1jyPnUKZqBeBZoge0oo/sULTbjUCsWHkiw0vc41u2oLVLoKt1+sXMfRPC3/GK+6N0HJbfKURw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
