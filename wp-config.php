<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rectubmx_wp38' );
/** Database username */
define( 'DB_USER', 'rectubmx_wp38' );
/** Database password */
define( 'DB_PASSWORD', '9j6Sp[-C53' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pmppo1wnzawtqqcat0wyrspccioudtyutw8ervxqnqtx5gdpkqe4grkvoxzqelki' );
define( 'SECURE_AUTH_KEY',  '9c1igytm1llo5ja239lttfgzbitt26dplzjcg6jzytckk2ir7lcca6pgiohgu78f' );
define( 'LOGGED_IN_KEY',    'kxccrwaebry0yzavsajbjh5mpayyaqwbxsx2qgramfquygxvkzxkii4ls5aphldi' );
define( 'NONCE_KEY',        'ifowskaoprvgrgat0szqiqtdbw1mv46c48pl51ez5kl4jozufh6z5ucmt8gptirn' );
define( 'AUTH_SALT',        'hj736oplxtwtot988xikrbysdg7e9xyrxx1nmamenbfbijcc3tvbbwtxfh1fujgz' );
define( 'SECURE_AUTH_SALT', 'pflerpj7226bcr3op9ngpwpi4b31xf67v3i7edmx5yupylrtvyrtyskti67mkxv3' );
define( 'LOGGED_IN_SALT',   'skvghls3wap3buiz8nzxb26wbrsaui5ggjuyawjks9hbxvbxgcmkhixznk6h1dth' );
define( 'NONCE_SALT',       'mzwjb2wqeheabh2jjyqrg8ioivjkrfodk9cygjcvkat3zbxr7tqlkli8m7uynnym' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7r_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';