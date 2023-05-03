<?php
/*
 * Template name: Front Home Template
 */

get_header(); ?>

<!-- Hero section front - Teslya  -->
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
<section class="hero">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__lottie">
                <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Stoorer.json" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
            <h1 class="hero__title">Strategisches Design für starke Marken der Zukunft Strategisches Design.</h1>
            <p>Hallo! Wir sind new office. Als Design Agentur für Branding, Corporate Design und digitale Markenkommunikation unterstützen wir Marken und Unternehmen, ihre Vision sichtbar zu machen.</p>
            <div class="hero__buttons">
                <a href="#" class="btn hero__btn">Projekte</a>
                <a href="#" class="btn hero__btn">Leistungen</a>
            </div>
        </div>
    </div>
</section>
<!-- End of Hero section -->

<!-- Image Video section front - Taranukha  -->
<!-- class variations: image-video image-video_margin-140 image-video_margin-280 -->
<section class="image-video image-video_margin-140">
    <div class="image-video__container">
        <div class="image-video__wrapper">
            <!-- Vimeo video -->
            <div class="image-video__vimeo-wrapper">
                <iframe src="https://player.vimeo.com/video/647004474?h=17ffe7c5ab" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- Vimeo video end -->
            <div class="image-video__video-wrapper" style="display: none">
                <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                    <source type="video/mp4" src=" <?php echo get_template_directory_uri(); ?>/assets/src/img/test-video.mp4"/>
                </video>
            </div>
            <div class="image-video__image-wrapper" style="display: none">
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

<!-- class variations: text-btn text-btn_margin-140 text-btn_margin-280 -->
<!-- Text Btn section front - Teslya  -->
<section class="text-btn text-btn_margin-280">
    <div class="container">
        <div class="text-btn__wrapper">
            <h5 class="text-btn__tag">Wie können wir helfen?</h5>
            <div class="text-btn__content">
                <h2 class="text-btn__title">Wir sind Designer, Partner und Problem- löser. Unser Tool ist gutes Design, unser Ansatz 360 Grad.</h2>
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

<!-- Text Home Projects section front - Taranukha  -->
<!-- class variations: home-projects home-projects_margin-140 home-projects_margin-280 -->
<section class="home-projects home-projects_margin-280">
        <div class="container">
            <div class="home-projects__info">
                <h4 class="home-projects__title">Projekte</h4>
                <h2 class="home-projects__description">Brand Design und Brand Experience, die das Potential guter Ideen entfalten.</h2>
            </div>
        </div>
        <div class="home-projects__carousel">
            <div class="home-project">
                <a href="#" class="home-project__link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/vald.jpg" alt="">
                </a>
                <div class="home-project__info">
                    <h4 class="home-project__title"><a href="#">VALDIVIA Consulting</a></h4>
                    <p class="home-project__category">Personalberatung</p>
                </div>
            </div>
            <div class="home-project">
                <a href="#" class="home-project__link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/bb.jpg" alt="">
                </a>
                <div class="home-project__info">
                    <h4 class="home-project__title"><a href="#">bis bau gruppe</a></h4>
                    <p class="home-project__category">Projektentwickler</p>
                </div>
            </div>
            <div class="home-project">
                <a href="#" class="home-project__link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/vald.jpg" alt="">
                </a>
                <div class="home-project__info">
                    <h4 class="home-project__title"><a href="#">VALDIVIA Consulting 2</a></h4>
                    <p class="home-project__category">Personalberatung</p>
                </div>
            </div>
            <div class="home-project">
                <a href="#" class="home-project__link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/src/img/bb.jpg" alt="">
                </a>
                <div class="home-project__info">
                    <h4 class="home-project__title"><a href="#">bis bau gruppe 2</a></h4>
                    <p class="home-project__category">Projektentwickler</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="home-projects__link-wrapper">
                <a href="#" class="home-projects__link btn">Alle Projekte</a>
            </div>
        </div>
    </section>
<!-- End of Home Projects section  -->

<!-- Insights section  front - Taranukha -->
<!-- class variations: insights insights_margin-140 insights_margin-280 -->
 <section class="insights insights_margin-280">
        <div class="container">
            <div class="insights__info">
                <h4 class="insights__title">Insights</h4>
                <h2 class="insights__description">News, Inspirierendes und relevante Inhalte von unserem Team.</h2>
            </div>
        </div>
        <div class="container insights__previews_container">
            <div class="insights__previews">
                <div class="insights__preview">
                    <a href="#" class="insights__preview-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i1.jpg" alt="">
                    </a>
                    <div class="insights__preview-info">
                        <a class="insights__preview-title" href="#">GERMAN BRAND AWARD 2023</a>
                        <p class="insights__preview-category">News</p>
                    </div>
                </div>
                <div class="insights__preview">
                    <a href="#" class="insights__preview-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i2.jpg" alt="">
                    </a>
                    <div class="insights__preview-info">
                        <a class="insights__preview-title" href="#">Redesign Ringeltaube</a>
                        <p class="insights__preview-category">News</p>
                    </div>
                </div>
                <div class="insights__preview">
                    <a href="#" class="insights__preview-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i3.jpg" alt="">
                    </a>
                    <div class="insights__preview-info">
                        <a class="insights__preview-title" href="#">Implenia Mitarbeitermagazin</a>
                        <p class="insights__preview-category">News</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="insights__all">
                <a href="#" class="insights__all-btn btn">Alle Insights</a>
            </div>
        </div>
</section>
<!-- End of Insights section -->

<!-- Logos section  front - Taranukha -->
<!-- class variations: logos logos_margin-140 logos_margin-280 -->
<section class="logos logos_margin-280">
    <div class="container">
        <h2 class="logos__title">Ausgezeichnetes Brand Design als Antreiber für gute Ideen der Zukunft. </h2>
        <!-- Desktop image -->
        <div class="logos__img-list_desktop">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-list.png" alt="">
        </div>
        <!-- Mobile image -->
        <div class="logos__img-list_mobile">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-list_mobile.png" alt="">
        </div>
        <div class="logos__buttons">
            <a class="logos__button btn" href="#">Projekte</a>
            <a class="logos__button btn" href="#">Leistungen</a>
        </div>
    </div>
</section>
<!-- End of Logos section -->

<!-- Contact section front - Teslya  -->
<section class="contact">
    <div class="container">
        <div class="contact__wrapper">
            <div class="contact__content">
                <h2 class="contact__title">Klingt gut?</h2>
                <div class="contact__list">
                    <h6 class="contact__subtitle">Wir freuen uns über deine Anfrage:</h6>
                    <a href="tel:06976700819" class="contact__item">069 767 008 19</a>
                    <a href="mailto:kontakt@new-office.net" class="contact__item">kontakt@new-office.net</a>
                </div>
                <div class="contact__buttons">
                    <a href="#" class="btn contact__btn btn_light">Alle Projekte</a>
                    <a href="#" class="btn contact__btn btn_light">Mehr über uns</a>
                </div>
            </div>
            <div class="contact__images">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-office-Design-Agentur-Frankfurt-14.jpg" alt="" class="contact__img">
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

<?php get_footer();
