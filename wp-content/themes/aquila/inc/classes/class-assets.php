<?php 
/**
 * Enqueue theme assets.
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;
class Assets{
	use Singleton;
	protected function __construct(){
		//load class
		$this->setup_hooks();
	}
	protected function setup_hooks(){
		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts',[$this, 'register_styles'] );
		add_action( 'wp_enqueue_scripts',[$this, 'register_scripts'] );
	}
	public function register_styles(){ 
		
    	wp_register_style( 'bootstrap-css', AQUILA_BUILD_LIB_URI . '/css/bootstrap.min.css', [], false, 'all' );
    	wp_register_style('style-css',get_stylesheet_uri() . '/style.css', array(), filemtime(AQUILA_DIR_PATH . '/style.css'), 'all');
		wp_register_style( 'slick-css', AQUILA_BUILD_LIB_URI . '/css/slick.css', [], false, 'all' );
		wp_register_style( 'slick-theme-css', AQUILA_BUILD_LIB_URI . '/css/slick-theme.css', ['slick-css'], false, 'all' );
		wp_register_style( 'main-css', AQUILA_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime( AQUILA_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );
		  wp_register_style('fonts-css',get_stylesheet_directory_uri() . '/assets/src/library/fonts/fonts.css', [], false, 'all');

		
    	 //Enqueue Styles
    	wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'slick-css' );
		wp_enqueue_style( 'slick-theme-css' );
		wp_enqueue_style( 'main-css' );
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'fonts-css' );
	   
	}

	public function register_scripts(){
	   wp_register_script( 'slick-js', AQUILA_BUILD_LIB_URI . '/js/slick.min.js', ['jquery'], false, true );
		wp_register_script( 'main-js', AQUILA_BUILD_JS_URI . '/main.js', ['jquery', 'slick-js'], filemtime( AQUILA_BUILD_JS_DIR_PATH . '/main.js' ), true );
		// wp_register_script( 'single-js', AQUILA_BUILD_JS_URI . '/single.js', ['jquery', 'slick-js'], filemtime( AQUILA_BUILD_JS_DIR_PATH . '/single.js' ), true );
		// wp_register_script( 'author-js', AQUILA_BUILD_JS_URI . '/author.js', ['jquery'], filemtime( AQUILA_BUILD_JS_DIR_PATH . '/author.js' ), true );
		wp_register_script( 'bootstrap-js', AQUILA_BUILD_LIB_URI . '/js/bootstrap.min.js', ['jquery'], false, true );

		// Enqueue Scripts.
		wp_enqueue_script( 'main-js' );
		wp_enqueue_script( 'bootstrap-js' );
		wp_enqueue_script( 'slick-js' );

	   
	}

}