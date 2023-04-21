<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>

<main class="site__main no-aside">

    <h3>Résultats de la recherche</h3>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            $ma_categorie = "4w4";
            if (in_category('cours')) {
                $ma_categorie = "cours";
            }
            get_template_part('template-parts/search', $ma_categorie);

        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>