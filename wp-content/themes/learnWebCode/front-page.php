<?php

get_header(); ?>

	<!-- site-content -->
	<div class="site-content clearfix">

		<h3>Custom HTML Here!</h3>
		
		<?php  

			if (have_posts()) :
				
				while (have_posts()) : the_post();

				the_content(); 

				endwhile;

				else :

					echo '<p>No content found</p>';

				endif;

		?>

		<!-- home-columns -->
		<div class="home-columns clearfix">
			
			<!-- one-half -->
			<div class="one-half">

			<?php	
				// opinion posts loop begins here

				$dogPosts = new WP_Query('cat=4&posts_per_page=2&orderby=title&order=ASC');

				if ($dogPosts->have_posts()) :
						
						while ($dogPosts->have_posts()) : $dogPosts->the_post(); ?>

							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
							<?php the_excerpt(); ?>

						<?php endwhile;

						else :

							echo '<p>No content found</p>';

						endif;
						wp_reset_postdata(); // prevents our custom data from breaking WP natural loops

			?>
				
			</div>

			<!-- one-half -->
			<div class="one-half last">

			<?php
				// news posts loop begins here

				$newsPosts = new WP_Query('cat=5');

				if ($newsPosts->have_posts()) :
						
						while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

							<h2><?php the_title(); ?></h2>

						<?php endwhile;

						else :

							echo '<p>No content found</p>';

						endif;
						wp_reset_postdata(); // prevents our custom data from breaking WP natural loops
					
			?>
				
			</div>

		</div>

		<h1>BOOOO! ~ghost time!</h1>
		
	</div><!-- /site-content -->

<?php get_footer();

?>