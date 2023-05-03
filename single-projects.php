<?php
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
*/

get_header(); ?>

<?php
if ( have_rows('single_project_elements') ) {

    while (have_rows('single_project_elements')) {

        the_row();
        $name = get_row_layout();
        get_template_part(
            'acf-blocks/single-project/' . $name,
            NULL,
            ['section-id' => $name] // in file need use: "$args['section-id']" to setup unique section id="value"
        );

    }
}
if (have_rows('page_elements')) {

    while (have_rows('page_elements')) {

        the_row();
        $name = get_row_layout();
        get_template_part(
            'acf-blocks/' . $name,
            NULL,
            ['section-id' => $name] // in file need use: "$args['section-id']" to setup unique section id="value"
        );

    }
}

?>


<?php get_footer(); ?>
