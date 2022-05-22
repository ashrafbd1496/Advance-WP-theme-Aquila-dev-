<?php 
/**
 * Main Template File
 *
 * @package aquila
 */
 get_header(); ?>

	<div id="primary">
		<main class="site-main mt-5" id="main" role="main">
			<?php 
			if (have_posts()) { ?>
				<div class="container">
				 <?php 
					if (is_home() && ! is_front_page()) { ?>
				    <header class="mb-5">
				      <h1 class="page-title">
				        <?php single_post_title(); ?>
				      </h1>
				    </header>
				  <?php } ?>
				  <div class="row">
				  	 <?php 
					  	 $i = 0;
					  	 $number_of_columns = 3;
						 while(have_posts()): the_post();
						 	if (0 === $i % $number_of_columns){ ?>
						 		<div class="col-lg-4 col-md-6 col-sm-12">
						 	<?php } ?>
						 	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						 	<div><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></div>
						 	 <?php $i++;
						 	if (0 !== $i && 0 === $i % $number_of_columns) { ?>
						 		</div>
						 	<?php }
						endwhile;
						 ?>
				  </div>
				</div>
			<?php }
			 ?>
		</div>
	</div>

<?php get_footer(); ?>