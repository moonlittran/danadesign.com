<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments clearfix">
  <?php if (have_comments()) : ?>
    <h3 class="text-uppercase">Comments</h3>

    <?php $comments_number = get_comments_number(); ?>
    <div class="count-bar">
      <span><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></span>
    </div>

    <ol class="comment-list">
      <?php wp_list_comments(['style' => 'ol', 'short_ping' => true, 'avatar_size' => '45', 'callback' => 'comment_callback']); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'sage'); ?>
    </div>
  <?php endif; ?>

  <?php comment_form(); ?>
</section>
