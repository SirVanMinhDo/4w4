<?php

/**
 * Template permettant d'afficher la zone aside
 */
?>
<aside class="site__aside">
    <?php the_post_thumbnail('thumbnail'); ?>
    <h3>Nos ateliers en 2023</h3>
    <?php
    $menu = "";
    if (in_category('cours')) {
        $menu = "cours";
    }
    // $menu peut prendre les valeurs : "note-4w4" ou "cours"
    echo $menu;
    wp_nav_menu(array(
        "menu" => $menu,
        "container" => "nav"
    )) ?>
</aside>