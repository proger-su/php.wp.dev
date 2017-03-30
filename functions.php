<?php
require_once 'inc/bs-nav-menu-walker.php';

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
	global $post;
	return '<a class="read-more" href="' . get_permalink($post->ID) . '">Читать...</a>';
});
