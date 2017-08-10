<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div id="mobileMenu">
	<div class="close text-right">
		<a class="button closer">&times</a>
	</div>
	<?php wp_nav_menu(array('theme_location' => 'header', 'menu_class' => 'menu')); ?>
</div>

<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
	<h1><?php the_custom_logo(); ?></h1>
	<nav class="main-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<?php wp_nav_menu(array('theme_location' => 'header', 'menu_class' => 'menu')); ?>
	</nav>
	<nav class="mobile-menu">
		<a><i class="fa fa-bars" aria-hidden="true"></i></a>
	</nav>
</header>
