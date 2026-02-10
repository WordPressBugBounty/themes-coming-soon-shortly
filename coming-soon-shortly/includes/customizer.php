<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'coming_soon_shortly_logo_resizer',
        'label'       => __( 'Logo Size', 'coming-soon-shortly' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 300,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'coming_soon_shortly_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'coming-soon-shortly' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'coming-soon-shortly' ),
			'off' => esc_html__( 'Disable', 'coming-soon-shortly' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'coming_soon_shortly_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'coming-soon-shortly' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'coming-soon-shortly' ),
			'off' => esc_html__( 'Disable', 'coming-soon-shortly' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'coming-soon-shortly' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'coming-soon-shortly' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'coming-soon-shortly' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'coming-soon-shortly' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'coming-soon-shortly' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/coming-soon-wordpress-theme', 'coming-soon-shortly' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'coming-soon-shortly' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'coming_soon_shortly_theme_color_setting', array(
		'title'    => __( 'Color Option', 'coming-soon-shortly' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_theme_color',
		'label'       => __( 'Theme color', 'coming-soon-shortly'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_theme_color_setting',
		'type'        => 'color',
		'default'     => '#707274',
	) );

	// TYPOGRAPHY SETTINGS

	Kirki::add_panel( 'coming_soon_shortly_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'coming-soon-shortly' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'coming_soon_shortly_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_h1_typography_heading',
		'section'     => 'coming_soon_shortly_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'coming_soon_shortly_h1_typography_font',
		'section'   =>  'coming_soon_shortly_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Bebas Neue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'coming_soon_shortly_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_h2_typography_heading',
		'section'     => 'coming_soon_shortly_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'coming_soon_shortly_h2_typography_font',
		'section'   =>  'coming_soon_shortly_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Bebas Neue',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'coming_soon_shortly_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_h3_typography_heading',
		'section'     => 'coming_soon_shortly_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'coming_soon_shortly_h3_typography_font',
		'section'   =>  'coming_soon_shortly_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Bebas Neue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'coming_soon_shortly_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_h4_typography_heading',
		'section'     => 'coming_soon_shortly_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'coming_soon_shortly_h4_typography_font',
		'section'   =>  'coming_soon_shortly_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Bebas Neue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'coming_soon_shortly_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_h5_typography_heading',
		'section'     => 'coming_soon_shortly_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'coming_soon_shortly_h5_typography_font',
		'section'   =>  'coming_soon_shortly_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Bebas Neue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'coming_soon_shortly_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_h6_typography_heading',
		'section'     => 'coming_soon_shortly_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'coming_soon_shortly_h6_typography_font',
		'section'   =>  'coming_soon_shortly_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Bebas Neue',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'coming_soon_shortly_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_body_typography_heading',
		'section'     => 'coming_soon_shortly_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'coming_soon_shortly_body_typography_font',
		'section'   =>  'coming_soon_shortly_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Poppins',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel

	Kirki::add_panel( 'coming_soon_shortly_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'coming-soon-shortly' ),
	) );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'coming_soon_shortly_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'coming-soon-shortly' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'coming-soon-shortly' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'coming_soon_shortly_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'coming-soon-shortly' ),
		'settings'    => 'coming_soon_shortly_shop_page_layout',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'coming-soon-shortly' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'coming-soon-shortly' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'coming_soon_shortly_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'coming-soon-shortly' ),
		'settings'    => 'coming_soon_shortly_products_per_row',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'coming-soon-shortly' ),
		'settings'    => 'coming_soon_shortly_products_per_page',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'coming_soon_shortly_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'coming-soon-shortly' ),
		'settings'    => 'coming_soon_shortly_single_product_sidebar_layout',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'coming-soon-shortly' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'coming-soon-shortly' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'coming_soon_shortly_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_products_button_border_radius_heading',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'coming_soon_shortly_products_button_border_radius',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_sale_badge_position_heading',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'coming_soon_shortly_sale_badge_position',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'coming-soon-shortly' ),
			'left' => esc_html__( 'Left', 'coming-soon-shortly' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_products_sale_font_size_heading',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'coming_soon_shortly_products_sale_font_size',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_show_related_product_heading',
		'section'     => 'coming_soon_shortly_woocommerce_settings',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related Product', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'coming_soon_shortly_show_related_product',
		'label'       => esc_html__( 'Enable or Disable Related Product', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'coming_soon_shortly_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'coming-soon-shortly' ),
		'panel' => 'coming_soon_shortly_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'coming-soon-shortly' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'coming-soon-shortly' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_enable_sidebar_animation_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Animation', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_enable_sidebar_animation',
		'label'       => esc_html__( 'Enable or Disable Sidebar Animation', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_enable_footer_animation',
		'label'       => esc_html__( 'Enable or Disable Footer Animation', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_enable_sidebar_sticky_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sticky Sidebar', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_enable_sticky_sidebar',
		'label'       => esc_html__( 'Enable or Disable Sticky Sidebar', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_scroll_alignment_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Position', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'radio-buttonset',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_scroll_alignment',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => 'right',
		'choices'     => [
			'left' => esc_html__( 'left', 'coming-soon-shortly' ),
			'center' => esc_html__( 'center', 'coming-soon-shortly' ),
			'right' => esc_html__( 'right', 'coming-soon-shortly' ),
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_scroller_border_radius_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Border Radius', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'slider',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_scroller_border_radius',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '3',
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
		'output' => array(
			array(
				'element'  => '.scroll-up a',
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_cursor_outline_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dot Cursor', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_cursor_outline',
		'label'       => esc_html__( 'Enable or Disable Dot Cursor', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_progress_bar_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_progress_bar',
		'label'       => esc_html__( 'Enable or Disable Progress Bar', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_progress_bar_position_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Position', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'coming_soon_shortly_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_progress_bar_position',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => 'top',
		'choices'     => [
			'top' => esc_html__( 'Top', 'coming-soon-shortly' ),
			'bottom' => esc_html__( 'Bottom', 'coming-soon-shortly' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'coming_soon_shortly_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_progress_bar_color_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Color', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'coming_soon_shortly_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_progress_bar_color',
		'tab'      => 'general',
		'label'       => __( 'Color', 'coming-soon-shortly' ),
		'type'        => 'color',
		'section'     => 'coming_soon_shortly_additional_setting',
		'transport' => 'auto',
		'default'     => '#707274',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#elemento-progress-bar',
				'property' => 'background-color',
			),
		),
		'active_callback'  => [
			[
				'setting'  => 'coming_soon_shortly_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_single_page_layout_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'coming_soon_shortly_single_page_layout',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'coming-soon-shortly' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'coming-soon-shortly' ),
			'One Column' => esc_html__( 'One Column', 'coming-soon-shortly' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'coming_soon_shortly_header_background_attachment_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'coming_soon_shortly_header_background_attachment',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'coming-soon-shortly' ),
			'fixed' => esc_html__( 'Fixed', 'coming-soon-shortly' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'coming_soon_shortly_header_image_height_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_header_image_height',
		'label'       => __( 'Image Height', 'coming-soon-shortly' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'coming-soon-shortly' ),
		'type'        => 'text',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'tab'      => 'header-image',
		'section'     => 'coming_soon_shortly_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'coming_soon_shortly_header_overlay_heading',
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'coming-soon-shortly' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'coming_soon_shortly_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000059',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'coming_soon_shortly_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'coming_soon_shortly_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'coming_soon_shortly_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'coming-soon-shortly' ),
		'description'    => esc_html__( 'Here you can add post information.', 'coming-soon-shortly' ),
		'panel' => 'coming_soon_shortly_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'coming-soon-shortly' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'coming-soon-shortly' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_enable_post_animation_heading',
		'section'     => 'coming_soon_shortly_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Animation', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_enable_post_animation',
		'label'       => esc_html__( 'Enable or Disable Blog Post Animation', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_post_layout_heading',
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_post_layout',
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'coming-soon-shortly' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'coming-soon-shortly' ),
			'One Column' => esc_html__( 'One Column', 'coming-soon-shortly' ),
			'Three Columns' => esc_html__( 'Three Columns', 'coming-soon-shortly' ),
			'Four Columns' => esc_html__( 'Four Columns', 'coming-soon-shortly' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_length_setting_heading',
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_length_setting',
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_show_pagination_heading',
		'section'     => 'coming_soon_shortly_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Pagination', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'coming_soon_shortly_show_pagination',
		'label'       => esc_html__( 'Enable or Disable Blog Post Pagination', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'coming_soon_shortly_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'coming_soon_shortly_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'coming_soon_shortly_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'coming-soon-shortly' ),
		'settings'    => 'coming_soon_shortly_single_post_tag',
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'coming-soon-shortly' ),
		'settings'    => 'coming_soon_shortly_single_post_category',
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'coming_soon_shortly_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'coming_soon_shortly_single_post_radius',
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'coming-soon-shortly' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'coming_soon_shortly_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
	'type'     => 'select',
	'tab'      => 'single-post',
	'settings' => 'coming_soon_shortly_single_post_featured_image_hover',
	'label'    => esc_html__( 'Featured Image Hover Effect', 'coming-soon-shortly' ),
	'section'  => 'coming_soon_shortly_blog_post',
	'default'  => 'none',
	'priority' => 20,
	'choices'  => [
		'none'      => esc_html__( 'None', 'coming-soon-shortly' ),
		'zoom-in'   => esc_html__( 'Zoom In', 'coming-soon-shortly' ),
		'zoom-out'  => esc_html__( 'Zoom Out', 'coming-soon-shortly' ),
		'scale'     => esc_html__( 'Scale', 'coming-soon-shortly' ),
		'grayscale' => esc_html__( 'Grayscale', 'coming-soon-shortly' ),
		'blur'      => esc_html__( 'Blur', 'coming-soon-shortly' ),
		'bright'    => esc_html__( 'Bright', 'coming-soon-shortly' ),
		'sepia'     => esc_html__( 'Sepia', 'coming-soon-shortly' ),
		'translate' => esc_html__( 'Translate', 'coming-soon-shortly' ),
	],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'coming_soon_shortly_show_related_post_heading',
		'section'     => 'coming_soon_shortly_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related post', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'coming_soon_shortly_show_related_post',
		'label'       => esc_html__( 'Enable or Disable Related post', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );
	
	// No Results Page Settings

	Kirki::add_section( 'coming_soon_shortly_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_page_not_found_title_heading',
		'section'     => 'coming_soon_shortly_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'coming_soon_shortly_page_not_found_title',
		'section'  => 'coming_soon_shortly_no_result_section',
		'default'  => esc_html__('404 Error!', 'coming-soon-shortly'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_page_not_found_text_heading',
		'section'     => 'coming_soon_shortly_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'coming_soon_shortly_page_not_found_text',
		'section'  => 'coming_soon_shortly_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'coming-soon-shortly'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'coming_soon_shortly_page_not_found_line_break',
		'section'  => 'coming_soon_shortly_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_no_results_title_heading',
		'section'     => 'coming_soon_shortly_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'coming_soon_shortly_no_results_title',
		'section'  => 'coming_soon_shortly_no_result_section',
		'default'  => esc_html__('Nothing Found', 'coming-soon-shortly'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_no_results_content_heading',
		'section'     => 'coming_soon_shortly_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'coming_soon_shortly_no_results_content',
		'section'  => 'coming_soon_shortly_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'coming-soon-shortly'),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'coming_soon_shortly_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'coming-soon-shortly' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'coming-soon-shortly' ),
        'panel'    => 'coming_soon_shortly_theme_options_panel',
		'priority'       => 160,
    ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_show_footer_widget_heading',
		'section'     => 'coming_soon_shortly_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'coming_soon_shortly_show_footer_widget',
		'label'       => esc_html__( 'Footer Widget', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'coming_soon_shortly_show_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_text_heading',
		'section'     => 'coming_soon_shortly_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'coming_soon_shortly_footer_text',
		'section'  => 'coming_soon_shortly_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_sticky_heading',
		'section'     => 'coming_soon_shortly_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Sticky Copyright', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'coming_soon_shortly_sticky_copyright_enable',
		'label'       => esc_html__( ' Sticky Copyright Section Enable / Disable', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'coming-soon-shortly' ),
			'off' => esc_html__( 'Disable', 'coming-soon-shortly' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_enable_heading',
		'section'     => 'coming_soon_shortly_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'coming_soon_shortly_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'coming-soon-shortly' ),
			'off' => esc_html__( 'Disable', 'coming-soon-shortly' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_background_widget_heading',
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'coming_soon_shortly_footer_background_widget',
		'type'        => 'background',
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18, 18, 18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],                        
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_widget_alignment_heading',
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'coming_soon_shortly_footer_widget_alignment',
		'section'     => 'coming_soon_shortly_footer_section',
		'default'     =>[
			'desktop' => 'left',
			'tablet'  => 'left',
			'mobile'  => 'center',
		],
		'responsive' => true,
		'label'       => __( 'Widget Alignment', 'coming-soon-shortly' ),
		'transport' => 'auto',
		'choices'     => [
			'center' => esc_html__( 'center', 'coming-soon-shortly' ),
			'right' => esc_html__( 'right', 'coming-soon-shortly' ),
			'left' => esc_html__( 'left', 'coming-soon-shortly' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_copright_color_heading',
		'section'     => 'coming_soon_shortly_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_copright_text_color_heading',
		'section'     => 'coming_soon_shortly_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_logo_settings_premium_features_footer',
		'section'     => 'coming_soon_shortly_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'coming-soon-shortly' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'coming-soon-shortly' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'coming-soon-shortly' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'coming-soon-shortly' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'coming-soon-shortly' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/coming-soon-wordpress-theme', 'coming-soon-shortly' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'coming-soon-shortly' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'coming_soon_shortly_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'coming-soon-shortly' ),
		'panel'    => 'coming_soon_shortly_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_footer_social_icon_hide_heading',
		'section'     => 'coming_soon_shortly_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'coming_soon_shortly_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'coming_soon_shortly_enable_footer_socail_link_align_heading',
		'section'     => 'coming_soon_shortly_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'coming-soon-shortly' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'coming_soon_shortly_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'coming-soon-shortly' ),
		'section'     => 'coming_soon_shortly_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'coming-soon-shortly' ),
			'right' => esc_html__( 'right', 'coming-soon-shortly' ),
			'left' => esc_html__( 'left', 'coming-soon-shortly' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'coming_soon_shortly_enable_footer_socail_link',
		'section'     => 'coming_soon_shortly_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'coming-soon-shortly' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'coming_soon_shortly_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'coming-soon-shortly' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'coming-soon-shortly' ),
		'settings'     => 'coming_soon_shortly_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'coming-soon-shortly' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'coming-soon-shortly' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'coming-soon-shortly' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'coming-soon-shortly' ),
				'description' => esc_html__( 'Add the social icon url here.', 'coming-soon-shortly' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

}
