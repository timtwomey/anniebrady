<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'anniebrady');

/** MySQL database username */
define('DB_USER', 'anniebrady');

/** MySQL database password */
define('DB_PASSWORD', 'SDJg84hs');

/** MySQL hostname */
define('DB_HOST', '37.139.4.249');

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
define('AUTH_KEY',         'h:emS?-xpzvu3@~E%gMwi-G#ek]?Q!ivy%g~N1?2=S]*FS/VmqnwKAB{6m6?m^Kt');
define('SECURE_AUTH_KEY',  'bX,=f}-]7.P|Ca%Qpl3/|s[{C|15u R-N`g*%*Cz,TL8S#vP{!?V:j8AgzC|p|o5');
define('LOGGED_IN_KEY',    'MwD|M{3&J)%`Cv%|@H1+3IU?WxJWYy^IDX^RnJtdbCaBX$g#MaSCTxM+V7,:o^si');
define('NONCE_KEY',        'P%Q;X#e ojy_,P5v,XGEuZAM_V*-0g~ubGlfzKvc|xgAQo$O.,gCtkyUFzjdyqgL');
define('AUTH_SALT',        'm}q,+2J7g8&W5x)%-%Fi/Q,/xN9a~3rXrfA*h8]}9p35>5/6Pc~SBBFAddv<h5S?');
define('SECURE_AUTH_SALT', 'o_}qhOhG,8%ya)-D9J-<,<#8c09:E$8}oDN3Lc=74S7o!:SftBJR1|>NgqjMn+-3');
define('LOGGED_IN_SALT',   'Cl`.8g<39|C2cJ@-HbkJ+mQXr&_GU||LVt gU-,/z;nh|zm|xD PSN@(-#+3h&v0');
define('NONCE_SALT',       'v-s^Cje0DQ<Ls EaK+TXQTK.*%P8pq+|E2pL-[op0Rg)0&G+LL >9|i]+FdR^T=-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
