<?php
function myrthco_enqueue_styles() {
	// enqueue parent styles
	wp_enqueue_style('twentytten', get_template_directory_uri() .'/style.css');
	
	// enqueue child styles	
	wp_enqueue_style( 'myrthco-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700', false );	
	wp_enqueue_style('myrthco-style', get_stylesheet_uri() );
	
	// Add Scripts	
	//wp_enqueue_script( 'prototype-js', get_template_directory_uri() . '/scripts/prototype.js', array(), '1.4.0' );
	//wp_enqueue_script( 'prototype-js', get_template_directory_uri() . '/scripts/lightbox.js', array(), '1.4.0' );	
	
}
add_action('wp_enqueue_scripts', 'myrthco_enqueue_styles');