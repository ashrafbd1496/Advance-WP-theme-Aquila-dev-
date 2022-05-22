<?php 
/**
 * Conent Template
 *
 * @package aquila
 */
?>

	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></div>

