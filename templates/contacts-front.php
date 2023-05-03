<?php
/*
 * Template name: Contact page Front
 */
get_header();
?>
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
<section class="hero hero_social hero_margin-140">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__lottie">
                <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Stoorer.json" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
            <h1 class="hero__title">
                <div class="hero__title-line"><span class="anim-title-line">Kontakt</span></div>
                <div class="hero__social">
                    <h6 class="hero__social-text">Noch mehr zu uns!</h6>
                    <div class="hero__social-icons social social_dark">
                        <a href="#" class="hero__social-item social__item icon icon-instagram" title="instagram"></a>
                        <a href="#" class="hero__social-item social__item icon icon-linkedin" title="linkedin"></a>
                    </div>
                </div>
            </h1>
            <h2>Wir freuen uns auf ein unverbindliches <br> Erstgespräch. Du hast Fragen? Lass sie <br> uns gemeinsam klären.</h2>
        </div>
    </div>
</section>
<!-- End of Hero section -->
<!-- Contact section front Taranukha -->
<section class="contact-details">
    <div class="container">
        <div class="contact-details__wrapper">
            <div class="contact-details__card">
                <div class="contact-details__card-img">
                    <a class="contact-details__linkedin" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.542" height="18.03" viewBox="0 0 18.542 18.03">
                            <g id="Сгруппировать_144" data-name="Сгруппировать 144" transform="translate(0 0)">
                                <path id="Контур_28" data-name="Контур 28" d="M351.278,221.788h3.743v12.043h-3.743Zm1.873-5.986a2.17,2.17,0,1,1-2.171,2.169,2.171,2.171,0,0,1,2.171-2.169" transform="translate(-350.98 -215.802)"/>
                                <path id="Контур_29" data-name="Контур 29" d="M374.876,237.371h3.59v1.646h.05a3.933,3.933,0,0,1,3.542-1.945c3.79,0,4.49,2.495,4.49,5.737v6.606h-3.74v-5.857c0-1.4-.026-3.193-1.945-3.193-1.948,0-2.246,1.521-2.246,3.092v5.958h-3.74Z" transform="translate(-368.006 -231.385)"/>
                            </g>
                        </svg>
                    </a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-img.png" alt="">
                </div>
                <div class="contact-details__card-info">
                    <h4 class="contact-details__card-name">Benjamin Bartels-Khan</h4>
                    <p class="contact-details__card-position">Geschäftsführung</p>
                </div>
            </div>
            <div class="contact-details__info">
                <div class="contact-details__address">
                    new office GmbH<br>
                    Horst-Schulmann-Straße 5<br>
                    60314 Frankfurt am Main<br>
                </div>
                <div class="contact-details__divisions">
                    <div class="contact-details__division">
                        <p class="contact-details__title">Offene Fragen?</p>
                        <h2 class="contact-details__link">
                            <a href="#">069 767 008 25</a>
                        </h2>
                    </div>
                    <div class="contact-details__division">
                        <p class="contact-details__title">Projektanfrage</p>
                        <h2 class="contact-details__link">
                            <a href="#">kontakt@new-office.net</a>
                        </h2>
                    </div>
                    <div class="contact-details__division">
                        <p class="contact-details__title">Bewerbungen</p>
                        <h2 class="contact-details__link">
                            <a href="#">jobs@new-office.net</a>
                        </h2>
                    </div>
                </div>
                <div class="contact-details__buttons">
                    <button class="btn contact-details__btn">Offene Stellen</button>
                    <button class="btn contact-details__btn">Mehr über uns</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of contact section front Taranukha -->
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

<?php get_footer();
