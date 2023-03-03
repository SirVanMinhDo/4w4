<?php
$titre = get_the_title();

$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, -5);

$duree = "60";
// Permet de trouver la position de ce caractère là
?>
<!-- Template part pour afficher un blockflex article note de cours 4w4 -->
<article class="blockflex__article">

    <h3><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h3>
    <h5><?= $titre_long; ?> </h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h5><?= $duree ?> </h5>
</article>