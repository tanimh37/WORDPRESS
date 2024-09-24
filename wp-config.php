<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf60_wp2' );

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
define( 'AUTH_KEY',         'MFVEDQ$qHIY2+NL{EW|Ch+[;K:#ZIWDDc`Zm!3w@s/bK71T2Ac7)HheBhnt@wY{8' );
define( 'SECURE_AUTH_KEY',  'u5R8;<pGJj_+Vf(mPH,~.]D3RI{qt{M7@f*-LCbgDU:1>+fhO?:h5cpTIlyvkR$u' );
define( 'LOGGED_IN_KEY',    '>~V72Kc#O&sBGl3,:`cw0?*M|u-[{yR>2 ZL)A d_MPesySDx<g8Xz-Wnh4#.owV' );
define( 'NONCE_KEY',        ')4|0t>51Z(0h0s4Rp]{D_%=qgFi+<E]3[R+m>C:v]GpN7ylE@j(S%+//tGz]-Hfx' );
define( 'AUTH_SALT',        'b|ac W>T@77S4IC-Su29G<jQ8>lN cA,,rrmaf_$@[V~=jvYo6QbT(68iwS(SzY;' );
define( 'SECURE_AUTH_SALT', 'kF`HeUs#Mr$>~*>|C^j;:*Wm0=>:HP=eytv*fTnhkN^5BZ~*5G{kW_nC,F,C`g&7' );
define( 'LOGGED_IN_SALT',   's,%7p&!gEmi5FO0^?Z]0p}7oGx]d$Ic~wh`~v2GO)g|4Cr kKx,XoM}Mr2g>iubJ' );
define( 'NONCE_SALT',       'iwP=ag#I]qc:/-Q-nb&z}<~<RHQQi<p7u8Z%&d;$tzk$s^iHeZ-VxeOYNe8O0Rka' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
