<?php

require get_theme_file_path('/inc/enqueue.php');
require get_theme_file_path('/inc/register-rest-field.php');
require get_theme_file_path('/inc/project-cpt.php');
require get_theme_file_path('/inc/technologies-taxonomy.php');

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
