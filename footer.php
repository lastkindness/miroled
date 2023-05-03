</main>
<footer class="footer">
    <div class="footer__main">
        <?php $logoFooter = get_field('logo', 'footer_settings'); ?>
        <?php if ($logoFooter) { ?>
            <a href="<?php echo get_home_url(); ?>" class="footer__logo">
                <img src="<?php echo $logoFooter['url']; ?>" alt="<?php echo $logoFooter['alt']; ?>">
            </a>
        <?php } ?>
        <div class="footer__social footer__social_mobile social social_light">
            <?php $socials = get_field('socials', 'options'); ?>
            <?php foreach ($socials as $item_social): ?>
                <?php if (!empty($item_social)): ?>

                    <?php if (strtolower($item_social['name']) == 'instagram') :
                        $icon = 'icon-instagram';
                    endif; ?>
                    <?php if (strtolower($item_social['name']) == 'linkedin') :
                        $icon = 'icon-linkedin';
                    endif; ?>


                    <?php if (!empty($item_social['name']) && !empty($item_social['link'])): ?>
                        <a href="<?php echo $item_social['link']['url']; ?>" class="footer__social-item social__item icon <?php echo $icon; ?>"
                           title="<?php echo $item_social['link']['title']; ?>"></a>
                    <?php endif; ?>

                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="footer__nav">
            <div class="footer__contacts">
                <?php $address = get_field('address', 'footer_settings'); ?>
                <?php if ($address) : ?>
                    <div class="footer__address">
                        <?php if ($address['title']) : ?>
                            <h4 class="footer__title"><?php echo $address['title']; ?></h4>
                        <?php endif; ?>
                        <?php if ($address['content']) : ?>
                            <div class="footer__content"><?php echo $address['content']; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php $contact = get_field('contact', 'footer_settings'); ?>
                <?php if ($contact) : ?>
                    <div class="footer__contact">
                        <h4 class="footer__title"><?php echo $contact['title']; ?></h4>
                        <div class="footer__content"><?php echo $contact['content']; ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer__menu">
                <?php
                $location = 'footer_first';
                $theme_locations = get_nav_menu_locations();
                $menu_obj = get_term($theme_locations[$location], 'nav_menu');
                $menu_name = $menu_obj->name;

                if (has_nav_menu($location)) : ?>
                    <nav class="footer__menu-list">
                        <h4 class="footer__title"><?php echo $menu_name ?></h4>
                        <?php wp_nav_menu(
                            [
                                'theme_location' => $location,
                                'li_custom_item' => 'js-anchor',
                                'container' => FALSE,
                                'container_class' => 'menu-container',
                                'echo' => TRUE,
                                'fallback_cb' => FALSE,
                                'depth' => 0,
                                'items_wrap' => '<ul class="menu__nav">%3$s</ul>',
                                'walker' => '',
                            ]
                        ); ?>
                    </nav>
                <?php endif;
                ?>

                <?php
                $location = 'footer_second';
                $menu_obj = get_term($theme_locations[$location], 'nav_menu');
                $menu_name = $menu_obj->name;

                if (has_nav_menu($location)) : ?>
                    <nav class="footer__menu-list">
                        <h4 class="footer__title"><?php echo $menu_name ?></h4>
                        <?php wp_nav_menu(
                            [
                                'theme_location' => $location,
                                'li_custom_item' => 'js-anchor',
                                'container' => false,
                                'container_class' => 'menu-container',
                                'echo' => TRUE,
                                'fallback_cb' => FALSE,
                                'depth' => 0,
                                'items_wrap' => '<ul class="menu__nav">%3$s</ul>',
                                'walker' => '',
                            ]
                        ); ?>
                    </nav>
                <?php endif;
                ?>

                <?php
                $location = 'footer_third';
                $menu_obj = get_term($theme_locations[$location], 'nav_menu');
                $menu_name = $menu_obj->name;

                if (has_nav_menu($location)) : ?>
                    <nav class="footer__menu-list">
                        <h4 class="footer__title"><?php echo $menu_name ?></h4>
                        <?php wp_nav_menu(
                            [
                                'theme_location' => $location,
                                'li_custom_item' => 'js-anchor',
                                'container' => false,
                                'container_class' => 'menu-container',
                                'echo' => TRUE,
                                'fallback_cb' => FALSE,
                                'depth' => 0,
                                'items_wrap' => '<ul class="menu__nav">%3$s</ul>',
                                'walker' => '',
                            ]
                        ); ?>
                    </nav>
                <?php endif;
                ?>
            </div>
            <div class="footer__social social social_light">
                <?php $socials = get_field('socials', 'options'); ?>
                <?php foreach ($socials as $item_social): ?>
                    <?php if (!empty($item_social)): ?>

                        <?php if (strtolower($item_social['name']) == 'instagram') :
                            $icon = 'icon-instagram';
                        endif; ?>
                        <?php if (strtolower($item_social['name']) == 'linkedin') :
                            $icon = 'icon-linkedin';
                        endif; ?>


                        <?php if (!empty($item_social['name']) && !empty($item_social['link'])): ?>
                            <a href="<?php echo $item_social['link']['url']; ?>" class="footer__social-item social__item icon <?php echo $icon; ?>"
                               title="<?php echo $item_social['link']['title']; ?>" target="<?php echo $item_social['link']['target']; ?>"></a>
                        <?php endif; ?>

                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="footer__secondary">
        <?php $bigLogo = get_field('big_logo', 'footer_settings'); ?>
        <?php if ($bigLogo) : ?>
            <img class="footer__secondary-logo" src="<?php echo $bigLogo['url']; ?>" alt="<?php echo $bigLogo['alt']; ?>">
        <?php endif; ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
