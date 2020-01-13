<?php 

function rm_theme_styles(){
	wp_enqueue_style('boot-css', get_template_directory_uri() . '/assets/css/boot.css');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css');
	wp_enqueue_style('font-awesome',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

	// SCRIPTS
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);
}