<?php
require_once 'inc/bs-nav-menu-walker.php';
require_once 'inc/bs-breadcrumbs.php';

//Добавляем поддержку меню
add_theme_support('menus');

//Добавляем поддержку миниатюр
add_theme_support('post-thumbnails');

//Подключаем стили и скрипты к сайту
add_action('wp_enqueue_scripts', function () {
	$current_theme = wp_get_theme();

	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css', array(), $current_theme->get('Version'));
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/style.css', array('bootstrap'), $current_theme->get('Version'));

	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js', array('jquery'), $current_theme->get('Version'), true);
});

add_filter('excerpt_more', function() {
	return '';
});


// Widgets
add_action('widgets_init', function() {
	register_sidebar(array(
		'id' => 'home-widgets',
		'name' => __('Home Widgets'),
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'before_widget' => '',
		'after_widget' => '',
	));
	register_sidebar(array(
		'id' => 'inner-widgets',
		'name' => __('Inner Widgets'),
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'before_widget' => '',
		'after_widget' => '',
	));
});

// Search highliting
add_filter('the_content', 'kama_search_backlight');
add_filter('the_excerpt', 'kama_search_backlight');
add_filter('the_title', 'kama_search_backlight');
function kama_search_backlight( $text ){
	// ------------ Настройки -----------
	$st1 = 'color: #000; background: #99ff66;';
	$st2 = 'color: #000; background: #ffcc66;';
	$st3 = 'color: #000; background: #99ccff;';
	$st4 = 'color: #000; background: #ff9999;';
	$st5 = 'color: #000; background: #FF7EFF;';

	// только для страниц поиска...
	if ( ! is_search() ) return $text;

	
	$s = filter_input(INPUT_GET, 's');
	$query_terms = get_query_var('search_terms');
	if( empty($query_terms) ) $query_terms = array(get_query_var('s'));
	if( empty($query_terms) || !$s ) return $text;

	$n = 0;
	foreach( $query_terms as $term ){
		$n++;
		if ($n==1)    $style = $st1;
		elseif($n==2) $style = $st2;
		elseif($n==3) $style = $st3;
		elseif($n==4) $style = $st4;
		elseif($n==5) $style = $st5;

		$term = preg_quote( $term, '/' );
		
		$text = preg_replace("@(?<!<|</)($term)@iu","<span style='{$style}'>$1</span>",$text);
	}

	return $text;
}