<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="row">
            <div class="col-md-10 top-menu-bar">
                <?php wp_nav_menu(
                    array(
                        'container_class' => 'menuContainer',
                        'theme_location' => 'top-menu',
                        'menu_id' => 'topMenu',
                        'depth' => 0,
                        'fallback_cb' => false,
                    )
                ); ?>
            </div>
            <div class="col-md-2">
                <div class="header-search-icon">
                    <span class="icon">
                        <img class="icon-image-30" src="<?php echo get_template_directory_uri() ?>/images/icon/Search-bright-yellow.png" alt="search icon">
                    </span>
                </div>
            </div>
        </div>


        <div class="container search-bar">
            <?php get_search_form(); ?>
        </div>
    </header>
    <div class="container">
        <div class="header-place-holder">
        </div>