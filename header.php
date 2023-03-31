<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<?php
/*
  $nouvelle_classe = ""
  if (is_front_page()){
    $nouvelle_classe = 'no-aside';
  }
*/
?>
<!-- body class="site  // $nouvelle_classe " -->

<body class="custom-background site">

    <header class="site__header">
        <section class="site__header__logo">
            <?php the_custom_logo(); ?>
            <div class="menu__recherche">
                <input type="checkbox" id="chkMenu">
                <?php wp_nav_menu(array(
                    "menu" => "entete",
                    "container" => "nav"
                )) ?>

                <?php get_search_form(); ?>
                <label class="burger" for="chkMenu"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="orange">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg></label>

            </div>
        </section>
        <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
        <h2><?= bloginfo('description') ?></h2>
    </header>

    <?php
    if (!is_front_page()) {
        get_template_part("template-parts/aside");
    }
    ?>