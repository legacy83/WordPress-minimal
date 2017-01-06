<?php

/*
 * --------------------------------------------------------------------------------
 * MySQL settings
 * --------------------------------------------------------------------------------
 *
 * MySQL settings - You can get this info from your web host
 *
 */

define( 'DB_NAME', 'www' );
define( 'DB_USER', 'www' );
define( 'DB_PASSWORD', 'www@secret' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );


/*
 * --------------------------------------------------------------------------------
 * Home/Site address (url's)
 * --------------------------------------------------------------------------------
 *
 * Change these to different home/site address (url's).
 *
 */

defined( 'WP_HOME' ) or define( 'WP_HOME', 'http://www.gozma14.local' );
defined( 'WP_SITEURL' ) or define( 'WP_SITEURL', 'http://www.gozma14.local/wp' );


/*
 * --------------------------------------------------------------------------------
 * Authentication Unique Keys and Salts
 * --------------------------------------------------------------------------------
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 */

define('AUTH_KEY',         'd(|^$LYy|@,tm|Q4)L5[9&&@?y]s;ybL!:UJow+nv+6>IFjfh}v)ca6*#zF-n--h');
define('SECURE_AUTH_KEY',  '}QfJ|ft7k?O6bKizeFeQ/[#o2)xU@!t<H4*jVC)|svIfCBw_ASlN#?/XO4aj_&V&');
define('LOGGED_IN_KEY',    'FFfB*&-#f<3,Ev|sd1CPi-~h(}]AAEi=*[{@ r=%TiH+OIi+.2]t$ 8o*_f#.AOm');
define('NONCE_KEY',        'u*i-T%Mv@NF iIc<^=2d~=/lb8SQh]aYsl;[dr-m!c6|{17K) 6p`jL/nthKo;jN');
define('AUTH_SALT',        'Qby{+:|Bq4%|g@=zE+g++_%ONnq>I^(a!}YnP2d .y3]YeY0]v!x3bn&9Gn!gi25');
define('SECURE_AUTH_SALT', 'l/ LO9pnOB@c!LJ6t*Q83e5<n,h/sWg$j40uf#+)1XadOFLt56R,f|Ws=fGQ6ZG)');
define('LOGGED_IN_SALT',   'Nd-&rf[@4v]]f+{@)zBXh>Kqrs,,0LAWWy-]q6`Nj^PpV(EMsxc$bi#F&??u0/Ya');
define('NONCE_SALT',       'NY&g>#Yf*V6y0PQ4:s5C3_bwdNTZ`y/D3<q((|9=+dsOxJ}~o00u%1$i_%-EEO$%');


/*
 * --------------------------------------------------------------------------------
 * WordPress Database Table prefix
 * --------------------------------------------------------------------------------
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 */

$table_prefix = 'wp_';


/*
 * --------------------------------------------------------------------------------
 * For developers: WordPress debugging mode
 * --------------------------------------------------------------------------------
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 *
 */

define( 'WP_DEBUG', FALSE );


/*
 * --------------------------------------------------------------------------------
 * Absolute path
 * --------------------------------------------------------------------------------
 *
 * Absolute path to the WordPress directory.
 *
 */

if ( !defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}


/*
 * --------------------------------------------------------------------------------
 * Sets up WordPress
 * --------------------------------------------------------------------------------
 *
 * Sets up WordPress vars and included files.
 *
 */

require_once( ABSPATH . 'wp-settings.php' );