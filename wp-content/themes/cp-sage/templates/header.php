<?php use Roots\Sage\Assets; ?>
<a href="#mobile-menu" id="hamburger" class="fixed">
    <span class="hamburger hamburger--collapse">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </span>
</a>

<div id="header" class="header">
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
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
