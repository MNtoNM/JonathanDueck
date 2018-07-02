<?php

// require get_theme_file_path('/inc/functions-file-to-include.php');

function jd_portfolio_files() {
  // wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.js'), array(), '3.3.1', true);
  wp_deregister_script( 'jquery' );
  	wp_register_script( 'jquery' , get_template_directory_uri() . '/js/jquery.js', true, '3.3.1', true );
  	wp_enqueue_script( 'jquery' );

  wp_enqueue_script('icons-js', get_theme_file_uri('/js/icons.js'), array('jquery'), microtime(), true);
  wp_enqueue_style('google-custom-fonts', '//fonts.googleapis.com/css?family=Belgrano');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', null, microtime());
  wp_enqueue_style('firestarter_main_styles', get_stylesheet_uri());
  wp_localize_script('main-firestarter-js', 'firestarterData', array(
    'root_url' => get_site_url(),
  ));
}

add_action('wp_enqueue_scripts', 'jd_portfolio_files');

function firestarter_custom_rest() {
  // Add a custom field 'authorName' to JSON response data:
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() { return get_the_author();}
  )); // 3 args: (1) Post Type (2) field name (3) array K-V pair is assigned value of function returning get_the_author().
}

add_action('rest_api_init', 'firestarter_custom_rest');


// function firestarter_features() {
  // register_nav_menu('headerMenuLocation', 'Header Menu Location'); Add WP Menus
  // register_nav_menu('footerLocationOne', 'Footer Location One');
  // register_nav_menu('footerLocationTwo', 'Footer Location Two');
  // add_theme_support('title-tag'); // Puts the page title in the browser tab
  // add_theme_support('post-thumbnails'); // Enables thumbnails on NON-custom-type posts
  // add_image_size('professorLandscape', 400, 260, true); // height, width, crop?
  // add_image_size('professorPortrait', 480, 650, true);
  // add_image_size('pageBanner', 1500, 350, true);

// }

// add_action('after_setup_theme', 'firestarter_features');

// function firestarter_adjust_queries($query) {
//
//   if(!is_admin() AND is_post_type_archive('campus') AND is_main_query()) {
//     $query->set('posts_per_page', -1);
//   }
//
//   if(!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
//     $query->set('orderby', 'title');
//     $query->set('order', 'ASC');
//     $query->set('posts_per_page', -1);
//   }
//
//   if(!is_admin() AND is_post_type_archive('event') AND is_main_query()) {
//     $today = date('Ymd');
//     $query->set('meta_key', 'event_date');
//     $query->set('orderby', 'meta_value_num');
//     $query->set('order', 'ASC');
//     $query->set('meta_query', array(
//       array(
//         'key' => 'event_date',
//         'compare' => '>=',
//         'value' => $today,  // declared above
//         'type' => 'numeric' // we're comparing numbers
//       ),
//     ));
//   }
//
// }

// add_action('pre_get_posts', 'firestarter_adjust_queries');
