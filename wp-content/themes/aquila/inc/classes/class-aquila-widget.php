<?php 
/**
 * Enqueue theme assets.
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;
use WP_Widget;
use AQUILA_THEME\Inc\Traits\Singleton;

class Aquila_Widget extends WP_Widget {
	use Singleton;
	
	/**
     * Register Widget 
     */
	
    public function __construct() {
        parent::__construct(
            'aquila_widget', // Base ID
            'Aquila_Widget', // Name
            array( 'description' => __( 'A Aquila Widget', 'aquila' ), ) // Args
        );
    }
 
   
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }?>
        
        <section class="card">
            <div class="clock card-body">
                <span id="time"></span>
                <span id="ampm"></span>
                <span id="time-emoji"></span>
            </div>
        </section>

       <?php  echo $after_widget;
    }
 
   
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'Aquila Clock', 'aquila' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
         </p>
    <?php
    }
 
  
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
} // class Aquila_Widget
