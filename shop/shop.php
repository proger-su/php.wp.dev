<?php
add_action('init', function() {
	register_post_type('cart', array(
		'labels' => array(
			'name' => 'Orders',
			'singular_name' => 'Order',
		),
		'menu_icon' => 'dashicons-cart',
		'show_in_nav_menus' => false,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => false,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'supports' => array('title', 'editor')
	));
	
	register_post_type('products', array(
		'labels' => array(
			'name' => 'Products',
			'singular_name' => 'Product',
		),
		'menu_icon' => 'dashicons-products',
		'show_in_nav_menus' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
	));
	
	register_taxonomy('prodcats', array('products'), array(
		'labels' => array(
			'name' => 'P. Categories',
			'singular_name' => 'P. Category',
		),
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_in_rest' => true,
		'hierarchical' => true,
		'meta_box_cb' => 'post_categories_meta_box',
	));
});