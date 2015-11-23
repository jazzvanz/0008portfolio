<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>

  <link href='https://fonts.googleapis.com/css?family=Montserrat|Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='http://cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
   
   <div class="nav">
     <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>

   </div>
  </div> <!-- /.container -->
</header><!--/.header-->

