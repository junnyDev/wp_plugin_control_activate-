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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '06=Dxa+!/xR6^`y*&>Z4dNGxb-UC$zR@i=yL>mkAs!5$p:BdLJQ.CZK{<;1Kn0Yd');
define('SECURE_AUTH_KEY',  ';p!5mQ.Wf}i,3X{/u/,Sd;mffKtI:U0%*DxBvj;PAxAgu{K*{b+,NbP57-i,#VZ0');
define('LOGGED_IN_KEY',    '!`QK}LPCBWYXGqD9%jL}Hf=Lq3q}EZU5;QCXbJH&#}f}&KV#1@Ggrv[1`|P[0)].');
define('NONCE_KEY',        'j+Fv4$eU>~X#3ZJ7,lg*o{e+/9>yUxVC-]Bi#75b`n$1@k>/tvDfu@%s>P}brY (');
define('AUTH_SALT',        'K/VsHx3om~)6FQ>+9/)0GTG|l?q~e!bZ`v#Oo[_ 5W[3@nt176_B+A$Sc,z<fbnG');
define('SECURE_AUTH_SALT', '?)hoYfL?<%@;xzc+X;x[x=(LtvHPf&n^yR{!E2/$a:tFr:r6{+@ q2z:@[lluWk&');
define('LOGGED_IN_SALT',   '9dKU{S^abP?L8wpv^>hd3g4N<*1ZM5wp$J4j h}1&Dvoeo!OoJxo$aiL1A[10-Kl');
define('NONCE_SALT',       '+/T^l/:USJpve_Ga{WWSfG9 7%l(8OGj=jpsYo0%{z*eNnZvvat|L^,u+PV^?NQK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

