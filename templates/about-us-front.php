 <?php
/*
 * Template name: Front About Us
 */
get_header();
?>
<!-- Hero section front - Teslya  -->
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
    <section class="hero">
        <div class="container">
            <div class="hero__wrapper">
                <div class="hero__lottie">
                    <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Stoorer.json" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
                </div>
                <h1 class="hero__title">
                    <div class="hero__title-line"><span class="anim-title-line">Über uns</span></div>
                </h1>
                <h2>Ein Raum für Brand Design und für alles, was dazu gehört. Persönlich & digital.</h2>
            </div>
        </div>
    </section>
    <!-- End of Hero section -->

    <!-- Image Video section front - Taranukha  -->
    <!-- class variations: image-video image-video_margin-140 image-video_margin-280 -->
    <section class="image-video image-video_margin-140 image-video_mobile-without-paading">
        <div class="image-video__container">
            <div class="image-video__wrapper">
                <div class="image-video__video-wrapper" style="display: none">
                    <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                        <source type="video/mp4" src=" <?php echo get_template_directory_uri(); ?>/assets/src/img/test-video.mp4"/>
                    </video>
                </div>
                <div class="image-video__image-wrapper">
                    <img src=" <?php echo get_template_directory_uri() ?>/assets/src/img/image-test.jpg " alt="<?php /*echo esc_attr($image['alt']);*/ ?>"/>
                </div>
                <div class="image-video__lottie-wrapper" style="display: none">
                    <lottie-player src="<?php /*echo $lottie['url'];*/ ?>" background="transparent" speed="1"
                                   style="width: 160px; height: 160px;" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Image Video section -->

    <!-- Fullwidth lottie front - Taranukha -->
    <section class="lottie-fullwidth">
        <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Big-Type-Slider-Animation.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </section>
    <!-- End of Fullwidth lottie -->

    <!-- Text Btn section front - Teslya  -->
 <!-- class variations: text-btn text-btn_margin-140 text-btn_margin-280 -->
    <section class="text-btn text-btn_margin-140">
        <div class="container">
            <div class="text-btn__wrapper">
                <h5 class="text-btn__tag">Warum new office?</h5>
                <div class="text-btn__content">
                    <h2 class="text-btn__title">Wir verstehen uns als Partner, der gute Ideen sichtbar und erlebbar macht. Für Menschen und mit echtem Mehrwert.</h2>
                    <div class="text-btn__text">Der Aufbau und die Pflege einer Marke ist eine Herausforderungen: Das Abheben von der Konkurrenz, das Formulieren einer klaren Botschaft, die richtige Zielgruppenansprache, das gewinnen von neuen Mitarbeitern und das Bespielen diverser Touchpoints. Wir entwickeln Designlösungen, die Unternehmen zu Marken, Kunden zu Fans und Touchpoints zu Erlebnis-welten werden lassen.</div>
                    <div class="text-btn__buttons">
                        <a href="#" class="btn text-btn__btn">Projekte</a>
                        <a href="#" class="btn text-btn__btn">Mehr über uns</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Text Btn section  -->

    <!-- Image text section (text first) front - Taranukha -->
    <!-- class variations: text-image text-image_margin-140 text-image_margin-280 -->
    <section class="text-image text-image_margin-280 text-image_text-first">
        <div class="container_wide text-image__container">
            <div class="text-image__row text-image__row_txt-img">
                <p class="text-image__text">
                    In unserem Frankfurter Office arbeiten wir vor Ort und remote mit Menschen aus ganz Deutschland.
                </p>
                <div class="text-image__small-img-wrapper">
                    <div class="text-image__small-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sm1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="text-image__row text-image__row_img">
                <div class="text-image__big-img-wrapper">
                    <div class="text-image__big-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Image text section (text first) -->

    <!-- Image text section (image first) front - Taranukha -->
    <!-- class variations: text-image text-image_margin-140 text-image_margin-280 -->
    <section class="text-image text-image_margin-280 text-image_image-first">
        <div class="container_wide text-image__container text-image__container_image-first">
            <div class="text-image__row text-image__row_txt-img">
                <p class="text-image__text">
                    Kreatives Arbeiten ist Teamwork. Deshalb sprechen wir gerne miteinander. Im Team und mit unseren Kund*innen – Persönlich und digital.
                </p>
                <div class="text-image__small-img-wrapper">
                    <div class="text-image__small-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sm2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="text-image__row text-image__row_img">
                <div class="text-image__big-img-wrapper">
                    <div class="text-image__big-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Image text section (image first) -->

    <!-- Design Team section front - Taranukha classes design-team_margin-280 design-team_margin-140 -->
    <section class="design-team design-team_margin-280">
        <div class="container">
            <div class="home-projects__info">
                <h4 class="home-projects__title design-team__title">Design Team</h4>
                <h2 class="home-projects__description">Unsere Expertinnen und Experten, die deine Ideen sichtbar machen.</h2>
            </div>
        </div>
        <div class="design-team__carousel">
            <div class="team-member">
                <a class="team-member__linkedin" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                        <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                            <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                            <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                        </g>
                    </svg>
                </a>
                <a href="#" class="team-member__link">
                    <img class="team-member__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tm1.png" alt="">
                </a>
                <div class="team-member__info">
                    <h4 class="team-member__name">
                        <a href="#" class="team-member__name-link">Sara Kessler</a>
                    </h4>
                    <p class="team-member__position">Art Director</p>
                </div>
            </div>
            <div class="team-member">
                <a class="team-member__linkedin" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                        <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                            <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                            <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                        </g>
                    </svg>
                </a>
                <a href="#" class="team-member__link">
                    <img class="team-member__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tm2.png" alt="">
                </a>
                <div class="team-member__info">
                    <h4 class="team-member__name">
                        <a href="#" class="team-member__name-link">Sara Kessler</a>
                    </h4>
                    <p class="team-member__position">Art Director</p>
                </div>
            </div>
            <div class="team-member">
                <a class="team-member__linkedin" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                        <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                            <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                            <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                        </g>
                    </svg>
                </a>
                <a href="#" class="team-member__link">
                    <img class="team-member__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tm3.png" alt="">
                </a>
                <div class="team-member__info">
                    <h4 class="team-member__name">
                        <a href="#" class="team-member__name-link">Sara Kessler</a>
                    </h4>
                    <p class="team-member__position">Art Director</p>
                </div>
            </div>
            <div class="team-member">
                <a class="team-member__linkedin" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                        <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                            <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                            <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                        </g>
                    </svg>
                </a>
                <a href="#" class="team-member__link">
                    <img class="team-member__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tm4.png" alt="">
                </a>
                <div class="team-member__info">
                    <h4 class="team-member__name">
                        <a href="#" class="team-member__name-link">Sara Kessler</a>
                    </h4>
                    <p class="team-member__position">Art Director</p>
                </div>
            </div>
            <div class="team-member">
                <a class="team-member__linkedin" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                        <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                            <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                            <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                        </g>
                    </svg>
                </a>
                <a href="#" class="team-member__link">
                    <img class="team-member__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tm5.png" alt="">
                </a>
                <div class="team-member__info">
                    <h4 class="team-member__name">
                        <a href="#" class="team-member__name-link">Sara Kessler</a>
                    </h4>
                    <p class="team-member__position">Art Director</p>
                </div>
            </div>
            <div class="team-member">
                <a class="team-member__linkedin" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                        <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                            <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                            <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                        </g>
                    </svg>
                </a>
                <a href="#" class="team-member__link">
                    <img class="team-member__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tm6.png" alt="">
                </a>
                <div class="team-member__info">
                    <h4 class="team-member__name">
                        <a href="#" class="team-member__name-link">Sara Kessler</a>
                    </h4>
                    <p class="team-member__position">Art Director</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Design Team section -->

    <!-- class variations: text-btn text-btn_margin-140 text-btn_margin-280 -->
    <!-- Text Btn section front - Teslya  -->
    <section class="text-btn text-btn_margin-280">
        <div class="container">
            <div class="text-btn__wrapper">
                <h5 class="text-btn__tag">Development Team</h5>
                <div class="text-btn__content">
                    <h2 class="text-btn__title">Unser Development Team setzt unsere Design-Prototypen pixelgenau mit allen technischen Möglichkeiten um. Für ein digitales Markenerlebnis, das keine wünsche offen lässen.</h2>
                    <div class="text-btn__buttons">
                        <a href="#" class="btn text-btn__btn">Projekte</a>
                        <a href="#" class="btn text-btn__btn">Leistungen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Text Btn section  -->

    <!-- Contact section front - Teslya  -->
    <section class="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="contact__content">
                    <h2 class="contact__title">Fragen?</h2>
                    <div class="contact__list">
                        <h6 class="contact__subtitle">Wir freuen uns über deine Anfrage:</h6>
                        <a href="tel:06976700819" class="contact__item">069 767 008 19</a>
                        <a href="mailto:kontakt@new-office.net" class="contact__item">kontakt@new-office.net</a>
                    </div>
                    <div class="contact__buttons">
                        <a href="#" class="btn contact__btn btn_light">Alle Leistungen</a>
                        <a href="#" class="btn contact__btn btn_light">Mehr über uns</a>
                    </div>
                </div>
                <div class="contact__images">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-office-Design-Agentur-Frankfurt-34.jpg" alt="" class="contact__img">
                    <div class="contact__lottie">
                        <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Stoorer-Kontakt.json" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
                    </div>
                </div>
                <div class="contact__buttons contact__buttons_mobile">
                    <a href="#" class="btn contact__btn btn_light">Alle Leistungen</a>
                    <a href="#" class="btn contact__btn btn_light">Mehr über uns</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact section  -->
<?php
get_footer();
