<?php
$description = get_sub_field('description');
$selectMargin = get_sub_field('select_margin');

$marginClass = '';

if ($selectMargin === '140'):
    $marginClass = 'big-text-section_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'big-text-section_margin-280';
endif;
?>
<!-- Big Text section front - Teslya -->
<!-- class variations: big-text-section_margin-140 big-text-section_margin-280-->
<section class="fade-content big-text-section <?php echo $marginClass; ?>">
    <div class="container">
        <?php if ($description): ?>
        <div class="big-text-section__wrapper">
            <h2 class="big-text-section__title"><?php echo $description; ?></h2>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- End of Big Text section  -->
