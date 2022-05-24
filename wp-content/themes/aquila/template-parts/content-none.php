<?php 
/**
 * Template for no content
 *
 * @package aquila
 */
?>
<section class="no-result not-found">
	<header class="page-header">
		<div class="container">
			<div class="row justify-content-center mt-5 mb-5">
				<h1 class="page-title"><?php esc_html_e('No Post Found','aquila'); ?></h1>
			</div>
		</div>
	</header>
	<div class="page-content">
		<?php
			if (is_home() && current_user_can('publish_posts')) { ?>
			 <p>
			 	<?php 
			 	printf(
			 		wp_kses(
			 			__('Ready to publish your first post ? <a href="%s">Get Started here</a>','aquila'),
			 			[
			 				'a'=>[
			 					'href'=>[]
			 				]

			 			]
			 		),
			 		esc_url(admin_url('post_new.php'))
			 	)
			 	 ?>
			 </p>
			<?php } elseif(is_search()){ ?>
				<p>
					<?php esc_html_e('Sorry but nothing matched with your search item. Please tryagain with different keywords','aquila') ;
					get_search_form();
					?>
				</p>
			<?php }else{ ?>
				<p>
					<?php esc_html_e('It seems that we can not find what you are looking for.','aquila') ;
					get_search_form();
					?>
				</p>
			<?php } 

		 ?>
	</div>
</section>