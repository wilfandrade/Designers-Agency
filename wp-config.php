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
define('AUTH_KEY',         'KcfN81W5q21Y0/ce62srfm/VCc2qyvFmL6TduOp5qL9mS2Vs0xHUKfmN42UCaBTRMB870zTx+5qq/EprzQbL4g==');
define('SECURE_AUTH_KEY',  '0urAAojWgY+uDipA53IrLSP5GVQlHprUvcABea5a63aGtRDO+YJMIonNNyoAfbnaOKfYVzIlDKN8bT5gR5VXuQ==');
define('LOGGED_IN_KEY',    'F9oPbm+alGhHVDgt40yb2p0i26Nh3aZ39Q4LboFtGRIF+LEjkFiUytAZgf0CqznvO5inoH7kP7P2RS7bSABS3w==');
define('NONCE_KEY',        'z2gT5WgZmHM4cMuAiKFNJhR+9EjibJ5cT85oeoEXo7polH307+V0lVRZ7fSPWqCFOX16Cf50oI3RnfLJyqG12A==');
define('AUTH_SALT',        'xaWvOxo7YKsjZyRMbvz/KuXGr+XNIivVVFh7g086EiX/lUyHJMyG0Nqjygg+1ecd6vfeHXgxSxyAC/V1AboQ9Q==');
define('SECURE_AUTH_SALT', 'v5G8UhzWkIbmdapqVSUtg+Z5EeaHbp6kqJP2k6zuHxbktozPJoHpYiaew0OryKts1y/+vctbS4VTG91uabIa4g==');
define('LOGGED_IN_SALT',   'LjMLuGA2FpI64E8+DG+b5jbcANl8kHlBarWWfrxgaAb3uoqLoSweafJpPKk/5lQNw6OPiAPnx5cVjBv3ZECjNg==');
define('NONCE_SALT',       'd5KQSsneECT7g0tP1ERm84nmjs2mmWz1KpDQUp+DlMpv7JivUlu2Ay/DxIYZ6xWmZxyZ9cwV0JcF0vw5tVVEzw==');

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
