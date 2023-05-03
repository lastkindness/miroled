<?php
$description = get_sub_field('description');
$selectMargin = get_sub_field('select_margin');

$marginClass = '';
if ($selectMargin === '140'):
    $marginClass = 'text-page_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'text-page_margin-280';
endif;
?>
<!-- class variations: text-page text-page_margin-140 text-page_margin-280 text-page_centered-->
<!-- text-page section front - General  -->
<section class="fade-content text-page <?php echo $marginClass; ?>">
    <div class="container">
        <div class="text-page__content">
            <?php if ($description): ?>

                <?php echo $description; ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of text-page section -->
