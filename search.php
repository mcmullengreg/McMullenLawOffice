<?php get_header(); ?>
	
	<div class="main">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_search() ) :?>
				<header>
					<h1 class="page-title screen-reader-text"><?php _e('Search Results For:', 'mlo'); ?></h1>
				</header>
				<?php get_search_form(); ?>
			<?php endif; ?>

			<?php
			// Start the loop
			while ( have_posts() ) : the_post();

				get_template_part( 'partials/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'mlo' ),
				'next_text'          => __( 'Next page', 'mlo' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'mlo' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'partials/content', 'none' );

		endif;
		?>
	</div>
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>