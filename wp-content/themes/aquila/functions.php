<?php 
/**
 * Theme Functions.
 *
 * @package Aquila
 */

if (! defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ));
}
if (! defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit( get_template_directory_uri() ));
}
if (! defined('AQUILA_BUILD_URI')) {
    define('AQUILA_BUILD_URI', untrailingslashit( get_template_directory_uri() ).'/build'); 
}
if (! defined('AQUILA_BUILD_JS_URI')) {
    define('AQUILA_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ).'/build/js'); 
}
if (! defined('AQUILA_BUILD_JS_DIR_PATH')) {
    define('AQUILA_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ). '/build/js');
}
if (! defined('AQUILA_BUILD_IMG_URI')) {
    define('AQUILA_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ).'/build/src/img'); 
}

if (! defined('AQUILA_BUILD_CSS_URI')) {
    define('AQUILA_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ).'/build/css'); 
}
if ( ! defined( 'AQUILA_BUILD_CSS_DIR_PATH' ) ) {
    define( 'AQUILA_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'AQUILA_BUILD_LIB_URI' ) ) {
    define( 'AQUILA_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}


require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';
    // echo "<pre>";
    // print_r(AQUILA_DIR_URI);
    // wp_die();

function get_aquila_theme_instance(){
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
get_aquila_theme_instance();

// add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );
// function aquila_enqueue_scripts(){
// }


function aquila_customize_css(){ ?>
    <style type="text/css">
        .footer { 
            min-height:100%;
            background-image: url('<?php echo get_theme_mod( "footer_image_upload_setting");?>'), linear-gradient(rgba(255,255,255,0.6),rgba(255,255,255,0.6));
            background-blend-mode: overlay;
            background-size:cover;
            }
    </style>
<?php }
add_action( 'wp_footer', 'aquila_customize_css');