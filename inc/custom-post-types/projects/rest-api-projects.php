<?php

/**
 * REST API URL for filtration the custom post type "project"
 */

// /wp-json/newoffice/v1/loadProjects?category=id

add_action('rest_api_init', function () {
    register_rest_route('newoffice/v1', 'loadProjects', [
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'getProjects',
        'args' => [
            'categories' => [
                'type' => 'integer',
                'required' => TRUE,
                'default' => 0,
            ],
        ],
    ]);
});


    function getProjects(WP_REST_Request $request): array
    {
        $data = [];
        $postType = 'projects';
        $postsPerPage = -1;
        $taxonomy = 'work-category';

        $args = [
            'post_type' => $postType,
            'posts_per_page' => $postsPerPage,
            'post_status' => 'publish'
        ];

        $groupID = (int)$request->get_param('categories');

        if ($groupID != 0) {
            $args['tax_query'] = [
                [
                    'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                    'terms' => [$groupID],
                    'include_children' => FALSE,
                ]
            ];
        }

        $projects = new WP_Query($args);

        // data for testing api working
        $data['found-posts'] = $projects->found_posts;

        if ($projects->post_count < $postsPerPage or $projects->post_count == $projects->found_posts) {
            $data['hide_button_load_more'] = 1;
        } else {
            $data['hide_button_load_more'] = 0;
        }


        if ($projects->have_posts()) {

            ob_start(); // enabling buffering

            get_template_part(
                'inc/custom-post-types/projects/projects-loop-query',
                NULL,
                ['wp_query' => $projects, 'taxonomy' => $taxonomy] // in part file need use: "$args['key']"
            );

            $data['htmlMembers'] = ob_get_contents(); // save data of buffer

            ob_clean(); //clean buffer
        }

        return $data;
    }
