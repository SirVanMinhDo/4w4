<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php wp_head(); ?>

<body>
    <header>
        <?php wp_nav_menu(array(
            'menu'                 => 'entete'
        )) ?>
        <h3>-<?php echo bloginfo('name') ?></h3>
        <h3>-<?php echo bloginfo('description') ?></h3>
        <h3>-<?php echo bloginfo('url') ?></h3>
        <h1>-<?php echo bloginfo('url') ?></h1>
        <h2>-<?php echo bloginfo('url') ?></h2>
    </header>