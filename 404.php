<?php
/**
 * 404 template
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 */

get_header();
?>

<?php
$title = get_field('title', '404_settings');
$text = get_field('text', '404_settings');
$link = get_field('link', '404_settings');
?>
<section class="text content-404">
    <div class="content-404__container">
        <div class="content-404__wrapper">
            <?php if ($title): ?>
                <h1><?php echo $title; ?></h1>
            <?php endif; ?>
            <div class="text-btn__text text-404__wrapper">
                <?php if ($text): ?>
                <p>
                    <?php echo $text; ?>
                </p>
                <?php endif; ?>
                <?php
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn" href="<?php echo esc_url($link_url); ?>"
                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<?php
get_footer();
?>
