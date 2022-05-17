<?php 
/**
 * Bootstraps the theme.
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME{
	use Singleton;
	protected function __construct(){
		Assets::get_instance();
		//load class
		$this->setup_hooks();

	}
	protected function setup_hooks(){
		/**
		 * Actions.
		 */
		
	}





}