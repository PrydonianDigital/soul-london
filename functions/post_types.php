<?php

	// Register Custom Post Type
	function project_posts() {

		$labels = array(
			'name'                  => _x( 'Projects', 'Post Type General Name', 'soul' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'soul' ),
			'menu_name'             => __( 'Projects', 'soul' ),
			'name_admin_bar'        => __( 'Projects', 'soul' ),
			'archives'              => __( 'Project Archives', 'soul' ),
			'attributes'            => __( 'Project Attributes', 'soul' ),
			'parent_item_colon'     => __( 'Parent Project:', 'soul' ),
			'all_items'             => __( 'All Projects', 'soul' ),
			'add_new_item'          => __( 'Add New Project', 'soul' ),
			'add_new'               => __( 'Add New Project', 'soul' ),
			'new_item'              => __( 'New Project', 'soul' ),
			'edit_item'             => __( 'Edit Project', 'soul' ),
			'update_item'           => __( 'Update Project', 'soul' ),
			'view_item'             => __( 'View Project', 'soul' ),
			'view_items'            => __( 'View Projects', 'soul' ),
			'search_items'          => __( 'Search Project', 'soul' ),
			'not_found'             => __( 'Not found', 'soul' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'soul' ),
			'featured_image'        => __( 'Featured Image', 'soul' ),
			'set_featured_image'    => __( 'Set featured image', 'soul' ),
			'remove_featured_image' => __( 'Remove featured image', 'soul' ),
			'use_featured_image'    => __( 'Use as featured image', 'soul' ),
			'insert_into_item'      => __( 'Insert into item', 'soul' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'soul' ),
			'items_list'            => __( 'Items list', 'soul' ),
			'items_list_navigation' => __( 'Items list navigation', 'soul' ),
			'filter_items_list'     => __( 'Filter items list', 'soul' ),
		);
		$args = array(
			'label'                 => __( 'Project', 'soul' ),
			'description'           => __( 'Projects', 'soul' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
			'menu_icon'				=> 'dashicons-portfolio',
		);
		register_post_type( 'project', $args );

	}
	add_action( 'init', 'project_posts', 0 );

	function client_posts() {

		$labels = array(
			'name'                  => _x( 'Clients', 'Post Type General Name', 'soul' ),
			'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'soul' ),
			'menu_name'             => __( 'Clients', 'soul' ),
			'name_admin_bar'        => __( 'Clients', 'soul' ),
			'archives'              => __( 'Client Archives', 'soul' ),
			'attributes'            => __( 'Client Attributes', 'soul' ),
			'parent_item_colon'     => __( 'Parent Client:', 'soul' ),
			'all_items'             => __( 'All Clients', 'soul' ),
			'add_new_item'          => __( 'Add New Client', 'soul' ),
			'add_new'               => __( 'Add New Client', 'soul' ),
			'new_item'              => __( 'New Client', 'soul' ),
			'edit_item'             => __( 'Edit Client', 'soul' ),
			'update_item'           => __( 'Update Client', 'soul' ),
			'view_item'             => __( 'View Client', 'soul' ),
			'view_items'            => __( 'View Clients', 'soul' ),
			'search_items'          => __( 'Search Client', 'soul' ),
			'not_found'             => __( 'Not found', 'soul' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'soul' ),
			'featured_image'        => __( 'Featured Image', 'soul' ),
			'set_featured_image'    => __( 'Set featured image', 'soul' ),
			'remove_featured_image' => __( 'Remove featured image', 'soul' ),
			'use_featured_image'    => __( 'Use as featured image', 'soul' ),
			'insert_into_item'      => __( 'Insert into item', 'soul' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'soul' ),
			'items_list'            => __( 'Items list', 'soul' ),
			'items_list_navigation' => __( 'Items list navigation', 'soul' ),
			'filter_items_list'     => __( 'Filter items list', 'soul' ),
		);
		$args = array(
			'label'                 => __( 'Client', 'soul' ),
			'description'           => __( 'Clients', 'soul' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
			'menu_icon'				=> 'dashicons-universal-access-alt',
		);
		register_post_type( 'client', $args );

	}
	add_action( 'init', 'client_posts', 0 );