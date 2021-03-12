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
define( 'DB_NAME', 'automattic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fz#OW58I#wveem#&{F/nyEHgM)X1uc*1nK!Vqr0MqVSZ~pka9.tJE92-|*Z5AtV+' );
define( 'SECURE_AUTH_KEY',  'D8MIYCAga89XoE``;^fpq{:7RXtt-i{4,($GKh4 pI.>oU%&QUS*T+5F|qAxG0e(' );
define( 'LOGGED_IN_KEY',    'Za 0UlMP%b9LqXyz>+#Dn78oRPt]l1O|c[#{ 6U-J`azH.2H%LXI$1Nd*2:uvN>D' );
define( 'NONCE_KEY',        'L7AajGaPl?zs<x-!4S0)nRX@@lh>@>iF#vup$0|0<X#sM}rybMnXBx-GPI!FA3.f' );
define( 'AUTH_SALT',        'v]<r>($R=.6j_t+7VRP&qfZoi =x5w|BF-;r2]xaD@J?K2p~D|!D3r;<:r?w)yl&' );
define( 'SECURE_AUTH_SALT', 'N[ox_rYtw< YAyqaW>,Tt:o38]Fp$n|Nz[B}MB7fdVL*j.s4]lEeS&r;@-8o~0gW' );
define( 'LOGGED_IN_SALT',   '%cJc~::!4Ywy&>e;NJEt.g.R@OYx^*oI&&]tX,;ONsPO4a5mV5-jhZpeU:`H1+DI' );
define( 'NONCE_SALT',       '*TR@0S!Q+ID&,;WD:Cq^j:2r`YOKKY{a9eoR7:qM3/bRv_9}JAKd)pQM=Spl,OTx' );

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
