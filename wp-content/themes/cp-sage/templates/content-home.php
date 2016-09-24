<?php the_content(); ?>

<?php
$catalogs = new WP_Query(array(
    'post_type' => 'catalog',
    'posts_per_page' => 12,
    'orderby' => 'menu_order',
    'order' => 'asc'
));

if ($catalogs->have_posts()) : ?>
<section>
    <div class="row entries catalogs smart-grid">
        <?php while ($catalogs->have_posts()) : $catalogs->the_post();
            $thumbnailUrl = has_post_thumbnail() ? wp_get_attachment_url(get_post_thumbnail_id()) : 'http://placehold.it/320x320';
            ?>
        <div class="col-lg-3 col-sm-4">
            <div class="entry catalog">
                <div class="catalog-logo">
                    <a href="<?php the_permalink() ?>">
                        <?php if (has_post_thumbnail()):
                            the_post_thumbnail(320, 320);
                        else: ?>
                            <img src="http://placehold.it/320x320" alt="" width="320" height="320" />
                        <?php endif; ?>
                    </a>
                </div>
                <h4 class="catalog-name">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h4>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php endif;
wp_reset_query();
