<?php
/**
 * @package    site\themes\twenty12
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2017, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\themes\twenty12;

// dequeue parent theme styles
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('twentytwelve-fonts');
    wp_dequeue_style('twentytwelve-style');
    wp_dequeue_style('twentytwelve-ie');
}, 15);

// enqueue theme styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('my-twenty12-fonts', esc_url_raw(twentytwelve_get_font_url()));
    wp_enqueue_style('my-twenty12-style', get_stylesheet_uri());
});