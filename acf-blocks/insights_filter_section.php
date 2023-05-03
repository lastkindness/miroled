<?php
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'insights_margin-140';
endif;

$marginClass = '';
if ($selectMargin === '280'):
    $marginClass = 'insights_margin-280';
endif;

$marginClass = '';
if ($selectMargin === 'bottom-140'):
    $marginClass = 'insights_bottom-margin-140';
endif;

if ($selectMargin === 'bottom-280'):
    $marginClass = 'insights_bottom-margin-280 ';
endif;

$taxonomy = 'category';
$postType = 'post';
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

$insights = new WP_Query($args);
?>
<!-- Insights section  front - Taranukha -->
<!-- class variations: insights insights_margin-140 insights_margin-280 -->
<?php if ($insights->have_posts()) : ?>
    <section id="<?php if ($id = get_sub_field('id')): ?><?php echo $id; ?><?php endif; ?>" class="insights insights-filter insights_without-margin <?php echo $marginClass; ?>">
        <div class="insights__header">
            <div class="insights__header-container container">
                <div class="insights__holder">


                    <?php if (!is_wp_error($category) and $category) : ?>
                        <div class="insights__filters fade-content">
                            <div class="insights__filters_arrow">
                                <span class="vertical-line"></span>
                                <span class="horizontal-lines"></span>
                            </div>
                            <div class="insights__filters_current-mobile"></div>
                            <button type="button" class="insights__filter active" data-categoryid="0">
                                <?php _e('Alle', TEXTDOMAIN); ?>
                            </button>

                            <?php foreach ($category as $ind => $item): ?>
                                <button type="button"
                                        class="insights__filter "
                                        data-categoryid="<?php echo $item->term_id; ?>">
                                    <?php echo $item->name; ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="insights__content fade-content">
            <div class="insights__content-container container">
                <ul class="insights__list">
                    <?php
                    get_template_part(
                        'inc/posts-loop-query',
                        NULL,
                        ['wp_query' => $insights, 'taxonomy' => $taxonomy] // in part file need use: "$args['key']"
                    );
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <?php
endif; ?>
<!-- End of Insights section -->
