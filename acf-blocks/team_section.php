<?php
$selectMargin = get_sub_field('select_margin');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');

$marginClass = '';
if($selectMargin === '140'):
    $marginClass = 'design-team_margin-140';
endif;

if($selectMargin === '280'):
    $marginClass = 'design-team_margin-280';
endif;

?>
<!-- Design Team section front - Taranukha classes design-team_margin-280 design-team_margin-140 -->
<section class="fade-content design-team <?php echo $marginClass; ?>">
    <?php if ($subtitle || $title): ?>
        <div class="container">
            <div class="home-projects__info">
                <?php if ($subtitle): ?>
                    <h4 class="home-projects__title design-team__title"><?php echo $subtitle; ?></h4>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="home-projects__description"><?php echo $title; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>


    <?php
    $team = get_sub_field('team');
    if (!$projects):
        $args = [
            'post_type' => 'team',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'post__in' => $team,
            'orderby' =>  'post__in',
            'fields' => 'ids',
        ];
        $team = new WP_Query($args);
        $team = $team->posts;
    endif;
    ?>

    <?php if ($team): ?>
    <div class="design-team__carousel">
        <?php foreach ($team as $memberID): ?>
        <div class="team-member">

            <a class="team-member__linkedin" target="_blank" href="<?php echo get_field('member_linkedin', $memberID); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                    <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                        <path id="Контур_28" data-name="Контур 28"
                              d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169"
                              transform="translate(-350.98 -215.802)"/>
                        <path id="Контур_29" data-name="Контур 29"
                              d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z"
                              transform="translate(-368.006 -231.385)"/>
                    </g>
                </svg>
            </a>
            <a href="<?php echo get_the_permalink($memberID); ?>" class="team-member__link">
                <?php
                $attr = [
                    'class' => 'team-member__photo',
                    'loading' => false
                ];

                if (has_post_thumbnail($memberID)) {
                    echo get_the_post_thumbnail($memberID, 'large', $attr);
                }
                ?>
            </a>
            <div class="team-member__info">
                <h4 class="team-member__name">
                    <a href="<?php echo get_the_permalink($memberID); ?>" class="team-member__name-link"><?php echo get_the_title($memberID); ?></a>
                </h4>
                <p class="team-member__position"><?php echo get_field('member_position', $memberID); ?></p>
            </div>
        </div>
         <?php endforeach; ?>
    </div>
    <?php endif; ?>
</section>
<!-- End of Design Team section -->
