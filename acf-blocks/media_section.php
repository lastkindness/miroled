<?php
$selectMargin = get_sub_field('select_margin');
$selectMedia = get_sub_field('select_media');
$selectSize = get_sub_field('select_size');
$image = get_sub_field('image');
$lottie = get_sub_field('lottie');
$video = get_sub_field('video');
$embed = get_sub_field('embed');

$marginClass = '';
if($selectMargin === '140'):
    $marginClass = 'image-video_margin-140';
endif;

if($selectMargin === '280'):
    $marginClass = 'image-video_margin-280';
endif;

$sizeClass = '';
if($selectSize === 'big'):
    $sizeClass = '_big';
endif;
?>
<!-- Image Video section front - Taranukha  -->
<!-- class variations: image-video image-video_margin-140 image-video_margin-280 -->
<section class="image-video <?php echo $marginClass; ?>">
    <div class="image-video__container">
        <div class="image-video__wrapper fade-content">

            <?php

            if (strtolower($selectMedia) === 'video'):
                if ($video): ?>
                    <div class="image-video__video-wrapper image-video__video-wrapper<?php echo $sizeClass; ?>">
                        <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                            <source type="video/mp4" src="<?php echo $video['url']; ?>"/>
                        </video>
                    </div>
                <?php endif; endif; ?>
            <?php
            if (strtolower($selectMedia) === 'image'):
                if (!empty($image)): ?>
                    <div class="image-video__image-wrapper image-video__image-wrapper<?php echo $sizeClass; ?>">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    </div>
                <?php endif; endif; ?>
            <?php
            if (strtolower($selectMedia) === 'lottie'):
                if ($lottie): ?>
                    <div class="image-video__lottie-wrapper image-video__lottie-wrapper<?php echo $sizeClass; ?>">
                        <div src="<?php echo $lottie['url']; ?>" class="lottie-container lottie-player"></div>
                    </div>
                <?php endif; endif; ?>
            <?php if (strtolower($selectMedia) === 'embed'):
            if ($embed): ?>
            <div class="image-video__lottie-wrapper image-video__lottie-wrapper<?php echo $sizeClass; ?>">
                <?php echo $embed; ?>
            </div>
            <?php endif; endif; ?>
        </div>
    </div>
</section>
<!-- End of Image Video section -->
