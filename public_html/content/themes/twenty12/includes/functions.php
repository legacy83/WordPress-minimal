<?php
/**
 * @package    My\Twenty12\Theme
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Twenty12\Theme;

// do not use default gallery style
add_action( 'after_setup_theme', function () {
    add_filter( 'use_default_gallery_style', '__return_false' );
} );