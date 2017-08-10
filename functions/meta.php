<?php

	add_action( 'cmb2_init', 'home_page' );
	function home_page() {
		$prefix = '_home_';
		$cmb_home = new_cmb2_box( array(
			'id'				=> 'home',
			'title'				=> __( 'Page Sections', 'soul' ),
			'object_types' 		=> array( 'page' ),
			'show_on'			=> array(
				'key' => 'page-template',
				'value' => 'page-home.php'
			),
			'show_in_rest'		=> true
		) );
		$home_group = $cmb_home->add_field( array(
			'id'				=> $prefix . 'home',
			'type'				=> 'group',
			'options'			=> array(
				'group_title'	=> __( 'Section {#}', 'soul' ),
				'add_button'	=> __( 'Add New Section', 'soul' ),
				'remove_button'	=> __( 'Remove Section', 'soul' ),
				'sortable'		=> true,
			),
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Text Section', 'soul' ),
			'id'				=> '_main',
			'type'				=> 'wysiwyg',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Background', 'soul' ),
			'id'				=> '_bg',
			'type'				=> 'select',
			'options'			=> array(
				'white'			=> __( 'White', 'soul' ),
				'pink'			=> __( 'Pink', 'soul' ),
				'paleblue'		=> __( 'Blue', 'soul' ),
				'yellow'		=> __( 'Yellow', 'soul' ),
				'black'			=> __( 'Black', 'soul' ),
			)
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Background Image', 'soul' ),
			'id'				=> '_img',
			'type'				=> 'file',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Show Projects?', 'soul' ),
			'id'				=> '_projects',
			'type'				=> 'checkbox',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Show Clients?', 'soul' ),
			'id'				=> '_clients',
			'type'				=> 'checkbox',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Show Blog?', 'soul' ),
			'id'				=> '_blog',
			'type'				=> 'checkbox',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Show Tweets?', 'soul' ),
			'id'				=> '_tweet',
			'type'				=> 'checkbox',
		) );
		$cmb_home->add_group_field( $home_group, array(
			'name'				=> __( 'Show Testimonials?', 'soul' ),
			'id'				=> '_testimonials',
			'type'				=> 'checkbox',
		) );
	}