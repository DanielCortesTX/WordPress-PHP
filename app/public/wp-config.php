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
define('AUTH_KEY',         'PQ2X5uf77X+PDADNElOHBPa+6DjCAnMzgpLvx1A7GPtdB//Wk64UUa0VtUgd1bEkdnxM33QEf+WyxnkDiKOseA==');
define('SECURE_AUTH_KEY',  'uyLJh1aP3WwarEh4weEZKuc42CFHltdGaCIfCTbTP5sl51UhBbqYIfpcWz0mFEHWQ/0dsWQNuGkWsvMHYBDhhg==');
define('LOGGED_IN_KEY',    'jAZ3BxuaKyr1anrcsFGssCy7pc/U9lJrlEt0h8rrrBqGOb2LD296p5K7K2aQTEJI8SyTZR9AeNXaAinMDegTrg==');
define('NONCE_KEY',        'RoSukRFdJj5RzRnMeiXOoxGSUEr3zVMe8LYj9Jk6RZmZ+ucs2DcNt8kcWIT9Z0cFSfnE9yWGmOlIxEj1U5bgGg==');
define('AUTH_SALT',        'bYz4p0jvRYUH3jgAjmd7YRHDw9gyGhEbKHk57Ch8U/RaUKWpxTtVyiij7znesnHC6UPAphVpQbWmhZqyOycl2w==');
define('SECURE_AUTH_SALT', 'aN6j42un2bLSOCrrX55qbxrMec2bCJpegs2wSZ1i6kwbfCOVKi5G/xjplfcyDGF5u4HlvRPql9YazAszsGjP+Q==');
define('LOGGED_IN_SALT',   'HCEqueVnZddMgg0+t9mA7njAloI0ARjIyjbk+6/23sibFMJnY1NpuxmMo2MhtRR8o8wAE4OZtTR3cqJRdYNTKg==');
define('NONCE_SALT',       'Ju8gWCP/fRBrg7IOqGvWvrNRQ2arcfYiRy6vjzPWL/KjMyZCCGYlup6yozIY8nFGx3ctwkDVFIYrt1s7lVqX/Q==');

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
