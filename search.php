<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3>search.php</h3>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h4>', '</h4>');
            // the_content(); 
    ?>
            <?= wp_trim_words(get_the_excerpt(), 58, "[...]"); ?>
            <hr>
    <?php endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>