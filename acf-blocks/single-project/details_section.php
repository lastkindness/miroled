<?php

$selectMargin = get_sub_field('select_margin');
$title = get_sub_field('title');
$details = get_sub_field('details');
$description  = get_sub_field('description');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'single-project-details_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'single-project-details_margin-280';
endif;

?>
<!-- single-project-details front - Teslya -->
<!-- class variations: single-project-details single-project-details_margin-140 single-project-details_margin-280 -->
<section class="fade-content single-project-details <?php echo $marginClass; ?>">
    <div class="container">
        <div class="single-project-details__wrapper">
            <?php if ($title): ?>
                <h5 class="fade-content single-project-details__title"><?php echo $title; ?></h5>
            <?php endif; ?>

            <?php if ($details): ?>
                <div class="fade-content single-project-details__table">
                    <?php foreach ($details as $item): ?>

                        <?php
                        $selectDetailsContent = $item['select_content'];
                        $contentClass = '';
                        if (strtolower($selectDetailsContent) === 'images'):
                            $contentClass = 'single-project-details__item_img';
                        endif;
                        ?>

                        <div class="single-project-details__item <?php echo $contentClass; ?>">

                            <?php

                            $title = $item['title'];
                            $text = $item['text'];
                            $images = $item['images'];
                            if ($title): ?>
                                <h5 class="single-project-details__tag"><?php echo $title; ?></h5>
                            <?php endif; ?>

                            <?php if (strtolower($selectDetailsContent) === 'text'): ?>
                                <?php if ($text): ?>
                                    <div class="single-project-details__content"><?php echo $text; ?></div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (strtolower($selectDetailsContent) === 'images'): ?>
                                <?php if ($images): ?>
                                    <div class="single-project-details__content">
                                        <?php foreach ($images as $image): ?>
                                        <img
                                            src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>">
                                        <?php endforeach; ?>

                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                    <?php if($description): ?>
                    <div class="single-project-details__item single-project-details__item_hidden">
                        <div class="single-project-details__content">
                            <?php echo $description; ?>
                        </div>
                        <div class="single-project-details__tag" data-hidden="<?php _e('Weniger Details', TEXTDOMAIN); ?>" data-defoult="<?php _e('Mehr Details', TEXTDOMAIN); ?>">
                            <span class="title">
                                <?php _e('Mehr Details', TEXTDOMAIN); ?>
                            </span>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of single-project-details -->
