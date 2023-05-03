<!doctype html>
<html lang="<?php echo get_bloginfo("language"); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<!-- + additional class white-bg -->
<body <?php body_class(); ?>>
<div class="wrapper fade-content">
<header class="header">
    <?php $logoHeader = get_field('logo', 'header_settings'); ?>
    <?php if ($logoHeader) { ?>
        <a href="<?php echo get_home_url(); ?>" class="header__logo">
            <img src="<?php echo $logoHeader['url']; ?>" alt="<?php echo $logoHeader['alt']; ?>">
        </a>
    <?php } ?>
    <div class="header__menu">
        <?php
        $location = 'main_menu';
        if (has_nav_menu($location)) :
            wp_nav_menu(
                [
                    'theme_location' => $location,
                    'li_custom_item' => 'js-anchor',
                    'container' => false,
                    'container_class' => 'main-menu-container',
                    'echo' => TRUE,
                    'fallback_cb' => FALSE,
                    'depth' => 0,
                    'items_wrap' => '<ul class="header__nav menu__nav">%3$s</ul>',
                    'walker' => '',
                ]
            );
        endif;
        ?>
        <?php

        $contactButtonClass = '';
        if(is_page('kontakt')) :
           $contactButtonClass = 'current-menu-item';
        endif;
        ?>
        <?php
        $link = get_field('contact_button', 'header_settings');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="header__menu-button menu-item <?php echo $contactButtonClass; ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
    <div class="header__burger burger"></div>
    <div class="header__button">
        <?php
        $link = get_field('contact_button', 'header_settings');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn btn_dark" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
</header>
<header class="header header_sticky">
    <div class="header__menu">
        <?php
        $location = 'main_menu';
        if (has_nav_menu($location)) :
            wp_nav_menu(
                [
                    'theme_location' => $location,
                    'li_custom_item' => 'js-anchor',
                    'container' => false,
                    'container_class' => 'main-menu-container',
                    'echo' => TRUE,
                    'fallback_cb' => FALSE,
                    'depth' => 0,
                    'items_wrap' => '<ul class="header__nav menu__nav">%3$s</ul>',
                    'walker' => '',
                ]
            );
        endif;
        ?>
        <?php  $contactButtonClass = '';
        if(is_page('kontakt')) :
            $contactButtonClass = 'current-menu-item';
        endif;
        ?>
        <?php
        $link = get_field('contact_button', 'header_settings');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="header__menu-button menu-item <?php echo $contactButtonClass; ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
</header>
<main class="main">
