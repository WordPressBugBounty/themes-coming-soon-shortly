<?php

  $coming_soon_shortly_theme_custom_setting_css = '';

	// Global Color
	$coming_soon_shortly_theme_color = get_theme_mod('coming_soon_shortly_theme_color', '#707274');

	$coming_soon_shortly_theme_custom_setting_css .=':root {';
		$coming_soon_shortly_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($coming_soon_shortly_theme_color ).'!important;';
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

	// Related Product

	$coming_soon_shortly_show_related_product = get_theme_mod('coming_soon_shortly_show_related_product', true );

	if($coming_soon_shortly_show_related_product != true){
		$coming_soon_shortly_theme_custom_setting_css .='.related.products{';
			$coming_soon_shortly_theme_custom_setting_css .='display: none;';
		$coming_soon_shortly_theme_custom_setting_css .='}';
	}  
	
	// Featured Image Hover Effect
    $coming_soon_shortly_show_featured = get_theme_mod('coming_soon_shortly_featured_image_hide_show', 1);
    $coming_soon_shortly_hover_effect = get_theme_mod('coming_soon_shortly_single_post_featured_image_hover','none');

    if ( $coming_soon_shortly_show_featured && $coming_soon_shortly_hover_effect !== 'none' ) {

    $coming_soon_shortly_theme_custom_setting_css .= '
    .post-img img{
        transition: all 0.4s ease;
    }';

    if ( $coming_soon_shortly_hover_effect === 'zoom-in' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img:hover img{
            transform: scale(1.2);
        }';
    }

    if ( $coming_soon_shortly_hover_effect === 'zoom-out' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img img{ transform: scale(1.2); }
        .post-img:hover img{ transform: scale(1); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'grayscale' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img img{ filter: grayscale(100%); }
        .post-img:hover img{ filter: grayscale(0); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'sepia' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img:hover img{ filter: sepia(100%); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'blur' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img:hover img{ filter: blur(3px); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'bright' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img:hover img{ filter: brightness(1.3); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'translate' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img:hover img{ transform: translateY(-10px); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'scale' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .post-img:hover img{ transform: scale(1.1); }';
    }
}

// Product Featured Image Hover Effect
    $coming_soon_shortly_show_featured = get_theme_mod('coming_soon_shortly_featured_image_hide_show', 1);
    $coming_soon_shortly_hover_effect = get_theme_mod('coming_soon_shortly_product_featured_image_hover','none');

    if ( $coming_soon_shortly_show_featured && $coming_soon_shortly_hover_effect !== 'none' ) {

    $coming_soon_shortly_theme_custom_setting_css .= '
    .product-img img{
        transition: all 0.4s ease;
    }';

    if ( $coming_soon_shortly_hover_effect === 'zoom-in' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img:hover img{
            transform: scale(1.2);
        }';
    }

    if ( $coming_soon_shortly_hover_effect === 'zoom-out' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img img{ transform: scale(1.2); }
        .product-img:hover img{ transform: scale(1); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'grayscale' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img img{ filter: grayscale(100%); }
        .product-img:hover img{ filter: grayscale(0); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'sepia' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img:hover img{ filter: sepia(100%); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'blur' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img:hover img{ filter: blur(3px); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'bright' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img:hover img{ filter: brightness(1.3); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'translate' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img:hover img{ transform: translateY(-10px); }';
    }

    if ( $coming_soon_shortly_hover_effect === 'scale' ) {
        $coming_soon_shortly_theme_custom_setting_css .= '
        .product-img:hover img{ transform: scale(1.1); }';
    }
}   