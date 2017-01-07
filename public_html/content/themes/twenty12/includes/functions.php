<?php
/**
 * @package    site\themes\twenty12
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2017, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\themes\twenty12;

// do not use default gallery style
add_action('after_setup_theme', function () {
    add_filter('use_default_gallery_style', '__return_false');
});

add_action('after_setup_theme', function () {
    unregister_nav_menu('primary');
}, 15);

add_action('widgets_init', function () {
    unregister_sidebar('sidebar-1');
    unregister_sidebar('sidebar-2');
    unregister_sidebar('sidebar-3');
}, 15);