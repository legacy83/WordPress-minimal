<?php
/**
 * @package    site\themes\twenty12
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2017, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\themes\twenty12;

// enqueue theme scripts
add_action('wp_enqueue_scripts', function () {
    $stylesheet_dir_uri = trailingslashit(get_stylesheet_directory_uri());
    wp_enqueue_script('my-twenty12-global', "{$stylesheet_dir_uri}assets/js/global.js", array('jquery'), FALSE, TRUE);
});