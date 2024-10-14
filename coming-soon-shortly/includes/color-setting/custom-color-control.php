<?php

  $coming_soon_shortly_theme_custom_setting_css = '';

	// Global Color
	$coming_soon_shortly_theme_color = get_theme_mod('coming_soon_shortly_theme_color', '#707274');

	$coming_soon_shortly_theme_custom_setting_css .=':root {';
		$coming_soon_shortly_theme_custom_setting_css .='--primary-color: '.esc_attr($coming_soon_shortly_theme_color ).'!important;';
	$coming_soon_shortly_theme_custom_setting_css .='}';