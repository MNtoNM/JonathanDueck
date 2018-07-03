<?php

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
