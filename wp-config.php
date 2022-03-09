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
define('DB_NAME', 'jmuprwjdaw2');

/** MySQL database username */
define('DB_USER', 'jmuprwjdaw2');

/** MySQL database password */
define('DB_PASSWORD', 'Patata2022');

/** MySQL hostname */
define('DB_HOST', 'jmuprwjdaw2.mysql.db:3306');

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
define('AUTH_KEY',         '8is7hZ4RQajfz21UiQaQsqnnIvePvE7ZraVvlw1SIuCRqgWCspdQh/M2IWwc');
define('SECURE_AUTH_KEY',  'b1NhJqxdFt1zX+GQkms88bjPdsek+yeTvv0BgJC/K93SzMPhykMk6Z3nyvXJ');
define('LOGGED_IN_KEY',    'VhuNAOVStpRHdyVKCMFtG2YknKH6Vou/niUI/nm2UxIPJHn2MnHF+TJauqxp');
define('NONCE_KEY',        '4CBZj3395fJ7naaEEQsuEfzRqXUY4a+66LoRjPx6Wxsvs2KUtnJJ7fv0SJgq');
define('AUTH_SALT',        'f4ypPC/WkVcuaW+2jw1o8KgBgHCvRLJdkUVAnLku9jcmdtlaqMI1tWqojNHp');
define('SECURE_AUTH_SALT', 'PmACW4RmGVz0QE55qtxXgGs1CRMv8dfi91FVs2rADtwTQ0OJ/mMaa2+e62+t');
define('LOGGED_IN_SALT',   '5aWav71NB5Gi782nvLAFbaBHRonGGM5tCQ7X3yWigElNKMSqdvpiHU7syl/r');
define('NONCE_SALT',       '3shKViqjhqt2cBsrkE5BtIR/EiIaxwUwr82mr4ZVY/FFIaic5i9PeuBpd833');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor5238_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
