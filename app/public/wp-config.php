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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
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
define('AUTH_KEY',         'OuqdiaoqX9WHkjWzJy+hEaKffNDCPuru2ZglmotT045KEEzlcS+EgUX6+NkdB249r3vnEHfGh9wwyYtes31bcg==');
define('SECURE_AUTH_KEY',  'FKv7w12z6A5MG4w4N//YFGT7xqEyeuLNUlCvtZxPH+GqF9T2uNcaVB9xTYaXiuuLLweLcLRJpXbe0jFyYZDtiA==');
define('LOGGED_IN_KEY',    'wY+Cg9wO0AcCTOtdYNTdOGUZUzXzU2TKpU7j6Y/CEi5iC9+5cKxxk9Zo5x3cvif6SPX+fJJ9ITCt7W2RKGDokQ==');
define('NONCE_KEY',        'voG2Z/W6xh3kryvCkS4kR/MvmtdpwaM6js1a5qJ5LOTY8FCY4oA5NpG5HelB1NHKPDVq+z3mtUGiczCb0BkBHg==');
define('AUTH_SALT',        'Vf2MaNY4GKgIY7PWJOjCH24j9q0W40b1CWDkt7O+KfgjWRYKqO3aYuYSmOAoJ0w8nK36o1oFfo70I/tGA1JVXA==');
define('SECURE_AUTH_SALT', 'doJo/tUBoy6ic3xdtJUaQBDL11cVUTGNDi2kNhwKWIh+A9yS9Zx/S65t+9wAd2VXQ3KpnGupeXRSYy7SbbpZ6A==');
define('LOGGED_IN_SALT',   'EU2QOCx95ycdwBSI3aAqiLz+7Vt1qcnn6GFhCSymhCZo0EUrzzHSSnv5Ay4O6dvns/+vb0djxFdgaXHoadeutQ==');
define('NONCE_SALT',       'ujE7UDgPX5Ba/aXXVKOaWJKaSSAH9x+YGQReUptj/ifPKNGbLi6PdAG43dyENyUXxSeIaHBs3WYBUoAg9+HTEg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}

/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
