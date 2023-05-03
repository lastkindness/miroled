<?php

use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;

// CPT
$projects = new PostType('projects');

$projects->setLabels(
    [
        'name' => __('All Projects', TEXTDOMAIN),
        'singular_name' => __('Projects', TEXTDOMAIN),
        'menu_name' => __('Projects', TEXTDOMAIN),
        'name_admin_bar' => __('Projects', TEXTDOMAIN),
        'parent_item' => NULL,
        'parent_item_colon' => NULL,
        'add_new' => __('Add Project', TEXTDOMAIN),
        'add_new_item' => __('Add Project', TEXTDOMAIN),
        'new_item' => __('New Project', TEXTDOMAIN),
        'edit_item' => __('Edit Project', TEXTDOMAIN),
        'view_item' => __('View Project', TEXTDOMAIN),
        'all_items' => __('All Projects', TEXTDOMAIN),
        'search_items' => __('Search Projects', TEXTDOMAIN),
        'not_found' => __('No Projects found', TEXTDOMAIN),
        'not_found_in_trash' => __('No Projects found in trash', TEXTDOMAIN),
        'featured_image' => __('Image Project', TEXTDOMAIN),
        'set_featured_image' => __('Add Image Project', TEXTDOMAIN),
        'remove_featured_image' => __('Remove Image Project', TEXTDOMAIN),
        'use_featured_image' => __('Use Image Project', TEXTDOMAIN),
    ]
);

$projects->setArgs(
    [
        'menu_icon' => 'dashicons-building',
        'public' => TRUE,
        'publicly_queryable' => TRUE, // cpt: enabled url in backend/front side
        'query_var' => TRUE, // cpt: using name of CPT in WP functions as a parameter
        'hierarchical' => FALSE,
        'has_archive' => FALSE,
        'rewrite' => ['slug' => 'work', 'with_front' => TRUE], // cpt: human-readable url
        'supports' => ['title', 'thumbnail', 'excerpt', 'revisions'],
        'show_in_nav_menus' => FALSE, // cpt: admin Appearance -> Menus
        'exclude_from_search' => FALSE,
    ]
);

// Taxonomy - "Category of Project"
$category = new Taxonomy('work-category', 'work-category');

$category->setLabels(
    [
        'name' => __('Categories', TEXTDOMAIN),
        'menu_name' => __('Categories', TEXTDOMAIN),
        'singular_name' => __('Category', TEXTDOMAIN),
        'search_items' => __('Search Category', TEXTDOMAIN),
        'all_items' => __('All Topics', TEXTDOMAIN),
        'parent_item' => __('Parent Category', TEXTDOMAIN),
        'parent_item_colon' => __('Parent Category:', TEXTDOMAIN),
        'edit_item' => __('Edit Category', TEXTDOMAIN),
        'update_item' => __('Update Category', TEXTDOMAIN),
        'add_new_item' => __('Add New Category', TEXTDOMAIN),
        'view_item' => __('View Category', TEXTDOMAIN),
        'new_item_name' => __('New name Category', TEXTDOMAIN),
        'not_found' => __('No Categories found.', TEXTDOMAIN),
    ]
);

$category->setArgs( // the taxonomy panel appears in the sidebar of the
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

$category->uses($projects);
