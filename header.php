<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>    
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Add your site or application content here -->
        <section class="contact">
	        <div class="container">
		        <div class="social">
			        <a href="#" class="facebook" title="Find <?php bloginfo('sitename');?> on Facebook"><i class="fa fa-facebook"></i></a>
			        <a href="#" class="twitter" title="Find <?php bloginfo('sitename');?> on Twitter"><i class="fa fa-twitter"></i></a>
		        </div>
		        <div class="contact-info">
					<!-- Theme Options customizeable -->
					<?php 
						if (get_theme_mod('phone_number')) : ?>
							<a href="<?php echo "tel:" . get_theme_mod('phone_number'); ?>"><i class="fa fa-phone"> <?php echo get_theme_mod('phone_number'); ?></i></a>
					<?php endif;
						if (get_theme_mod('service_location')) : ?>
							<?php echo (get_theme_mod('contact_page') ? "<a href='" . get_theme_mod('contact_page') . "'><i class='fa fa-map-marker'></i>" . get_theme_mod('service_location') . "</a>" : "<i class='fa fa-map-marker'></i> "  . get_theme_mod('service_location')); ?>
					<?php endif; ?>
				</div>
	        </div>
        </section>
		<header role="banner">
			<div class="container">
				<div class="logo">
					<?php if ( get_theme_mod('site_logo') ) : ?>
						<a href="<?php echo esc_url(home_url()); ?>">
							<img src="<?php echo get_theme_mod('site_logo'); ?>" alt="<?php bloginfo('sitename'); ?>" />
						</a>
					<?php else : ?>
						<h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('sitename');?></a></h1>
					<?php endif; ?>
				</div>
				<div class="tagline">
					<p><?php bloginfo('description'); ?></p>
				</div>
		</header>
		
		<?php if (!is_page_template('page-landing.php')) : ?>
		<nav class="main-navigation">
			<div class="container">
				<?php 
					wp_nav_menu(array(
						'theme-location'	=> 'main-navigation',
						'container'			=> false,
						'fallback_cb'		=> false,
						'menu_class'		=> 'navigation',
						'menu_id'			=> 'main-navigation',
					));
				?>
			</div>
		</nav>
		<?php endif; ?>
		
		<?php if ( is_front_page() ) : ?>
			<section class="feature-content">
				<div class="container">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<p>Alcohol offenses</p>
						</div>
						<div class="item">
							<p>Alcohol offenses</p>
						</div>
						<div class="item">
							<p>Alcohol offenses</p>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
		
		<section class="main-content" role="main">
			<div class="container">