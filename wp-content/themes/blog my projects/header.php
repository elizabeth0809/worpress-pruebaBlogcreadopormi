<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body>
    <header class="header">
        <div class="bar-navigation">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.jpg" alt="logo blog">
            </div>
            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args)
            ?>
        </div>
    </header>
