<?php
/*
Template Name: Landing Page Template
*/

get_header('landing'); ?>
	
	<div class="main landing-page">
		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'partials/content', 'page' ); ?>
            <?php comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>
	</div>
	<div class="sidebar landing-page">
		<div class="widget widget_contact">
			<h5>
				Need an Attorney?<br />
				<span class="text-primary">Contact McMullen Law</span>
			</h5>
			<form class="contact-form" method="post">
				<label for="name">Name:</label>
				<input type="text" name="name" placeholder="Full Name" />
				<label for="email">Email:</label>
				<input type="text" name="email" type="email" placeholder="you@email.com" />
				<label for="phone">Phone:</label>
				<input type="text" name="phone" type="tel" placeholder="(555) 555-5555" />
				<label for="services">Requested Service(s):</label>
				<textarea type="text" name="services" placeholder="Requested Service(s)"></textarea>
				<input type="submit" class="button" value="Get your Free Consultation" />
			</form>
			<p class="disclaimer">Do not include any confidential information. Use of this form does not create an attorney-client relationship.</p>
		</div>
	</div>
<?php get_footer(); ?>