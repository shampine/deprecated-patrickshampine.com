<?php

include('inc/assets.php');

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
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-32869524-2', 'patrickshampine.com');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>
    ";
  }
}
add_action('wp_head','googleAnalytics');

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
remove_action('wp_head', 'wp_generator');

// Navigation Menu Array
register_nav_menus(array(
  'main' => 'Main Navigation'
));

add_image_size('homepage', 600, 400, true );
