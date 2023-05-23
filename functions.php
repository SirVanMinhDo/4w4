<?php

function ajouter_styles()
{

    wp_enqueue_style(
        'style-principale',  // identificateur du link css
        get_template_directory_uri() . '/style.css',  // enroit où se trouve le fichier style.css
        array(), // les fichiers css qui dépendent de style.css
        filemtime(get_template_directory() . '/style.css')  // version de notre style.css
    );

    wp_enqueue_style(
        "style-google-font",
        "https://fonts.googleapis.com/css2?family=Climate+Crisis&display=swap",
        false
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles');



/* ----------------------------------- Enregistrement des menus */
function enregistrement_nav_menu()
{
    register_nav_menus(array(
        'principal' => 'Menu principal',
        'footer'  => 'Menu pied de page'
    ));
}
add_action('after_setup_theme', 'enregistrement_nav_menu', 0);



// Modifie les items «evenement», pour inclure l'image en avant-plan 

function add_menu_description_and_thumbnail($item_output, $item, $depth, $args)
{
    if ('evenement' == $args->menu) {
        $post_thumbnail_id = get_post_thumbnail_id($item->object_id);
        if ($post_thumbnail_id) {
            $post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
            $item_output = str_replace('">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><img src="' . esc_url($post_thumbnail_url[0]) . '" class="menu-thumbnail" />', $item_output);
        } else {
            $item_output = str_replace('">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span>', $item_output);
        }
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_menu_description_and_thumbnail', 10, 4);

/** 
 * Pour ajouter la description des évènements dans menu evenements
 */

function ajouter_description_class_menu($items, $args)
{
    // Vérifier si le menu correspondant est celui que vous souhaitez modifier
    if ('evenement' === $args->menu || 'bloc_archive' === $args->menu) {
        foreach ($items as $item) {
            // Récupérer le titre, la description et la classe personnalisée
            $titre = $item->title;
            $description = $item->description;
            $classe = 'menu__evenement'; // Remplacer par le nom de la classe souhaitée

            // Ajouter la description et la classe personnalisée à l'élément de menu
            $item->title .= '<span>' . $description . '</span>';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'ajouter_description_class_menu', 10, 2);

/*----------------------------------------- add_theme_support() */
add_theme_support('title-tag');
add_theme_support(
    'custom-logo',
    array(
        'height' => 150,
        'width'  => 150,
    )
);
add_theme_support('post-thumbnails');
add_theme_support('custom-background');

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal($query)
{
    if (
        $query->is_home()
        && $query->is_main_query()
        && !is_admin()
    ) {
        $query->set('category_name', '4w4');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'cidweb_modifie_requete_principal');

/* -----------------------------------------Enregistrer le sidebar  ---*/

function enregistrer_sidebar()
{
    register_sidebar(array(
        'name' => __('Footer 1', '4w4-vanminh-do'),
        'id' => 'footer_1',
        'description' => __('Une zone  afficher des widgets dans le footer.', '4w4-vanminh-do'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', '4w4-vanminh-do'),
        'id' => 'footer_2',
        'description' => __('Une zone  afficher des widgets dans le footer.', '4w4-vanminh-do'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'enregistrer_sidebar');
