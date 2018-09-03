<?php
add_action( 'init', 'jd_project_post_type', 0 );

function jd_project_post_type() {

    // Labels for the Post Type
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'jd-project' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'jd-project' ),
		'menu_name'           => __( 'Projects', 'jd-project' ),
		'parent_item_colon'   => __( 'Parent Project', 'jd-project' ),
		'all_items'           => __( 'All Projects', 'jd-project' ),
		'view_item'           => __( 'View Project', 'jd-project' ),
		'add_new_item'        => __( 'Add New Project', 'jd-project' ),
		'add_new'             => __( 'Add New Project', 'jd-project' ),
		'edit_item'           => __( 'Edit Project', 'jd-project' ),
		'update_item'         => __( 'Update Project', 'jd-project' ),
		'search_items'        => __( 'Search Project', 'jd-project' ),
		'not_found'           => __( 'Not Found', 'jd-project' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'jd-project' ),
	);

    // Another Customizations
	$args = array(
			'label'               => __( 'Projects', 'jd-project' ),
			'description'         => __( 'Projects for Jonathan Dueck\'s Portfolio' , 'jd-project' ),
			'rewrite'     			  => array('slug' =>'project'),

			'labels'              => $labels,
			// Adding Support for the Post type
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'page-attributes', 'revisions', 'custom-fields'),
			/*
			* Hierarchical: Like Pages, can have parents or children.
			* Non Hierachical: Like Posts, can't have parents or childs.
			*/
			'hierarchical'        => false,
			'public'              => true, //how the type is visible to authors
			'show_ui'             => true, //Generate a default UI in the admin
			'show_in_menu'        => true, //Show or not in the admin menu
			'show_in_nav_menus'   => true, //Is available to select on Nav Menus
			'show_in_admin_bar'   => true, // show or not in the admin bar
			'menu_position'       => 5, // The position order of the post type in the admin menu
			'menu_icon'           => 'dashicons-admin-page', // the icon for the admin menu
			'can_export'          => true, // can this post type be exported
			'has_archive'         => false, //enables archives to this post type
			'exclude_from_search' => false, // exclude from search results
			'capability_type'     => 'page', // the name of the capability that will be generated or used
	);

	// register the new post type
	register_post_type( 'projects', $args );
  add_theme_support( 'post-thumbnails' );

}
