<?php

	// Add extras to Dashboard
	add_action( 'dashboard_glance_items', 'my_add_cpt_to_dashboard' );
	function my_add_cpt_to_dashboard() {
		$showTaxonomies = 1;
		if ($showTaxonomies) {
			$taxonomies = get_taxonomies( array( '_builtin' => false ), 'objects' );
			foreach ( $taxonomies as $taxonomy ) {
				$num_terms	= wp_count_terms( $taxonomy->name );
				$num = number_format_i18n( $num_terms );
				$text = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name, $num_terms );
				$associated_post_type = $taxonomy->object_type;
				if ( current_user_can( 'manage_categories' ) ) {
					$output = '<a href="edit-tags.php?taxonomy=' . $taxonomy->name . '&post_type=' . $associated_post_type[0] . '">' . $num . ' ' . $text .'</a>';
				}
				echo '<li class="taxonomy-count">' . $output . ' </li>';
			}
		}
		// Custom post types counts
		$post_types = get_post_types( array( '_builtin' => false ), 'objects' );
		foreach ( $post_types as $post_type ) {
			if($post_type->show_in_menu==false) {
				continue;
			}
			$num_posts = wp_count_posts( $post_type->name );
			$num = number_format_i18n( $num_posts->publish );
			$text = _n( $post_type->labels->singular_name, $post_type->labels->name, $num_posts->publish );
			if ( current_user_can( 'edit_posts' ) ) {
				$output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a>';
			}
			echo '<li class="page-count ' . $post_type->name . '-count">' . $output . '</td>';
		}
	}
	function add_menu_icons_styles(){
		echo '<style>
		#adminmenu #menu-posts-project div.wp-menu-image:before, #dashboard_right_now .project-count a:before {
			content: "\f322";
		}
		#adminmenu #menu-posts-team div.wp-menu-image:before, #dashboard_right_now .team-count a:before {
			content: "\f307";
		}
		#adminmenu #menu-posts-testimonial div.wp-menu-image:before, #dashboard_right_now .testimonial-count a:before {
			content: "\f488";
		}
		#adminmenu #menu-posts-team div.wp-menu-image img, #adminmenu #menu-posts-testimonial div.wp-menu-image img, #adminmenu #menu-posts-project div.wp-menu-image img {
			display: none;
		</style>';
	}
	add_action( 'admin_head', 'add_menu_icons_styles' );