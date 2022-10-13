<?php 

function register_eyep_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
     )
   );
 }
add_action( 'init', 'register_eyep_menu' );


function eyep_load_scripts() {
	wp_enqueue_style( 'bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true );
}
add_action('wp_enqueue_scripts', 'eyep_load_scripts');