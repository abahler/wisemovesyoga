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
define('DB_NAME', 'wisemovesyoga');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '++s|0C+0:]b[. ,kVH=.Bf`e|-B}aVk~{Jke3Yn+|/1is6ihRtU6Ye6,9$`F(r:m');
define('SECURE_AUTH_KEY',  'Km&&QA2z^Q-WBkh>.(I~7sI)aM=^/VWkn{9!KaLr1tU@ /]_U|,vw-z:D^?,^|;r');
define('LOGGED_IN_KEY',    'l<ito>-X8_Ke`o21ikh0LSEO@~-J#(wMiezCO_ua^q{SR|sKl-KUOyC]-GbgXG.,');
define('NONCE_KEY',        '{y~`??a !CKf*hWvI%+q7(+rPm|NKKNTje():)-1aj1,3tV4z@OioA>ha&~uQp-q');
define('AUTH_SALT',        '&m|WWtVQZjoc.FrE^vC7Kjn+MFsMX[Su.!E%NW*XZVMP_]Hb{^|{*j3;e_d-OSG ');
define('SECURE_AUTH_SALT', 'n/J-X|%L$XaJ=Q<-zD-;%uV./U?pP!%tI|~={e=%klqJT4N> _~s4-UjcCTX>PJJ');
define('LOGGED_IN_SALT',   'I(03X)o$VliF9 v9apKjI4`m:Vip)>^.Fgi^rTq#&Q(F_GS@g<&H:H$Mj|F:h:{E');
define('NONCE_SALT',       'MsH!9,-8k2IV#(>g?nj2FfnmIKv:hWI3[uDM+[7urcq!Q)7_<1SWAzhJo:KI_SI{');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
