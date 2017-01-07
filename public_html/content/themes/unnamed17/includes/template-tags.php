<?php
/**
 * @package    site\themes\unnamed17
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2017, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\themes\unnamed17;

/**
 * Display an accessibility-friendly link that skips to content.
 */
function unnamed17_skip_to_content()
{
    printf('<a class="skip-link screen-reader-text" href="#content">%s</a>', esc_html__('Skip to content', 'unnamed17'));
}

/**
 * Display an accessibility-friendly link to edit a post or page.
 */
function unnamed17_edit_link()
{
    $text = sprintf(__('Edit<span class="screen-reader-text">"%s"</span>', 'unnamed17'), get_the_title());
    edit_post_link($text, '<span class="edit-link">', '</span>');
}