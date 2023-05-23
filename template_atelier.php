<?php

/**
 * Template name: Atelier
 */
?>
<?php get_header(); ?>
<main class="site__main">
    <?php
    if (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail('medium'); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_content(); ?>
        <p>L'adresse de l'atelier: <?php the_field('atelier'); ?></p>
        <p>La date et l'heure de l'atelier: <?php the_field('date_et_heure'); ?></p>
    <?php endif; ?>
</main><!-- #main -->
<?php
get_footer();
