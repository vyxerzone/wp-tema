<?php

// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
  					array(), 
  					'5.0'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');