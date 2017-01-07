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

// theme support cleanup
add_action('after_setup_theme', function () {
    remove_theme_support('custom-background');
    remove_theme_support('custom-header');
}, 15);

// nav menu cleanup
add_action('after_setup_theme', function () {
    unregister_nav_menu('primary');
}, 15);

// sidebar cleanup
add_action('widgets_init', function () {
    unregister_sidebar('sidebar-1');
    unregister_sidebar('sidebar-2');
    unregister_sidebar('sidebar-3');
}, 15);