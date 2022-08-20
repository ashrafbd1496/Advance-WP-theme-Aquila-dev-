<?php 
/**
 * Restiger Sidebars
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;
class Sidebars{
	use Singleton;
	protected function __construct(){
		//load class
		$this->setup_hooks();
	}
	protected function setup_hooks(){
		/**
		 * Actions.
		 */
		add_action('widgets_init',[$this, 'register_sidebars']);
        add_action('widgets_init',[$this, 'register_aquila_widget']);
	}

	public function register_sidebars(){
		 register_sidebar( array(
        'name'          => __( 'Aquila Main Sidebar', 'aquila' ),
        'id'            => 'aq_sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'aquila' ),
        'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
		 register_sidebar( array(
        'name'          => __( 'Aquila Footer Sidebar', 'aquila' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'aquila' ),
        'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
		  register_sidebar( array(
        'name'          => __( 'Aquila Single Post Sidebar', 'aquila' ),
        'id'            => 'post-sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'aquila' ),
        'before_widget' => '<div id="%1$s" class="widget aquila-widget3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );


	}

    //Aquila widget register function
    public function register_aquila_widget(){
        register_widget('AQUILA_THEME\Inc\Aquila_Widget'); //used widget class name
    }


}