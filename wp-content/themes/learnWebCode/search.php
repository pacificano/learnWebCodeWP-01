<?php  

	get_header();

	if (have_posts()) :

?>

	<h2>Search results for: <?php the_search_query(); ?></h2>

<?php  

	while (have_posts()) : the_post(); 

	// get content.php
	get_template_part('content');

	endwhile;

	else :

		echo "<p>No content found</p>";

	endif;

	get_footer();
	
?>