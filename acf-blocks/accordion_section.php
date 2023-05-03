<?php
$selectMargin = get_sub_field('select_margin');
$selectBackground = get_sub_field('select_background');
$title = get_sub_field('title');
$addDateField = get_sub_field('add_date_field');
$accordion = get_sub_field('accordion');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'single-project-details_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'single-project-details_margin-280';
endif;

$bgClass = '';
if ($selectBackground === 'transparent'):
    $bgClass = 'single-project-details_transparent';
endif;

$dateClass = '';
if ($addDateField[0] === 'show'):
    $dateClass = 'single-project-details_data';
endif;

?>
<!-- single-project-details front - Teslya -->
<!-- class variations: single-project-details single-project-details_margin-140 single-project-details_margin-280 single-project-details_accordion -->
<section class="fade-content single-project-details single-project-details_accordion <?php echo $bgClass; ?> <?php echo $marginClass; ?> <?php echo $dateClass; ?>">
    <div class="container">
        <div class="single-project-details__wrapper">
            <?php if ($title): ?>
                <h5 class="single-project-details__title"><?php echo $title; ?></h5>
            <?php endif; ?>

            <?php if ($accordion): ?>
                <div class="single-project-details__table">

                    <?php foreach ($accordion as $item): ?>

                        <?php
                        $selectContent = $item['select_content'];
                        $title = $item['title'];
                        $date = $item['date'];
                        $content = $item['content'];
                        $contentClass = '';
                        ?>

                        <div class="single-project-details__item">
                            <?php if ($title): ?>
                                <h5 class="single-project-details__tag"><?php echo $title; ?></h5>
                            <?php endif; ?>
                            <div class="single-project-details__content" data-hidden="<?php _e('Weniger', TEXTDOMAIN); ?>" data-defoult="<?php _e('Mehr dazu', TEXTDOMAIN); ?>">
                               <?php if ($addDateField[0] === 'show'): ?>
                                <?php if ($date): ?>
                                    <span class="date"><?php echo $date; ?></span>
                                <?php endif; ?>
                                <?php endif; ?>
                                <span class="title"><?php _e('Mehr dazu', TEXTDOMAIN); ?></span>
                            </div>
                            <?php if (strtolower($selectContent) === 'text'): ?>
                                <?php if ($content['text']): ?>
                                    <div
                                        class="single-project-details__item_hidden"><?php echo $content['text']; ?></div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (strtolower($selectContent) === 'list'): ?>
                                <?php if ($content['list']): ?>
                                    <div class="single-project-details__item_hidden">
                                        <ul>
                                            <?php foreach ($content['list'] as $listItem): ?>

                                                <?php
                                                $title = $listItem['title'];
                                                $description = $listItem['description'];
                                                ?>
                                                <li>
                                                    <?php if ($title): ?>
                                                        <div><?php echo $title; ?></div>
                                                    <?php endif; ?>
                                                    <?php if ($description): ?>
                                                        <div><?php echo $description; ?></div>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of single-project-details -->
