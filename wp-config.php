<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'learnWebCode');

/** MySQL database username */
define('DB_USER', 'learnWebCode');

/** MySQL database password */
define('DB_PASSWORD', '!WpPactings26');

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
define('AUTH_KEY',         'F])+/UkV3t]`ea&U<UfV/OFA;msA&WTN~kJT9U=6rr~gN<8Dfo=% e`iIQ!%bwJp');
define('SECURE_AUTH_KEY',  'f>=_v@lMMH7hTOwBr}g7Z+xAY SL|/z`-zWe)dd@R;Ej@;)$]=>fw=>Y;KNDkG:U');
define('LOGGED_IN_KEY',    '&~%36=ppA5G.j@i.@vG>G:Kj;_}.9a|De,GEdQ46&A?]0+SOKqm%L0!ZhBx6d(GG');
define('NONCE_KEY',        'hN4<KF*MF]i|{L?G:L@]8iUhT8@r00l+;7Mm~cX]^@m1$Hyh:y7)-|Us+d/tKL;r');
define('AUTH_SALT',        'ZM]_l;j@[ .`f.3]z6IQ4mR]+984bo0|cnlQc<sp;|lA%071;An2yNZTq,:=sJW$');
define('SECURE_AUTH_SALT', '+t+, G0D9<|*X_yjyUk2Fu@:]t~yvdj;?6~Z3;4x&+k|nvx-Mto6Z4x@SW<r67%^');
define('LOGGED_IN_SALT',   'L~i3J1:oC5()D$ED9i*1^3|s]9EQ}sk--SctmRqT5RQeR*8+[NIIDJ-)-2-M~X}A');
define('NONCE_SALT',       '/taA5.xSrf:S(E@I+dBo79UnBcdvxJW+vfGbFjTu.w9Dy<&cSTN84]L.+UM<,0^z');

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
