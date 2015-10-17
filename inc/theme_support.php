<?php 
// exclude any content from search results that use specific page templates
function exclude_page_templates_from_search($query) {
    global $wp_the_query;
    if ( ($wp_the_query === $query) && (is_search()) && ( ! is_admin()) ) {
        $meta_query = 
            array(
// set OR, default is AND
                'relation' => 'OR',
// remove pages with foo.php template from results
                array(
                    'key' => '_wp_page_template',
                    'value' => 'page-landing.php',
                    'compare' => 'NOT LIKE'
                ),
// show all entries that do not have a key '_wp_page_template'
                array(
                    'key' => '_wp_page_template',
                    'value' => 'page-thanks.php',
                    'compare' => 'NOT EXISTS'
                )
            );
        $query->set('meta_query', $meta_query);
    }
}
add_filter('pre_get_posts','exclude_page_templates_from_search');

$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/default.jpg',
);
add_theme_support( 'custom-header', $args );