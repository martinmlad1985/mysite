
<?php 

add_action( 'wp_enqueue_scripts', 'mytheme_script_and_style' );

add_action( 'after_setup_theme', 'mytheme_register_nav_menu' );

add_action( 'after_setup_theme', function(){
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'post-formats', array( 'aside', 'gallery'));
});

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'family', [
		'label'  => 'family',
		'labels' => [
			'name'               => 'family', // основное название для типа записи
			'singular_name'      => 'family', // название для одной записи этого типа
			'add_new'            => 'Добавить family', // для добавления новой записи
			'add_new_item'       => 'Добавление ', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование ', // для редактирования типа записи
			'new_item'           => 'Новое', // текст новой записи
			'view_item'          => 'Смотреть', // для просмотра записи этого типа.
			'search_items'       => 'Искать', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Family', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}




function mytheme_register_nav_menu() {
	register_nav_menu( 'main', 'main menu' );
	register_nav_menu( 'site-menu', 'site page menu' );

}


function mytheme_script_and_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/scss/main.min.css');
	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', array(), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
	
}


add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'sidebar',
		'id'            => 'sidebar',
		'description'   => '',
		'class'         => 'sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n"
	) );
}


add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	register_taxonomy( 'stage_of_bilding', [ 'post' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Этап строительства',
			'singular_name'     => 'Этап строительства',
			'search_items'      => 'Search',
			'all_items'         => 'All',
			'view_item '        => 'View',
			'parent_item'       => 'Parent',
			'parent_item_colon' => 'Parent:',
			'edit_item'         => 'Edit',
			'update_item'       => 'Update',
			'add_new_item'      => 'Add New',
			'new_item_name'     => 'New Name',
			'menu_name'         => 'Этап строительства',
			'back_to_items'     => '← Back ',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => true, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}


?>

























