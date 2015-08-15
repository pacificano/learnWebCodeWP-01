<?php  

	get_header(); 

?>

	<!-- site-content -->
	<div class="site-content clearfix">
		
		<!-- main-column -->
		<div class="main-column">

			<?php

				if (have_posts()) :
					
				while (have_posts()) : the_post(); 

				// get content.php
				get_template_part('content', get_post_format());

				endwhile;

				else :

					echo "<p>No content found</p>";

				endif;

			?>
			
		</div>

		<?php get_sidebar(); ?>

	</div>	

<?php

	get_footer();
	
?>