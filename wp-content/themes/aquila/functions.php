<?php 
/**
 * Theme Functions.
 *
 * @package Aquila
 */

if (! defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ));
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
    // echo "<pre>";
    // print_r(AQUILA_DIR_PATH);
    // wp_die();

function get_aquila_theme_instance(){
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
get_aquila_theme_instance();

add_action( 'wp_enqueue_scripts', 'aquila_scripts' );
function aquila_scripts(){
    //Register styles and scripts
    wp_register_style('main-style',get_stylesheet_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_register_style('bootstrap-css',get_template_directory_uri() . '/assets/src/library/bootstrap.min.css', array(),false, 'all');



    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js',[],filemtime(get_template_directory() . '/assets/main.js'), false);
     wp_register_script('bootstrap-js',get_template_directory_uri() . '/assets/src/library/bootstrap.min.js', array('jquery'),false, true);

    //Enqueue Styles and Scripts
    wp_enqueue_style('main-style');
    wp_enqueue_style('bootstrap-css');

    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}
