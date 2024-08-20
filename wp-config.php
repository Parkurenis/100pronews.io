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
define( 'DB_NAME', '100pronew' );

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
define( 'AUTH_KEY',         '}6sy~aC<>lOm!YI7CLygV-Up=JZ,&r2[MjLgupA;#bQ(Yn#3nj#&P?+.G.1-q KH' );
define( 'SECURE_AUTH_KEY',  ':)ahsT}I[dO70}A?]>9*#RrQUxC|lbKA{o^0~6MEU^ePI+N|*lYb`ecIP65[yhIa' );
define( 'LOGGED_IN_KEY',    'T64!^~bT& G8sF+2t3gyv(j- [<D-[F7-|>rHF,b[mv&Lm6,`%y5wz=6.u+<an>O' );
define( 'NONCE_KEY',        'WRxD/)jTR(.TL);6f6-j?pok;=Ghklqa3ga&F!vx+Z(EepqZS,Kol{QF|fGKy.K)' );
define( 'AUTH_SALT',        'F2Lg[.iaXQhS6MReCPXM<^`h7kb)E3$v5W1`P]eEN0g.HOmgyh~dX7j&;Qm34Y)X' );
define( 'SECURE_AUTH_SALT', '.~JNwU41=]!]2j=aqbaDd3TWEQcZza_kQmUJDlu-Z_TTDW1d& Qlq->@hN<?c*lL' );
define( 'LOGGED_IN_SALT',   '64~^-ON69+ziZcsaDXwmY!0uQ;mvCAO-.[gH7&TO|m#]bS6g0FM@UTDXG=yo!6JR' );
define( 'NONCE_SALT',       'S4G)7`wKAhG#  aSVmIWRAeJ%/Kdik1RxScmqIKd+d7R9[L~Bd6TvVvB$#@kA{/P' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
