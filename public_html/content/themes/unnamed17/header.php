<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php \unnamed17\skip_to_content(); ?>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-header__inner">
            <?php get_template_part('template-parts/header/site', 'branding'); ?>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">