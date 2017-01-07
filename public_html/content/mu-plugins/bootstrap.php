<?php
/**
 * Plugin Name: Site/MUPlugins/Bootstrap
 * Description: The Site/MUPlugins/Bootstrap plugin.
 *
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   site\muplugins
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2017, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\muplugins;

// register theme directory
add_action('muplugins_loaded', function () {
    define('WP_DEFAULT_THEME', 'twentytwelve');
    register_theme_directory(ABSPATH . 'wp-content/themes/');
});

// disallow site changes
add_action('plugins_loaded', function () {
    defined('DISALLOW_FILE_EDIT') or define('DISALLOW_FILE_EDIT', TRUE);
    defined('DISALLOW_FILE_MODS') or define('DISALLOW_FILE_MODS', TRUE);
    defined('AUTOMATIC_UPDATER_DISABLED') or define('AUTOMATIC_UPDATER_DISABLED', TRUE);
});