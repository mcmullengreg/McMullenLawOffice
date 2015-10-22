<?php
/*
Template Name: Full Width Page with No Sidebar
*/

get_header(); ?>
	
	<div class="main">
		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'partials/content', 'page' ); ?>
            <?php comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>