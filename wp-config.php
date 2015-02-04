<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fourplat_wedding');

/** MySQL database username */
define('DB_USER', 'fourplat_admin');

/** MySQL database password */
define('DB_PASSWORD', 'nudge53_slag');

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
define('AUTH_KEY',         '9-G|4fIm0fY7z<gjAA|kRN:2G$F&=rq_]1sQ6Dx<D6b[)afY|r8]1yk2-6Sq1CT|');
define('SECURE_AUTH_KEY',  '*wYCdc01TYT.z%B|8rvK(b?,mIhl9OA!k9VVm+iL?Soqv8nakkR~-)J@Tx,u3RR!');
define('LOGGED_IN_KEY',    '^S`B>s!;>2_ ;9,N->+k?sA%K:GgxJ|jaa  I(ottm<W<W:M+6fUq/_z{(xlF#I=');
define('NONCE_KEY',        '+Be_|t=JIaKu{0JVc,N!QRgbB,hNtq#l+iBSRHXE-|jClDzeQ8UOZwu=?H&t]T@v');
define('AUTH_SALT',        '|&}hIMuJuvM[qT,p+-+PC{^Sl2QWued7+u~yNC_4NQVd|5d1}--j?)|f2tzYY|&j');
define('SECURE_AUTH_SALT', 'Sr93b1]yQtTw+GTc-V?mvb%aa[yl(}]P}Rx!H]2lHFTRyfk|HX9ua[dAS eld;w;');
define('LOGGED_IN_SALT',   'hyXC#}.-0znwS$X{6,W)/=:G|bdb3N-#hb/zFhz!|cX)~mCI7Igaud=Z.?yP8SQ:');
define('NONCE_SALT',       'i#<_2>3Ar|lp/OM+{wmi&]EGS)$QU>fRk+e@Xez8iNk2?[<;!h#?=/4Z.PzR@&-a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
