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
define('AUTH_KEY',         'WmYPaEhFUM9S/KsqvADB5CyW6pzCsYsINUKKz21e/Uiu5QuJkzp4rxzsqI2XVaPBUce9agg67+uCcsbZv49RSA==');
define('SECURE_AUTH_KEY',  'dNzjggAbbfEuVe/B02BgdeNpAXgFHpZeGvWCYwzBs5n1pozvwRRdkHxKio5E/ThksNb5L9o2CNGTsQzP+1vvrQ==');
define('LOGGED_IN_KEY',    'zp6rVCfJvFlgAROI98LhxoCD63qIlbVbrSzk7i4KDHobXEc3IJs83cxBqRGdHv8R+Ycm4t0g5smUuAYgryEtHw==');
define('NONCE_KEY',        '+er5adPWKqC3XRfShVU10yACTU/GBBTzAu5aowGLy9VBIrQIPCrtIvaqRPEUL4gGGmLrti1RIzsyMD7DL3J1nw==');
define('AUTH_SALT',        '2VwbDfjEbGiBN+BYHjVgclRJNqCbOUYtp30At/Z5l7yfDORe4Rbvlw1pbjv5kLKQRsVzhW6nw95yb1LhlPnifA==');
define('SECURE_AUTH_SALT', 'MN3mAFe4sjTtfRNGFxSysYFqomZ8FF4qgp9pGVUzGMI1rOEwFm7y496bRHL6rbcbJ1iW/sBSdMI8unTETL9azQ==');
define('LOGGED_IN_SALT',   'J5C5wW7gqT7iIKwXLJaUt+Ze3ye77T5wy3+6lfAqWDx1yxkzQ2I3Vt4qsOD9uEEr4uXvRtKRBV8MYJqOSuftRg==');
define('NONCE_SALT',       'EJTR9fTzc5v9NDGeNRaMmB/Z4w5MVo4wndnoSalPH1vV7PvhxdVheMS7nwRVtbPxNidp2RRzmh2ZbraAYS+30Q==');

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
