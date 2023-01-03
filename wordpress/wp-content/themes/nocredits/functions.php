<?php

add_action('after_setup_theme', 'nocredits_setup');
add_action('wp_enqueue_scripts', 'nocredits_scripts');

function nocredits_setup() {
	add_theme_support('title_tag');
}

function nocredits_scripts() {
	wp_enqueue_style( 'nocredits-style',
		(get_template_directory_uri() . '/assets/src/scss/styles.css'),
		[], '1.0.0', 'all' );
}