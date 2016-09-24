<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <!--<div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>-->
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrapper" role="document">
      <div class="container">
        <div class="row">
          <div class="col-sm-<?php echo is_singular() ? '12' : '9' ?>">
            <?php include Wrapper\template_path(); ?>
          </div><!-- /.content -->
        <?php if (Setup\display_sidebar()) : ?>
          <div class="col-sm-<?php echo is_singular() ? '12' : '3' ?>">
            <?php include Wrapper\sidebar_path(); ?>
          </div><!-- /.sidebar -->
        <?php endif; ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.wrapper -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
