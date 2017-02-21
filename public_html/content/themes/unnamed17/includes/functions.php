<?php
/**
 * @package    unnamed17
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2017, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace unnamed17;

// registers support for various WordPress features
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
});

// set the content width in pixels
add_action('after_setup_theme', function () {
    $GLOBALS['content_width'] = 640;
}, 0);

// enqueue scripts and styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('unnamed17-style', get_stylesheet_uri());
    wp_enqueue_script('unnamed17-global', get_template_directory_uri() . '/assets/js/global.js', array('jquery'), false, true);
});