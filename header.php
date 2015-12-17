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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--Favicon-->
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
<?php wp_head(); ?>
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
