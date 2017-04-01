<?php

add_theme_support('custom-header', array(
	'width' => 870,
	'height' => 150,
));

add_action('customize_register', function ( $wp_customize ) {
	//* Hero
	$wp_customize->add_section('ics_section_hero', array(
		'title' => 'Hero',
		'priority' => 10,
	));

	//Background image
	$wp_customize->add_setting('ics_hero_image', array(
		'type' => 'option', // or 'theme_mod'
		'transport' => 'postMessage', // or 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ics_hero_image', array(
		'label' => 'Hero image',
		'section' => 'ics_section_hero',
		'settings' => 'ics_hero_image',
		'priority' => 10,
	)));

	//Overlay
	$wp_customize->add_setting('ics_hero_overlay', array(
		'type' => 'option', // or 'theme_mod'
		'transport' => 'postMessage', // or 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ics_hero_overlay_color', array(
		'label' => 'Hero background overlay',
		'section' => 'ics_section_hero',
		'settings' => 'ics_hero_overlay',
		'priority' => 10,
	)));

	//Title
	$wp_customize->add_setting('ics_hero_title', array(
		'type' => 'option', // or 'theme_mod'
		'transport' => 'postMessage', // or 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ics_hero_headline1', array(
		'label' => 'Title',
		'section' => 'ics_section_hero',
		'settings' => 'ics_hero_title',
		'priority' => 10,
	)));

	//Description
	$wp_customize->add_setting('ics_hero_subtitle', array(
		'type' => 'option', // or 'theme_mod'
		'transport' => 'postMessage', // or 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ics_hero_headline2', array(
		'label' => 'Subtitle',
		'section' => 'ics_section_hero',
		'settings' => 'ics_hero_subtitle',
		'priority' => 10,
	)));
});

?>