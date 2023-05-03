<?php
$contactMember = get_sub_field('contact_person');
$contactPhoto = get_sub_field('photo_person');

$photo = $contactPhoto ? wp_get_attachment_image($contactPhoto, 'full') : get_the_post_thumbnail($contactMember->ID);

$address = get_sub_field('address');
$divisions = get_sub_field('divisions');

$buttons = get_sub_field('buttons');
?>
<!-- Contact section front Taranukha -->
<section class="fade-content contact-details">
    <div class="container">
        <div class="contact-details__wrapper">
            <div class="contact-details__card">
                <?php if ($photo): ?>
                    <div class="contact-details__card-img">
                        <a class="contact-details__linkedin" target="_blank" href="<?php echo get_field('member_linkedin', $contactMember->ID);  ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                                <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                                    <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                                    <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                                </g>
                            </svg>
                        </a>

                        <?php echo $photo; ?>
                    </div>
                <?php endif; ?>
                <?php if ($contactMember): ?>
                    <div class="contact-details__card-info">
                        <h4 class="contact-details__card-name"><?php echo $contactMember->post_title; ?></h4>
                        <?php if (get_field('member_position', $contactMember->ID)): ?>
                            <p class="contact-details__card-position"><?php echo get_field('member_position', $contactMember->ID); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($address || $divisions): ?>
            <div class="contact-details__info">
                <?php if($address): ?>
                <div class="contact-details__address">
                    <?php echo $address; ?>
                </div>
                <?php endif; ?>
                <?php if($divisions): ?>
                <div class="contact-details__divisions">
                    <?php foreach ($divisions as $item): ?>

                    <?php
                     $title = $item['title'];
                     $link = $item['link'];
                        ?>
                    <?php if($title || $link): ?>
                    <div class="contact-details__division">
                        <?php if($title): ?>
                        <p class="contact-details__title"><?php echo $title; ?></p>
                        <?php endif; ?>
                        <?php if($link): ?>
                        <h2 class="contact-details__link">
                           <?php $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </h2>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <?php if ($buttons): ?>
                    <div class="contact-details__buttons">

                        <?php foreach ($buttons as $button): ?>
                            <?php
                            $link = $button['link'];
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn contact-details__btn" href="<?php echo esc_url($link_url); ?>"
                                   target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of contact section front Taranukha -->
