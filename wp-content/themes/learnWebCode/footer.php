	<footer class="site-footer">

		<nav class="site-nav">

				<?php  

					$args = array('theme_location' => 'footer');
					
				?>
				
				<?php wp_nav_menu(); ?>
		
		</nav>
		
		<p><?php bloginfo('name') ?> - &copy; <?php echo date('Y'); ?></p>

	</footer>

</div><!-- closing container-->

<?php wp_footer(); ?>
</body>
</html>