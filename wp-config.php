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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'x6~ K+RkJ<U ^nU]Uo!mP88L`G[tpY]8hE:;{b7hX#B?%<Q-nC =SM9pAv3nj}@5' );
define( 'SECURE_AUTH_KEY',  '+o7 /k!|JnWh5G.7y~PyKcdl{Y.:X?1fkSHHmx^%R3[4zAJ!:[hB&be7.~=L.-F%' );
define( 'LOGGED_IN_KEY',    ',pz A[.eu8F+OMV,t`fAD#; &x^6L@  /N~]k%)axd1y:CZ 6<4{TanhFVGjQ9*o' );
define( 'NONCE_KEY',        '{xH=(Z&G=t/uOuu_~G-R*RW/uCe<Ngq:NK=BcDcbZ/46yA>)AfwYMW=1/TC#d_9B' );
define( 'AUTH_SALT',        '5:Z5lPazZD>(6aU;F|)HzX9%hLfm!Dmg[]e@4%bFqoDgbH E8>Tf>?J-{.U-gu<j' );
define( 'SECURE_AUTH_SALT', 'Yo.-*;/1hcSojf_q#a17,wX41NW2Do]@lCD),rmf@}>g8fM0Cq_ObBc?ax`E-Qnc' );
define( 'LOGGED_IN_SALT',   'GpDLy0wn`rZTcSM!6YeGO2}w)kK:baAGKVF16P?eb//w75j6,EUzVvMm#uU]t8<I' );
define( 'NONCE_SALT',       '|:ND>&<:_:^rkSp;S@Vv1{!_`9gc<F%<HJ7kn&_Wa)i- fv1~<~oYaYmp^K/:6+l' );

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
