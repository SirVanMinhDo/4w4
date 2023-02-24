<?php
/* Formulaire de recherche personnalisée */
?>
<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input class="rechercheinput" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="recherchebouton" type="submit" class="search-submit">
        <span class="recherche__icone">&#x1F50D;</span>
    </button>
</form>