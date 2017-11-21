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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         'mE.Q,pbgE:5_Vv!bCC|q8JTDpIN/$suE6$9P@}!XKFPR8fG;lFvhwy,SFtKL; YJ');
define('SECURE_AUTH_KEY',  'WrFE%qyk^)yKoQUwN|Yb}~bsM_F(1((V?YqFk8p-+G)pv/$S7Ux;c9575<D+5#h;');
define('LOGGED_IN_KEY',    'A;_|Haxy=&]5OFU|k*Zk#tbyAF]5{T_gsDEEzF70x>$q/USY`/&&kBzQMb3UX;Ge');
define('NONCE_KEY',        '5CWSoO{7ZCj+@+%Cb36]/NS;JD`nJHvaCGT:F.7LjD7NTRy6U.1-zBuCIRB(jp/)');
define('AUTH_SALT',        'HF+.Fw nmcbZWl9jOhVawB,68/(~_!nT4rf4y{N.Y_23keFtwdGC,>8^^$>k-))E');
define('SECURE_AUTH_SALT', 'wNFTb_atzl&3tqW/O=z.ym%ibA+_:,$p$/pJC}NM9yMK [V;U@0^2LXx!$Q%>Gn_');
define('LOGGED_IN_SALT',   'i~l{=RC`tOK(%C/}RxZx&&I2Bdzk4PbKqxm9aa9*X{czTVxD]j)0m)@B&l`$bn#C');
define('NONCE_SALT',       '*r R)2ZigtmY-q(vTOA<%je^IHjCp`yN 15Zhh9IkbD2hq8{Xr)1e8C^l!SBW_2$');

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
