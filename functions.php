<?php

add_action( 'wp_enqueue_scripts', 'timber_style' );
add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_style() {

	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	

	
function timber_scripts() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	
	// wp_enqueue_script('script-name', get_template_directory_uri() .'/js/example.js', array(), '1.0', true );
}
}