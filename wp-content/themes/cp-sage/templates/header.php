<?php use Roots\Sage\Assets; ?>

<div class="header01">
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#main-menu" aria-expanded="false" class="navbar-toggle collapsed">
          <span class="sr-only">Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo site_url() ?>" class="navbar-brand">
          <img src="<?php echo Assets\asset_path('images/logo.png') ?>">
        </a>
      </div>
      <div id="main-menu" class="collapse navbar-collapse">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
        endif;
        ?>
      </div>
    </div>
  </nav>
</div>
