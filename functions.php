<?php

/**
 * PSR-4 class autoloader
 */
require_once 'vendor/autoload.php';
const TEXTDOMAIN = 'rst';
use RST\Theme;

$theme = Theme::getInstance();

/**
 * Rest resource checking
 */

use RST\Rest\Resources\TestData;

$theme->rest->setNamespace('rst/v1');
$theme->rest->addResource(new TestData());

/**
 * Register custom gutenberg block with backend logic
 */

use RST\Blocks\PostSnapshot;

$theme->gutenberg->setDependencies(['wp-blocks', 'wp-element', 'wp-components', 'wp-data']);

try {

    $theme->gutenberg->register([
        'block' => 'post-snapshot',
        'render' => [PostSnapshot::class, 'renderCallback'],
    ]);

} catch (Exception $e) {
    error_log($e->getMessage());
}

/**
 * Theme setup functions
 */

/**
 * Load scripts and styles
 * @link        http://developer.wordpress.org/reference/functions/wp_enqueue_script
 * @link        http://wp-kama.ru/function/wp_enqueue_script
 * @package     WordPress
 * @subpackage  RSV v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */
function rst_load_assets()
{
    //--- Load scripts and styles only for frontend: -----------------------------
    if (!is_admin()) {
        // Styles
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/app.min.css');
        wp_enqueue_style('slick-styles', get_template_directory_uri() . '/slick/slick.css');

        // Scripts
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false);
        wp_enqueue_script('jquery');
        wp_enqueue_script('slick-js', get_template_directory_uri() . '/slick/slick.min.js', ['jquery'], '1.8.1', true);
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/dist/app.min.js', ['slick-js'], '1.0.0', true);

        // AJAX
        wp_localize_script('app', 'myajax',
            array(
                'url' => admin_url('admin-ajax.php'),
                'home_url' => get_home_url(),
            )
        );
    }

}

add_action('wp', 'rst_load_assets');

require_once 'src/helpers.php';
require_once 'src/Hooks/user-creating.php';

// CPT Team
require_once 'inc/custom-post-types/team/cpt-team.php';

// CPT Projects
require_once 'inc/custom-post-types/projects/cpt-projects.php';
require_once 'inc/custom-post-types/projects/rest-api-projects.php';

//Post filter
require_once 'inc/rest-api-post-filter.php';


/**
 * ACF Option pages
 */

add_action('acf/init', 'acf_op_init');
function acf_op_init()
{
    if (function_exists('acf_add_options_page')) {
        if (file_exists(get_template_directory() . '/inc/acf-theme-settings.php')) {
            require_once 'inc/acf-theme-settings.php';
        }
    }
}

function disable_content_editor()
{
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}

add_action('admin_init', 'disable_content_editor');

function post_link_attributes($output)
{
    $class = 'class="project-demos__project-switcher-link"';
    return str_replace('<a href=', '<a ' . $class . ' href=', $output);
}

add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');


add_filter('body_class', 'page_bg_class');
function page_bg_class($classes)
{
    $pageBackground = get_field('white_bg');
    if (strtolower($pageBackground[0]) === 'white'):
        $classes[] = 'white-bg';
        return $classes;
    else:
        return $classes;
    endif;
}
