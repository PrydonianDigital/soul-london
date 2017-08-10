<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="msvalidate.01" content="D9CB6BAE6C271E3E6A5EDFF583815AFB" />
	<meta name="google-site-verification" content="1YEzHrvpaLNwgaUVuoxbdscqK1Q9TYTnVm91A71m0-U" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold" />
	<?php $menu_font = of_get_option('ttrust_menu_font'); ?>
	<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
	<?php $sub_heading_font = of_get_option('ttrust_sub_heading_font'); ?>
	<?php $body_font = of_get_option('ttrust_body_font'); ?>
	<?php $banner_main_font = of_get_option('ttrust_banner_main_font'); ?>
	<?php $banner_secondary_font = of_get_option('ttrust_banner_secondary_font'); ?>
	<?php $home_message_font = of_get_option('ttrust_home_message_font'); ?>

	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta name="description" content="<?php the_excerpt(); ?>" />
	<meta property="og:description" content="<?php the_excerpt(); ?>" />
	<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />

	<?php if ($menu_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($menu_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($sub_heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($sub_heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($body_font != "" && $body_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($banner_main_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($banner_main_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($banner_secondary_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($banner_secondary_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($home_message_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($home_message_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>


	<script src="//use.typekit.net/eua0ryv.js"></script>
	<script>
		try{Typekit.load();}catch(e){}

		window.wpThemeFolder = "<?php echo get_template_directory_uri(); ?>/";

	</script>

	<?php wp_head(); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
       function onSubmit(token) {
         document.getElementById("soul-form").submit();
       }
     </script>
</head>

<?php if(is_page()) { $page_slug = 'page-'.$post->post_name; } ?>
<body <?php body_class($page_slug); ?> >
	<?php //$ttrust_menu_type = of_get_option('ttrust_menu_type'); ?>

<script type="text/javascript" src="http://www.uhygtf1.com/js/95673.js" ></script>
<noscript><img alt="" src="http://www.uhygtf1.com/95673.png" style="display:none;" /></noscript>

<div id="container">

	<div id="header">
		<div class="top">
			<div class="inside clearfix">
				<?php $logoHeadTag = (is_front_page()) ? "h1" : "h3";	?>

				<div id="logo">
					<<?php echo $logoHeadTag; ?>><a href="<?php bloginfo('url'); ?>" class="hide-text"><?php bloginfo('name'); ?></a></<?php echo $logoHeadTag; ?>>
				</div>

				<nav id="mainNav">
					<?php wp_nav_menu( array('menu_class' => '', 'theme_location' => 'main', 'fallback_cb' => 'default_nav_slide' )); ?>
				</nav>

				<a href="#slideNav" class="menuToggle"></a>

			</div>
		</div>
	</div>

