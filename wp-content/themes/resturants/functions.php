<?php


function invite_resturant_theme_styles(){

    //Adding Stylesheet
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.0');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'invite_resturant_theme_styles');


//Add Menu
function invite_resturant_menu(){
    register_nav_menus(array(
       'header-menu' => __('Header Menu', 'invite-resturant'),
       'social-menu' => __('Social Menu', 'invite-resturant')
    ));
}
add_action('init', 'invite_resturant_menu');