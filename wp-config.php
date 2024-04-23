<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u162279250_8PGBM' );

/** Database username */
define( 'DB_USER', 'u162279250_5VCak' );

/** Database password */
define( 'DB_PASSWORD', 'oK71nUn0Km' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '*U*g&b(&&RbL,Xtso[i_.8q&LG:SG4TMF[BSJ#QRF!c&B7SkT~5HWHmhS?VyCno4' );
define( 'SECURE_AUTH_KEY',   ':kwe`3KCO{Q8h(3#z-azQCBe8STFmbt{/R $mMs4Riv]bK@d}P~{jnJ>Y7<8rOh<' );
define( 'LOGGED_IN_KEY',     '3vf(K$o%L`pg+3On*wMS]&0{]R*2V5qfS/iNjbdzev,0&@}L:=h7f1{r@qdlK ne' );
define( 'NONCE_KEY',         ',M9~_5BviI5CkK,|:R0ZR:|-&5<7H7]5,}/Q(e2j_>`h{{z`2w_mM-q{`[zc;oIz' );
define( 'AUTH_SALT',         'h{M~6yW>pn+QXP:qFLiwWvd{Q2#j;Ni7#8I~3EFOLi&V]Rt>oEHUJ.2bM_>YK/?c' );
define( 'SECURE_AUTH_SALT',  'a8@]uLyWF>59mL^DbHRh4C}8HJ{uDoMzDwUqoXxE[;+XqK*9.$.;bd5[!?r!g5!A' );
define( 'LOGGED_IN_SALT',    '[?*+v[va;uaePj89vy}orv_8w3JN}u&$lF^x9ix61T9P/xr}R1ye#_cIH5N=3?E(' );
define( 'NONCE_SALT',        '?rWKj%LO:seTs|^a}|/n3|_0#eLqAR8]Cs)W<LF4h(WFGzA!Ae}l54[[pv{MI$(>' );
define( 'WP_CACHE_KEY_SALT', 'R4qUY>jG_fc_3=bD[T( dp:.iDu,Zk)zI=R)[5 %02XO;mcW:``_d~62z^@lPuo8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
