<?php
/*
Plugin Name: WPPS Bootstrap Shortcodes
Plugin URI: http://patrickshampine.com/plugins/bootstrap-shortcodes
Description: The plugin adds a shortcodes for all Bootstrap elements.
Version: 0.1
Author: Patrick Shampine
Author URI: http://patrickshampine.com
*/

// Removes <p> <br> tags from shortcodes
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);

class bsShortcodes {
	function __construct() {
    	add_action( 'init', array( $this, 'add_shortcodes' ) );
	}

	// Adds shortcodes
	function add_shortcodes() {
   		add_shortcode('row', array( $this, 'row' ));
		add_shortcode('span', array( $this, 'span' ));
	}

	// Row Function
	function row( $atts, $content = null ) {
	    return '<div class="row-fluid">' . do_shortcode( $content ) . '</div>';
	}

	// Span function
	function span( $atts, $content = null ) {
    	extract(shortcode_atts(array(
    		"col" => 'col'
    	), $atts));
    	return '<div class="span' . $col . '">' . do_shortcode( $content ) . '</div>';
	}

}

new bsShortcodes()

?>