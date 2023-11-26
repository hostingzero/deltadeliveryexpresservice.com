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
define( 'DB_NAME', 'u123962300_C6ANw' );

/** Database username */
define( 'DB_USER', 'u123962300_oHMMo' );

/** Database password */
define( 'DB_PASSWORD', 'CB1VDKBnHe' );

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
define( 'AUTH_KEY',          'iZ=%D%bn6J8~t:N/WsD+G;MqR~cP< zX%gWmV1fuu8cUe=nva,Tv$,-|]2QJDz+A' );
define( 'SECURE_AUTH_KEY',   'n|9vzu.r$YMV-!r(R!^?X@G@<>(V<6i>DE]~%P)y<mmh*n+oP00X;6DQy=Pbs-Gh' );
define( 'LOGGED_IN_KEY',     '8T/&B!bA#peE$;<R,O3gy,qohV,4]aS86@gp1r7bPNYWko2GHlHM[QM/e3Xwec6n' );
define( 'NONCE_KEY',         '3j2!6&an3-/ YYuf98~iW&fv?`)e*]bL~h9QTI)|8|[c2-2`Ox0u^Fx.{,3zl~gQ' );
define( 'AUTH_SALT',         '_f_1h&*:s`}p`|Ukg+|4=x6cEjc~IJu)gA%E*T BW@mq9{fBo![=4dzQ4w,&Ox;p' );
define( 'SECURE_AUTH_SALT',  ':j{g&Rsfw:xez}U^c!~enG3Oxp#-@40dd`[fv9Td4-,UYgh1e{%[=D[)SAnFH|{f' );
define( 'LOGGED_IN_SALT',    '-bxfwaz0ouCvhfz9ZYYHH_q1Sotx=0{>tpf]l;`U9,-}TO)xumn3}kQ4!X6:0Z_*' );
define( 'NONCE_SALT',        'Ji_hr-zII=v[S!NI,PfxywBGsRpM|JXVQwpq{[E:u:9TY>EX@*B~zLK98ReHE(Dn' );
define( 'WP_CACHE_KEY_SALT', 'xIg95Oh+<2#Gc `h~O>ujjjq9FVYgpDN}q5y[D?xTQ0@g$*_%gMNQlDx%(vtd*]<' );


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
define( 'WP_MEMORY_LIMIT', '256M' );


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
