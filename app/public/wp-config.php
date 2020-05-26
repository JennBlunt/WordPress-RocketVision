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
define('AUTH_KEY',         'h2amXERi3ZE8kasWctCvBEbksnQ6ONz8s7AB3BTxWC9rYxcncwMq2TMlqEaNniKJ8UQMXGnwEjw+l9vAvCwNag==');
define('SECURE_AUTH_KEY',  'Lt/43xoImv5GSvV3LYSOl8kNKjEdAFV8upKxLW620DRJXdMpe7TJx7BJOYydo/p72igJFV4vWIwlE6W4UvA8Hw==');
define('LOGGED_IN_KEY',    'W9LPmdSL+g52lgM506LKbUUlHXLxlD7goDD3KE6B/ra5EF19r1Kq687rnbrH+ZxoZzszULipCdWEfrFWkTs4iA==');
define('NONCE_KEY',        '1QMKNBqG2EupejQaYp9Mv2WV4XQuH/hVwKHxeb9FKbc6P4rets0xff6jxvE71NWvdt3JOPdlXur3TSATd8E2kA==');
define('AUTH_SALT',        'yPmSaIFLA6SVJvDDj3heydd84dXBQYep2wkNSk9bo/J7UqSOy0oWWZhzDztpcPBXdmo1zuUbJv+kkJudT1poPw==');
define('SECURE_AUTH_SALT', 'wNu7HEHh6ENV+ixKLN/AqIZAUEMZFqqc2MPd+yaFm4/m8nvIcqumwRddqDNG2hdNGkHX8TVsH1mH7lo8AudZmA==');
define('LOGGED_IN_SALT',   'WqCrJUXmC+knxk7Vag0l41Lp9EYIgkIgDLGFQDLxsmoe2xstt0WnNz01N18V9ZlkZkR1O8thYImalaNuYDROPw==');
define('NONCE_SALT',       'l7wQuEXzNHeVph/c6kKnm/y6AxHS2O0GoPeH4c0FeVOVzKk7FvZajasRMHiz8fkdTT4AtKjb+NR5kcIMQhgbaA==');

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
