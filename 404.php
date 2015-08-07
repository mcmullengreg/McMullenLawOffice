<?php 
	$adminemail = get_option('admin_email');
	$website = get_bloginfo('url'); #gets your blog's url from wordpress
	$websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress
	$failuremessage = "<p>A user tried to go to $website".$_SERVER['REQUEST_URI']."and received a 404 (page not found) error.</p>";
	$failuremessage .= "<p>It wasn't their fault, so try fixing it. They came from ". $_SERVER['HTTP_REFERRER']."</p>";
	
	if (get_theme_mod('send_404s')){
		mail($adminemail, "[404 Error] $websitename", $failuremessage, "From: $websitename <noreply@$website> Content-Type: text/html; charset=iso-8859-1;");
	}
	
	get_header(); ?>
	
	<div class="main">
		<section class="error-404-not-found">
			<header class="page-header">
				<h1 class="entry-title">
					<?php _e('Now you did it.'); ?>
				</h1>
			</header>
			<div class="page-content">
				<p>
					<?php _e("It looks like you tried to find a page that doesn't exist, or has moved. Maybe try a search?"); ?>
				</p>
				<?php get_search_form(); ?>
			</div>
		</section>
	</div>
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>