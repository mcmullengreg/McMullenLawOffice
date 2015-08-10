<?php
	// Force search of pages too
	function search_filter( $query ){
		if ( $query->is_search ) {
			$query->set( 
				'post_type'	, array('post', 'page')
			);
		}
		return query;
	}
	add_filter('pre_get_posts', 'search_filter');	