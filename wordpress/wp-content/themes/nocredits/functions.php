<?php
require_once(__DIR__ . '/widgets/widget-contacts.php');

add_action('after_setup_theme', 'nocredits_setup');
add_action('wp_enqueue_scripts', 'nocredits_scripts');
add_action('widgets_init', 'nocredits_widgets');
add_action( 'init', 'nocredits_register_types' );
add_action('admin_post_nopriv_nocredits_form_handle', 'nocredits_modalform');
add_action('admin_post_nocredits_form_handle', 'nocredits_modalform');
add_action('wp_ajax_nopriv_sendModalForm', 'nocredits_modalform_handler');
add_action('wp_ajax_sendModalForm', 'nocredits_count_handler');
add_action('wp_ajax_nopriv_setViews', 'nocredits_count_handler');
add_action('wp_ajax_setViews', 'nocredits_count_handler');
add_action('manage_posts_custom_column', 'nocredits_viewscount_column', 5, 2);
add_filter('manage_posts_columns', 'nocredits_add_viewscolumn');
add_action('add_meta_boxes', 'nocredits_meta_boxes');

//регистрация кастомных типов записей
function nocredits_register_types() {
//	register_taxonomy( 'aliments',  ['questions'] , [
//		'labels'                => [
//			'name'              => 'Вопросы про алименты',
//			'singular_name'     => 'Вопросы про алименты',
//			'search_items'      => 'Найти вопросы про алименты',
//			'all_items'         => 'Алименты',
//			'view_item '        => 'Посмотреть все вопросы про алименты',
//			'edit_item'         => 'Редактировать вопросы про алименты',
//			'update_item'       => 'Обновить вопросы про алименты',
//			'add_new_item'      => 'Добавить вопрос про алименты',
//			'new_item_name'     => 'Добавить вопрос про алименты',
//			'menu_name'         => 'Алименты',
//		],
//		'description'           => 'Тема вопроса',
//		'public'                => true,
//		'hierarchical'          => true
//	]);
	register_taxonomy( 'question_theme',  ['questions'] , [
		'labels'                => [
			'name'              => 'Тема вопроса',
			'singular_name'     => 'Вопросы по теме вопроса',
			'search_items'      => 'Найти вопросы по теме',
			'all_items'         => 'Тема вопроса',
			'view_item '        => 'Посмотреть тему вопроса',
			'edit_item'         => 'Редактировать тему вопроса',
			'update_item'       => 'Обновить тему вопроса',
			'add_new_item'      => 'Добавить тему вопроса',
			'new_item_name'     => 'Добавить тему вопроса',
			'menu_name'         => 'Тема вопроса',
		],
		'description'           => 'Тема вопроса',
		'public'                => true,
		'hierarchical'          => true
	]);
//	register_taxonomy( 'articles_popular',  ['articles'] , [
//		'labels'                => [
//			'name'              => 'Популярные статьи',
//			'singular_name'     => 'Популярные статьи ',
//			'search_items'      => 'Найти Популярные статьи',
//			'all_items'         => 'Популярные статьи',
//			'view_item '        => 'Посмотреть популярные статьи',
//			'edit_item'         => 'Редактировать gопулярные статьи',
//			'update_item'       => 'Обновить популярные статьи',
//			'add_new_item'      => 'Добавить статью в популярные статьи',
//			'new_item_name'     => 'Добавить статью в популярные статьи',
//			'menu_name'         => 'Популярные статьи',
//		],
//		'description'           => 'Статьи у которых просмотров больше всех',
//		'public'                => true,
//		'hierarchical'          => false
//	]);
	register_taxonomy( 'articles_example',  ['articles'] , [
		'labels'                => [
			'name'              => 'Рубрика статей',
			'singular_name'     => 'Рубрика статей',
			'search_items'      => 'Найти рубрика статей',
			'all_items'         => 'Рубрика статей',
			'view_item '        => 'Посмотреть рубрику статей',
			'edit_item'         => 'Редактировать статью рубрики статей',
			'update_item'       => 'Обновить рубрику статей',
			'add_new_item'      => 'Добавить статью в рубрика статей',
			'new_item_name'     => 'Добавить статью в рубрика статей',
			'menu_name'         => 'Рубрика статей',
		],
		'description'           => 'Тестовая рубрика для статей',
		'public'                => true,
		'hierarchical'          => false
	]);
//	register_taxonomy( 'articles_example2',  ['articles'] , [
//		'labels'                => [
//			'name'              => 'Банки',
//			'singular_name'     => 'Рубрика банки',
//			'search_items'      => 'Найти рубрику статей банки',
//			'all_items'         => 'Рубрика статей банки',
//			'view_item '        => 'Посмотреть рубрику статей банки',
//			'edit_item'         => 'Редактировать статью рубрики статей банки',
//			'update_item'       => 'Обновить рубрику статей - банки',
//			'add_new_item'      => 'Добавить статью в рубрика статей банки',
//			'new_item_name'     => 'Добавить статью в рубрика статей банки',
//			'menu_name'         => 'Банки',
//		],
//		'description'           => 'Тестовая рубрика для статей',
//		'public'                => true,
//		'hierarchical'          => false
//	]);
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
		'menu_position'       => 11,
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
		'menu_position'       => 12,
		'menu_icon'           => 'dashicons-megaphone',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor'],
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
		'menu_position'       => 13,
		'menu_icon'           => 'dashicons-format-status',
		'hierarchical'        => false,
		'supports'            => ['title', 'editor'],
		'has_archive' => false
	]);

}
//начальные настройки кастомной темы
function nocredits_setup() {
	add_theme_support('title_tag');
	add_theme_support('post-thumbnails');
	register_nav_menu('menu_header', 'Меню в шапке');
	register_nav_menu('menu_footer', 'Меню в подвале');
	add_theme_support( 'title-tag' );
}
//подключение в очередь загрузки файлов стилей и скриптов
function nocredits_scripts() {
	wp_enqueue_style( 'nocredits-style',
		(get_template_directory_uri() . '/assets/src/scss/styles.css'),
		[], '1.0.0', 'all' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/src/js/main.js', array('jquery'), false, true);
}
//регистрация зон вывода, виджетов кастомных
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
function nocredits_count_handler() {
//	echo var_dump($_POST);
	//записываем плюс один к количеству просмотров
	if($_POST['nocredits_views']){
		update_field('nocredits_views', $_POST['nocredits_views'], $_POST['id']);
	}
	wp_die();
}
//добавление кастомного поля для кастомной записи order "заявка"
function nocredits_meta_boxes() {
	add_meta_box('nocredits_order_date','Дата заявка', 'nocredits_order_date_cb', 'orders');
}

//колбек для обработки
function nocredits_order_date_cb($post_obj) {
	$date = get_post_meta($post_obj->ID, 'nocredits_order_date', true);
	$date = $date ? : '';
	echo '<span>'.$date.'</span>';
}
//Добавление столбца Количестов просмотров для записей типа "Статья"
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