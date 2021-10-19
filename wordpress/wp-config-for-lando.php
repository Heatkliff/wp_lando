<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'database');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '(e_5T n}9.:,Hc07G?#7H}x-!7PWb#]>4zk=mceYc?T(nW)7Ev)SpXyVy[0[E6I8');
define('SECURE_AUTH_KEY', 'HgsS  &<V6v@F*epmQg#|k-s+T4Z!-r*3pS-0$aO{TF|2Vb xsS+$&`45</~fC&Q');
define('LOGGED_IN_KEY', '6$0Kl!wW/o=kPk{D6) t>[*`od^!Vlq-||`XO_))U8emK5_8>haqF7eD;M+8#fpC');
define('NONCE_KEY', 'Qs%_2qI~EwUEjl(MJHk <-,J+ze%2x=VYhJx_>|UE|z,5y&(l=9%+p^a[*J8oD`s');
define('AUTH_SALT', 'L&;N<XtqQ(d5k)Q|U5%FY6E1P!dFNEdfFF=Zyems|3:n@}nQ+<?xQ4|si@)FhaFZ');
define('SECURE_AUTH_SALT', '_9g2^L9L!n;DFVmr}$fUMVpZ2 ,XdU|a/kv}`_iRW|2ZI&^<+SR{+<M1}+79 z$M');
define('LOGGED_IN_SALT', '$Mt6|J7RI:agUv?VK?<4i=a<p6BmO*Q&Cug-PQv0pl(||14ac< vq+VTw>Tc?rhV');
define('NONCE_SALT', 'DKR%Y*+81L9J)bwq-Sv>CU~QXxhr`,8xv~Ffe<Fi,rR/sPw+W,8<VT]8n4J]9N`p');
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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
