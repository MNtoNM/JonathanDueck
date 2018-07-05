<?php
function firestarter_custom_rest() {
  // Add a custom field 'authorName' to JSON response data:
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() { return get_the_author();}
  )); // 3 args: (1) Post Type (2) field name (3) array K-V pair is assigned value of function returning get_the_author().
}

add_action('rest_api_init', 'firestarter_custom_rest');
