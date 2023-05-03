<?php
$title = get_sub_field('title');
$link = get_sub_field('link');

$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'similar-projects_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'similar-projects_margin-280';
endif;

if ($selectMargin === 'without-margin'):
    $marginClass = 'similar-projects_without-margin';
endif;

if ($selectMargin === 'bottom-280'):
    $marginClass = 'similar-projects_bottom-margin-280';
endif;
?>
<!-- Similar projects front - Taranukha -->
<!-- class variations: similar-projects similar-projects_without-margin similar-projects_margin-140 similar-projects_margin-280 similar-projects_bottom-margin-280  -->
<section class="fade-content similar-projects <?php echo $marginClass; ?>">
    <?php if ($title): ?>
    <div class="container">
        <h2 class="similar-projects__title"><?php echo $title; ?></h2>
    </div>
    <?php endif; ?>
    <?php
    $insights = get_sub_field('projects');
    if (!$insights) {
        $args = [
            'post_type' => 'projects',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'fields' => 'ids'
        ];
        $insights = new WP_Query($args);
        $insights = $insights->posts;
    }
    ?>

    <?php if ($insights): ?>
    <div class="container insights__previews_container">
        <div class="insights__previews">
            <?php foreach ($insights as $insightID): ?>
                <div class="insights__preview similar-project">
                    <a href="<?php echo get_the_permalink($insightID); ?>" class="insights__preview-img">
                        <?php
                        $attr = [
                            'loading'=>false
                        ];
                        if (has_post_thumbnail($insightID)) {
                            echo get_the_post_thumbnail($insightID, 'img-480', $attr);
                        }
                        ?>
                    </a>
                    <div class="insights__preview-info similar-project__info">
                        <a class="insights__preview-title" href="<?php echo get_the_permalink($insightID); ?>"><?php echo get_the_title($insightID); ?></a>
                        <?php $customerIndustry = get_field('customer_industry', $insightID);
                        if ($customerIndustry): ?>
                            <p class="insights__preview-category"><?php echo $customerIndustry; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php

    if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
    <div class="container">
        <div class="insights__all">
            <a class="insights__all-btn btn" href="<?php echo esc_url($link_url); ?>"
               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
    </div>
    <?php endif; ?>
</section>
<!-- End of similar projects -->
