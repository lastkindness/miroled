<?php

use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;

// CPT
$team = new PostType('team');

$team->setLabels(
    [
        'name' => __('All Team members', TEXTDOMAIN),
        'singular_name' => __('Team', TEXTDOMAIN),
        'menu_name' => __('Team', TEXTDOMAIN),
        'name_admin_bar' => __('Team member', TEXTDOMAIN),
        'parent_item' => NULL,
        'parent_item_colon' => NULL,
        'add_new' => __('Add Person', TEXTDOMAIN),
        'add_new_item' => __('Add Person', TEXTDOMAIN),
        'new_item' => __('New Person', TEXTDOMAIN),
        'edit_item' => __('Edit Person', TEXTDOMAIN),
        'view_item' => __('View Person', TEXTDOMAIN),
        'all_items' => __('All Team members', TEXTDOMAIN),
        'search_items' => __('Search Person', TEXTDOMAIN),
        'not_found' => __('No Person found', TEXTDOMAIN),
        'not_found_in_trash' => __('No Person found in trash', TEXTDOMAIN),
        'featured_image' => __('Photo person', TEXTDOMAIN),
        'set_featured_image' => __('Add Photo person', TEXTDOMAIN),
        'remove_featured_image' => __('Remove Photo person', TEXTDOMAIN),
        'use_featured_image' => __('Use Photo person', TEXTDOMAIN),
    ]
);

$team->setArgs(
    [
        'menu_icon' => 'dashicons-groups',
        'public' => TRUE,
        'publicly_queryable' => TRUE, // cpt: enabled url in backend/front side
        'query_var' => TRUE, // cpt: using name of CPT in WP functions as a parameter
        'hierarchical' => FALSE,
        'has_archive' => FALSE,
        'rewrite' => TRUE, // cpt: human-readable url
        'supports' => ['title', 'thumbnail', 'revisions'],
        'show_in_nav_menus' => FALSE, // cpt: admin Appearance -> Menus
        'exclude_from_search' => FALSE,
    ]
);


// Taxonomy
$taxGroup = new Taxonomy('group', 'group');

$taxGroup->setLabels(
    [
        'name' => __('Groups', TEXTDOMAIN),
        'menu_name' => __('Groups', TEXTDOMAIN),
        'singular_name' => __('Group', TEXTDOMAIN),
        'search_items' => __('Search Group', TEXTDOMAIN),
        'all_items' => __('All Groups', TEXTDOMAIN),
        'parent_item' => __('Parent Group', TEXTDOMAIN),
        'parent_item_colon' => __('Parent Group:', TEXTDOMAIN),
        'edit_item' => __('Edit Group', TEXTDOMAIN),
        'update_item' => __('Update Group', TEXTDOMAIN),
        'add_new_item' => __('Add New Group', TEXTDOMAIN),
        'view_item' => __('View Group', TEXTDOMAIN),
        'new_item_name' => __('New name Group', TEXTDOMAIN),
        'not_found' => __('No Group found', TEXTDOMAIN),
    ]
);

$taxGroup->setArgs( // the taxonomy panel appears in the sidebar of the
    [
        'public' => FALSE,
        'publicly_queryable' => FALSE, // taxonomy: use in front
        'query_var' => FALSE, // taxonomy: use in front
        'show_admin_column' => TRUE, // taxonomy: show column on the page-list of All CPT items
        'show_in_quick_edit' => TRUE, // taxonomy: show in the page-list of All CPT items
        'show_in_nav_menus' => FALSE, // taxonomy: show in admin Appearance -> Menus
        'show_tagcloud' => FALSE, // taxonomy: use in widgets
        'hierarchical' => TRUE, // taxonomy: TRUE - like a category; FALSE - like a tag
        'show_in_rest' => TRUE, // TRUE - visible taxonomy in sidebar Gutenberg editor, FALSE - only WYSIWYG
    ]
);

$taxGroup->uses($team);
