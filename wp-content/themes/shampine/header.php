<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="p:domain_verify" content="46378d3c32c3c64b9e51ecf0f9ed9155"/>
    <!-- Stylesheets -->
    <link href="/wp-content/themes/shampine/style.css" rel="stylesheet">
    <!-- Web Fonts -->  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <!-- Icons -->
    <link rel="shortcut icon" href="/wp-content/themes/shampine/img/favicon.png" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php if ( is_page('contact') ) { echo '
    <!-- Google Maps v3 -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    '; } ?>
    <?php wp_head(); ?>
<!-- Google Analytics UA-32869524-2 --> 
<script type="text/javascript">
if(['patrickshampine.com','www.patrickshampine.com']
   .indexOf(window.location.hostname) > -1
   && window.location.search.search('&preview=true') == -1
) { 
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-32869524-2']);
	_gaq.push(['_setDomainName', 'patrickshampine.com']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
}
</script>
</head>
<body id="home" data-spy="scroll" data-target=".navbar">
<!-- Content --> 
<div class="row header">
    <nav class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar m-btn blue" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="brand hidden-phone">
                    <a href="/">
                        <img src="/wp-content/themes/shampine/img/patrickshampine-logo-desktop.png" alt="Patrick Shampine">
                    </a>
                </div>
                <div class="brand visible-phone">
                    <a href="/">
                        <img src="/wp-content/themes/shampine/img/patrickshampine-logo-mobile.png" alt="Patrick Shampine">
                    </a>
                </div>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <form method="get" class="search-form hidden-desktop" action="<?php echo trailingslashit( home_url() ); ?>">
                            <div>
                                <input class="search-text" type="text" name="s" value="<?php if ( is_search() ) echo esc_attr( get_search_query() ); else esc_attr_e( 'Search' ); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
                            </div>
                        </form>
                        <?php wp_nav_menu(array('container' => 'false' )); ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

