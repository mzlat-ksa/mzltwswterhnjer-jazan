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
define( 'DB_NAME', 'mzlt_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+#Tn=q<mY; p%YsVMCwKyAUZj hVaG4,SaD$WI&UoTn*:4WbGq.N]/O5<Q</o8Vo' );
define( 'SECURE_AUTH_KEY',  '7FF9=X9E^I22rgIc=Agbtp?@.V}Fhlsmpo/{xY%o7} #sS}*ZlX7Y!g[sn6*/FRt' );
define( 'LOGGED_IN_KEY',    '54w6.lA!V#P;Q)k+r`2!|Kp;!K(zR7b&8#5~y$:1g5Gmy<ou|D|I;:+]b0KOmpyY' );
define( 'NONCE_KEY',        'IxB]zpk[p#isHv%~F$:$R;Nax/0CC<E1pj8lLj9u<I?AFifKORsE=1c}z>/@9; 2' );
define( 'AUTH_SALT',        '!77OH=!I@x=KIhs;kZ^Ix-tBrvcs8fXqR8;I=] &h*L=@_E%k}##nu4p74l<RY<;' );
define( 'SECURE_AUTH_SALT', 'N%m5;;5Wap}oTn/kc5a?p_UCxV=cvgs@D^r 9b&wnXrsM^?dzfXbg/`$p+RnQ}W6' );
define( 'LOGGED_IN_SALT',   'j#nH1^6<hbBh-tfW= fpRr[&P@ta>`$Mzx;OTgw%n1r5%M?Qku?zxgeg,f:SjLNN' );
define( 'NONCE_SALT',       '@HqSD7Ux# 2;=f1?2&#Y8GtIy:VPYH%=7!Ag</NQ-{`)K{Se%AX* t5[M[@M^ /e' );

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
