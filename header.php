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
	    <?php if (get_theme_mod(analytics_code) && substr(get_theme_mod(analytics_code), 0, 2) === 'GTM'): ?>
		    <!-- Google Tag Manager -->
			<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TD7WTM"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','<?php echo get_theme_mod(analytics_code); ?>');</script>
		<!-- End Google Tag Manager -->
		<?php endif; ?>
        <!-- Add your site or application content here -->
        <section class="contact">
	        <div class="container">
		        <div class="social">
			        <?php 
				        if ( has_nav_menu( 'social' ) ) {
							// User has assigned menu to this location;
							// output it
							$socialMenu = array(
					        	'theme-location'	=> 'social',
					        	'menu'				=> 'social',
					        	'echo'				=> false,
					        	'fallback_cb'		=> 'false',
					        	'items_wrap'		=> '%3$s',
					        	'link_before'		=> '<span class="sr-only">',
					        	'link_after'		=> '</span>'
							);
							
							echo strip_tags(wp_nav_menu( $socialMenu ), '<a><span>' );
						}
			        ?>
		        </div>
		        <div class="contact-info">
					<!-- Theme Options customizeable -->
					<?php 
						if (get_theme_mod('phone_number')) : ?>
							<?php if (wp_is_mobile() ) : ?>
								<a href="<?php echo "tel:" . get_theme_mod('phone_number'); ?>"><i class="fa fa-phone" aria-label="phone"> </i><?php echo get_theme_mod('phone_number'); ?></a>
							<?php else: ?>
							
								<a href="<?php echo ( get_theme_mod('contact_page' ) ) ? get_permalink(get_theme_mod('contact_page')) : "#" ?>">
									<i class="fa fa-phone" aria-label="phone"> </i><?php echo get_theme_mod('phone_number'); ?>
								</a>
							<?php endif; ?>
					<?php endif;
						if (get_theme_mod('service_location')) : ?>
							<?php echo (get_theme_mod('contact_page') ) ? "<a href='" . get_permalink(get_theme_mod('contact_page')) . "'><i class='fa fa-map-marker' aria-label='location'></i>" . get_theme_mod('service_location') . "</a>" : "<i class='fa fa-map-marker' aria-label='location'></i> "  . get_theme_mod('service_location'); ?>
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
				<?php if (!is_page_template('page-landing.php')) : ?>
					<nav role="navigation">
						<?php 
							wp_nav_menu(array(
								'theme-location'	=> 'main-navigation',
								'container'			=> false,
								'fallback_cb'		=> false,
								'menu_class'		=> 'navigation',
								'menu_id'			=> 'main-navigation',
							));
						?>
					</nav>
				<?php endif; ?>
			</div>
		</header>
		
		<section class="feature-image" style="background-url(<?php header_image(); ?>); height:<?php echo get_custom_header()->height; ?> width:<?php echo get_custom_header()->width; ?>">
		</section>
		<img src="<?php header_image(); ?>" class="feature-image" />
		<section class="main-content">
			<div class="container">