<?php
$selectMargin = get_sub_field('select_margin');
$selectHero = get_sub_field('select_hero');
$title = get_sub_field('title_hero');
$titleLeftAlign = get_sub_field('title_left_align');
$titleRightAlign = get_sub_field('title_right_align');
$lottie = get_sub_field('lottie');
$socialText = get_sub_field('social_text');
$socials = get_sub_field('socials');
$description = get_sub_field('description');
$buttons = get_sub_field('buttons');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'hero_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'hero_margin-280';
endif;

$classHero = '';
if (strtolower($selectHero) === 'hero socials'):
    $classHero = 'hero_archive hero_social';
endif;

?>
<!-- Hero section front - Teslya  -->
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
<section class="hero fade-content <?php echo $classHero; ?> <?php echo $marginClass; ?> <?php if (strtolower($selectHero) === 'hero main'): echo 'hero_main'; endif; ?>">
    <div class="container">
        <div class="hero__wrapper">
            <?php if ($lottie): ?>
                <div class="hero__lottie">
                    <lottie-player src="<?php echo $lottie['url']; ?>" background="transparent" speed="1"
                                   style="width: 160px; height: 160px;" loop autoplay></lottie-player>
                </div>
            <?php endif; ?>

            <?php if (strtolower($selectHero) === 'hero main'): ?>
                <?php if ($titleLeftAlign || $titleRightAlign): ?>
                    <div class="hero__title-wrap">
                        <h1 class="hero__title">
                            <?php if ($titleLeftAlign): ?>
                                <div class="hero__title-line"><span
                                        class="anim-title-line"><?php echo $titleLeftAlign; ?></span></div>
                            <?php endif; ?>
                            <?php if ($titleRightAlign): ?>
                                <div class="hero__title-line"><span
                                        class="anim-title-line"><?php echo $titleRightAlign; ?></span></div>
                            <?php endif; ?>
                        </h1>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (strtolower($selectHero) === 'hero'): ?>
                <?php if ($title): ?>
                    <div class="hero__title-wrap">
                        <h1 class="hero__title">
                            <div class="hero__title-line"><span class="anim-title-line"><?php echo $title; ?></span>
                            </div>
                        </h1>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (strtolower($selectHero) === 'hero socials'): ?>
                <?php if ($title || $socialText || $socials): ?>
                    <div class="hero__title-wrap">
                        <h1 class="hero__title">
                            <?php if ($title): ?>
                                <div class="hero__title-line"><span class="anim-title-line"><?php echo $title; ?></span>
                                </div>
                            <?php endif; ?>
                        </h1>
                        <div class="hero__social">
                            <?php if ($socialText): ?>
                                <h6 class="hero__social-text"><?php echo $socialText; ?></h6>
                            <?php endif; ?>

                            <?php if ($socials): ?>
                                <div class="hero__social-icons social social_dark">
                                    <?php foreach ($socials as $item_social): ?>
                                        <?php if (!empty($item_social)): ?>

                                            <?php if (strtolower($item_social['name']) == 'instagram') :
                                                $icon = 'icon-instagram';
                                            endif; ?>
                                            <?php if (strtolower($item_social['name']) == 'linkedin') :
                                                $icon = 'icon-linkedin';
                                            endif; ?>


                                            <?php if (!empty($item_social['name']) && !empty($item_social['link'])): ?>
                                                <a href="<?php echo $item_social['link']['url']; ?>" class="hero__social-item social__item icon <?php echo $icon; ?>"
                                                   title="<?php echo $item_social['link']['title']; ?>" target="<?php echo $item_social['link']['target']; ?>"></a>
                                            <?php endif; ?>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($description): ?>

                <?php echo $description; ?>

            <?php endif; ?>
            <?php if (strtolower($selectHero) === 'hero main'): ?>
                <div class="hero__footer">
                    <?php if ($buttons): ?>
                        <div class="hero__buttons">
                            <?php foreach ($buttons as $button): ?>

                                <?php
                                $link = $button['link'];
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn hero__btn" href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="hero__scroll">
                        <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/SCROLL.json" background="transparent" speed="1" style="width: 99px; height: 33px;" loop autoplay></lottie-player>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of Hero section -->
