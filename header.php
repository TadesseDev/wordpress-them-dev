<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header>
        
    <span>
        THIS IS BRAND
</span>      
    <?php wp_nav_menu(
        array(
            'container_class' => 'menuContainer',
            'theme_location' => 'top-menu',
            'menu_id' => 'topMenu',
            'depth' => 0,
            'fallback_cb' => false,
        )
        ); ?>
    </header>
    <div class="container">
    <div class="header-place-holder">
    </div>
    
