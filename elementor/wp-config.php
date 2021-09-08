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
define( 'DB_NAME', 'elementor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '>5XfxC6ZdqmM{!KvTUHsZGp@:q5.K~Dk|Zv~qcd`V.{lim(ila-b+bLl{9+i)S m' );
define( 'SECURE_AUTH_KEY',  'l`2HksH]s?R N/4s4WB5MgvCIU<G?{qT0%pcE7M(IwkBya-!(PVR[i,^S1&]*#Js' );
define( 'LOGGED_IN_KEY',    'hSDK7JWs/kYA92Ux<A$^`k Q)H4{j8Ry[;Q:CrE[`i+8Zji#Lp6*csy.t;ct1q_0' );
define( 'NONCE_KEY',        'Y$XJeCPN{&eM<=Zpm^&&[G3$V,YQM;@/TkRWixgOkRr)Po+l[U1(Z/p)gsW,Y+03' );
define( 'AUTH_SALT',        '=P5+4bO$~e.PCE#r%sl!m|T+;6m&djUiB#Z7-w5+5%YZ[:+]lL&,1~KH^^fk# lc' );
define( 'SECURE_AUTH_SALT', 'CF*n4g^RUGpS,5IH 8r&q:snhh4P~[DH|Vvk_Jb>8y@+:H;mv|0??A.s`gyKo2=_' );
define( 'LOGGED_IN_SALT',   'KL{-]?9rY>CD8Y~avUh3lN<TMJ)9<VMFB38&HQ$[WH=rE~Ox{d_#8$@g}UF>Z``*' );
define( 'NONCE_SALT',       ' !=m10,Ds@vkK,Scj|PkG`0egA6tVB8}m`>b6/K;wMlJ3!pO~>2m_chClUEP!HCk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'elementor2020';

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
