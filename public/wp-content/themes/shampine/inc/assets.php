<?php

function enqueue_scripts() {

  // Libraries
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, true);
  wp_enqueue_script('main', get_bloginfo('template_directory') . '/js/main.js', array('jquery'), null, false);

  if (is_page('contact')) { 
    echo wp_enqueue_script('gmaps', 'https://maps.google.com/maps/api/js?sensor=false', null, true);
  }

}
add_action('get_header', 'enqueue_scripts');