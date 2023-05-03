<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 */

get_header(); ?>

<?php
$postObject = get_field('insights_author');
$lottie = get_field('insights_lottie');
$author = $postObject[0]->post_title;

?>

<!-- Hero section front - Teslya  -->
<!-- class variations: hero hero_single hero_archive hero_margin-140 hero_margin-280 hero_social hero_centered-->
<section class="hero hero_centered">
    <div class="container">
        <div class="hero__wrapper">
            <?php if($lottie): ?>
            <div class="hero__lottie">
                <lottie-player src="<?php echo $lottie; ?>" background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay></lottie-player>
            </div>
            <?php endif; ?>
            <div class="hero__title-wrap">
                <h1 class="hero__title">
                    <div class="hero__title-line"><span class="anim-title-line"><?php echo get_the_title(); ?></span></div>
                </h1>
            </div>
            <?php if($author): ?>
            <p><?php _e('von', TEXTDOMAIN); ?> <?php echo $author; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of Hero section -->

<?php
if ( have_rows('single_insights_elements') ) {

    while (have_rows('single_insights_elements')) {

        the_row();
        $name = get_row_layout();
        get_template_part(
            'acf-blocks/single-insights/' . $name,
            NULL,
            ['section-id' => $name] // in file need use: "$args['section-id']" to setup unique section id="value"
        );

    }
}

if (have_rows('page_elements')) {

    while (have_rows('page_elements')) {

        the_row();
        $name = get_row_layout();
        get_template_part(
            'acf-blocks/' . $name,
            NULL,
            ['section-id' => $name] // in file need use: "$args['section-id']" to setup unique section id="value"
        );

    }
}

?>


<?php get_footer(); ?>
