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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flashsale' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'X~V|RLIip@j/*qchT{UoGoa_Fwi@`xE.G<wQ5A^>L#?<z%F7WTQCxJWC8L{1z gG' );
define( 'SECURE_AUTH_KEY',  'PP.=E~K4vXYV5V[[3%O|`cUmi_Y^l,0k-RL0n(@Uk6@;=.0xY2GxpehUQ{b4#G*a' );
define( 'LOGGED_IN_KEY',    'P~ZllY.Z5r<KIvnkMhNom|:4@5q.P_h>jDXSJBghZ_&Zzt5lBN}bm}<!cc,+Oo$(' );
define( 'NONCE_KEY',        'QE8qj1 $GmYpnJVQtC/E8s:$Q,uw1*yA1_.(d~p5l+E3InWFHb-):w2g0?Jz=N R' );
define( 'AUTH_SALT',        '9b0`d*E&un<.3P5f4>Y#ue}rP%$m`ww~g[ [-D>*^((F>%luD!h$R,d{?-8Qxee+' );
define( 'SECURE_AUTH_SALT', '~rt}cC}2nBYH-i<sox0~*Q4|//*It9~13 f}{g-{g3msty{Byn/M}98f=THoxX-1' );
define( 'LOGGED_IN_SALT',   'J@74:*Of[wU^}Q[8h;ZZ}8OgG;HGgYtlk;v(!ET2lzF`{qRddAsF?LtJp50b%XnP' );
define( 'NONCE_SALT',       'z[v<TqWfzh7dP06!/P.6[k!/i-K8/,z-sAUTOed*B,ce{#$eM2AhJep,.Ody>THF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
