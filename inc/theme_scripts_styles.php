<?php
	
	function mloStyles(){
		wp_enqueue_style('style', get_stylesheet_uri(), '', '1.0', 'all');
		wp_enqueue_style('fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style','4.4.0', 'all');
		
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/scripts/modernizr.min.js', array(), '2.8.3', false);
		if( !is_admin()){
			wp_deregister_script('jquery');
			wp_register_script('jquery', get_template_directory_uri() . '/scripts/jquery.min.js', array(), '2.1.4', true);
			wp_enqueue_script('jquery');
		}
		wp_enqueue_script('owl', get_template_directory_uri() . '/scripts/owl.carousel.min.js', array('jquery'), '2.0.0-beta', true);
		wp_enqueue_script('main', get_template_directory_uri() . '/scripts/main.js', array('jquery', 'owl'), '2.0', true);
		
	}
	
	add_action('wp_enqueue_scripts', 'mloStyles');