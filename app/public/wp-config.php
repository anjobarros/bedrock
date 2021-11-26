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
define('AUTH_KEY',         'U9wCUbFKrtRnRkqV3/iCqONRXWiJIal+saZ4M4FtBhGC1wzhFTWkIDkTX0CQFMouwxTXQmYFXRfjymGvgEjw7Q==');
define('SECURE_AUTH_KEY',  'B6nimeYTh9YV+7HSM0QnnMQGftZOppLre83U4R9K9qmdoIMVvKpvfmGwfr2ZecMjSjOafivXqM1BDvVKlvkwjw==');
define('LOGGED_IN_KEY',    'XTORM2BviXvx0br/Bk5dYnd/vtispNYEc/YLC1ITd6aVYqvg/PfHVQDjmOy8LO9yrRZMv3KknVzqMfNveqN6/Q==');
define('NONCE_KEY',        'vPPC8CX8KgE/2nDocbn1KO7ID5+VpWoHOevLZnaYCFnBZ4zYnbB7NdMaxHsvsEkr5aUP0mTVnx9tpUi4Kf70fA==');
define('AUTH_SALT',        'UhYDK9Ho/NN92TuM5kuQElnO6JYVD8zN0HRsdDh2AZSypbjUgpbqFem8mgJ3tSmKJYdmEPXzXh1fdhaFBOJKSA==');
define('SECURE_AUTH_SALT', 'mhgJPqQOrcMgvz9Fx1NrL+LCPSCBBYbIgKmAfKj1gL3Zlk9lzRFalxEcqCGNJo+LDLGNuVFi2dptAEx7TCHLTA==');
define('LOGGED_IN_SALT',   'jZJH1YFH9svWVkExA21AtnFe2HAk61t6fjMZd23Eg0OaSzXQp7PLGmXjMBWFMV79KCEvn9Xh0lN2VRiuOmAPyA==');
define('NONCE_SALT',       'atS5tV/y/k+/MdXsQBGSpjAuGf5vJkOsDdBkquz/WOfd71AY/YMqi0Dy5MHiavvw/yLx0FSD+C6xGRO3L8wlog==');

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
