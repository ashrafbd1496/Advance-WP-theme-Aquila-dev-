<?php 
/**
 * Conent Template
 *
 * @package aquila
 */
?>
    
    <article id="post <?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
        <?php 
            get_template_part('template-parts/components/blog/entry-header');
            get_template_part('template-parts/components/blog/entry-meta');
            get_template_part('template-parts/components/blog/entry-content');
            get_template_part('template-parts/components/blog/entry-footer');
         ?>
    </article>
    
    <!-- 
	<h3><a href="<?php// the_permalink(); ?>"><?php //the_title(); ?></a></h3>
	<div><?php //echo wp_trim_words( get_the_excerpt(), 20 ); ?></div> -->
