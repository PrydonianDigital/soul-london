<?php

	function soul_theme()	{
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 870, 250, array( 'center', 'center') );
		add_image_size( 'top', 1550, 350 );
		add_image_size( 'tiny', 60, 60 );
		add_image_size( 'related', 265, 199, array( 'center', 'center') );
		add_image_size( 'squared', 265, 265, array( 'center', 'center') );
		add_image_size( 'shop', 355, 222 );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'title-tag' );
		show_admin_bar(false);
		load_theme_textdomain( 'soul', get_template_directory() . '/language' );
		add_theme_support( 'custom-logo', array(
			'height'			=> 112,
			'width'			 => 180,
			'flex-width' => true,
		) );
		add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
		add_filter('max_srcset_image_width', create_function('', 'return 1;'));
	}
	add_action( 'after_setup_theme', 'soul_theme' );
	// Register Style
	function soul_css() {
		wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', false, '0.8' );
		wp_register_style( 'fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', false, '4.7.0' );
		wp_register_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,700', false, '1' );
		wp_enqueue_style( 'main' );
		wp_enqueue_style( 'fa' );
		wp_enqueue_style( 'raleway' );
	}
	add_action( 'wp_enqueue_scripts', 'soul_css' );

	function soul_js() {
		wp_enqueue_script( 'soul', get_template_directory_uri() . '/js/main.js', false, '1', true );
		wp_enqueue_script( 'soul' );
	}
	add_action( 'wp_enqueue_scripts', 'soul_js' );


	// Register Navigation Menus
	function soul_menus() {
		$locations = array(
			'header' => __( 'Header Menu', 'soul' ),
			'social' => __( 'Social Media Menu', 'soul' ),
			'footer' => __( 'Footer Menu', 'soul' ),
		);
		register_nav_menus( $locations );
	}
	add_action( 'init', 'soul_menus' );

	function soul_sidebars() {
		$args = array(
			'id'			=> 'tweets',
			'class'		 => 'menu vertical',
			'name'			=> __( 'Tweets Homepage', 'soul' ),
			'before_widget' => '<div class="box full">',
			'after_widget' => '</div>',
			'before_title'  => '<h1 class="text-center"><a target="_blank" href="https://twitter.com/@SoulLondonTweet" title="Latest Soul tweets"><i class="fa fa-twitter"></i></a></h1><h4 class="text-center">',
			'after_title'   => '</h4>',
		);
		register_sidebar( $args );
	}
	add_action( 'widgets_init', 'soul_sidebars' );