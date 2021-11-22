<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>ACS <?= the_title(); ?></title>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

</head>
<body>
    <header>
    <div class="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_icon_url(); ?> " width="79" alt="logo"></a></div>
    <div id="navs">
    <?php

        if ( has_nav_menu( 'header-menu' ) ){
            wp_nav_menu (
            array (
            'theme_location' => 'header-menu' ,
            'container'      => 'nav',
            'container_id'=> 'mainMenu',
            ));
        }

        if ( has_nav_menu( 'header-menu-social' ) ){
            wp_nav_menu (
            array (
            'theme_location' => 'header-menu-social' ,
            'container'      => 'nav',
            'container_id'=> 'socialMenu',
            ));
        }

    ?>
    </div>

    </header>
    <hr>

