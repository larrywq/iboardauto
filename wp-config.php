<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'iboardauto');

/** MySQL database username */
define('DB_USER', 'iboardauto');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LB/v}m((}C~mhymtS!dzNl;]y{G(ER]U+Dz<pz~.F^l*A4cS]M%+ZvL^43oeoZ{o');
define('SECURE_AUTH_KEY',  'HjudQD:*3PZ-30H<9oXHLGQx |~b1o02-:@($r(!JfB0D>@Yg}N%J_aK2[3o[vnf');
define('LOGGED_IN_KEY',    '|mY*D<t#F^RS*{h5I>67W2%>9r>hlu=~^Qz+D7SKPwI*Bqd5a|L4SkQgNrU*tI n');
define('NONCE_KEY',        'IrP,%HV.[l,2lYRh@gu(ZbH^)-8Q3-VXv_p#XME3a:H (Hj`=#x(<|P>F3SFR6E0');
define('AUTH_SALT',        ':uKEMDV{8YNor<qM]G. 4_Sg|.o`(1k~2c^fFxx!:gP=sOc)^6ybhx!(E:$prvVt');
define('SECURE_AUTH_SALT', 'EKqv2r[QTE2Y@F8MR@IejR9g+ggHD[G/F+LN|Hi-Ms9eAGkOm(@C^H6la2|W_d^d');
define('LOGGED_IN_SALT',   '8E D+,9&7[j,XgihrHFj`IrY{`<*j>;Y*4k#- ??l!3iBh50_ypNinxEth_=/cM|');
define('NONCE_SALT',       'G:K8hHa;*RNwboDD2+J=uJ;(=+Il15B]EREl^x~v-B@$kKb+-e#bMGm~p{kkc{Px');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
