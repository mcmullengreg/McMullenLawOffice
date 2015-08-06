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
					<a href="tel:(937) 985-2564"><i class="fa fa-phone"></i> (937) 985-2564</a>
					<a href="#"><i class="fa fa-map-marker"></i> Beavercreek, OH</a>
				</div>
	        </div>
        </section>
		<header role="banner">
			<div class="container">
				<div class="logo">
					<h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('sitename');?></a></h1>
				</div>
				<div class="tagline">
					<p><?php bloginfo('description'); ?></p>
				</div>
		</header>
		
		<nav>
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
		
		<section class="main-content" role="main">
			<div class="container">