<?php
$media = get_sub_field('media');
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'project-demos_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'project-demos_margin-280';
endif;
?>
<!-- Project images and project navigation front - Taranukha -->
<!-- class variations: project-demos project-demos_margin-140 project-demos_margin-280 -->
<section class="fade-content project-demos <?php echo $marginClass; ?>">
    <?php
    if ($media):
        $mediaItems = $media['media_item'];

        foreach ($mediaItems as $item) :
            $selectMedia = $item['select_media'];

            $video = $item['video'];
            if (strtolower($selectMedia) === 'video'):
                if ($video): ?>
                    <div class="project-demos__demo">
                        <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                            <source type="video/mp4" src="<?php echo $video['url']; ?>"/>
                        </video>
                    </div>
                <?php endif; endif; ?>
            <?php

            $image = $item['image'];
            $add_link = $item['add_link'];
            $link = $item['link'];
            if (strtolower($selectMedia) === 'image'):
                if (!empty($image)): ?>
                    <div class="project-demos__demo">
                        <?php if ($add_link[0] === 'true' && $link): ?>

                            <?php $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="project-images__image-link" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>">
                                <img class="project-images__image" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            </a>

                        <?php else: ?>
                            <img class="project-images__image" src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php endif; ?>
                    </div>
                <?php endif; endif; ?>
            <?php

            $lottie = $item['lottie'];
            if (strtolower($selectMedia) === 'lottie'):
                if ($lottie): ?>
                    <div class="project-demos__demo">
                        <div src="<?php echo $lottie['url']; ?>" class="lottie-container lottie-player"></div>
                    </div>
                <?php endif; endif; ?>
            <?php

            $embed = $item['embed'];
            if (strtolower($selectMedia) === 'embed'):
                if ($embed): ?>
                    <div class="project-demos__demo project-demos__demo_embed">
                        <?php echo $embed; ?>
                    </div>
                <?php endif; endif; ?>
        <?php endforeach; ?>

    <?php endif; ?>

    <div class="project-demos__project-switcher">
        <?php
        previous_post_link('%link', 'Vorheriges Projekt');
        next_post_link('%link', 'Nächstes Projekt');
        ?>
    </div>
</section>
<!-- End of Project images and project navigation -->


