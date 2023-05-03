<?php
$insights = $args['wp_query'];
$taxonomy = $args['taxonomy'];

while ($insights->have_posts()) {
    $insights->the_post();

    $termIDs = wp_get_post_terms(get_the_ID(), $taxonomy, ['fields' => 'ids']);
    $termIDs = (!is_wp_error($termIDs) and $termIDs) ? implode(',', $termIDs) : 0;
    ?>

    <li class="insights__item insights__item-animation" data-categoryid="<?php echo $termIDs; ?>">
        <article class="insights__card person-card">
            <a href="<?php the_permalink(); ?>" class="person-card__link">
                <div class="insights__card-image person-card__image">
                    <figure class="insights__card-img person-card__img">
                        <?php the_post_thumbnail('img-500'); ?>
                    </figure>
                </div>
            </a>
            <div class="insights__card-content person-card__content">
                <div class="insights__card-info person-card__info">
                    <a href="<?php the_permalink(); ?>"><h2 class="insights__card-title person-card__title"><?php the_title(); ?></h2></a>
                    <?php $category = get_the_category(get_the_ID());
                    if ($category[0]) : ?>
                        <p class="insights__card-category"><?php echo $category[0]->cat_name; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    </li>

    <?php
}
wp_reset_postdata();
