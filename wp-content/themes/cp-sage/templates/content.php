<?php use Roots\Sage\Assets; ?>

<article <?php post_class('entry article'); ?>>
  <figure style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url('full') : Assets\asset_path('images/blog-thumbnail.jpg') ?>')"></figure>
  <div class="details">
      <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
      <?php the_excerpt(); ?>
      <p class="text-center"><a class="more" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
  </div>
</article>
