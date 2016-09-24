<?php use Roots\Sage\Assets; ?>

<div id="bSidebar">
    <?php
    if (is_singular()){
        dynamic_sidebar('sidebar-single');
    }else{
        dynamic_sidebar('sidebar-primary');
    } ?>
</div>
