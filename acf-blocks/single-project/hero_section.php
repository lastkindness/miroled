<?php
$selectMargin = get_sub_field('select_margin');
$title = get_sub_field('title');
$lottie = get_sub_field('lottie');
$description = get_sub_field('description');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'hero_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'hero_margin-280';
endif;

?>
<!-- Hero section front - Teslya  -->
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social-->
<section class="fade-content hero hero_single <?php echo $marginClass; ?>">
    <div class="container">
        <div class="hero__wrapper">
           <?php if ($lottie): ?>
            <div class="hero__lottie">
                <lottie-player src="<?php echo $lottie; ?>" background="transparent" speed="1"
                               loop
                               autoplay></lottie-player>
            </div>
            <?php endif; ?>

            <?php if ($title): ?>
            <div class="hero__title-wrap">
                <h1 class="hero__title"><?php echo $title; ?></h1>
            </div>
            <?php endif; ?>

            <?php if ($description): ?>
                <?php echo $description; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- End of Hero section -->
