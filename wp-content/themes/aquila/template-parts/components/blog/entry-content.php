<?php 
/**
 * Template for post entry content
 * @package aquila
 */
?>
<div class="etnry-content">
    <?php 
        if (is_single() ) {
          the_content(
            sprintf(
                wp_kses(
                    __('Continue Reading %s <span class="meta-nav">&ararr;</span>','aquila'),
                    [
                        'span'  => [
                            'class' => []
                        ]
                    ]
                ),
                the_title( '<span>','</span>', false )
            )
           );
        }
        else{
            aquila_the_excerpt(100);
            echo aquila_the_excerpt_more();
        }
     ?>
</div>