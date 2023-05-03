<?php
$media = get_sub_field('media');
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'image-video_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'image-video_margin-280';
endif;
?>
<!-- Project images and project navigation front - Taranukha -->
<!-- class variations: project-demos image-video_margin-140 image-video_margin-280 -->
<section class="fade-content image-video image-video_middle <?php echo $marginClass; ?>">
    <div class="image-video__container">
        <?php
        if ($media): ?>
            <div class="image-video__wrapper">
                <?php foreach ($media as $item):
                    $selectMedia = $item['select_media'];

                    $video = $item['video'];
                    if (strtolower($selectMedia) === 'video'):
                        if ($video): ?>
                            <div class="fade-content image-video__video-wrapper image-video__video-wrapper_insight">
                                <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                                    <source type="video/mp4" src="<?php echo $video['url']; ?>"/>
                                </video>
                            </div>
                        <?php endif; endif; ?>
                    <?php

                    $image = $item['image'];
                    if (strtolower($selectMedia) === 'image'):
                        if (!empty($image)): ?>
                            <div class="fade-content image-video__image-wrapper image-video__image-wrapper_insight">
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            </div>
                        <?php endif; endif; ?>
                    <?php

                    $lottie = $item['lottie'];
                    if (strtolower($selectMedia) === 'lottie'):
                        if ($lottie): ?>
                            <div class="fade-content image-video__lottie-wrapper image-video__lottie-wrapper_insight">
                                <div src="<?php echo $lottie['url']; ?>" class="lottie-container lottie-player"></div>
                            </div>
                        <?php endif; endif; ?>
                    <?php

                    $embed = $item['embed'];
                    if (strtolower($selectMedia) === 'embed'):
                        if ($embed): ?>
                            <div class="fade-content image-video__lottie-wrapper image-video__lottie-wrapper_insight">
                                <?php echo $embed; ?>
                            </div>
                        <?php endif; endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- End of Project images and project navigation -->


