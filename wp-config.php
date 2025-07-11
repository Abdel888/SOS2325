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
define( 'DB_NAME', 'abdel8_wp353' );

/** MySQL database username */
define( 'DB_USER', 'abdel8_wp353' );

/** MySQL database password */
define( 'DB_PASSWORD', '8vV39p@W-S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1203l98kxy89ngpoms3wr7jyq3ppo3p38h8kxfpnxskamy3ced561co9ufb8go9k' );
define( 'SECURE_AUTH_KEY',  've48xmtbszkakmtwcu8y64pkhl9umzgkjgw1bffeqckhifvyi7jkwns1z4zj3tex' );
define( 'LOGGED_IN_KEY',    'q48ik5hieqojaxwz54jmgnrmqkdztw9nk4zwislbiymlthfwiezjtlpfkpy4uukf' );
define( 'NONCE_KEY',        '89fju5bcntcqxcnwba0x2xcd3imoncly37cojjn79f9pfufpe6zv6avfcoups9jj' );
define( 'AUTH_SALT',        'qalepwmwoew4c8u3mghmtacp26puirnhj4kqkrqel6jnpwdcyyycf9nvjf19wazx' );
define( 'SECURE_AUTH_SALT', 'p3ckqfaj8db6f3yuhbznlhmbzrlyhaiqeznlxjvpldgzqnnainyijldguxutwqoh' );
define( 'LOGGED_IN_SALT',   'dicjc0thplse1zeapsgb76zyqkmhdntgysnnsu0lhgn95hfjiia9t11ygg63rz3c' );
define( 'NONCE_SALT',       'x3owgcorckaymddnyh6zf26n5h6grfuugy7gd3p7e82u9q40csm3b7tutclwbrrp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpws_';

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
define( 'WP_DEBUG', false );

define( 'WP_MEMORY_LIMIT', '256M' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
