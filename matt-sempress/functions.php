<?php


add_action( 'wp_enqueue_scripts', 'matt_sempress_enqueue_styles' );

function matt_sempress_enqueue_styles() {
	wp_enqueue_style( 
		'matt-sempress-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
	
	#wp_enqueue_style( 
#		'matt-sempress-style', 
#		get_stylesheet_uri()
	#);
}

