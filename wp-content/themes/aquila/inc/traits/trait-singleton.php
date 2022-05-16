<?php 

namespace AQUILA_THEME\Inc\Traits;

trait Singleton{
	public function __construct(){

	}

	public function __clone(){

	}

	final public static function get_instance(){
		static $instance = [];
		$called_class = get_called_class();
	}
}