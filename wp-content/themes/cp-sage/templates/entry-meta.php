<div class="row">
    <div class="col-md-4 col-sm-6">
        <p class="meta">
            <span class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></span>
            <span class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></span>
        </p>
    </div>
    <div class="col-md-8 col-sm-6">
        <p class="meta">
            In: <?php the_category(', ') ?>
        </p>
    </div>
</div>
