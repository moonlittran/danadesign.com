<?php use Roots\Sage\Assets; ?>

<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('entry article single-blog'); ?>>
  <figure style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url('full') : Assets\asset_path('images/blog-thumbnail.jpg') ?>')"></figure>
  <div class="details">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php get_template_part('templates/entry-meta'); ?>
    <?php the_content(); ?>
    <?php comments_template('/templates/comments.php'); ?>
  </div>
</article>
<?php endwhile; ?>