<?php
$projects = $args['wp_query'];
$taxonomy = $args['taxonomy'];

while ($projects->have_posts()) {
    $projects->the_post();

    $termIDs = wp_get_post_terms(get_the_ID(), $taxonomy, ['fields' => 'ids']);
    $termIDs = (!is_wp_error($termIDs) and $termIDs) ? implode(',', $termIDs) : 0;
    ?>

    <li class="projects__item projects__item-animation" data-categoryid="<?php echo $termIDs; ?>">
        <article class="projects__card person-card">
            <div class="projects__card-image person-card__image">
                <figure class="post-image">
                    <?php $terms = wp_get_post_terms(get_the_ID(), 'work-category'); ?>
                    <?php if (!empty($terms)) : ?>
                        <ul class="tags">
                            <?php foreach ($terms as $term) : ?>
                                <?php if ($term->name === 'Ausgezeichnet') : ?>
                                    <li class="tags__item <?php echo $termName = $term->slug; ?>">
                                        <?php echo (trim($term->description)) ? $term->description : $term->name; ?>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" class="wrapper-image">
                        <?php echo get_the_post_thumbnail(); ?>
                    </a>
                </figure>
            </div>
            <div class="projects__card-content person-card__content">
                <div class="projects__card-info person-card__info">
                   <h4 class="projects__card-title person-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php $customerIndustry = get_field('customer_industry');
                    if ($customerIndustry): ?>
                        <p class="home-project__category"><?php echo $customerIndustry; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    </li>

    <?php
}

wp_reset_postdata();
