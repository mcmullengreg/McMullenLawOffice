<?php 
/**
	* The template for displaying all pages
	*
	* This is the template that displays all pages by default.
	* Please note that this is the WordPress construct of pages
	* and that other 'pages' on your WordPress site will use a
	* different template.
*/

get_header(); ?>
	<main class="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'partials/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>
		
	</main>
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>