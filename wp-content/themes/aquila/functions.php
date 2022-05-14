<?php 
/**
 * Theme Functions.
 *
 * @package Aquila
 */

    // echo "<pre>";
    // print_r(filemtime(get_template_directory()));
    // wp_die();


add_action( 'wp_enqueue_scripts', 'aquila_scripts' );
function aquila_scripts(){
    //stylesheets
    wp_enqueue_style('main-styles',get_stylesheet_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);

    //Scripts
}