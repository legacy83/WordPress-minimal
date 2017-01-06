<?php
/**
 * Plugin Name: Site/Config
 * Description: The Site/Config plugin.
 *
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   Site\Config
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2016, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action('muplugins_loaded', function () {
    define('WP_DEFAULT_THEME', 'twentytwelve');
    register_theme_directory(ABSPATH . 'wp-content/themes/');
});