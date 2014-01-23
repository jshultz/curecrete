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
define('DB_NAME', 'curecret_sitedb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

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
define('AUTH_KEY',         '=W9Hj;+@~|}9@}<@+-Z(t|8Gp8xI^l|Y?8BNwVDo|$HC&OGI6|y+}0: Q`x}v@5+');
define('SECURE_AUTH_KEY',  ';^+%yF<$t5MuEU#Z[RqIAPtlL{<1ZzRY~BKF1sj<,ii@+Ht:SM(%8HsHqfBn,-**');
define('LOGGED_IN_KEY',    '(6s`k9UY/UO:_36L}@vw9)W.>b-;<)x~i*4`0kGuYtsBv|w%V)k+=Lf<ra%p@d/Z');
define('NONCE_KEY',        '3_&$Tkr*@ mkbN=:^CzI_qjQ3|[ GXFR~o(ngfW{ppQ8RD*G=N8|-j=zT:G*Z$.1');
define('AUTH_SALT',        '=RFO!q+%JujRK8y3(3Hlx5kj&sK33My1|BD8LG##;2y1S@P#a|]?V;y9d+-#.a{e');
define('SECURE_AUTH_SALT', '7D2Su`Gr@M>7`I$4;1*DczdghG%M7qu@E8VZ~-L`>f!,<n/&Pb~H0|wr@TP?;mL+');
define('LOGGED_IN_SALT',   'ip=m@cO=5|8,}a^x. CMhr+<jeT0)vN|cE7[ta4elHHDq@Q4kQz(XEr*3,wrwwR`');
define('NONCE_SALT',       '9 1Cxn@qU_vyb+&acT63eY(rCw9g2rW@8x]al`$YLrNq@5_q8}|-_IJ7uOAl`{-b');

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
