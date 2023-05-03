<?php
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$link = get_sub_field('link');
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'insights_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'insights_margin-280';
endif;
?>
<!-- Insights section  front - Taranukha -->
<!-- class variations: insights insights_margin-140 insights_margin-280 -->
<section class="insights <?php echo $marginClass; ?>">
    <?php if ($subtitle || $title): ?>

    <div class="container">
        <div class="insights__info fade-content">
            <?php if ($subtitle): ?>
                <h4 class="insights__title"><?php echo $subtitle; ?></h4>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="insights__description"><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>
    </div>

    <?php endif; ?>

    <?php
    $insights = get_sub_field('insights');
    if (!$insights):
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'fields' => 'ids'
        ];
        $insights = new WP_Query($args);
        $insights = $insights->posts;
    endif;
    ?>

    <?php if ($insights): ?>
    <div class="container insights__previews_container">
        <div class="insights__previews fade-content">
            <?php foreach ($insights as $insightID): ?>
                <div class="insights__preview">
                    <a href="<?php echo get_the_permalink($insightID); ?>" class="insights__preview-img">
                        <?php
                        $attr = [
                            'loading' => false
                        ];
                        if (has_post_thumbnail($insightID)) {
                            echo get_the_post_thumbnail($insightID, 'img-480', $attr);
                        }
                        ?>
                    </a>

                    <div class="insights__preview-info">
                        <a class="insights__preview-title"
                           href="<?php echo get_the_permalink($insightID); ?>"><?php echo get_the_title($insightID); ?></a>
                        <?php $category = get_the_category($insightID);
                        if ($category[0]) : ?>
                            <p class="insights__preview-category"><?php echo $category[0]->cat_name ?></p>
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
        <div class="insights__all fade-content">
            <a class="insights__all-btn btn" href="<?php echo esc_url($link_url); ?>"
               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
    </div>

    <?php endif; ?>

</section>
<!-- End of Insights section -->
