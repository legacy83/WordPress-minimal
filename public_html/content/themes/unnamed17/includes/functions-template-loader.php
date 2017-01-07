<?php
/**
 * @package    site\themes\twenty12
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2017, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\themes\twenty12;

// force error 404 for some templates
add_action('template_redirect', function () {

    /**
     * @var $wp_query \WP_Query
     */
    global $wp_query;

    if (is_404()) :
    elseif (is_front_page()) :
    elseif (is_page()) :
    else :

        $wp_query->set_404();
        status_header(404);

    endif;

});