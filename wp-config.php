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
define( 'DB_NAME', 'alpharock' );

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
define( 'AUTH_KEY',         'j`7E` CW*X* ,,YO<y1GZWwIzX_ WzpwvyDP// YstD}ya3yL~6b{HRcrgeq$sRg' );
define( 'SECURE_AUTH_KEY',  'Xl`0D|6yrY!@yGz~3_6DL%DwO^#0[tPK#*pR<z>(Veq.&:C90dN+H!H8r3>*RRa0' );
define( 'LOGGED_IN_KEY',    'zZ}.CNls^M(7;_@1RfM>J31>!G~)wm&>L=A((.^XKFAsFw8fz,0n7>c(dv il)7}' );
define( 'NONCE_KEY',        '^.O_g8sP6pT?_IYp1HDPFm^E|2Z-_}|q`8kHB$1w KQ.=Brw4]w3k@)(*K|tWIk1' );
define( 'AUTH_SALT',        ';k!iUK8Y~33Vy#ibt[p/:eDhrj3aR U o=z#/:7RIYb%q`a1<>#]Wjyt75`3Ph+n' );
define( 'SECURE_AUTH_SALT', 'XWnzbI1+eBM?:/br7dx00;kqJ&VV7(wTQ^kn&$bx+cf_u0Iq-?qsm+}|{0pq}-TX' );
define( 'LOGGED_IN_SALT',   'c^,3W^xD:9[D5@?pXpl FH7Nnz-gP>rAKJOG2;Qe*#lv! W2j:ptrye>Myi||PA2' );
define( 'NONCE_SALT',       'x6#<A0kj!h./80u$($5OdTI>W:wy7hcbF]&MwPBTDLb1Dgz&AJHy!<MsC.1EEY~D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_alpharock';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
