<?php
/*
 * Template name: Insights Single page Front
 */
get_header();
?>
<!-- Hero section front - Teslya  -->
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
<section class="hero hero_centered">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__lottie">
                <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Stoorer.json" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
            <h1 class="hero__title">
                <div class="hero__title-line"><span class="anim-title-line">Event Recap: German Design Award 2023 <br> in Frankfurt am Main</span></div>
            </h1>
            <p>von Moritz Gemmerich</p>
        </div>
    </div>
</section>
<!-- End of Hero section -->

<!-- Image Video section front - Taranukha  -->
<!-- class variations: image-video image-video_margin-140 image-video_margin-280 -->
<section class="image-video image-video_margin-140">
    <div class="image-video__container">
        <div class="image-video__wrapper">
            <div class="image-video__video-wrapper image-video__video-wrapper_big" style="display: none">
                <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                    <source type="video/mp4" src=" <?php echo get_template_directory_uri(); ?>/assets/src/img/test-video.mp4"/>
                </video>
            </div>
            <div class="image-video__image-wrapper image-video__image-wrapper_big">
                <img src=" <?php echo get_template_directory_uri() ?>/assets/img/new-office-Design-Agentur-Frankfurt-24.jpg" alt="<?php /*echo esc_attr($image['alt']);*/ ?>"/>
            </div>
            <div class="image-video__lottie-wrapper image-video__lottie-wrapper_big" style="display: none">
                <lottie-player src="<?php /*echo $lottie['url'];*/ ?>" background="transparent" speed="1"
                               style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</section>
<!-- End of Image Video section -->

<!-- class variations: text-page text-page_margin-140 text-page_margin-280 text-page_centered-->
<!-- text-page section front - General  -->
<section class="text-page text-page_centered text-page_margin-140">
    <div class="container">
        <div class="text-page__content">
            <div class="text-page__text">
                <p>Am 23. Februar 2023 hatte wir die Ehre, die Preisverleihung des German Design Awards 2023 zu besuchen. Die Veranstaltung fand in einem prächtigen Ambiente statt, in dem die preisgekrönten Designs gekührt wurden.</p>
                <p>Die Stimmung war aufgeregt und voller Vorfreude auf die bevorstehende Verleihung. Die Jury, bestehend aus renommierten Designern und Branchenexperten, hatte eine schwierige Aufgabe bei der Auswahl der Gewinner. Doch schließlich wurden die Auszeichnungen in verschiedenen Kategorien wie Produkt- und Kommunikationsdesign vergeben.</p>
            </div>
        </div>
    </div>
</section>
<!-- End of text-page section -->

<!-- Image Video section front - Taranukha  -->
<!-- class variations: image-video image-video_margin-140 image-video_margin-280 -->
<section class="image-video image-video_middle image-video_margin-140">
    <div class="image-video__container">
        <div class="image-video__wrapper">
            <div class="image-video__video-wrapper" style="display: none">
                <video muted playsinline autoplay autoplay="autoplay" loop="loop">
                    <source type="video/mp4" src=" <?php echo get_template_directory_uri(); ?>/assets/src/img/test-video.mp4"/>
                </video>
            </div>
            <div class="image-video__image-wrapper">
                <img src=" <?php echo get_template_directory_uri() ?>/assets/img/new-office-Design-Agentur-Frankfurt-24.jpg" alt="<?php /*echo esc_attr($image['alt']);*/ ?>"/>
            </div>
            <div class="image-video__lottie-wrapper" style="display: none">
                <lottie-player src="<?php /*echo $lottie['url'];*/ ?>" background="transparent" speed="1"
                               style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</section>
<!-- End of Image Video section -->

<!-- class variations: text-page text-page_margin-140 text-page_margin-280 text-page_centered-->
<!-- text-page section front - General  -->
<section class="text-page text-page_centered text-page_margin-140">
    <div class="container">
        <div class="text-page__content">
            <div class="text-page__text">
                <p>Ein Höhepunkt der Veranstaltung war die Auszeichnung des Designers des Jahres. Sein innovatives und kreatives Werk wurde von der Jury als wegweisend für die Branche angesehen. </p>
                <p>Die Preisverleihung war eine inspirierende Erfahrung, die meine Wertschätzung für gutes Design verstärkt hat. Ich habe mich gefreut, einige der talentiertesten Designer des Landes kennenzulernen und ihre preisgekrönten Arbeiten zu bewundern. </p>
                <p>Insgesamt war die Preisverleihung des German Design Awards 2023 eine unvergessliche Nacht, die mich noch lange inspirieren und beeindrucken wird.</p>
            </div>
        </div>
    </div>
</section>
<!-- End of text-page section -->

<!-- class variations: buttons buttons_without-margin buttons_margin-140 buttons_margin-280 buttons_bottom-margin-280-->
<!-- buttons section front - General  -->
<section class="buttons buttons_without-margin buttons_bottom-margin-280">
    <div class="container">
        <div class="buttons__wrapper">
            <a class="btn text-btn__btn" href="#" target="_blank">Alle News</a>
        </div>
    </div>
</section>
<!-- End of buttons section -->

<!-- Contact section front - Teslya  -->
<section class="contact">
    <div class="container">
        <div class="contact__wrapper">
            <div class="contact__content">
                <h2 class="contact__title">Fragen?</h2>
                <div class="contact__list">
                    <h6 class="contact__subtitle">Melde dich jederzeit:</h6>
                    <a href="tel:06976700825" class="contact__item">069 767 008 25</a>
                    <a href="mailto:jobs@new-office.net" class="contact__item">jobs@new-office.net</a>
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
<?php get_footer();
