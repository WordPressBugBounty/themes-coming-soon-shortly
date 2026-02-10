<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	{
		
	}

	public static function coming_soon_shortly_setup_widgets(){

	/* Create Menu */
            $coming_soon_shortly_menuname  = 'Main Menus';
            $coming_soon_shortly_location  = 'main-menu';

            $coming_soon_shortly_menu = wp_get_nav_menu_object( $coming_soon_shortly_menuname );

            if ( ! $coming_soon_shortly_menu ) {
            $coming_soon_shortly_menu_id = wp_create_nav_menu( $coming_soon_shortly_menuname );

           // Home Page 
			wp_update_nav_menu_item( $coming_soon_shortly_menu_id, 0, array(
				'menu-item-title'     => __( 'Home', 'coming-soon-shortly' ),
				'menu-item-url'       => home_url( '/' ),
				'menu-item-type'      => 'custom',
				'menu-item-status'    => 'publish',
				'menu-item-position'  => 1,
			) );

			// About Page 
			$coming_soon_shortly_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'About Us',
			'post_status' => 'publish',
			) );

			if ( $coming_soon_shortly_about_id ) {
			wp_update_nav_menu_item( $coming_soon_shortly_menu_id, 0, array(
			'menu-item-title'     => 'About Us',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $coming_soon_shortly_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 2,
			) );
			}

			// Contact Us Page 
			$coming_soon_shortly_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Contact Us',
			'post_status' => 'publish',
			) );

			if ( $coming_soon_shortly_about_id ) {
			wp_update_nav_menu_item( $coming_soon_shortly_menu_id, 0, array(
			'menu-item-title'     => 'Contact Us',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $coming_soon_shortly_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 2,
			) );
			}

           // Create Blog Page
                $coming_soon_shortly_blog_page_title = 'Blog';

                $coming_soon_shortly_blog_page_query = new WP_Query(array(
                    'post_type'      => 'page',
                    'name'           => sanitize_title($coming_soon_shortly_blog_page_title),
                    'post_status'    => 'publish',
                    'posts_per_page' => 1
                ));
                if (!$coming_soon_shortly_blog_page_query->hae_posts()) {
                    $coming_soon_shortly_blog_page = array(
                        'post_type'   => 'page',
                        'post_title'  => $coming_soon_shortly_blog_page_title,
                        'post_status' => 'publish',
                        'post_author' => 1,
                    );
                    $coming_soon_shortly_blog_page_id = wp_insert_post($coming_soon_shortly_blog_page);
                    update_option('page_for_posts', $coming_soon_shortly_blog_page_id);

                    wp_update_na_menu_item($coming_soon_shortly_menu_id, 0, array(
                        'menu-item-title'      => __('Blog', 'coming-soon-shortly'),
                        'menu-item-url'        => get_permalink($coming_soon_shortly_blog_page_id),
                        'menu-item-status'     => 'publish',
                        'menu-item-object-id'  => $coming_soon_shortly_blog_page_id,
                        'menu-item-object'     => 'page',
                        'menu-item-type'       => 'post_type',
                    ));
                }
            
			/* ---------- Assign Menu Location ---------- */
			$coming_soon_shortly_locations = get_theme_mod( 'nav_menu_locations', array() );
			$coming_soon_shortly_locations[ $coming_soon_shortly_location ] = $coming_soon_shortly_menu_id;
			set_theme_mod( 'nav_menu_locations', $coming_soon_shortly_locations );
		}

	}
}