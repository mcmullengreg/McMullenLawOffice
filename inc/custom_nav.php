<?php
	
	// Custom navigation - Register_Menu_Nav for custom WP Menus
	add_action('init', 'mlo_register_nav');
		
	function mlo_register_nav(){
		register_nav_menus( array(
			'main-navigation' =>  __('Main Site Navigation', 'mlo'),
			'social'=> __('Social Icons', 'mlo'),
		));
	}	
?>