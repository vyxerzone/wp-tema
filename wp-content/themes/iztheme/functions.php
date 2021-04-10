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

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'popper', 
  					get_stylesheet_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js', 
  					array('jquery'), 
  					'2.9.1', 
  					true); 

	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', 
  					array('popper'), 
  					'5.0', 
  					true); 
                      
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');
