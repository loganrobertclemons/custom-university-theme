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
define('AUTH_KEY',         '39GnHMJ5WiarYfGBJTZi01ismGKQHdvUlEhouz1ALradp+ABLgp1CYii/rAlrbYOfmvF6aa4WCs9dIpQqhmVxA==');
define('SECURE_AUTH_KEY',  'cccro/eK+//VJ2Z7pbHn7GxwO/7DluDBSP6GLlgT+ySXn7bxQq55/1K7I6SvcOwjPaAWSgNHXQfcVxZ+xapw/w==');
define('LOGGED_IN_KEY',    'mRipkSvDFrWVK/A4VYj06tcddhkUg0IegOntaJcsynW1oLZdF/PwacNKaenFWgkIYURon/irDgbfJLmQb5oUXA==');
define('NONCE_KEY',        'U2OAmuye3yBgMJM6P6Dit5WjMDRL63L6gR/qPlE+rNGQI25DKOtfhN4oHo/YNzvr3UBo3g1v3cTSvFAZPPjrwA==');
define('AUTH_SALT',        '7Z+bFMzko8g48WbHJVjiyTcs0CGGwEHLPtQDITX1bXzmKzHhYl37RVhqVcoEP4ZsyYRdjyaYD32mqoSSv+au+w==');
define('SECURE_AUTH_SALT', '4R99HQ12DA2xi/Y/lfL7BW8Qc/0OIlRorptIzAC8x1MxOcBUCW4aR7AqeQJIufCTeBk9Z2Mw41H9IUt5MijNBA==');
define('LOGGED_IN_SALT',   'pP6HmHvVV7SnsHMYsKCBb+SW6Jkx4+Pq98PlFFXYAuSnzENRQXYJGBIBvmpL2nStNCWS6J9iuWEzzFjxeQtRfQ==');
define('NONCE_SALT',       '74cjAjmZADAmhubN38bHrOwdhs5QoWL0jWFfOCvSzoLRGCdvDtQEEX/NejJhUba0J0vMwEwH97stIQmxsNwsZg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
