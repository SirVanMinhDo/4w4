<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<?php in_category($category = '4w4') ?>
<main class="site__main no-aside">
    <h3>search.php</h3>
    <h3>Résultats de la recherche</h3>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h4>', '</h4>'); ?>

            <?= wp_trim_words(get_the_excerpt(), 50, " [...] "); ?>
            <hr>
    <?php endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>