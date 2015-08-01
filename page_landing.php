<?php
/*
Template Name: Landing Page Template
*/

get_header('landing'); ?>
	
	<div class="main">
		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>