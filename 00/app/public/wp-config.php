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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'k1?J :G/}W.%S)Yrz!:G@MRV~HXnZt]#OCjQ`?0j1%^FkcmAiV0Y*TKud/)=SZlY' );
define( 'SECURE_AUTH_KEY',   'Cq7r8:hk`3S.0>VD7m+lPzzz$~`CH;z,wUf?_5RQZ:N+{~0FL@*0hq)}La;a&6Z/' );
define( 'LOGGED_IN_KEY',     ';9P%i%kY_|Dlq~h.&beZLm.iWIF+:#s;<CpAQ.r`_XT}|R#^xn+5Wt^/_@^=LZ%t' );
define( 'NONCE_KEY',         '0^N&b)J}H/VpGSA(;GG!=xXvB.Gn=xu2iU+Z@Y(J.rS}-v^|$_)9X}W[qu_m}rS0' );
define( 'AUTH_SALT',         ';U~z[SE@DxeYibxkzP,KhBThA%#ho~[rw};m.ui$GB3~6J`%>*G 8?n%:/,KCXs1' );
define( 'SECURE_AUTH_SALT',  'A`40tECFCNGdiy`wmLyPqfI$k]8~8!W(vi)<+FqR|:JbO:prsc 3S_t<mo4SF8s#' );
define( 'LOGGED_IN_SALT',    'Hp{_w3GJgKGlySUq$Na,d%p4(ldkNYX/Ce:gszALB^8U3=@AYIK)B$aJg!UF}ry9' );
define( 'NONCE_SALT',        'ztYPk^GM0f,1hRmDPOfsc6{/_`nnxxN+vKV|5BA>&7Ue=>59l+)K,bY_sw4@X_:W' );
define( 'WP_CACHE_KEY_SALT', '(C7bS;N{P|WW>k+_ud@~)%!N6~87o@5~+j`x&Jp9vQkp!_b_v/{j)9x`,RR&.`e}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
