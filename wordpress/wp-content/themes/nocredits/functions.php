<?php
require_once(__DIR__ . '/widgets/widget-contacts.php');

add_action('after_setup_theme', 'nocredits_setup');
add_action('wp_enqueue_scripts', 'nocredits_scripts');
add_action('widgets_init', 'nocredits_widgets');

function nocredits_setup() {
	add_theme_support('title_tag');
	add_theme_support('post-thumbnails');
}

function nocredits_scripts() {
	wp_enqueue_style( 'nocredits-style',
		(get_template_directory_uri() . '/assets/src/scss/styles.css'),
		[], '1.0.0', 'all' );
}

function nocredits_widgets() {
	register_sidebar([
		'name' => 'Сайдбар в шапке сайта',
		'id' => 'nocredits_header',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Контакты - Адресс',
		'id' => 'nocredits_contacts_address',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Контакты - Телефон',
		'id' => 'nocredits_contacts_phone',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Контакты - Реквизиты',
		'id' => 'nocredits_contacts_requisits',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Контакты - значения реквезитов',
		'id' => 'nocredits_contacts_requ-values',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_widget('Nocredits_Widget_Text');
}