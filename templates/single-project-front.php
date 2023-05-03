<?php /*Template name: Single Project Front*/ ?>
<?php get_header(); ?>

<!-- single-project-hero front - Teslya -->
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
<section class="hero hero_single">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__lottie">
                <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Stoorer.json" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
            <h1 class="hero__title">bis bau gruppe</h1>
            <h2>Die bis bau gruppe ist ein Frankfurter Familienunternehmen für Projektentwicklung.</h2>
        </div>
    </div>
</section>
<!-- End of single-project-hero -->

<!-- single-project-details front - Teslya -->
<!-- class variations: single-project-details single-project-details_margin-140 single-project-details_margin-280 single-project-details_accordion-->
<section class="single-project-details single-project-details_margin-140">
    <div class="container">
        <div class="single-project-details__wrapper">
            <h5 class="single-project-details__title">bis bau gruppe</h5>
            <div class="single-project-details__table">
                <div class="single-project-details__item">
                    <h5 class="single-project-details__tag">Branche</h5>
                    <div class="single-project-details__content">Immobilienentwicklung</div>
                </div>
                <div class="single-project-details__item">
                    <h5 class="single-project-details__tag">Leistungen</h5>
                    <div class="single-project-details__content">Strategie, Designkonzept, Logo, Corporate Design, Geschäftsausstattung, UX/UI-Design, Website</div>
                </div>
                <div class="single-project-details__item single-project-details__item_img">
                    <h5 class="single-project-details__tag">Awards</h5>
                    <div class="single-project-details__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/GDA23_VE_SPECIAL_N_RGB-B.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/GBA22_VE_WINNER_K_RGB.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/IAIA22_selection_sw.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Element-5CDP_2020_Siegel_RGB_SW.png" alt="">
                    </div>
                </div>
                <div class="single-project-details__item single-project-details__item_hidden">
                    <div class="single-project-details__content">
                        <p>Ein Bauprojektentwickler, der sich auf den Bau von Wohn- oder Gewerbeimmobilien spezialisiert hat, benötigt ein starkes Branding, um seine Identität auf dem Markt zu etablieren. Das Branding sollte ein klares Bild der Werte, Vision und Mission des Unternehmens vermitteln und eine klare Positionierung innerhalb der Branche schaffen. Ein professionell gestaltetes Logo und ein passender Slogan können helfen, das Unternehmen in den Köpfen der Kunden zu verankern.</p>
                        <p>Die visuellen Elemente sollten einheitlich auf der Website, in der Werbung und in der Unternehmenskommunikation eingesetzt werden, um ein einheitliches Markenerlebnis zu schaffen. Das von uns entwickelte Corporate Design punktet vorallem mit einer gleichermaßen einfachen und genialen Logoidee und mit seinem hochwertigen Gesamtlook.</p>
                    </div>
                    <div data-hidden="Weniger" data-defoult="Mehr dazu" class="single-project-details__tag"><span class="title">Mehr dazu</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of single-project-details -->

<!-- Project images and project navigation front - Taranukha -->
<!-- class variations: project-demos project-demos_margin-140 project-demos_margin-280 -->
<section class="project-demos project-demos_margin-140">
    <div class="project-demos__demo" style="display: none">
        <video muted playsinline autoplay autoplay="autoplay" loop="loop">
            <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/test-video.mp4"/>
        </video>
    </div>
    <div class="project-demos__demo" style="display: none">
<!--        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>-->
        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_PBgNop.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
    <div class="project-demos__demo">
        <img class="project-images__image" src="<?php echo get_template_directory_uri() ?>/assets/img/p1.png" alt="">
    </div>
    <div class="project-demos__demo">
        <img class="project-images__image" src="<?php echo get_template_directory_uri() ?>/assets/img/p2.png" alt="">
    </div>
    <div class="project-demos__demo">
        <img class="project-images__image" src="<?php echo get_template_directory_uri() ?>/assets/img/p3.png" alt="">
    </div>
    <div class="project-demos__demo">
        <img class="project-images__image" src="<?php echo get_template_directory_uri() ?>/assets/img/p4.png" alt="">
    </div>
    <div class="project-demos__project-switcher">
        <a class="project-demos__project-switcher-link" href="#">
            Vorheriges Projekt
        </a>
        <a class="project-demos__project-switcher-link" href="#">
            Nächstes Projekt
        </a>
    </div>
</section>
<!-- End of Project images and project navigation -->

<!-- Similar projects front - Taranukha -->
<!-- class variations: similar-projects similar-projects_without-margin similar-projects_margin-140 similar-projects_margin-280 similar-projects_bottom-margin-280  -->
<section class="similar-projects similar-projects_without-margin similar-projects_bottom-margin-280">
        <div class="container">
            <h2 class="similar-projects__title">Passende Projekte</h2>
        </div>
        <div class="container insights__previews_container">
            <div class="insights__previews">
                <div class="insights__preview similar-project">
                    <a href="#" class="insights__preview-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pp1.png" alt="">
                    </a>
                    <div class="insights__preview-info similar-project__info">
                        <a class="insights__preview-title" href="#">GERMAN BRAND AWARD 2023</a>
                        <p class="insights__preview-category">News</p>
                    </div>
                </div>
                <div class="insights__preview similar-project">
                    <a href="#" class="insights__preview-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pp2.png" alt="">
                    </a>
                    <div class="insights__preview-info similar-project__info">
                        <a class="insights__preview-title" href="#">Redesign Ringeltaube</a>
                        <p class="insights__preview-category">News</p>
                    </div>
                </div>
                <div class="insights__preview similar-project">
                    <a href="#" class="insights__preview-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pp3.png" alt="">
                    </a>
                    <div class="insights__preview-info similar-project__info">
                        <a class="insights__preview-title" href="#">VALDIVIA Consulting</a>
                        <p class="insights__preview-category">Personalberatung</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="insights__all similar-projects__all">
                <a href="#" class="insights__all-btn btn">Alle Projekte</a>
            </div>
        </div>
</section>
<!-- End of similar projects -->

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

<?php get_footer(); ?>
