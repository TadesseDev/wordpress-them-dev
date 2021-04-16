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
add_action("wp_enqueue_scripts","add_jq_sc");
add_action("wp_enqueue_scripts","add_script");
add_action("wp_enqueue_scripts","add_custome_js");

//advance level 
add_theme_support("menus");
register_nav_menus(
    array(
        'top-menu' => 'Top menu location',
        'mobile-menu' => 'mobile menu location',
    )
);
?>