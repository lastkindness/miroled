<?php
$title = get_sub_field('title');
$imageDesktop = get_sub_field('image_desktop');
$imageMobile = get_sub_field('image_mobile');
$buttons = get_sub_field('buttons');
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'logos_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'logos_margin-280';
endif;
?>
<!-- Logos section  front - Taranukha -->
<!-- class variations: logos logos_margin-140 logos_margin-280 -->
<section class="fade-content logos <?php echo $marginClass; ?>">
    <div class="container">
    <?php if ($title): ?>
        <h2 class="logos__title"><?php echo $title; ?></h2>
    <?php endif; ?>

    <!-- Desktop image -->
    <?php if (!empty($imageDesktop)): ?>
        <div class="logos__img-list_desktop">
            <img src="<?php echo esc_url($imageDesktop['url']); ?>" alt="<?php echo esc_attr($imageDesktop['alt']); ?>">
        </div>
    <?php endif; ?>

    <!-- Mobile image -->
    <?php if (!empty($imageMobile)): ?>
        <div class="logos__img-list_mobile">
            <img src="<?php echo esc_url($imageMobile['url']); ?>" alt="<?php echo esc_attr($imageMobile['alt']); ?>">
        </div>
    <?php endif; ?>

    <?php if ($buttons): ?>
        <div class="logos__buttons">
            <?php foreach ($buttons as $button): ?>
                <?php
                $link = $button['link'];
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="logos__button btn" href="<?php echo esc_url($link_url); ?>"
                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    </div>
</section>
<!-- End of Logos section -->
