<?php
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$link = get_sub_field('link');
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'home-projects_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'home-projects_margin-280';
endif;
?>
<!-- Text Home Projects section front - Taranukha  -->
<!-- class variations: home-projects home-projects_margin-140 home-projects_margin-280 -->
<section class="home-projects <?php echo $marginClass; ?>">
    <?php if ($subtitle || $title): ?>
        <div class="container">
            <div class="home-projects__info fade-content">
                <?php if ($subtitle): ?>
                    <h4 class="home-projects__title"><?php echo $subtitle; ?></h4>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="home-projects__description"><?php echo $title; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php
    $projects = get_sub_field('projects');
    if (!$projects):
        $args = [
            'post_type' => 'projects',
            'posts_per_page' => 6,
            'post_status' => 'publish',
            'fields' => 'ids'
        ];
        $projects = new WP_Query($args);
        $projects = $projects->posts;
    endif;
    ?>

    <?php if ($projects): ?>
        <div class="home-projects__carousel fade-content">
            <?php foreach ($projects as $projectID): ?>
                <div class="home-project">
                    <a href="<?php echo get_the_permalink($projectID); ?>" class="home-project__link">
                        <?php
                        $attr = [
                            'loading' => false
                        ];
                        if (has_post_thumbnail($projectID)) {
                            echo get_the_post_thumbnail($projectID, 'img-900', $attr);
                        }
                        ?>
                    </a>

                    <div class="home-project__info">
                        <h4 class="home-project__title"><a href="<?php echo get_the_permalink($projectID); ?>"><?php echo get_the_title($projectID); ?></a></h4>
                        <?php $customerIndustry = get_field('customer_industry', $projectID);
                        if ($customerIndustry): ?>
                            <p class="home-project__category"><?php echo $customerIndustry; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php

    if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <div class="container">
            <div class="home-projects__link-wrapper fade-content">
                <a class="home-projects__link btn" href="<?php echo esc_url($link_url); ?>"
                   target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>
        </div>
    <?php endif; ?>

</section>
<!-- End of Home Projects section  -->
