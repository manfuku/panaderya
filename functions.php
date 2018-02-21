<?php

show_admin_bar(false);

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function add_theme_assets() {
	
	//STYLES
	wp_enqueue_style( 'bootstrap', 		'//cdn.jsdelivr.net/npm/bootstrap@4.0.0-beta.2/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'google-fonts', 	'//fonts.googleapis.com/css?family=Spectral:300,400,700|Material+Icons' );
	
	//SCRIPTS
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js', array(), null, true);
	
	//SCSS
	//wp_enqueue_style( 'child', get_stylesheet_directory_uri() . '/style.css' ); 
	//wp_enqueue_style( 'scssphp', 'http://127.0.0.1/opfw/inc.scss.php/1708.scss' ); 
	wp_enqueue_style( 'scssphp-0.6.7', get_stylesheet_directory_uri() . '/scssphp/inc.scss.php/style.scss', 'bootstrap', uniqid() );

	
}
add_action('wp_enqueue_scripts', 'add_theme_assets'); 

?>