<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pfit
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--Favicon-->
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css" type="text/css" media="all">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 10]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/blessCSS/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/blessCSS/style-blessed1.css" type="text/css" media="all">
	<style>
		.navbar { z-index:10000; }
        #content { z-index:1; }
	</style>
<![endif]-->
<!--[if lte IE 8]>
	<META http-equiv="refresh" content="1;URL=http://outdatedbrowser.com">
<![endif]-->


<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37487101-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>

	<div class="hidden">
		<?php echo file_get_contents( get_template_directory_uri() . '/includes/svg/sprite.symbol.svg' ); ?>
	</div>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php get_template_part( 'includes/nav' ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
