<?php
/**
 * greenwich functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greenwich
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'greenwich_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function greenwich_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on greenwich, use a find and replace
		 * to change 'greenwich' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'greenwich', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'Page-menu' => esc_html__( 'Меню страниц', 'greenwich' ),
				'Content-menu' => esc_html__( 'Меню контента', 'greenwich' ),
				'Footer-menu' => esc_html__( 'Меню футер', 'greenwich' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'greenwich_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'greenwich_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greenwich_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greenwich_content_width', 640 );
}
add_action( 'after_setup_theme', 'greenwich_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greenwich_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Языки', 'greenwich' ),
			'id'            => 'language-mob',
			'description'   => esc_html__( 'Добавте переключатель языков', 'greenwich' ),
		)
	);
}
add_action( 'widgets_init', 'greenwich_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greenwich_scripts() {
	wp_enqueue_style( 'greenwich-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
    wp_enqueue_script('busybeeclean-jquery', "https://code.jquery.com/jquery-3.6.0.min.js");
    wp_enqueue_script('greenwichn-script', get_template_directory_uri() . '/dist/js/common.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'greenwich_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Параметры',
        'menu_title'	=> 'Параметры темы',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры Header',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры Footer',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры общие',
        'menu_title'	=> 'Общие',
        'parent_slug'	=> 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры Контакты',
        'menu_title'	=> 'Контакты',
        'parent_slug'	=> 'theme-general-settings',
    ));

}

add_action( 'init', 'register_post_types' );
function register_post_types()
{
    register_post_type('faq', [
        'label' => null,
        'labels' => [
            'name' => 'Вопросы и ответы', // основное название для типа записи
            'singular_name' => 'Вопросы и ответы', // название для одной записи этого типа
            'add_new' => 'Добавить новый', // для добавления новой записи
            'add_new_item' => 'Добавить вопрос', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактировать вопрос', // для редактирования типа записи
            'new_item' => 'Новый вопрос', // текст новой записи
            'view_item' => 'Посмотреть вопрос', // для просмотра записи этого типа.
            'search_items' => 'Искать вопрос', // для поиска по этим типам записи
            'not_found' => 'ничего не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in the basket', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Вопросы и ответы', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title','editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('treners', [
        'label' => null,
        'labels' => [
            'name' => 'Тренеры и массажисты', // основное название для типа записи
            'singular_name' => 'Запись', // название для одной записи этого типа
            'add_new' => 'Добавить нового', // для добавления новой записи
            'add_new_item' => 'Добавление нового', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактировать тренира', // для редактирования типа записи
            'new_item' => 'Новый тренер', // текст новой записи
            'view_item' => 'Посмотреть тренера', // для просмотра записи этого типа.
            'search_items' => 'Искать тренера', // для поиска по этим типам записи
            'not_found' => 'не найлено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in the basket', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Тренеры и массажисты', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title','editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('trenings', [
        'label' => null,
        'labels' => [
            'name' => 'Тренировки', // основное название для типа записи
            'singular_name' => 'Тренировка', // название для одной записи этого типа
            'add_new' => 'Добавить тренировку', // для добавления новой записи
            'add_new_item' => 'Добавление новой', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактировать тренировку', // для редактирования типа записи
            'new_item' => 'Новая тренировка', // текст новой записи
            'view_item' => 'Посмотреть тренировку', // для просмотра записи этого типа.
            'search_items' => 'Искать тренировку', // для поиска по этим типам записи
            'not_found' => 'не найлено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in the basket', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Тренировки', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title','editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

}

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'btn btn-lg btn-primary';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_plugins' );

remove_action('load-update-core.php','wp_update_themes');
add_filter('pre_site_transient_update_themes',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_update_themes');

## заменим слово «записи» на «статьи»
//$labels = apply_filters( "post_type_labels_{$post_type}", $labels );
add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){
    // заменять автоматически не пойдет например заменили: Запись = Статья, а в тесте получится так "Просмотреть статья"

    /* оригинал
        stdClass Object (
            'name'                  => 'Записи',
            'singular_name'         => 'Запись',
            'add_new'               => 'Добавить новую',
            'add_new_item'          => 'Добавить запись',
            'edit_item'             => 'Редактировать запись',
            'new_item'              => 'Новая запись',
            'view_item'             => 'Просмотреть запись',
            'search_items'          => 'Поиск записей',
            'not_found'             => 'Записей не найдено.',
            'not_found_in_trash'    => 'Записей в корзине не найдено.',
            'parent_item_colon'     => '',
            'all_items'             => 'Все записи',
            'archives'              => 'Архивы записей',
            'insert_into_item'      => 'Вставить в запись',
            'uploaded_to_this_item' => 'Загруженные для этой записи',
            'featured_image'        => 'Миниатюра записи',
            'set_featured_image'    => 'Задать миниатюру',
            'remove_featured_image' => 'Удалить миниатюру',
            'use_featured_image'    => 'Использовать как миниатюру',
            'filter_items_list'     => 'Фильтровать список записей',
            'items_list_navigation' => 'Навигация по списку записей',
            'items_list'            => 'Список записей',
            'menu_name'             => 'Записи',
            'name_admin_bar'        => 'Запись',
        )
    */

    $new = array(
        'name'                  => 'Абонементы',
        'singular_name'         => 'Абонементы',
        'add_new'               => 'Добавить абонемент',
        'add_new_item'          => 'Добавить абонемент',
        'edit_item'             => 'Редактировать абонемент',
        'new_item'              => 'Новый абонемент',
        'view_item'             => 'Просмотреть абонемент',
        'search_items'          => 'Поиск абонементов',
        'not_found'             => 'Абонементов не найдено.',
        'not_found_in_trash'    => 'Абонементов в корзине не найдено.',
        'parent_item_colon'     => '',
        'all_items'             => 'Все абонементы',
        'archives'              => 'Архивы абонементов',
        'insert_into_item'      => 'Вставить в статью',
        'uploaded_to_this_item' => 'Загруженные для этой статьи',
        'featured_image'        => 'Миниатюра абонемента',
        'filter_items_list'     => 'Фильтровать список абонементов',
        'items_list_navigation' => 'Навигация по списку абонементов',
        'items_list'            => 'Список абонементов',
        'menu_name'             => 'Абонементы',
        'name_admin_bar'        => 'Абонемент', // пункте "добавить"
    );

    return (object) array_merge( (array) $labels, $new );
}