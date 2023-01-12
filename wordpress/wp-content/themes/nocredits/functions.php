<?php
require_once(__DIR__ . '/widgets/widget-contacts.php');

add_action('after_setup_theme', 'nocredits_setup');
add_action('wp_enqueue_scripts', 'nocredits_scripts');
add_action('widgets_init', 'nocredits_widgets');
add_action( 'init', 'nocredits_register_types' );
add_action('admin_post_nopriv_nocredits_form_handle', 'nocredits_modalform');
add_action('admin_post_nocredits_form_handle', 'nocredits_modalform');
add_action('wp_ajax_nopriv_sendModalForm', 'nocredits_modalform_handler');
add_action('wp_ajax_sendModalForm', 'nocredits_modalform_handler');
add_action('manage_posts_custom_column', 'nocredits_viewscount_column', 5, 2);
add_filter('manage_posts_columns', 'nocredits_add_viewscolumn');
//
function nocredits_register_types() {
	register_post_type( 'cases', [
		'labels' => [
			'name'               => 'Выигранные дела ', // основное название для типа записи
			'singular_name'      => 'Выигранное дело ', // название для одной записи этого типа
			'add_new'            => 'Добавить новое выигранное дело', // для добавления новой записи
			'add_new_item'       => 'Добавить новую выигранное дело', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать выигранное дело', // для редактирования типа записи
			'new_item'           => 'Новое выигранное дело', // текст новой записи
			'view_item'          => 'Смотреть выигранное дело', // для просмотра записи этого типа.
			'search_items'       => 'Искать выигранное дело', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Выигранные дела', // название меню
		],
		'public'              => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'thumbnail'],
		'has_archive' => true
	]);

	register_post_type( 'articles', [
		'labels' => [
			'name'               => 'Cтатьи', // основное название для типа записи
			'singular_name'      => 'Cтатья', // название для одной записи этого типа
			'add_new'            => 'Добавить новую статью', // для добавления новой записи
			'add_new_item'       => 'Добавить новую статью', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать статью', // для редактирования типа записи
			'new_item'           => 'Новая статья', // текст новой записи
			'view_item'          => 'Смотреть статью', // для просмотра записи этого типа.
			'search_items'       => 'Искать статью', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Статьи', // название меню
		],
		'public'              => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-id-alt',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'thumbnail'],
		'has_archive' => true
	]);
	register_post_type( 'questions', [
		'labels' => [
			'name'               => 'Вопросы юристу', // основное название для типа записи
			'singular_name'      => 'Вопрос юристу', // название для одной записи этого типа
			'add_new'            => 'Добавить вопрос', // для добавления новой записи
			'add_new_item'       => 'Добавить вопрос', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать вопрос ', // для редактирования типа записи
			'new_item'           => 'Новый вопрос', // текст новой записи
			'view_item'          => 'Смотреть вопрос', // для просмотра записи этого типа.
			'search_items'       => 'Искать вопрос', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Вопросы юристу', // название меню
		],
		'public'              => true,
		'menu_position'       => 30,
		'menu_icon'           => 'dashicons-megaphone',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'thumbnail'],
		'has_archive' => true
	]);
	register_post_type( 'orders', [
		'labels' => [
			'name'               => 'Заявки на консультацию юристу', // основное название для типа записи
			'singular_name'      => 'Заявки на консультацию юристу', // название для одной записи этого типа
			'add_new'            => 'Добавить заявку на консультацию', // для добавления новой записи
			'add_new_item'       => 'Добавить заявку на консультацию', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать заявку на консультацию ', // для редактирования типа записи
			'new_item'           => 'Новый заявка на консультацию', // текст новой записи
			'view_item'          => 'Смотреть заявку на консультацию', // для просмотра записи этого типа.
			'search_items'       => 'Искать заявку на консультацию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Заявки на консультацию юристу', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 40,
		'menu_icon'           => 'dashicons-format-status',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor'],
		'has_archive' => false
	]);
}

function nocredits_setup() {
	add_theme_support('title_tag');
	add_theme_support('post-thumbnails');
	register_nav_menu('menu_header', 'Меню в шапке');
	register_nav_menu('menu_footer', 'Меню в подвале');
}

function nocredits_scripts() {
	wp_enqueue_style( 'nocredits-style',
		(get_template_directory_uri() . '/assets/src/scss/styles.css'),
		[], '1.0.0', 'all' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/src/js/main.js', array('jquery'), false, true);
}

function nocredits_widgets() {
	register_sidebar([
		'name' => 'Сайдбар в шапке сайта',
		'id' => 'nocredits_header',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Телефон в меню (шапка)',
		'id' => 'nocredits_menu_phone',
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
//обработка без ajax
function nocredits_modalform() {
	var_dump($_POST);
}
//обработка главного модального окна с вопросом
function nocredits_modalform_handler() {
	echo "all oK! ";
	wp_die();
}

function nocredits_viewscount_column($col_name, $id) {
	if($col_name !== 'nocredits_views') return;

	$views = get_post_meta($id, 'nocredits_views', true );
	echo $views ? $views : 0;
}
//добавление столбца в раздел Статьи
function nocredits_add_viewscolumn($defaults) {
	$type = get_current_screen();
	if ($type->post_type === 'articles') {
		$defaults['nocredits_views'] = 'Количество просмотров статьи';
	}
	return $defaults;
}