<?php  

	get_header();

	if (have_posts()) :

?>

	<h2>
		
		<?php

			if (is_category()) {

				single_cat_title();

			} elseif (is_tag()) {

				single_tag_title();

			} elseif (is_author()) {

				the_post();
				echo 'Author Archives: ' . get_the_author();
				rewind_posts();

			} elseif (is_day()) {

				echo "Daily Archives: " . get_the_date();

			} elseif (is_month()) {

				echo "Monthly Archives: " . get_the_date('F Y');

			} elseif (is_year()) {

				echo "Yearly Archives: " . get_the_date('Y');

			} else {

				echo "Archives";

			}

		?>

	</h2>

<?php
		
	while (have_posts()) : the_post(); 

?>

	<article class="post">
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
		<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in: 
		<!-- just google the_time function to customise this -->

			<!-- making the category part -->
			<?php  

				$categories = get_the_category(); // make an array of all the categories a post is in
				$separator = ", ";
				$output = '';

				if ($categories) {

					foreach ($categories as $category) { // go through array and make individual items

						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator; // output = cat_name, cat_name, etc...
						// links have to be changed to permalinks for this to work

					}

					echo trim($output, $separator); // trims from beginning and end, what is in $separator, ie the comma

				 } 

			?>

		</p>

		<?php the_excerpt()(); ?>
		<!-- changed the_content to the_excerpt. just shows a preview of the post, rather than the whole thing. -->

	</article>
		


<?php endwhile;

	else :

		echo "<p>No content found</p>";

	endif;

	get_footer();
	
?>