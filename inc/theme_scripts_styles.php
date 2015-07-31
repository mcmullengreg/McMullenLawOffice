<?php
	
	function mloStyles(){
		wp_enqueue_style('style', get_stylesheet_uri(), '', '1.0', 'all');
		wp_enqueue_style('fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style','4.4.0', 'all');
	}
	
	add_action('wp_enqueue_scripts', 'mloStyles');