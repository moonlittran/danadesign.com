<div class="wrapper footer">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </div>
      <div class="col-sm-6">
        <div id="social-links" class="text-right">https://www.facebook.com/thietkenhandienthuonghieu68</div>
      </div>
    </div>
  </div>
</div>
