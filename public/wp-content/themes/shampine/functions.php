<?php
// Password Protect
if( WP_PASSWORD_PROTECT == true ) {
  function password_protect() {
    if ( !is_user_logged_in() ) {
      auth_redirect();
    }
  }
  add_action ('template_redirect', 'password_protect');
}

// Google Analytics
function googleAnalytics() {
  global $environment;
  if($environment['name'] === 'production') {
    echo "
    <script type=\"text/javascript\">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32869524-2']);
      _gaq.push(['_setDomainName', 'patrickshampine.com']);
      _gaq.push(['_trackPageview']);

      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    ";
  }
}
add_action('wp_head','googleAnalytics');

// Loads Javascript
function scripts() {
if ( !is_admin() ) {
    wp_register_script('jquery', ('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'), array('jquery'));
    wp_enqueue_script('jquery'); 
    wp_register_script('main', ( get_bloginfo('template_url') . '/js/main.js'), array('jquery')); 
    wp_enqueue_script('main');
  }
}
add_action( 'wp_print_scripts', 'scripts');

function googleMaps() {
  if ( is_page('contact') ) { 
    echo '<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>';
  }
}
add_action('wp_head','googleMaps');

// Removes ul class from wp_nav_menu
function remove_ul ( $menu ){
    return preg_replace(array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu);
}
add_filter('wp_nav_menu', 'remove_ul');

// Adds post thumbnails to theme
add_theme_support('post-thumbnails');      

// Removes manifest from wp_head
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Navigation Menu Array
register_nav_menus(array(
  'main' => 'Main Navigation'
));

add_image_size('homepage', 600, 400, true );
