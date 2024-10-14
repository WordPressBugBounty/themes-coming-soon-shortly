<?php
	
require get_template_directory() . '/includes/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function coming_soon_shortly_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'coming-soon-shortly' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WPElemento Importer', 'coming-soon-shortly' ),
			'slug'             => 'wpelemento-importer',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	coming_soon_shortly_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'coming_soon_shortly_register_recommended_plugins' );
