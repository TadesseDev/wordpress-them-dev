<?php 
function add_css(){
    $name="bootstrap-style";
    $directory=get_template_directory_uri()."/bootstrap-5.0.0/css/bootstrap.min.css";
    $dependency=array();
    $version=false;
    $medias='all';
    wp_register_style($name,$directory,$dependency,$version,$medias);
    wp_enqueue_style($name);
}

function add_main_style(){
$name="main-style";
$directory=get_template_directory_uri()."/custome/main-style.css";
$dependency=array();
$version=false;
$media='all';
wp_register_style( $name, $directory, $dependency, $version, $media);
wp_enqueue_style($name);
}
function add_font_style(){
    $name="font-families";
    $directory=get_template_directory_uri()."/custome/fonts/font.css";
    $dependency=array();
    $version=false;
    $media='all';
    wp_register_style( $name, $directory, $dependency, $version, $media);
    wp_enqueue_style($name);
    }
    
function add_jq_sc(){ 
    $name="jquery";
    $directory=get_template_directory_uri()."/JQuery/jquery.js";
    $dependency=array();
    $version=false;
    $footer_inquee=true;
    wp_enqueue_script($name,$directory,$dependency,$version,$footer_inquee);
}
function add_script(){
    $name="bootstrap-script";
    $directory=get_template_directory_uri()."/bootstrap-5.0.0/js/bootstrap.min.js";
    $dependency='jquery';
    $version=false;
    $footer_inquee=true;
    wp_enqueue_script($name,$directory,$dependency,$version,$footer_inquee);

}
function add_custome_js(){
    $name="custome-script";
    $directory=get_template_directory_uri()."/custome/custome-script.js";
    $dependency='jquery';
    $version=false;
    $footer_inquee=true;
    wp_enqueue_script($name,$directory,$dependency,$version,$footer_inquee);
  
}
add_action("wp_enqueue_scripts","add_css");
add_action("wp_enqueue_scripts","add_main_style");
add_action("wp_enqueue_scripts","add_font_style");
add_action("wp_enqueue_scripts","add_jq_sc");
add_action("wp_enqueue_scripts","add_script");
add_action("wp_enqueue_scripts","add_custome_js");

//advance level 
//add suports
add_theme_support("menus");
add_theme_support( 'post-thumbnails' );
add_image_size( 'slider', 1000, 500, true);
add_image_size( 'prefered-thumb', 239, 239, true); // false no crop and tru is for crop
//set_post_thumbnail_size( 50, 50 ); resizing
//set_post_thumbnail_size( 50, 50, true ); croping
register_nav_menus(
    array(
        'top-menu' => 'Top menu location',
        'mobile-menu' => 'mobile menu location',
        'footer-menu' => 'footer menu location',
    )
);

//add filter
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999);
?>