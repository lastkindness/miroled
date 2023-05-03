<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$phone = get_sub_field('phone');
$email = get_sub_field('email');
$buttons = get_sub_field('buttons');
$image = get_sub_field('image');
$lottie = get_sub_field('lottie');

?>
<!-- contact front - Teslya -->
<section class="contact fade-content">
    <div class="container">
        <div class="contact__wrapper">
            <div class="contact__content">

                <?php if ($title): ?>
                    <h2 class="contact__title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if ($subtitle || $email || $phone): ?>
                    <div class="contact__list">

                        <?php if ($subtitle): ?>
                            <h6 class="contact__subtitle"><?php echo $subtitle; ?></h6>
                        <?php endif; ?>

                        <?php if ($phone): ?>
                            <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone); ?>" class="contact__item"><?php echo $phone; ?></a>
                        <?php endif; ?>

                        <?php if ($email): ?>
                            <a href="mailto:<?php echo $email; ?>" class="contact__item"><?php echo $email; ?></a>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <?php if ($buttons): ?>
                    <div class="contact__buttons">

                        <?php foreach ($buttons as $button): ?>
                            <?php
                            $link = $button['link'];
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn contact__btn btn_light" href="<?php echo esc_url($link_url); ?>"
                                   target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>
            </div>

            <?php if ($image || $lottie): ?>
                <div class="contact__images">

                    <?php
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="contact__img"/>
                    <?php endif; ?>

                    <?php if ($lottie): ?>
                        <div class="contact__lottie">
                            <lottie-player class="lottie-player" src="<?php echo $lottie['url']; ?>" background="transparent" speed="1"
                                           style="width: 160px; height: 160px;" loop autoplay></lottie-player>
                        </div>
                    <?php endif; ?>

                </div>
            <?php endif; ?>
            <?php if ($buttons): ?>
                <div class="contact__buttons contact__buttons_mobile">

                    <?php foreach ($buttons as $button): ?>
                        <?php
                        $link = $button['link'];
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn contact__btn btn_light" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of Сontact section -->
