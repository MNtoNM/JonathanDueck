<?php

function technologies_taxonomy() {
  $labels = array(
    'name'              => _x( 'Technology', 'taxonomy general name' ),
    'singular_name'     => _x( 'Technology', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Technologies' ),
    'all_items'         => __( 'All Technologies' ),
    'parent_item'       => __( 'Parent Technology' ),
    'parent_item_colon' => __( 'Parent Technology:' ),
    'edit_item'         => __( 'Edit Technology' ),
    'update_item'       => __( 'Update Technology' ),
    'add_new_item'      => __( 'Add Technology' ),
    'new_item_name'     => __( 'New Technology' ),
    'menu_name'         => __( 'Technology' ),
  );

  $args = array(
    'hierarchical'  => false, //like categories or tags
    'labels'        => $labels,
    // 'has_archive'   => false,
    'show_ui'       => true, //add the default UI to this taxonomy
    'show_admin_column' => true, //add the taxonomies to the wordpress admin
    'query_var'         => true,
    'rewrite'       => array('slug' =>'technology'),
  );

  register_taxonomy( 'technologies', 'projects', $args );
}

add_action('init', 'technologies_taxonomy');
