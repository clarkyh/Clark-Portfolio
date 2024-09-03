<?php

define( 'ITSEC_ENCRYPTION_KEY', 'ZERmQi19dmA7cUc9eCkqJntWOFcwYC9qcTJxcjptTDUpcihqIUFmajgkbC9MQHtmJmNge3JsViAyVXN2Xm9BJA==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'lT?8d<l8khF1+2I_).-T*-43>mJx-xCc{o.%Wqp(eu3F`MPq!WJ;,sbvYUgYng4k' );
define( 'SECURE_AUTH_KEY',   'J7I,FInEelg18XnV1UWrDk/I^h436J$1hy_oGg:&S:[Y9@$FnWHVvw3Cf,K:=2dr' );
define( 'LOGGED_IN_KEY',     'mDZNvhyboe 7?b(K S.%A@8zR80e_,zaCJ8eE!]H#kokUe/Q~)KyoctF0>PMz3_^' );
define( 'NONCE_KEY',         '~=Gg#=uV0(C6(`|ZHL{phq.`syYKqS|1iq/lFvT*gOgI-,>TQavQOD$Ne}/hH:A+' );
define( 'AUTH_SALT',         'R-{Px7(5oaTTaj2d=++u8M]9DIV,y$x{cRqy(yO;aHiaJFLOTf3/pE[)<&UZ9k@U' );
define( 'SECURE_AUTH_SALT',  '$BM @t W32a|4)7v{#h.ft-jJ>0,q76Wl.8V;}<!za@jzsSB@H/jC&[. y cfOZh' );
define( 'LOGGED_IN_SALT',    'vTqM#U0Ff#S9w]!HgV+/{GT`y?+?9M2>gLj_D/t)RZ_mJ@Ye#- w:u=b3yYN6X+h' );
define( 'NONCE_SALT',        '*u9]krD-]oDU<O9l`dVc~am@^p}(=wdh32vE6v(T1^I0pCak6]7>lfb)5 =r9/!K' );
define( 'WP_CACHE_KEY_SALT', 'a3uIRy|%l#Q_hEwY~],oS,r?2X/CGtG33^]DC*K~Roq6C}X >z@.6Ee$j8_(S*PL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'WP_HOME', 'http://clark-huang.com/' );
define( 'WP_SITEURL', 'http://clark-huang.com/' );

