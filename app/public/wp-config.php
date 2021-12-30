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
define('AUTH_KEY',         'KgxO7gkJWyUWHTaR65LIpF/i2sIGXRw+90YpqwYg7G1RB05pWEk6DYGB4N2jJeR1p5oCylq6wBIibbWneFV5Lw==');
define('SECURE_AUTH_KEY',  'P27o15c9lpyAzEYkjUVl4gNFksDHxcKMAiN/fwBS6WrIEs6Oqk67iQ4F0QFRfMFxCFICOLpCGED2lL9kYymekA==');
define('LOGGED_IN_KEY',    'iowFBdnaj6BC7AwZhcoeYSXLrrb+opbs+QNDurd7kFRJXyrVNdOA5CWCsmUVCzdVmHHaYnu5N5kZCQt57AX9wQ==');
define('NONCE_KEY',        'VP1biYoDrxPer4Xhupm0ZTNAsrx/1FgWjaLulquh9xSa7EYzTDVYKPYpGtAXfdxwxbmLMQTXPP5nyaEl9BdPNA==');
define('AUTH_SALT',        'lbmwSOy285WpYHUeZ+oEKa4WSwXDGwZf+a9ifpC5N2/aVaAL7lE921sL4up/W9n7bzWLj9IfRAyQC34AWc0X9A==');
define('SECURE_AUTH_SALT', 'nxVBMBchIxD6OmtTS0axfpaXRfx3ZRFfS5aStEl6j1FJ6EYsDWxgro6PJ7RK9FGTDkavTFTn2xtRMkkNPqQtTA==');
define('LOGGED_IN_SALT',   'mvsI6EyMFg8/jio3/EF9e+FbML77NiWJZgnipQjOo3ZWHHCcm0PE8oifvd7ZAf03yYuW+6IpXmN4nUNtd3Naxw==');
define('NONCE_SALT',       'eOifnV8S2tws1jJj/U2D4lCjyog7m7Te+oQhVKPCz4rkjtYhsspQNbU8r5RWsio91I5Z2WSewCOLshTxYaApUg==');

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
