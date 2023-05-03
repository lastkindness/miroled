<?php
$selectMargin = get_sub_field('select_margin');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$selectContent = get_sub_field('select_content');
$showOnlyTitle = get_sub_field('only_title');

$description = get_sub_field('description');
$media = get_sub_field('media');

$buttons = get_sub_field('buttons');

$marginClass = '';
if ($selectMargin === '140') {
    $marginClass = 'text-btn_margin-140';
}
if ($selectMargin === '280') {
    $marginClass = 'text-btn_margin-280';
}

$contentClass = '';
if (strtolower($selectContent) === 'media') {
    $contentClass = '-image';
}
?>
<!-- class variations: text-btn text-btn_margin-140 text-btn_margin-280 -->
<!-- Text Btn section front - Teslya  -->
<section class="fade-content text-btn<?php echo $contentClass; ?> <?php echo $marginClass; ?>">
    <div class="container">
        <div class="text-btn<?php echo $contentClass; ?>__wrapper">
            <?php if ($subtitle): ?>
                <h5 class="text-btn<?php echo $contentClass; ?>__tag"><?php echo $subtitle; ?></h5>
            <?php endif; ?>

            <?php if (strtolower($selectContent) === 'text' || $showOnlyTitle[0] === 'show'): ?>
            <div class="text-btn__content">

                <?php endif; ?>

                    <?php if ($title): ?>
                        <h2 class="text-btn<?php echo $contentClass; ?>__title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                <?php if ($showOnlyTitle[0] !== 'show') : ?>
                    <?php if (strtolower($selectContent) === 'text'): ?>
                        <?php if ($description): ?>
                            <div class="text-btn__text">
                                <?php echo $description; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if (strtolower($selectContent) === 'media'): ?>
                        <div class="text-btn-image__content">
                            <?php
                            if (strtolower($media['select_media']) === 'video'):
                                if ($media['video']): ?>
                                    <div class="text-btn-image__video-wrapper">
                                        <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                                            <source type="video/mp4" src="<?php echo $media['video']['url']; ?>"/>
                                        </video>
                                    </div>
                                <?php endif; endif; ?>
                            <?php
                            if (strtolower($media['select_media']) === 'image'):
                                if (!empty($media['image'])): ?>
                                    <div class="text-btn-image__image-wrapper">
                                        <img src="<?php echo esc_url($media['image']['url']); ?>"
                                             alt="<?php echo esc_attr($media['image']['alt']); ?>"/>
                                    </div>
                                <?php endif; endif; ?>
                            <?php
                            if (strtolower($media['select_media']) === 'lottie'):
                                if ($media['lottie']): ?>
                                    <div class="text-btn-image__lottie-wrapper">
                                        <div src="<?php echo $media['lottie']; ?>" class="lottie-container lottie-player"></div>
                                    </div>
                                <?php endif; endif; ?>

                        </div>
                    <?php endif; ?>

                    <?php if ($buttons): ?>
                        <div class="text-btn<?php echo $contentClass; ?>__buttons">
                            <?php foreach ($buttons as $button): ?>
                                <?php
                                $link = $button['link'];
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn text-btn<?php echo $contentClass; ?>__btn"
                                       href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (strtolower($selectContent) === 'text' || $showOnlyTitle[0] === 'show'): ?>

            </div>

        <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of Text Btn section  -->
