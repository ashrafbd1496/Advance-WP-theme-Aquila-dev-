<?php 
/**
 * Customizer option panel
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;
use WP_Customize_Image_Control;

class Customizers{
	use Singleton;
	protected function __construct(){
		//load class
		$this->setup_hooks();
	}
	protected function setup_hooks(){
		/**
		 * Actions.
		 */
		add_action("customize_register", [$this, 'aquila_customize_register']);
	}

public function aquila_customize_register($wp_customize)
{
    $wp_customize->add_section('footer_section',array(
        'title'=>__('Footer Background','aquila'),
        'priority'=>'100',
        'description' => __('Footer Background','aquila'),
        'capability' => 'edit_theme_options',
        
    ));

    $wp_customize->add_setting('footer_image_upload_setting', array(
   	'type' => 'theme_mod', // or 'option'
   	 'capability' => 'edit_theme_options',
    'default' => 'upload Image',
    'transport' => 'postMessage', // or postMessage
       'sanitize_callback' => function( $value ) {
        if ( ! empty( $value ) ) {
            $value = esc_url_raw( $value );
            if ( empty( $value ) ) {
                return new WP_Error( 'invalid_image' );
            }
        }
        return $value;
    },
   
));


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_image_upload_control',
    array(
         'label' => __('Upload an Image','aquila'),
        'section'  => 'footer_section',
        'settings' => 'footer_image_upload_setting',
    )
) );

} //end register function

//Validate image function
// function ic_sanitize_image( $file, $setting ) {
 
//     $mimes = array(
//         'jpg|jpeg|jpe' => 'image/jpeg',
//         'gif'          => 'image/gif',
//         'png'          => 'image/png',
//         'bmp'          => 'image/bmp',
//         'tif|tiff'     => 'image/tiff',
//         'ico'          => 'image/x-icon'
//     );
 
//     //check file type from file name
//     $file_ext = wp_check_filetype( $file, $mimes );
 
//     //if file has a valid mime type return it, otherwise return default
//     return ( $file_ext['ext'] ? $file : $setting->default );
// }

} //end customizer class
