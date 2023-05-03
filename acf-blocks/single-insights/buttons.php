<?php
$buttons = get_sub_field('buttons_block');
$selectMargin = get_sub_field('select_margin');
$selectAlignMobile = get_sub_field('select_align_mobile');
$marginClass = '';

if ($selectMargin === '140'):
    $marginClass = 'buttons_margin-140';
endif;

if ($selectMargin === '280'):
    $marginClass = 'buttons_margin-280';
endif;

if ($selectMargin === 'bottom'):
    $marginClass = 'buttons_bottom-margin-280';
endif;

$classAlignMobile = '';
if($selectAlignMobile === 'center'):
    $classAlignMobile = 'buttons__wrapper_center';
endif;
?>
<!-- class variations: buttons buttons_without-margin buttons_margin-140 buttons_margin-280 buttons_bottom-margin-280-->
<!-- buttons section front - General  -->
<section class="fade-content buttons buttons_without-margin <?php echo $marginClass; ?>">
    <div class="container">
        <?php if($buttons): ?>
            <div class="buttons__wrapper <?php echo $classAlignMobile; ?>">
                <?php foreach ($buttons as $button): ?>
                    <?php
                    $link = $button['link'];
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn text-btn__btn" href="<?php echo esc_url($link_url); ?>"
                           target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- End of buttons section -->
