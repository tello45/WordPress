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
define( 'DB_NAME', 'est sb' );

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
define( 'AUTH_KEY',         '_A067Q]JL2 PAAy</gj^Zm,_Wl*+nC/E{Ia +~-9hkgZlJ_B)E^dHay~H%trza_q' );
define( 'SECURE_AUTH_KEY',  'K3At`kIswO(!FEa)ydZTo3J#I{{!p:a^;{Gn%;=Pme6Il?EoPPM49Q[qdS5<4&qh' );
define( 'LOGGED_IN_KEY',    '<oXX1lCQCt8!({<[@> M,}rhl5jDG}nLWhfb{5k|4u,GtDjN^}bh8]e<WR$=MKe_' );
define( 'NONCE_KEY',        '>;k`Rsn%%zg^XhIsK9ZF3 J_06|y?mNqZ3Jo;pg GziO0?},6N~7dE8=AKv_om!Q' );
define( 'AUTH_SALT',        'U2o?I$>[Eyk8j4We2SyD?QqZJD7~N{y1!Q(R)WvN|fBCW?.yywE7[T9>#c+4+eXP' );
define( 'SECURE_AUTH_SALT', 'vP#s+U[|}]&wB9tAPp>_NUQgsIT4x6pW8.yo+PH.6I9K78poA[k/8JPx!V9Q((!&' );
define( 'LOGGED_IN_SALT',   '6(}U_j @Z^^O|p=^U1 0YMkXQ*u/hFh[F(A^`]ne1D&FV/6/@fU+9%)z%93oRU(c' );
define( 'NONCE_SALT',       '`U,@mf[3uz61-92z51zt&e}*fybW>/CqW{UhdXK!S^P?[6k+3z<l!qkW$l>e#!_j' );

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
