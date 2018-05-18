<?php


function invite_resturant_theme_styles(){

    // Adding Stylesheet
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.0');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/fontawesome-all.min.css', array(), '5.0.10');
    wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,700');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0');


    // Adding Javascript
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), '1.0.0', true);

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