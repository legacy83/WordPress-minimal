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