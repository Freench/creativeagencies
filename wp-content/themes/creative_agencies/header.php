<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= the_title();?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <title>ACS <?= the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

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

