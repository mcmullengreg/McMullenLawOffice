<?php
	// Register Sidebars and Widgetize the theme
	function mlo_widgets_init() {
		register_sidebar( array(
			'name'          => __('Blog', 'mlo'),
			'description'	=> __('Widget area for the blog, main feed and single posts.', 'mlo'),
			'id'            => 'blog',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		));
		register_sidebar( array(
			'name'          => __('Footer', 'mlo'),
			'description'	=> __('Widget area for the footer, global', 'mlo'),
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		));
	}
	add_action( 'widgets_init', 'mlo_widgets_init' );