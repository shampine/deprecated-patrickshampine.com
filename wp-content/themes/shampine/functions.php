<?php 

// Loads Javascripts
function scripts() {
if ( !is_admin() ) { // keeps scripts from loading to admin panel
	// Custom Scripts
		wp_register_script('jqueryui', ( get_bloginfo('template_url') . '/js/jquery-ui-1.9.2.custom.min.js'), array('jquery'));
		wp_enqueue_script('jqueryui'); 
		wp_register_script('navigation', ( get_bloginfo('template_url') . '/js/navigation.js'), array('jquery')); 
		wp_enqueue_script('navigation');
		wp_register_script('youtube-resize', ( get_bloginfo('template_url') . '/js/youtube.resize.js'), array('jquery')); 
		wp_enqueue_script('youtube-resize');
		wp_register_script('bootstrap', ( get_bloginfo('template_url') . '/js/bootstrap.js'), array('jquery')); 
		wp_enqueue_script('bootstrap'); 
        wp_register_script('bootstrap-scrollspy', ( get_bloginfo('template_url') . '/js/bootstrap-scrollspy.js'), array('jquery')); 
		wp_enqueue_script('bootstrap-scrollspy');
		// wp_register_script('bootstrap-modal', ( get_bloginfo('template_url') . '/js/bootstrap-modal.js'), array('jquery')); 
		// wp_enqueue_script('bootstrap-modal');
		if ( is_page('contact') ) { // keeps script(s) to load only on specific page
		wp_register_script('jquery-gmap', ( get_bloginfo('template_url') . '/js/jquery.gmap.js'), array('jquery')); 
		wp_enqueue_script('jquery-gmap'); 
		}
		if ( is_page('contact') ) { // keeps script(s) to load only on specific page
		wp_register_script('gmap', ( get_bloginfo('template_url') . '/js/gmap.js'), array('jquery')); 
		wp_enqueue_script('gmap'); 
		}
	}
}
add_action( 'wp_print_scripts', 'scripts'); // now just run the function

// Loads Sidebar

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

// Removes ul class from wp_nav_menu
function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

// Adds post thumbnails to theme
add_theme_support( 'post-thumbnails' );      

// Removes manifest from wp_head
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// Removes shortlink from header
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

?>