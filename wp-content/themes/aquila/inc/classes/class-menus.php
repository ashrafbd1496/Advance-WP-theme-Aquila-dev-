<?php 
/**
 * Register Menus.
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;
class Menus{
	use Singleton;
	protected function __construct(){
		//load class
		$this->setup_hooks();
	}
	protected function setup_hooks(){
		/**
		 * Actions.
		 */
		add_action( 'init',[$this, 'register_menus'] );
	}
	public function register_menus(){
		register_nav_menus([
			'aquila-header-menu' => esc_html__( 'Header Menu','aquila' ),
      		'aquila-footer-menu' => esc_html__( 'Footer Menu','aquila' )
		]);
	}
	public function get_menu_id($location){
		//Get all the locations
		$locations = get_nav_menu_locations();

		//Get object id by location
		$menu_id = $locations[$location];
		if (!empty($menu_id)){
			return $menu_id;
		}else{
			return $menu_id = '';
		}
		//return ! empty($menu_id) ? $menu_id : '';

	}



} //menu class end