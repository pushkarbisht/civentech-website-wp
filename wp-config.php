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
define('DB_NAME', 'wordpress-35303431544e');

/** MySQL database username */
define('DB_USER', 'wordpress-35303431544e');

/** MySQL database password */
define('DB_PASSWORD', 'a7b2999d03f1');

/** MySQL hostname */
define('DB_HOST', 'sdb-66.hosting.stackcp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '96mbs8BjgmcnUwVhe+tk/aJCyhnjNScs');
define('SECURE_AUTH_KEY',  'oTniQ1TaMgoLgS78jL0PhrjLZpfmxcv5');
define('LOGGED_IN_KEY',    'jIIVjFbyRaewiB3CbA1IZBgIFZaiABjW');
define('NONCE_KEY',        '8AjP6ySezekTvFEwmp8F+Nz8x5iF2kmi');
define('AUTH_SALT',        'MqXS7f208P7dgETwjP7J0NjDD0o82WqX');
define('SECURE_AUTH_SALT', 'EdGPzNw8NAjnv+B0Dd7QK7IRNgiat7IO');
define('LOGGED_IN_SALT',   'CQi2ghOm0FFYE8TwxoIx+SKh0BNPvzzz');
define('NONCE_SALT',       '9cAhxMqmX31xoL9htLsQmF14PiENm/+i');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '7e_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
