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
define( 'DB_NAME', 'classwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mm1377mm' );

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
define( 'AUTH_KEY',         '^j+Ol*4<Y1GU/khXUb6],>SGz~d}UQX6/L?(NpXED0sr%1g9(v1GcTR9a#;<VC73' );
define( 'SECURE_AUTH_KEY',  'p*=kD/eupzv43l={y_(s6j3Lp)8F/_mB?jZst>]Lq=nQ+gGGqKF`O4K47x3IGo3A' );
define( 'LOGGED_IN_KEY',    '=&#Er8=/Iu[ 0Rzza> h2@VakqlzQB,|<qM67~kjqC]9h_a;L3n(Hzo ;+DZOR!}' );
define( 'NONCE_KEY',        ' GfwSujkiolH^7:].|/N^1Mqb3shy0P_%&J+7p6G2R-7KIx3Aq>|<!b/zBg+p?dY' );
define( 'AUTH_SALT',        'IARo-#E&:U<aCdktIe5{v<RY_%oZHOl4:x%RYb0r*cV;Nm{g|MO`3loQA,W~geNg' );
define( 'SECURE_AUTH_SALT', 'e;w+=wkjV(-r%JzJ6KO;u1V[7C)6T4mXyAI?QhUb&c2#:+[K`^5fIP3cg~Yg]~Bo' );
define( 'LOGGED_IN_SALT',   '#wCYW7p@-t6yg(pmZIs1[MUp:7C%+M#,QnDg-qH|1i&aE}Q%*id@8wG8_A];?/E~' );
define( 'NONCE_SALT',       '^|N~)-[Yt%pRYJ ?/o_;UyE/=J8=x[CZb.s_g{,}hbrH0^!}(?KoF)Qw=Gm .s_<' );

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
