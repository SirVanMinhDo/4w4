<?php

/**
 * Template name: Atelier
 */
?>
<?php get_header(); ?>
<main class="site__main">
    <?php
    if (have_posts()) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_post_thumbnail('medium'); ?>
        <?php the_content(); ?>

        <p>Le formateur de l'atelier est <?php the_field('formateur'); ?>.</p>

        <p>La date de l'atelier est le <?php the_field('date_debut'); ?>.</p>

        <p>L'heure à laquelle l'atelier débute est à <?php the_field('heure_de_debut') ?>.</p>

        <p>L'atelier dure <?php the_field('duree_dune_seance') ?> minutes.</p>

        <p>L'atelier aura lieu dans le local <?php the_field('local') ?>.</p>

    <?php endif; ?>
</main><!-- #main -->
<?php
get_footer();
