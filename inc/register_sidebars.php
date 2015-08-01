<?php
	// Register Sidebars and Widgetize the theme
	function mlo_widgets_init() {
		register_sidebar( array(
			'name'          => __('Global Sidebar', 'mlo'),
			'description'	=> __('Global sidebar for the right hand side.', 'mlo'),
			'id'            => 'global',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		));
	}
	add_action( 'widgets_init', 'mlo_widgets_init' );