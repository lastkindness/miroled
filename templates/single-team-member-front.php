<?php
/*
 * Template name: Single team page Front
 */
get_header();
?>
<!-- Single team member section (photo) front Taranukha -->
<section class="team-member__img">
    <div class="container_narrow">
        <div class="team-member__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moritz.png" alt="">
        </div>
    </div>
</section>
<!-- End of Single team member section (photo) front Taranukha -->

<!-- Single team member section (description) front Taranukha -->
<div class="team-member__description">
    <div class="container_narrow">
        <div class="team-member__data">
            <span>Moritz Gemmerich</span>
            <span>&nbsp;|&nbsp;</span>
            <span>Designer & Geschäftsführer</span>
        </div>
        <h3 class="team-member__slogan">
            „Design bildet die Schnittstelle zwischen Mensch und System. Egal ob Marke, Unternehmen, Software, Produkt oder Raum, ohne Design keine Interaktion und ohne Interaktion kein Erlebnis. Unsere Aufgabe ist es, Erlebnisse zu gestalten, die den Menschen positiv in Erinnerung bleiben.“
        </h3>
        <div class="team-member__details">
            <p>Moritz Gemmerich studierte an der Hochschule RheinMain in Wiesbaden Kommunikationsdesign und lebt mit seiner Frau und seinen zwei Töchtern in Frankfurt am Main.</p>
            <p>Ab 2008 arbeitete Moritz selbstständig für eigene Kunden und für Agenturen. 2013 gründete er schließlich die Designagentur new office in Frankfurt am Main. Seitdem realisiert er mit viel Feingefühl für zeitgemäßes Design Projekte in den Bereichen Branding, Corporate Design und Corporate Identity. Seine Arbeiten wurden mehr als 20x mit international rennomierten Designpreisen ausgezeichnet.</p>
            <p>Moritz ist zudem Mitglied im Deutschen Designer Club (DDC), war Mitglied der Jury im Wettbewerb Gute Gestaltung des DDC, Mitglied der Vorjury des Wettbewerbs “WAS IST GUT” des DDC, engagiert sich als Mitglied im Förderverein Kommunikationsdesign “Die gestaltende Gesellschaft e.V.” der Hochschule RheinMain und wurde für sein ehrenamtliches Engagement als Designdozent ausgezeichnet.</p>
        </div>
        <div class="team-member__buttons">
            <a href="#" class="btn">Alle Leistungen</a>
            <a href="#" class="btn">Mehr über uns</a>
        </div>
    </div>
</div>
<!-- End of Single team member section (description) front Taranukha -->

<!-- Contact section front - Teslya  -->
<section class="contact">
    <div class="container">
        <div class="contact__wrapper">
            <div class="contact__content">
                <h2 class="contact__title">Fragen?</h2>
                <div class="contact__list">
                    <h6 class="contact__subtitle">Schreib mir gerne oder ruf mich an:</h6>
                    <a href="tel:06976700819" class="contact__item">069 767 008 25</a>
                    <a href="mailto:m.gemmerich@new-office.net" class="contact__item">m.gemmerich@new-office.net</a>
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
