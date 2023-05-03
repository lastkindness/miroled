<?php
$selectMargin = get_sub_field('select_margin');
$selectFirtsBlock = get_sub_field('select_first_block');
$text = get_sub_field('text');
$image = get_sub_field('image');
$imageBig = get_sub_field('image_big');

$marginClass = '';
if($selectMargin === '140'):
    $marginClass = 'text-image_margin-140';
endif;

if($selectMargin === '280'):
    $marginClass = 'text-image_margin-280';
endif;

$class = '';
if(strtolower($selectFirtsBlock) === 'image'):
    $class = 'text-image_image-first';
else:
    $class = 'text-image_text-first';
endif;

$classContainer = '';

if(strtolower($selectFirtsBlock) === 'image'):
    $classContainer = 'text-image__container_image-first';
endif;
?>
<!-- Image text section (image first) front - Taranukha -->
<!-- class variations: text-image text-image_margin-140 text-image_margin-280 -->
<section class="fade-content text-image text-image_image-first <?php echo $marginClass; ?> <?php echo $class; ?>">
    <div class="container_wide text-image__container <?php echo $classContainer; ?>">

        <?php if ($text || $image): ?>
            <div class="text-image__row text-image__row_txt-img">

                <?php if ($text): ?>
                    <p class="text-image__text">
                        <?php echo $text; ?>
                    </p>
                <?php endif; ?>

                <?php if ($image): ?>
                    <div class="text-image__small-img-wrapper">
                        <div class="text-image__small-img">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"/>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        <?php endif; ?>

        <?php if ($imageBig): ?>
            <div class="text-image__row text-image__row_img">
                <div class="text-image__big-img-wrapper">
                    <div class="text-image__big-img">
                        <img src="<?php echo esc_url($imageBig['url']); ?>" alt="<?php echo esc_attr($imageBig['alt']); ?>"/>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- End of Image text section (image first) -->
