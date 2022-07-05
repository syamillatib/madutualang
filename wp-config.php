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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'madutualang_db' );

/** Database username */
define( 'DB_USER', 'syamillatib' );

/** Database password */
define( 'DB_PASSWORD', 'MMF5wL!jIRNU@26(' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'JYu/B~gx[/UhrL9_@f{Ax__ :=lr458AiV!&?DBDCIg8p*,BBxd8a2{x9zWK1#;n' );
define( 'SECURE_AUTH_KEY',  '%l. RtUx1/{.KQ+W:i?p<$]Sm]}pdV-?dB-2Jr>7yg(Lw-9z/W~nZnkiR$_F=lZa' );
define( 'LOGGED_IN_KEY',    'yQGU4fYK%dIZ HeZ~IXwdCt-1B+$F*=|xIMm|}Q!Zi=9tqGie)fa2q Eo=nc_vOb' );
define( 'NONCE_KEY',        'mr`1Jzv2z8/wO6.tEV%8BT+[W^{QYzY0jDh .x1)Tlbn*H6TK[7*Kl59$4f/EWSU' );
define( 'AUTH_SALT',        'qn9{Xrapnpw Jtk@Qks|#kS@L]^fm9bDtGw,Ic*Fqmu4ju[+Z~3YgjV@G`-kkw=J' );
define( 'SECURE_AUTH_SALT', 'U2pJxk=fX5br)`P OWjQpZ%VC1K0Dh|YJ5JpgNa-cX@p/hgZeQOAPj`[LA93YCk.' );
define( 'LOGGED_IN_SALT',   'ucySYjwhP3KJP<P[<Q7JxT!#/>Yp8~p9-T}llGN@R#RUv!sLkW@C8C,@^|vG/PDQ' );
define( 'NONCE_SALT',       's<R(;VQ24&BibK&VoZLvef=JED4T:!0njPdU{@>Fr7Nxz<$KgT>k($.mlK.>V^Z/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SML_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
