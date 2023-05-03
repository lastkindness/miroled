<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 */

get_header(); ?>

<!-- Single team member section (photo) front Taranukha -->
<?php
$photoForSingleTeamPage = get_field('member_photo_for_single_page');
$position = get_field('member_position');
$slogan = get_field('member_slogan');
$description = get_field('member_description');
$buttons = get_field('buttons');

if ($photoForSingleTeamPage): ?>
    <section class="team-member__img">
        <div class="container_narrow">
            <div class="team-member__image">
                <img src="<?php echo esc_url($photoForSingleTeamPage['url']); ?>"
                     alt="<?php echo esc_attr($photoForSingleTeamPage['alt']); ?>"/>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- End of Single team member section (photo) front Taranukha -->

<!-- Single team member section (description) front Taranukha -->
<div class="team-member__description">
    <div class="container_narrow">
        <div class="team-member__data">
            <span><?php echo get_the_title(); ?></span>
            <span>&nbsp;|&nbsp;</span>
            <span><?php echo $bodytag = str_replace("|", "&", $position); ?></span>
        </div>

        <?php if ($slogan): ?>
            <h3 class="team-member__slogan">
                <?php echo $slogan; ?>
            </h3>
        <?php endif; ?>

        <?php if ($description): ?>
            <div class="team-member__details">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>

        <?php if($buttons): ?>
        <div class="team-member__buttons">
            <?php foreach ($buttons as $button): ?>
                <?php
                $link = $button['link'];
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn" href="<?php echo esc_url($link_url); ?>"
                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- End of Single team member section (description) front Taranukha -->

<?php if (have_rows('page_elements')) {

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
