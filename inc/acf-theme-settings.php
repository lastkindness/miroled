<?php

if (function_exists('acf_add_options_page')) {
    //Register ACF Theme settings pages
    $parent = acf_add_options_page([
        'icon_url' => 'dashicons-admin-generic',
        'page_title' => __('General Settings', TEXTDOMAIN),
        'menu_title' => __('Theme Settings', TEXTDOMAIN),
        'menu_slug' => 'crwp-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ]);

    acf_add_options_sub_page([
        'post_id' => 'header_settings',
        'page_title' => __('Header Settings', TEXTDOMAIN),
        'menu_title' => __('Header', TEXTDOMAIN),
        'parent_slug' => $parent['menu_slug'],
        'menu_slug' => 'crwp-header-settings',
        'capability' => 'edit_posts',
        'redirect' => FALSE,
    ]);

    acf_add_options_sub_page([
        'post_id' => 'footer_settings',
        'page_title' => __('Footer Settings', TEXTDOMAIN),
        'menu_title' => __('Footer', TEXTDOMAIN),
        'parent_slug' => $parent['menu_slug'],
        'menu_slug' => 'crwp-footer-settings',
        'capability' => 'edit_posts',
        'redirect' => FALSE,
    ]);

    // Blog settings (default WP post type)
    acf_add_options_page([
        'post_id' => 'blog_settings',
        'page_title' => __('Blog Settings', TEXTDOMAIN),
        'menu_title' => __('Blog Settings', TEXTDOMAIN),
        'parent_slug' => $parent['menu_slug'],
        'menu_slug' => 'crwp-blog-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => false,
    ]);

    acf_add_options_page([
        'post_id' => '404_settings',
        'page_title' => __('404 Settings', TEXTDOMAIN),
        'menu_title' => __('404 Settings', TEXTDOMAIN),
        'parent_slug' => $parent['menu_slug'],
        'menu_slug' => 'crwp-404-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => false,
    ]);

}
