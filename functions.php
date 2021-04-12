<?php 
function add_css(){
    $name="bootstrap-style";
    $directory=get_template_directory_uri()."/bootstrap-5.0.0/css/bootstrap.min.css";
    $dependency=array();
    $version=false;
    $medias='all';
    wp_register_style($name,$directory,$dependency,$version,$medias);
    wp_enqueue_style("bootstrap-style");
}
function add_script(){
    wp_enqueue_script("jquery");
    $name="bootstrap-script";
    $directory=get_template_directory_uri()."/bootstrap-5.0.0/js/bootstrap.min.js";
    $dependency='jquery';
    $version=false;
    $footer_inquee=true;
    wp_enqueue_script($name,$directory,$dependency,$version,$footer_inquee);

}
add_action("wp_enqueue_scripts","add_css");
add_action("wp_enqueue_scripts","add_script");
?>