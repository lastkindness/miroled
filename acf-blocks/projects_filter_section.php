<?php
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'projects-section_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'projects-section_margin-280';
endif;

$taxonomy = 'work-category';
$postType = 'projects';
$firstLoadPosts = -1;

$args = [
    'post_type' => $postType,
    'posts_per_page' => $firstLoadPosts,
    'post_status' => 'publish',
];


/* Get all term IDs (except empty) of taxonomy sort by order manually defined
                    in admin via plugin "Category Order and Taxonomy Terms Order" */
$categoryGroup = get_sub_field('category_group');
$argsTerms = [
    'taxonomy' => $taxonomy,
    'orderby' => 'term_order', // defined in admin via plugin "Category Order and Taxonomy Terms Order".
    'parent' => 0, // 0 - only top-level terms will be returned
    'include' => ($categoryGroup) ? $categoryGroup : [],
];
$category = get_terms($argsTerms);

$projects = new WP_Query($args);
?>
<!-- class variations: home-projects home-projects_margin-140 home-projects_margin-280 -->
<?php if ($projects->have_posts()) : ?>
    <section id="<?php if ($id = get_sub_field('id')): ?><?php echo $id; ?><?php endif; ?>" class="section fade-content projects-section <?php echo $marginClass; ?>" id="projects">
        <div class="projects-section__content">
                <div class="wrapper">
                    <div class="section__description">
                        <div class="section__description-text">

                            <?php if (!is_wp_error($category) and $category) : ?>
                                <div class="projects__filters">
                                    <div class="filters__titles projects__filters-wrapper">
                                        <div class="insights__filters_arrow">
                                            <span class="vertical-line"></span>
                                            <span class="horizontal-lines"></span>
                                        </div>
                                        <div class="projects__current-mobile"></div>
                                        <button type="button" class="link-underline active" data-categoryid="0">
                                            <?php _e('Alle Projekte', TEXTDOMAIN); ?>
                                        </button>

                                        <?php foreach ($category as $ind => $item): ?>
                                            <button type="button"
                                                    class="filters__title"
                                                    data-categoryid="<?php echo $item->term_id; ?>">
                                                <?php echo $item->name; ?>
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="projects">
                        <div class="projects__holder filters">
                            <div class="filters__content">
                                <ul class="projects__list">
                                    <?php
                                    get_template_part(
                                        'inc/custom-post-types/projects/projects-loop-query',
                                        NULL,
                                        ['wp_query' => $projects, 'taxonomy' => $taxonomy] // in part file need use: "$args['key']"
                                    );
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <span class="animated-line"></span>
    </section>
<?php endif; ?>
<!-- End of Home Projects section  -->
