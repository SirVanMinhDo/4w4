<footer class="site__footer">
    <section class="a_propos">À propos
        <p>- Je suis Van Minh Do <br> - J'adore les jeux vidéos
            <br>- Je veux raconter mon histoire
        </p>
    </section>
    <section class="projets">Mes projets <p>Projets réalisés dans le cours
            d'Imagerie 3D et celui d'Animation 3D</p>
        <div class="liens_footer1">
            <?php wp_nav_menu(array(
                "menu" => "footer1",
                "container" => "liens_footer1"
            )) ?></div>
    </section>
    <section class="contacts">Contactez-moi! <p>Mes portfolios en tant qu'artiste 3D:</p>
        <div class="liens_footer2">
            <?php wp_nav_menu(array(
                "menu" => "footer2",
                "container" => "liens_footer2"
            )) ?></div>
    </section>
</footer>
<?php wp_footer(); ?>