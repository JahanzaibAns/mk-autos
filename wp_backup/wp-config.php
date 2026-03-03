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
define( 'DB_NAME', 'u754003436_RLWAK' );

/** Database username */
define( 'DB_USER', 'u754003436_R7Djq' );

/** Database password */
define( 'DB_PASSWORD', 'KIwkQZoFSl' );

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
define( 'AUTH_KEY',          '?xi/G+WWBCFBMltlmw9@WB#BeS)tbvwli3@2/XG+.>i>m/;$93x0G-e::NiLrTl&' );
define( 'SECURE_AUTH_KEY',   'y?a,,zl~`!j<tIJD_:6<,lW x fv69>T0qq9k}tN oaNk8kgr8jNF av+zak{T~o' );
define( 'LOGGED_IN_KEY',     'R^fd`1{Ev9$py-1s))0u<U%iL|);k5jfFuZge~ E6R% @+OsJZW&vr!DKWpo-S^0' );
define( 'NONCE_KEY',         'MLM.w!C^]5jV[y?&~<}gP4B;w]J6FX-24Pp#j_xe=JEOB^c;IRd!gJ`h}9.@ma@,' );
define( 'AUTH_SALT',         '(Nu^e^:ye40yXW/i1Goc%0_NhR;3-.zd=8@W&&kB#tA@(V{DFr_d{9/JKUD24bii' );
define( 'SECURE_AUTH_SALT',  'Ww)4emn>]K#V&dtB)vWk:ArKzv]e$!>x->DViPKNE5ZUI/LA>L#6*nI~}gVNJ`S4' );
define( 'LOGGED_IN_SALT',    'EEk[m;d!B`J:?@L+{rHHh+^Y89~7fx6+zLTSj:sM*r/@gH*aj+$b6az2Y/R?GqIq' );
define( 'NONCE_SALT',        'B[l&WC*V1_%2HaEW`]m/P<7!.}I]N^ZJ7Whst`,=5[o@{ALPg^l>G^F_,%xm{@ks' );
define( 'WP_CACHE_KEY_SALT', '#;=pKLs5^1^ivX#;8Nk[-rIcHTDX*MpzH1Ai)ndv=jc>ru-=[b{b?gl]ul9~_N(?' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '1e76383f7c922dfda9d591cc8dee6588' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
