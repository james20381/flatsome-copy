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
define('AUTH_KEY',         'ROUfNreVWvTfCDGHysFf7AexFM/ASjohS1pwjyUbGi0SEzEafAWlNpdPPHzz65OEE2JoI2cUGcUGnQte18r1CQ==');
define('SECURE_AUTH_KEY',  'xQA94NSuqyUEw4Q9+6PmUxX/kYi5BkWNSXChY59jY1aQiDDaCLJdjd5FoMT14Ndd31xgdzlC2Y7Y7Q7luJ68rQ==');
define('LOGGED_IN_KEY',    'RtNQm6KBfaetIIm7vYxirGvn9j+bKJM6xFv29CV25SjQtVjPWc9z3ThCekFK0wdatPtv4bWEub9uWcAdvJcAVQ==');
define('NONCE_KEY',        '77tXiHXdDMBMWpbpAZ8cL5Bx77Y5sUx5dRqUaocxR/Lzua2Ld1b9tTS4NeJHHvGFCeLPT91/hEzcoEPQ81+2dA==');
define('AUTH_SALT',        'eelmF8orde7dCYkd2NG1MvRf0HQm0/aVjUtIb1q3ZPpm0G8grljksDD6AAOCq+ZRY1ZO4wknCF27W8uyna8vEw==');
define('SECURE_AUTH_SALT', 'l1xq/mv5U4Wy2F+YmCEuTO5Z4IZVhse6+GMkI/CML6qUj8aWPg/XQWNceU+OQwUd5MvxTz9iJuiP9MH3VecMCw==');
define('LOGGED_IN_SALT',   'dAiVHwvhQJeUUTd1jraaldGSAsNDCcin33ptY0UDaYJyu08omP655WAuNtK3W1C8iZp0G4e/NraL1eRmIFMPqg==');
define('NONCE_SALT',       '88A66uZkQTtFQ2z9MepfGB2knCeRJXkBIKrkYw4RaverQGbAJm2J9jPptQQH2CioSTqxfuVBEP1QLYukGEWkiw==');

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
