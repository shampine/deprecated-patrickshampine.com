<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="p:domain_verify" content="46378d3c32c3c64b9e51ecf0f9ed9155"/>
  <link href="/wp-content/themes/shampine/css/screen.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="/wp-content/themes/shampine/img/favicon.png" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="/wp-content/themes/shampine/img/patrickshampine-logo-mobile.png" alt="Patrick Shampine"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <?php wp_nav_menu(array('container' => 'false')); ?>
        </ul>
      </div>
    </div>
  </nav>
