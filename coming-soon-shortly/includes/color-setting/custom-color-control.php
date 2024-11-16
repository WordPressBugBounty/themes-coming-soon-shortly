<?php

  $coming_soon_shortly_theme_custom_setting_css = '';

	// Global Color
	$coming_soon_shortly_theme_color = get_theme_mod('coming_soon_shortly_theme_color', '#707274');

	$coming_soon_shortly_theme_custom_setting_css .=':root {';
		$coming_soon_shortly_theme_custom_setting_css .='--primary-color: '.esc_attr($coming_soon_shortly_theme_color ).'!important;';
	$coming_soon_shortly_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$coming_soon_shortly_scroll_alignment = get_theme_mod('coming_soon_shortly_scroll_alignment', 'right');

    if($coming_soon_shortly_scroll_alignment == 'right'){
        $coming_soon_shortly_theme_custom_setting_css .='.scroll-up{';
            $coming_soon_shortly_theme_custom_setting_css .='right: 30px;!important;';
			$coming_soon_shortly_theme_custom_setting_css .='left: auto;!important;';
        $coming_soon_shortly_theme_custom_setting_css .='}';
    }else if($coming_soon_shortly_scroll_alignment == 'center'){
        $coming_soon_shortly_theme_custom_setting_css .='.scroll-up{';
            $coming_soon_shortly_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $coming_soon_shortly_theme_custom_setting_css .='}';
    }else if($coming_soon_shortly_scroll_alignment == 'left'){
        $coming_soon_shortly_theme_custom_setting_css .='.scroll-up{';
            $coming_soon_shortly_theme_custom_setting_css .='left: 30px;!important;';
			$coming_soon_shortly_theme_custom_setting_css .='right: auto;!important;';
        $coming_soon_shortly_theme_custom_setting_css .='}';
    }	