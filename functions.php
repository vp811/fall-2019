<?php
/*=====================================


  Add stylesheet and javascript files


========================================*/
function custom_theme_scripts(){

  //Bootstrap integration
  wp_enqueue_style('boostrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //Main CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript Files
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js' );
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
}

add_action('wp_enqueue_scripts','custom_theme_scripts');



?>
