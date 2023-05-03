<?php
/*
 * Template name: Insights page Front
 */
get_header();
?>
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
<section class="hero hero_archive hero_social">
    <div class="container">
        <div class="hero__wrapper">
            <div class="hero__lottie">
                <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/Stoorer.json" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
            <h1 class="hero__title">
                <div class="hero__title-line"><span class="anim-title-line">Insights</span></div>
                <div class="hero__social">
                    <h6 class="hero__social-text">Noch mehr Insights!</h6>
                    <div class="hero__social-icons social social_dark">
                        <a href="#" class="hero__social-item social__item icon icon-instagram" title="instagram"></a>
                        <a href="#" class="hero__social-item social__item icon icon-linkedin" title="linkedin"></a>
                    </div>
                </div>
            </h1>
            <h2>News, neue Projekte und kreative Insights <br> von unserem Team.</h2>
        </div>
    </div>
</section>
<!-- End of Hero section -->
<!-- Insights filtering front Taranukha -->
<section id="" class="insights insights-filter insights_without-margin insights_bottom-margin-280">
        <div class="insights__header">
            <div class="insights__header-container container">
                <div class="insights__holder">
                    <div class="insights__filters">
                        <div class="insights__filters_arrow">
                            <span class="vertical-line"></span>
                            <span class="horizontal-lines"></span>
                        </div>
                        <div class="insights__filters_current-mobile"></div>
                        <button type="button" class="insights__filter active" data-categoryid="0">
                            <?php _e('Alle', TEXTDOMAIN); ?>
                        </button>
                        <button type="button" class="insights__filter">News</button>
                        <button type="button" class="insights__filter">Projekte</button>
                        <button type="button" class="insights__filter">Insights</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="insights__content">
            <div class="insights__content-container container">
                <ul class="insights__list">
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i1.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>"><h2 class="insights__card-title person-card__title">GERMAN BRAND AWARD 2023</h2></a>
                                    <p class="insights__card-category">Projekte</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i2.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="insights__card-title person-card__title">Redesign Ringeltaube</h2>
                                    </a>
                                    <p class="insights__card-category">News</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i3.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="insights__card-title person-card__title">Implenia Mitarbeitermagazin</h2>
                                    </a>
                                    <p class="insights__card-category">Projekte</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i1.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>"><h2 class="insights__card-title person-card__title">GERMAN BRAND AWARD 2023</h2></a>
                                    <p class="insights__card-category">Projekte</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i2.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="insights__card-title person-card__title">Redesign Ringeltaube</h2>
                                    </a>
                                    <p class="insights__card-category">News</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i3.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="insights__card-title person-card__title">Implenia Mitarbeitermagazin</h2>
                                    </a>
                                    <p class="insights__card-category">Projekte</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i1.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>"><h2 class="insights__card-title person-card__title">GERMAN BRAND AWARD 2023</h2></a>
                                    <p class="insights__card-category">Projekte</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i2.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="insights__card-title person-card__title">Redesign Ringeltaube</h2>
                                    </a>
                                    <p class="insights__card-category">News</p>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="insights__item">
                        <article class="insights__card person-card">
                            <a href="#" class="person-card__link">
                                <div class="insights__card-image person-card__image">
                                    <figure class="insights__card-img person-card__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/i3.jpg" alt="">
                                    </figure>
                                </div>
                            </a>
                            <div class="insights__card-content person-card__content">
                                <div class="insights__card-info person-card__info">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="insights__card-title person-card__title">Implenia Mitarbeitermagazin</h2>
                                    </a>
                                    <p class="insights__card-category">Projekte</p>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<!-- End of Insights filtering front Taranukha -->
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
