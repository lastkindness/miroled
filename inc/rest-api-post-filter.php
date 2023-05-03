<?php

// /wp-json/insights/v1/insights?category=id

add_action('rest_api_init', function () {
    register_rest_route('insights/v1', 'insights', [
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'getPosts',
        'args' => [
            'categories' => [
                'type' => 'integer',
                'required' => TRUE,
                'default' => 0,
            ],
//            'categories' => array(
//                'type' => 'string',
//                'required' => FALSE,
//                'default' => '',
//            ),
        ],
    ]);
});


function getPosts(WP_REST_Request $request): array
{
    $data = [];
    $postType = 'post';
    $postsPerPage = -1;
    $taxonomy = 'category';

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

    $insights = new WP_Query($args);

    // data for testing api working
    $data['found-posts'] = $insights->found_posts;

    if ($insights->post_count < $postsPerPage or $insights->post_count == $insights->found_posts) {
        $data['hide_button_load_more'] = 1;
    } else {
        $data['hide_button_load_more'] = 0;
    }


    if ($insights->have_posts()) {

        ob_start(); // enabling buffering

        get_template_part(
            'inc/posts-loop-query',
            NULL,
            ['wp_query' => $insights, 'taxonomy' => $taxonomy] // in part file need use: "$args['key']"
        );

        $data['htmlMembers'] = ob_get_contents(); // save data of buffer

        ob_clean(); //clean buffer
    }

    return $data;
}
