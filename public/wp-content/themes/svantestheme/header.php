<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="/wp-content/themes/svantestheme/style.css">
    <?php wp_head(); ?>
</head>
<nav>
    <div>
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'main-menu',
            'depth'             => 3,
            'container'         => 'div',
        ));
        ?>
    </div>
</nav>

<body>