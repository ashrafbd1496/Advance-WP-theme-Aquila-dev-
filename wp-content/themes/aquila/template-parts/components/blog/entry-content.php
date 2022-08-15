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
                the_title( '<span class="screen-reader-text">"','"</span>', false )
            )
           );
            wp_link_pages(
            [
                'before' => '<div class="page-links">' . esc_html__('Pages:','aquila'),
                'after' => '</div>',
            ]
        );
        }else{
            aquila_the_excerpt(100);
            printf('<br>');
            echo aquila_the_excerpt_more();
        }
      
     ?>
</div>