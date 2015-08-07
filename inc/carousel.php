<?php
function sandbox_create_menu_page() {
 
    add_menu_page(
        'Sandbox Options',          // The title to be displayed on this menu's corresponding page
        'Sandbox',                  // The text to be displayed for this actual menu item
        'administrator',            // Which type of users can see this menu
        'sandbox',                  // The unique ID - that is, the slug - for this menu item
        'sandbox_menu_page_display',// The name of the function to call when rendering this menu's page
        ''
    );
     
    add_submenu_page(
        'sandbox',                  // Register this submenu with the menu defined above
        'Sandbox Options',          // The text to the display in the browser when this menu item is active
        'Options',                  // The text for this menu item
        'administrator',            // Which type of users can see this menu
        'sandbox_options',          // The unique ID - the slug - for this menu item
        'sandbox_options_display'   // The function used to render this menu's page to the screen
    );
 
} // end sandbox_create_menu_page
add_action('admin_menu', 'sandbox_create_menu_page');
 
function sandbox_menu_page_display() {
?>  
	<!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">
     
        <div id="icon-themes" class="icon32"></div>
        <h2>Sandbox Theme Options</h2>
        <?php settings_errors(); ?>
         
        <?php
            if( isset( $_GET[ 'tab' ] ) ) {
                $active_tab = $_GET[ 'tab' ];
            } // end if
        ?>
         
        <h2 class="nav-tab-wrapper">
            <a href="?page=sandbox_theme_options&tab=display_options" class="nav-tab <?php echo $active_tab == 'display_options' ? 'nav-tab-active' : ''; ?>">Display Options</a>
            <a href="?page=sandbox_theme_options&tab=social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active' : ''; ?>">Social Options</a>
        </h2>
         
        <form method="post" action="options.php">
	    <?php
	         
	        if( $active_tab == 'display_options' ) {
	            settings_fields( 'sandbox_theme_display_options' );
	            do_settings_sections( 'sandbox_theme_display_options' );
	        } else {
	            settings_fields( 'sandbox_theme_social_options' );
	            do_settings_sections( 'sandbox_theme_social_options' );
	        } // end if/else
	         
	        submit_button();
	         
	    ?>
	</form>
         
    </div><!-- /.wrap -->
<?php
} // end sandbox_menu_page_display
 
function sandbox_options_display() {
 
    // Create a header in the default WordPress 'wrap' container
    $html = '<div class="wrap">';
        $html .= '<h2>Sandbox Options</h2>';
    $html .= '</div>';
     
    // Send the markup to the browser
    echo $html;
     
} // end sandbox_options_display

/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */
  
function sandbox_initialize_theme_options() {
 
    // First, we register a section. This is necessary since all future options must belong to a 
    add_settings_section(
        'general_settings_section',         // ID used to identify this section and with which to register options
        'Sandbox Options',                  // Title to be displayed on the administration page
        'sandbox_general_options_callback', // Callback used to render the description of the section
        'general'                           // Page on which to add this section of options
    );
     
    // Next, we'll introduce the fields for toggling the visibility of content elements.
    add_settings_field( 
        'show_header',                      // ID used to identify the field throughout the theme
        'Header',                           // The label to the left of the option interface element
        'sandbox_toggle_header_callback',   // The name of the function responsible for rendering the option interface
        'general',                          // The page on which this option will be displayed
        'general_settings_section',         // The name of the section to which this field belongs
        array(                              // The array of arguments to pass to the callback. In this case, just a description.
            'Activate this setting to display the header.'
        )
    );
     
    add_settings_field( 
        'show_content',                     
        'Content',              
        'sandbox_toggle_content_callback',  
        'general',                          
        'general_settings_section',         
        array(                              
            'Activate this setting to display the content.'
        )
    );
     
    add_settings_field( 
        'show_footer',                      
        'Footer',               
        'sandbox_toggle_footer_callback',   
        'general',                          
        'general_settings_section',         
        array(                              
            'Activate this setting to display the footer.'
        )
    );
     
    // Finally, we register the fields with WordPress
     
    register_setting(
        'general',
        'show_header'
    );
     
    register_setting(
        'general',
        'show_content'
    );
     
    register_setting(
        'general',
        'show_footer'
    );
     
} // end sandbox_initialize_theme_options
add_action('admin_init', 'sandbox_initialize_theme_options');
 
/* ------------------------------------------------------------------------ *
 * Section Callbacks
 * ------------------------------------------------------------------------ */
 
function sandbox_general_options_callback() {
    echo '<p>Select which areas of content you wish to display.</p>';
} // end sandbox_general_options_callback
 
/* ------------------------------------------------------------------------ *
 * Field Callbacks
 * ------------------------------------------------------------------------ */
 
function sandbox_toggle_header_callback($args) {
     
    // Note the ID and the name attribute of the element match that of the ID in the call to add_settings_field
    $html = '<input type="checkbox" id="show_header" name="show_header" value="1" ' . checked(1, get_option('show_header'), false) . '/>'; 
     
    // Here, we'll take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="show_header"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_header_callback
 
function sandbox_toggle_content_callback($args) {
 
    $html = '<input type="checkbox" id="show_content" name="show_content" value="1" ' . checked(1, get_option('show_content'), false) . '/>'; 
    $html .= '<label for="show_content"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_content_callback
 
function sandbox_toggle_footer_callback($args) {
     
    $html = '<input type="checkbox" id="show_footer" name="show_footer" value="1" ' . checked(1, get_option('show_footer'), false) . '/>'; 
    $html .= '<label for="show_footer"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_footer_callback

?>